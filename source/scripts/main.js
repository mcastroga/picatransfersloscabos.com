var airlines = null;
selectedVehicle = null;
selectedService = null;
selectedZone = null;
selectedHotel = null;
selectedPassengers = null;
tax = null;
pricetotal = null;

$( document ).ready(function() {
    function getPosition(unit) {
        for(var car in cars) {
            if( cars[car].name === unit) return car;
        }
        return -1;
    }

    $.getJSON( "/json/transfers.json", function( data ) {
        for (units in data.units){
            $("#form-unit").append("<option value='" + data.units[units].name + "'>" + data.units[units].name + "</option>");
        }
        cars = data.units
    });

    // STEP 2

    $("#send-prebook").on("click", function() {

        $("#step-2").css("display", "none");
        $("#step-3").css("display", "block");
        $("#arrival").show();
        $("#selector-step-1").removeClass('selected');
        $("#selector-step-2").addClass('selected');
        if($('#form-service').val() === "One Way") {
            $("#departure").hide();
        };
    });

    $("#send-checkout").click(function() {
        $("#step-3").css("display", "none");
        $("#step-4").css("display", "block");
        $("#selector-step-2").removeClass('selected');
        $("#selector-step-3").addClass('selected');
    });

    function updatePrices(event) {
        // Inputs
        var selectedUnit = $( "#form-unit" ).val();
        var selectedService = $( "#form-service" ).val();
        var unitIndex = getPosition(selectedUnit);

        // Early checks
        $( "#send-prebook" ).attr('disabled', 'disabled');
        if (unitIndex < 0 || selectedUnit === "false" || selectedZone  === "false") return;


        if ($("#form-service").val() === "Round Trip") {
            $("#departure").css("display", "flex");
            $("#arrival").css("display", "flex");
            $("#only-oneway").css("display", "none");
        };

        if($("#form-service").val() === "One Way") {
            $( "#departure" ).css("display", "none");
            $( "#arrival").css("display", "flex");
            $("#only-oneway").css("display", "flex");
        };

        // Formulas
        var price = selectedService === "One Way"?
            cars[unitIndex].prices[selectedZone - 1].oneway :
            cars[unitIndex].prices[selectedZone - 1].roundtrip;

        price = parseInt(price);
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
        $("#send-prebook").removeAttr('disabled');
    }

    $("#send-mail").on("click", function(e) {
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
            url: '/php/picatransferloscabos.php',
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
    $("#form-unit, #form-hotel, #form-service").on("change", updatePrices);
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