<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$headers = '';
$message = '';
$homepage                 = $_POST["homepage"];
$hotel                    = $_POST["hotel"];
$unit                     = $_POST["unit"];
$service                  = $_POST["service"];
$name                     = $_POST["name"];
$email                    = $_POST["email"];
$phone                    = $_POST["phone"];
$arrivaldate              = $_POST["arrival-date"];
$arrivaltime              = $_POST["arrival-time"];
$arrivalairline           = $_POST["arrival-airline"];
$arrivalflight            = $_POST["arrival-flight"];
$departuredate            = $_POST["departure-date"];
$departuretime            = $_POST["departure-time"];
$departureairline         = $_POST["departure-airline"];
$departureflight          = $_POST["departure-flight"];
$comments                 = $_POST["comments"];
$destination              = $_POST["destination"] ;
$pricenormal              = $_POST["price-normal"];
$reservation              = rand(1,100);

$headers .= "From: sistema@bogartransportationservices.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$to = "bogartransportation@gmail.com, $email";
$subject = "Reservation #BTS-$arrivaldate-$reservation from Bogar Transportation Services";
$validationOK=true;

if ($validationOK) {
    $message .= "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\n";
    $message .= "<html xmlns=\"http://www.w3.org/1999/xhtml\">\n";
    $message .= "<head>\n";
    $message .= "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />\n";
    $message .= "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>\n";
    $message .= "<title>Cabo Transportation Services</title>\n";
    $message .= "</head>\n";
    $message .= "<body>\n";
    $message .= "<table style=\"border: 2px solid #000; font-size: 14px; text-align: center; width: 800px;\">\n";
    $message .= "<tr style=\"width: 796px\"><td colspan=2 style=\"background: url($homepage/images/backgrounds/header-banner.png) no-repeat; height: 200px; width: 796px;\"></td></tr>\n";
    $message .= "<tr style=\"width: 796px\"><td colspan=2 style=\"border: 0;\"><h1 style=\"font-size: 14px;text-align: center;margin: 0;padding: 0;color: #000; width: 100%;\">Reservation Number: BTS-$arrivaldate-$reservation</h1></td></tr>\n";
    $message .= "<tr style=\"width: 796px\"><td colspan=2 style=\"border: 0; margin: 0;padding: 5px; font-size: 22px; text-align: center; width: 100%;\">Dear <strong>$name</strong> Please find confirmation and details on the airport transportation service requested:</td></tr>\n";
    $message .= "<tr style=\"width: 796px\"><td colspan=2 style=\"border: 0; margin: 0;padding: 5px; font-size: 14px; text-align: center; width: 100%;\">COVID 19 PROTOCOL</td></tr>\n";
    $message .= "<tr style=\"width: 796px\"><td colspan=2 style=\"border: 0; margin: 0;padding: 5px; font-size: 14px; text-align: center; width: 100%;\">For your safety and the others all the vehicles are cleaned and sanitized before each service. Driver uses face mask during all services. Impose temperature measurement for drivers </td></tr>\n";
    $message .= "<tr style=\"width: 796px\"><td colspan=2 style=\"border: 0; margin: 0;padding: 5px; font-size: 14px; text-align: center; width: 100%;\">**We ask you to please take 5mins to carefully review the information below:</td></tr>\n";
    $message .= "<tr style=\"width: 796px\"><th colspan=2 style=\"background-color: #00A9DE; margin: 0; border: 0; color: #fff; padding: 5px; font-size: 14px; text-align: center; width: 100%;\">CLIENT INFORMATION</th></tr>\n";
    $message .= "<tr style=\"width: 796px; height: 30px;\"><td colspan=1 style=\"border: 0; margin: 0;padding: 5px; font-size: 14px; height: 30px; line-height: 30px; width: 50%;\"><strong>Name: </strong>$name</td><td colspan=1 style=\"border: 0; margin: 0;padding: 5px; font-size: 14px; height: 30px; line-height: 30px; width: 50%;\"><strong>Email: </strong>$email</td></tr>\n";
    $message .= "<tr style=\"width: 796px; height: 30px;\"><td colspan=1 style=\"border: 0; margin: 0;padding: 5px; font-size: 14px; height: 30px; line-height: 30px; width: 50%;\"><strong>Phone: </strong>$phone</td><td colspan=1 style=\"border: 0; margin: 0;padding: 5px; font-size: 14px; height: 30px; line-height: 30px; width: 50%;\"><strong>Hotel:</strong> $hotel</td></tr>\n";
    $message .= "<tr style=\"width: 796px\"><td colspan=1 style=\"border: 0; margin: 0;padding: 5px; font-size: 14px; width: 50%;\"><strong>Travel type: </strong>$service</td><td colspan=1 style=\"border: 0; margin: 0;padding: 5px; font-size: 14px; width: 50%;\"><strong>Passengers: </strong>$unit</td></tr>\n";
    $message .= "<tr style=\"width: 796px\"><th colspan=2 style=\"background-color: #00A9DE; border: 0; color: #fff; margin: 0; padding: 5px; font-size: 14px; text-align: center; width: 100%;\">ARRIVAL</th></tr>\n";
    $message .= "<tr style=\"width: 796px\"><td colspan=1 style=\"border: 0; margin: 0;padding: 5px; font-size: 14px; width: 50%;\"><strong>Arrival: </strong>$arrivaldate - $arrivaltime</td><td colspan=1 style=\"border: 0; margin: 0;padding: 5px; font-size: 14px; width: 50%;\"><strong>Arrival Airline: </strong> $arrivalairline - $arrivalflight</td></tr>\n";
    if($service === 'Round Trip') {
        $message .= "<tr style=\"width: 796px\"><th colspan=2 style=\"background-color: #00A9DE; border: 0; color: #fff; margin: 0; padding: 5px; font-size: 14px; text-align: center; width: 100%;\">DEPARTURE</th></tr>\n";
        $message .= "<tr style=\"width: 796px\"><td style=\"border: 1px solid #000; margin: 0;padding: 5px; font-size: 14px; width: 50%;\"><strong>Departure: </strong>$departuredate - $departuretime</td><td style=\"border: 0; margin: 0;padding: 5px; font-size: 14px; width: 50%;\"><strong>Departure Airline: </strong> $departureairline - $departureflight</td></tr>\n";
    }
    $message .= "<tr style=\"width: 796px\"><th colspan=2 style=\"background-color: #00A9DE; border: 0; color: #fff; margin: 0; padding: 5px; font-size: 14px; text-align: center; width: 100%;\">ADITIONAL INFORMATION</th></tr>\n";
    $message .= "<tr style=\"width: 796px\"><td colspan=1 style=\"border: 0; margin: 0;padding: 5px; font-size: 14px; width: 50%;\"><strong>**Please be prepared to pay in CASH directly to the driver ($pricenormal USD)</strong></th><th colspan=1 style=\"border: 0; margin: 0;padding: 5px; font-size: 14px; width: 50%;\"><strong>Additional stop(s) on transfers are subject to fees ranging from $30 – $50 and subject to availability.</strong></td></tr>\n";
    $message .= "<tr style=\"width: 796px\"><td colspan=2 style=\"border: 0; padding: 5px; font-size: 14px; width: 100%;\"><strong>Comments: </strong>$comments</td></tr>\n";
    $message .= "<tr style=\"width: 796px\"><th colspan=2 style=\"background-color: #00A9DE; border: 0; color: #fff; margin: 0; padding: 5px; font-size: 14px; text-align: center; width: 100%;\">INSTRUCTIONS TO FIND YOUR DRIVER AT THE AIRPORT TERMINAL 2</th></tr>\n";
    $message .= "<tr style=\"width: 796px\"><td colspan=2 style=\"border: 0; margin: 0; padding: 5px; font-size: 14px; text-align: center; width: 100%;\">LOCATING REPRESENTATIVE AT AIRPORT:</td></tr>\n";
    $message .= "<tr style=\"width: 796px\"><td colspan=2 style=\"border: 0; margin: 0; padding: 5px; font-size: 14px; text-align: center; width: 100%;\">Once your flight has arrived at the SJD airport you will proceed to immigration.<br />It is important you keep the immigration form that is stamped and handed back to you as you will need it to exit Mexico. You will then proceed to baggage claim and will clear customs, this is where you will be asked to 'push' a button by a customs agent and it will indicate 'green to pass' or 'red for further inspection'. Once you have cleared the customs area you will proceed through several sets of double doors, located in these rooms are timeshare, rental car, and taxi representatives. It is not necessary to speak to any of
these associates.</td></tr>\n";
    $message .= "<tr style=\"width: 796px\"><td colspan=2 style=\"border: 0; margin: 0; padding: 5px; font-size: 14px; text-align: center; width: 100%;\">Once you exit this area, you will be in a large lobby with restrooms to the left and the airport exit to the right. After exiting the double doors to your right, walk 50 Meters to the stand area near the Island Bar please look for a representative will be holding a Welcome Board at Umbrella #10:</td></tr>\n";
    $message .= "<tr style=\"width: 796px\"><th colspan=2 style=\"background-color: #00A9DE; border: 0; color: #fff; margin: 0; padding: 5px; font-size: 14px; text-align: center; width: 100%;\">CANCELATION POLICY</th></tr>\n";
    $message .= "<tr style=\"width: 796px\"><td colspan=2 style=\"border: 0; margin: 0; padding: 5px; font-size: 14px; text-align: center; width: 100%;\">Any changes or cancellations must be made at least 48hrs in advance or the FULL amount of the transportation will be charged. It is the client's responsibility to contact BOGAR TRANSPORTATION SERVICES or BQS LOS CABOS regarding any delays over 45 minutes. Please consider 45 minutes or longer delays will result in a $50.00USD extra charge per hour.</td></tr>\n";
    $message .= "<tr style=\"width: 796px\"><td colspan=2 style=\"border: 0; margin: 0; padding: 5px; font-size: 14px; text-align: center; width: 100%;\"><h3>Bogar Marcelo</h3><p>Operations & Driver</p><p>+52 (624) 158 1502</p></td></tr>\n";
    $message .= "</table></body></html>\n";
    $success = @mail($to, $subject, $message, $headers);

    header('Access-Control-Allow-Origin: *');
    header('Content-type: application/json');
    $response = array();
    $response[0] = array(
        'response' => 'success'
    );

    echo json_encode($response);

} else {
    header('Access-Control-Allow-Origin: *');
    header('Content-type: application/json');
    $response = array();
    $response[0] = array(
        'response' => 'error'
    );

    echo json_encode($response);
}

?>
