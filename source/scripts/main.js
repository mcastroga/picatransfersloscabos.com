var airlines = null;
selectedVehicle = null;
selectedService = null;
selectedZone = null;
selectedHotel = null;
selectedPassengers = null;
tax = null;
pricetotal = null;

$( document ).ready(function() {

    var n = 1;

    $('#form-unit').val(n);

    $('.qtyplus').on('click', function(){
        if (n < 16) {
            $('#form-unit').val(++n);
            $('#form-unit').attr('value', n);
            $('#form-unit').attr('name', n);
        }
    })

    $('.qtyminus').on('click', function(){
        if (n > 1) {
            $('#form-unit').val(--n);
            $('#form-unit').attr('value', n);
            $('#form-unit').attr('name', n);
        } else {

        }
    });

    $.getJSON( "/json/transfers.json", function( data ) {
        cars = data.units
    });

    function getPosition(unit) {
        for(var car in cars) {
            if( cars[car].name === unit) return car;
        }
        return -1;
    }

    // STEP 2

    $("#send-step-1").on("click", function() {
        $("#step-1").css("display", "none");
        $("#step-2").css("display", "block");
        $("#arrival").show();
        $("#selector-step-1").removeClass('selected');
        $("#selector-step-2").addClass('selected');
        if($('#form-service').val() === "One Way") {
            $("#departure").hide();
        };
    });

    $("#send-step-2").on("click", function() {
        $("#step-3").css("display", "block");
        $("#step-2").css("display", "none");
    });

    function updatePrices(event) {
        // Inputs
        var selectedUnit = $( "#form-unit" ).val();
        var selectedService = $( "#form-service" ).val();
        var unitIndex = getPosition(selectedUnit);

        // Early checks
        $( "#send-step-1" ).attr('disabled', 'disabled');
        if (unitIndex < 0 || selectedUnit === "false" || selectedZone  === "false") return;

        if ($("#form-service").val() === "Round Trip") {
            $("#departure").css("display", "flex");
            $("#arrival").css("display", "flex");
            $("#only-oneway").css("display", "none");
        };

        if($("#form-service").val() === "One Way") {
            $( "#departure" ).css("display", "none");
            $( "#arrival").css("display", "flex");
            $("#only-oneway").css("display", "block");
        };

        if($('#form-unit').val() === "1" || $('#form-unit').val() === "2" || $('#form-unit').val() === "3" || $('#form-unit').val() === "4" || $('#form-unit').val() === "5") {
            $('#square-image img').attr('src', '/images/photos/suburban.png')
        };
        if($('#form-unit').val() === "6" || $('#form-unit').val() === "7" || $('#form-unit').val() === "8" || $('#form-unit').val() === "9" || $('#form-unit').val() === "10") {
            $('#square-image img').attr('src', '/images/photos/hiace.png')
        };
        if($('#form-unit').val() === "11" || $('#form-unit').val() === "12" || $('#form-unit').val() === "13" || $('#form-unit').val() === "14" || $('#form-unit').val() === "15" || $('#form-unit').val() === "16") {
            $('#square-image img').attr('src', '/images/photos/sprinter.png')
        };

        // Formulas
        var price = selectedService === "One Way"?
            cars[unitIndex].prices[selectedZone - 1].oneway :
            cars[unitIndex].prices[selectedZone - 1].roundtrip;

        price = parseInt(price);

        if( $('#form-grocery').is(':checked') ) {
            price = price + 30;
        }

        pricenormal = price;
        // Outputs
        tax = Math.round(price * 0.08);
        pricetotal = Math.round(tax + price);
        pricepaypal = pricetotal;

        $("#price").html(`$ ${price}.00`);
        $('#price-cash').html(`$ ${price}.00`);
        $('#vehicleselected').html(selectedUnit);
        $("#hotelselected").html(selectedHotel);
        $("#serviceselected").html(selectedService);
        $("#selectedTax").html( `$ ${tax} USD` );
        $("#priceTotal").html( `$ ${pricetotal} USD` );
        $("#price-paypal").val( pricetotal );
        $("#paypal-button-container").val( pricetotal );
        $("#send-step-1").removeAttr('disabled');
    }

    $("#send-step-3").on("click", function(e) {
        e.preventDefault();

        if ($("#form-name").val().trim().length < 4) {
            alert('Name is required!');
            return false;
        }

        if ($("#form-email").val().trim().length < 5) {
            alert('Email is required!');
            return false;
        }

        var formData = {
            "homepage": 'https://picatransferloscabos.com',
            "unit": $("#form-unit").val(),
            "hotel": selectedHotel,
            "service": $("#form-service").val(),
            "destination": $("#form-destination").val(),
            "name": $("#form-name").val(),
            "email": $("#form-email").val(),
            "phone": $("#form-phone").val(),
            "arrival-date": $("#form-arrival-date").val(),
            "arrival-time": $("#form-arrival-time").val(),
            "arrival-airline": $("#form-arrival-airline").val(),
            "arrival-flight": $("#form-arrival-flight").val(),
            "departure-date": $("#form-departure-date").val(),
            "departure-time": $("#form-departure-time").val(),
            "departure-airline": $("#form-departure-airline").val(),
            "departure-flight": $("#form-departure-flight").val(),
            "comments": $("#form-comment").val(),
            "price-normal": pricenormal,
            "price-paypal": pricepaypal
        };

        $.ajax({
            type: 'POST',
            url: 'https://mailer.hnb.mx/picatransfersloscabos.php',
            //url: "https:/picatransferloscabos.php",
            dataType: "json",
            data: formData,
            success: function(response) {
                $("#step-3").css("display", "none");
                $("#step-4").css("display", "block");
            },
            error: function(xhr, status, error){
                console.log(xhr);
            }
        });
        $("#step-3").css("display", "none");
        $("#step-4").css("display", "block");
    });


    // Binds
    $("#form-unit, #form-hotel, #form-service, #form-grocery").on("change", updatePrices);
    $('.qtyplus, .qtyminus').on("click", updatePrices);
    var options = {
        url: '/json/transfers.json',
        getValue: 'name',
        listLocation: "hotel",
        template: {
            type: "text",
            fields: {
                link: "name"
            }
        },

        list: {
            match: {
                enabled: true
            },
            onSelectItemEvent: function(elem) {
                selectedZone = $("#form-hotel").getSelectedItemData().zone;
                selectedHotel = $("#form-hotel").getSelectedItemData().name;
            }
        },

        theme: "round"
    };
    $("#form-hotel").easyAutocomplete(options);

});
