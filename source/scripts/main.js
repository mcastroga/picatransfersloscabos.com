let EXTRAS_BABYSEAT;
let EXTRAS_BUSTERSEAT;
let EXTRAS_GROCERY;
let HOTEL_NAME = null;
let HOTEL_ZONE = null;
let PRICE_CASH;
let PRICE_PAYPAL;
let PRICE_TOTAL;
let SERVICE = "One Way";
let SERVICE_TYPE = "Airport - Hotel";
let TAX;

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
        var SERVICE = $( "#form-service" ).val();
        var unitIndex = getPosition(selectedUnit);

        // Early checks
        $( "#send-step-1" ).attr('disabled', 'disabled');
        if (unitIndex < 0 || selectedUnit === "false" || HOTEL_ZONE  === "false") return;

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
        var price = SERVICE === "One Way"?
            cars[unitIndex].prices[HOTEL_ZONE - 1].oneway :
            cars[unitIndex].prices[HOTEL_ZONE - 1].roundtrip;

        price = parseInt(price);

        if( $('#form-grocery').is(':checked') ) {
            price = price + 30;
        }

        PRICE_CASH = price;
        // Outputs
        TAX = Math.round(price * 0.08);
        PRICE_TOTAL = Math.round(TAX + price);
        PRICE_PAYPAL = PRICE_TOTAL;

        $("#price").html(`$ ${price}.00`);
        $('#price-cash').html(`$ ${price}.00`);
        $('#vehicleselected').html(selectedUnit);
        $("#hotelselected").html(HOTEL_NAME);
        $("#serviceselected").html(SERVICE);
        $("#selectedTax").html( `$ ${TAX} USD` );
        $("#priceTotal").html( `$ ${PRICE_TOTAL} USD` );
        $("#price-paypal").val( PRICE_PAYPAL );
        $("#paypal-button-container").val( PRICE_PAYPAL );
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

        if ($("#form-extras-grocery")[0].checked === true) {
          EXTRAS_GROCERY = '30 Minutes';
        } else {
          EXTRAS_GROCERY = 'No';
        }

        EXTRAS_BABYSEAT = $("#form-extras-babyseat").val();
        EXTRAS_BUSTERSEAT = $("#form-extras-busterseat").val();

        var formData = {
            "arrival-airline": $("#form-arrival-airline").val(),
            "arrival-date": $("#form-arrival-date").val(),
            "arrival-flight": $("#form-arrival-flight").val(),
            "arrival-time": $("#form-arrival-time").val(),
            "comments": $("#form-comment").val(),
            "departure-airline": $("#form-departure-airline").val(),
            "departure-date": $("#form-departure-date").val(),
            "departure-flight": $("#form-departure-flight").val(),
            "departure-time": $("#form-departure-time").val(),
            "email": $("#form-email").val(),
            "extras-babyseat": EXTRAS_BABYSEAT,
            "extras-busterseat": EXTRAS_BUSTERSEAT,
            "extras-grocery": EXTRAS_GROCERY,
            "homepage": 'https://picatransfersloscabos.com',
            "hotel-logo": HOTEL_LOGO,
            "hotel-name": HOTEL_NAME,
            "hotel-zone": HOTEL_ZONE,
            "name": $("#form-name").val(),
            "pax": $("#form-unit").val(),
            "phone": $("#form-phone").val(),
            "price-normal": PRICE_CASH,
            "price-paypal": PRICE_PAYPAL,
            "service": $("#form-service").val(),
            "service-type": $("#form-destination").val()
        };

        $.ajax({
            type: 'POST',
            url: 'https://mailer.hnb.mx/picatransfers.php',
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
                HOTEL_LOGO = $("#form-hotel").getSelectedItemData().logo;
                HOTEL_NAME = $("#form-hotel").getSelectedItemData().name;
                HOTEL_ZONE = $("#form-hotel").getSelectedItemData().zone;
            }
        },

        theme: "round"
    };
    $("#form-hotel").easyAutocomplete(options);

});
