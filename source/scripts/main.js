let ARRIVAL_DATE;
let ARRIVAL_DATE_FULL;
let DEPARTURE_DATE;
let DEPARTURE_DATE_FULL;
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
            "arrival-date-full": ARRIVAL_DATE_FULL,
            "arrival-flight": $("#form-arrival-flight").val(),
            "arrival-time": $("#form-arrival-time").val(),
            "comments": $("#form-comment").val(),
            "departure-airline": $("#form-departure-airline").val(),
            "departure-date": $("#form-departure-date").val(),
            "departure-date-full": DEPARTURE_DATE_FULL,
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
            "price-cash": PRICE_CASH,
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

    function checkName(event) {
      NAME = $("#form-name").val();
      if (NAME.trim().length < 5) {
        $("#form-container-name").addClass("form-error");
        CHECK_NAME = "";
      } else {
        $("#form-container-name").removeClass("form-error");
        CHECK_NAME = "OK";
      }
    }

    function checkEmail(event) {
      EMAIL = $("#form-email").val();
      if (EMAIL.trim().length < 5) {
        $("#form-container-email").addClass("form-error");
        CHECK_EMAIL = "";
      } else {
        $("#form-container-email").removeClass("form-error");
        CHECK_EMAIL = "OK";
      }
    }

    function checkPhone(event) {
      PHONE = $("#form-phone").val();
      if (PHONE.trim().length < 5) {
        $("#form-container-phone").addClass("form-error");
        CHECK_PHONE = "";
      } else {
        $("#form-container-phone").removeClass("form-error");
        CHECK_PHONE = "OK";
      }
    }

    function checkArrivalDate(event) {
      ARRIVAL_DATE = $("#form-arrival-date").val();
      if (ARRIVAL_DATE === "") {
        $("#form-container-arrival-date").addClass("form-error");
        CHECK_ARRIVAL_DATE = "";
      } else {
        $("#form-container-arrival-date").removeClass("form-error");
        CHECK_ARRIVAL_DATE = "OK";
        ARRIVAL_DATE_FULL = moment(ARRIVAL_DATE).format("dddd, MMMM D, Y");
      }
    }

    // STEP 3 CHECK - CHECK ARRIVAL TIME IS VALID
    function checkArrivalTime(event) {
      ARRIVAL_TIME = $("#form-arrival-time").val();
      if (ARRIVAL_TIME === "") {
        $("#form-container-arrival-time").addClass("form-error");
        CHECK_ARRIVAL_TIME = "";
      } else {
        $("#form-container-arrival-time").removeClass("form-error");
        CHECK_ARRIVAL_TIME = "OK";
      }
    }

    function checkArrivalAirline(event) {
      ARRIVAL_AIRLINE = $("#form-arrival-airline").val();
      if (ARRIVAL_AIRLINE === "Aeromexico") {
        ARRIVAL_LOGO = "https://mailer.hnb.mx/airlines/aeromexico.jpg";
      }
      if (ARRIVAL_AIRLINE === "Air Canada") {
        ARRIVAL_LOGO = "https://mailer.hnb.mx/airlines/air-canada.jpg";
      }
      if (ARRIVAL_AIRLINE === "Alaska Airlines") {
        ARRIVAL_LOGO = "https://mailer.hnb.mx/airlines/alaska-airlines.jpg";
      }
      if (ARRIVAL_AIRLINE === "American Airlines") {
        ARRIVAL_LOGO = "https://mailer.hnb.mx/airlines/american-airlines.jpg";
      }
      if (ARRIVAL_AIRLINE === "Delta Airlines") {
        ARRIVAL_LOGO = "https://mailer.hnb.mx/airlines/delta-airlines.jpg";
      }
      if (ARRIVAL_AIRLINE === "Frontier Airlines") {
        ARRIVAL_LOGO = "https://mailer.hnb.mx/airlines/frontier-airlines.jpg";
      }
      if (ARRIVAL_AIRLINE === "Interjet") {
        ARRIVAL_LOGO = "https://mailer.hnb.mx/airlines/interjet.jpg";
      }
      if (ARRIVAL_AIRLINE === "Southwest Airlines") {
        ARRIVAL_LOGO = "https://mailer.hnb.mx/airlines/southwest-airlines.jpg";
      }
      if (ARRIVAL_AIRLINE === "Spirit") {
        ARRIVAL_LOGO = "https://mailer.hnb.mx/airlines/spirit.jpg";
      }
      if (ARRIVAL_AIRLINE === "United") {
        ARRIVAL_LOGO = "https://mailer.hnb.mx/airlines/united.jpg";
      }
      if (ARRIVAL_AIRLINE === "US Airways") {
        ARRIVAL_LOGO = "https://mailer.hnb.mx/airlines/us-airways.jpg";
      }
      if (ARRIVAL_AIRLINE === "Virgin") {
        ARRIVAL_LOGO = "https://mailer.hnb.mx/airlines/virgin.jpg";
      }
      if (ARRIVAL_AIRLINE === "Viva Aerobus") {
        ARRIVAL_LOGO = "https://mailer.hnb.mx/airlines/viva-aerobus.jpg";
      }
      if (ARRIVAL_AIRLINE === "Volaris") {
        ARRIVAL_LOGO = "https://mailer.hnb.mx/airlines/volaris.jpg";
      }
      if (ARRIVAL_AIRLINE === "WestJet") {
        ARRIVAL_LOGO = "https://mailer.hnb.mx/airlines/westjet.jpg";
      }
    }

    function checkArrivalFlight(event) {
      ARRIVAL_FLIGHT = $("#form-arrival-flight").val();
      if (ARRIVAL_FLIGHT === "") {
        $("#form-container-arrival-flight").addClass("form-error");
        CHECK_ARRIVAL_FLIGHT = "";
      } else {
        $("#form-container-arrival-flight").removeClass("form-error");
        CHECK_ARRIVAL_FLIGHT = "OK";
      }
    }

    function checkDepartureDate(event) {
      DEPARTURE_DATE = $("#form-departure-date").val();
      if (DEPARTURE_DATE === "") {
        $("#form-container-departure-date").addClass("form-error");
        CHECK_DEPARTURE_DATE = "";
      } else {
        $("#form-container-departure-date").removeClass("form-error");
        CHECK_DEPARTURE_DATE = "OK";
        DEPARTURE_DATE_FULL = moment(DEPARTURE_DATE).format("dddd, MMMM D, Y");
      }
    }

    function checkDepartureTime(event) {
      DEPARTURE_TIME = $("#form-departure-time").val();
      if (DEPARTURE_TIME === "") {
        $("#form-container-departure-time").addClass("form-error");
        CHECK_DEPARTURE_TIME = "";
      } else {
        $("#form-container-departure-time").removeClass("form-error");
        CHECK_DEPARTURE_TIME = "OK";
      }
    }

    function checkDepartureAirline(event) {
      DEPARTURE_AIRLINE = $("#form-departure-airline").val();
      if (DEPARTURE_AIRLINE === "Aeromexico") {
        DEPARTURE_LOGO = "https://mailer.hnb.mx/airlines/aeromexico.jpg";
      }
      if (DEPARTURE_AIRLINE === "Air Canada") {
        DEPARTURE_LOGO = "https://mailer.hnb.mx/airlines/air-canada.jpg";
      }
      if (DEPARTURE_AIRLINE === "Alaska Airlines") {
        DEPARTURE_LOGO = "https://mailer.hnb.mx/airlines/alaska-airlines.jpg";
      }
      if (DEPARTURE_AIRLINE === "American Airlines") {
        DEPARTURE_LOGO = "https://mailer.hnb.mx/airlines/american-airlines.jpg";
      }
      if (DEPARTURE_AIRLINE === "Delta Airlines") {
        DEPARTURE_LOGO = "https://mailer.hnb.mx/airlines/delta-airlines.jpg";
      }
      if (DEPARTURE_AIRLINE === "Frontier Airlines") {
        DEPARTURE_LOGO = "https://mailer.hnb.mx/airlines/frontier-airlines.jpg";
      }
      if (DEPARTURE_AIRLINE === "Interjet") {
        DEPARTURE_LOGO = "https://mailer.hnb.mx/airlines/interjet.jpg";
      }
      if (DEPARTURE_AIRLINE === "Southwest Airlines") {
        DEPARTURE_LOGO = "https://mailer.hnb.mx/airlines/southwest-airlines.jpg";
      }
      if (DEPARTURE_AIRLINE === "Spirit") {
        DEPARTURE_LOGO = "https://mailer.hnb.mx/airlines/spirit.jpg";
      }
      if (DEPARTURE_AIRLINE === "United") {
        DEPARTURE_LOGO = "https://mailer.hnb.mx/airlines/united.jpg";
      }
      if (DEPARTURE_AIRLINE === "US Airways") {
        DEPARTURE_LOGO = "https://mailer.hnb.mx/airlines/us-airways.jpg";
      }
      if (DEPARTURE_AIRLINE === "Virgin") {
        DEPARTURE_LOGO = "https://mailer.hnb.mx/airlines/virgin.jpg";
      }
      if (DEPARTURE_AIRLINE === "Viva Aerobus") {
        DEPARTURE_LOGO = "https://mailer.hnb.mx/airlines/viva-aerobus.jpg";
      }
      if (DEPARTURE_AIRLINE === "Volaris") {
        DEPARTURE_LOGO = "https://mailer.hnb.mx/airlines/volaris.jpg";
      }
      if (DEPARTURE_AIRLINE === "WestJet") {
        DEPARTURE_LOGO = "https://mailer.hnb.mx/airlines/westjet.jpg";
      }
    }

    function checkDepartureFlight(event) {
      DEPARTURE_FLIGHT = $("#form-departure-flight").val();
      if (DEPARTURE_FLIGHT === "") {
        $("#form-container-departure-flight").addClass("form-error");
        CHECK_DEPARTURE_FLIGHT = "";
      } else {
        $("#form-container-departure-flight").removeClass("form-error");
        CHECK_DEPARTURE_FLIGHT = "OK";
      }
    }


    function checkStep3(event) {
      if ( SERVICE === "One Way" && CHECK_NAME === "OK" && CHECK_EMAIL === "OK" && CHECK_PHONE === "OK" && CHECK_ARRIVAL_DATE === "OK" && CHECK_ARRIVAL_TIME === "OK" && CHECK_ARRIVAL_FLIGHT === "OK" ) {
        $("#send-step-2").removeAttr("disabled", "disabled");
      }
      if ( SERVICE === "Round Trip" && CHECK_NAME === "OK" && CHECK_EMAIL === "OK" && CHECK_PHONE === "OK" && CHECK_ARRIVAL_DATE === "OK" && CHECK_ARRIVAL_TIME === "OK" && CHECK_ARRIVAL_FLIGHT === "OK" && CHECK_DEPARTURE_DATE === "OK" && CHECK_DEPARTURE_TIME === "OK" && CHECK_DEPARTURE_FLIGHT === "OK" ) {
        $("#send-step-2").removeAttr("disabled", "disabled");
      }
      checkName();
      checkEmail();
      checkPhone();
      checkArrivalDate();
      checkArrivalTime();
      checkArrivalFlight();
      checkDepartureDate();
      checkDepartureTime();
      checkDepartureFlight();
    }


    // Binds
    $("#form-unit, #form-hotel, #form-service, #form-grocery").on("change", updatePrices);
    $("#form-name").on("keydown", checkName);
    $("#form-email").on("keydown", checkEmail);
    $("#form-phone").on("keydown", checkPhone);
    $("#form-arrival-date").on("change", checkArrivalDate);
    $("#form-arrival-time").on("change", checkArrivalTime);
    $("#form-arrival-airline").on("change", checkArrivalAirline);
    $("#form-arrival-flight").on("keydown", checkArrivalFlight);
    $("#form-departure-date").on("change", checkDepartureDate);
    $("#form-departure-time").on("change", checkDepartureTime);
    $("#form-departure-airline").on("change", checkDepartureAirline);
    $("#form-departure-flight").on("keydown", checkDepartureFlight);
    $("#form-name, #form-email, #form-phone, #form-arrival-date, #form-arrival-time, #form-arrival-airline, #form-arrival-flight, #form-departure-date, #form-departure-time, #form-departure-airline, #form-departure-flight, #form-hotel-date, #form-hotel-time").on("change, keydown", checkStep3);
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
