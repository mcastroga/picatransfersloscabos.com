$( document ).ready(function() {
    $("#send-panel-mail").on("click", function() {
        var panelData = {
            "homepage": "https://bogartransportationservices.com",
            "hotel": $("#form-panel-hotel").val(),
            "unit": $("#form-panel-passengers").val(),
            "service": $("#form-panel-service").val(),
            "name": $("#form-panel-name").val(),
            "email": $("#form-panel-email").val(),
            "phone": $("#form-panel-phone").val(),
            "arrival-date": $("#form-panel-arrival-date").val(),
            "arrival-time": $("#form-panel-arrival-time").val(),
            "arrival-airline": $("#form-panel-arrival-airline").val(),
            "arrival-flight": $("#form-panel-arrival-flight").val(),
            "departure-date": $("#form-panel-departure-date").val(),
            "departure-time": $("#form-panel-departure-time").val(),
            "departure-airline": $("#form-panel-departure-airline").val(),
            "departure-flight": $("#form-panel-departure-flight").val(),
            "comments": $("#form-panel-comment").val(),
            "destination": $("#form-panel-destination").val(),
            "price-normal": $("#form-panel-price").val()
        };
        $.ajax({
            type: 'POST',
            url: '/php/bogar-transportation-services.php',
            dataType: "json",
            data: panelData,
            success: function(response) {
                $("#panel-step-1").css("display", "none");
                $("#panel-step-2").css("display", "block");
            },
            error: function(xhr, status, error){
                console.log(xhr);
            }
        });
        $("#panel-step-1").css("display", "none");
        $("#panel-step-2").css("display", "block");
    });

});
