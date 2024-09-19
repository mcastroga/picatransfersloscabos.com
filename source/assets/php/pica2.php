<?php
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
    header("Access-Control-Allow-Headers: Authorization, Content-Type, Accept, Origin");
    exit(0);
}

header("Access-Control-Allow-Headers: Content-Type, Accept, Origin");
header("Content-Type: application/json; charset=UTF-8");
header('Access-Control-Allow-Origin: https://picatransfersloscabos.com');
header("Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS");
header("Access-Control-Max-Age: 3600");

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

$headers .= "From: sistema@picatransfersloscabos.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$to = "$email";
$subject = "Reservation #PTC-$arrivaldate-$reservation from Pica Transfers Los Cabos";
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
    $message .= "<tr style=\"width: 796px\"><td colspan=2 style=\"border: 0;\"><h1 style=\"font-size: 14px;text-align: center;margin: 0;padding: 0;color: #000; width: 100%;\">Reservation Number: PTC-$arrivaldate-$reservation</h1></td></tr>\n";
    $message .= "<tr style=\"width: 796px\"><td colspan=2 style=\"border: 0; margin: 0;padding: 5px; font-size: 22px; text-align: center; width: 100%;\">Dear <strong>$name</strong> Please find confirmation and details on the airport transportation service requested:</td></tr>\n";
    $message .= "<tr style=\"width: 796px\"><th colspan=2 style=\"background-color: #556f7b; margin: 0; border: 0; color: #fff; padding: 5px; font-size: 14px; text-align: center; width: 100%;\">CLIENT INFORMATION</th></tr>\n";
    $message .= "<tr style=\"width: 796px; height: 30px;\"><td colspan=1 style=\"border: 0; margin: 0;padding: 5px; font-size: 14px; height: 30px; line-height: 30px; width: 50%;\"><strong>Name: </strong>$name</td><td colspan=1 style=\"border: 0; margin: 0;padding: 5px; font-size: 14px; height: 30px; line-height: 30px; width: 50%;\"><strong>Email: </strong>$email</td></tr>\n";
    $message .= "<tr style=\"width: 796px; height: 30px;\"><td colspan=1 style=\"border: 0; margin: 0;padding: 5px; font-size: 14px; height: 30px; line-height: 30px; width: 50%;\"><strong>Phone: </strong>$phone</td><td colspan=1 style=\"border: 0; margin: 0;padding: 5px; font-size: 14px; height: 30px; line-height: 30px; width: 50%;\"><strong>Hotel:</strong> $hotel</td></tr>\n";
    $message .= "<tr style=\"width: 796px\"><td colspan=1 style=\"border: 0; margin: 0;padding: 5px; font-size: 14px; width: 50%;\"><strong>Travel type: </strong>$service</td><td colspan=1 style=\"border: 0; margin: 0;padding: 5px; font-size: 14px; width: 50%;\"><strong>Passengers: </strong>$unit</td></tr>\n";
    $message .= "<tr style=\"width: 796px\"><th colspan=2 style=\"background-color: #556f7b; border: 0; color: #fff; margin: 0; padding: 5px; font-size: 14px; text-align: center; width: 100%;\">ARRIVAL</th></tr>\n";
    $message .= "<tr style=\"width: 796px\"><td colspan=1 style=\"border: 0; margin: 0;padding: 5px; font-size: 14px; width: 50%;\"><strong>Arrival: </strong>$arrivaldate - $arrivaltime</td><td colspan=1 style=\"border: 0; margin: 0;padding: 5px; font-size: 14px; width: 50%;\"><strong>Arrival Airline: </strong> $arrivalairline - $arrivalflight</td></tr>\n";
    if($service === 'Round Trip') {
        $message .= "<tr style=\"width: 796px\"><th colspan=2 style=\"background-color: #556f7b; border: 0; color: #fff; margin: 0; padding: 5px; font-size: 14px; text-align: center; width: 100%;\">DEPARTURE</th></tr>\n";
        $message .= "<tr style=\"width: 796px\"><td style=\"border: 1px solid #000; margin: 0;padding: 5px; font-size: 14px; width: 50%;\"><strong>Departure: </strong>$departuredate - $departuretime</td><td style=\"border: 0; margin: 0;padding: 5px; font-size: 14px; width: 50%;\"><strong>Departure Airline: </strong> $departureairline - $departureflight</td></tr>\n";
    }
    $message .= "<tr style=\"width: 796px\"><th colspan=2 style=\"background-color: #556f7b; border: 0; color: #fff; margin: 0; padding: 5px; font-size: 14px; text-align: center; width: 100%;\">ADITIONAL INFORMATION</th></tr>\n";
    $message .= "<tr style=\"width: 796px\"><td colspan=1 style=\"border: 0; margin: 0;padding: 5px; font-size: 14px; width: 50%;\"><strong>**Please be prepared to pay in CASH directly to the driver ($pricenormal USD)</strong></th><th colspan=1 style=\"border: 0; margin: 0;padding: 5px; font-size: 14px; width: 50%;\"><strong>Additional stop(s) on transfers are subject to fees ranging from $30 – $50 and subject to availability.</strong></td></tr>\n";
    $message .= "<tr style=\"width: 796px\"><td colspan=2 style=\"border: 0; padding: 5px; font-size: 14px; width: 100%;\"><strong>Comments: </strong>$comments</td></tr>\n";
    if($arrivalairline === 'Aeromexico' || $arrivalairline === 'Viva Aerobus' || $arrivalairline === 'Volaris') {
        $message .= "<tr style=\"width: 796px\"><th colspan=2 style=\"background-color: #556f7b; border: 0; color: #fff; margin: 0; padding: 5px; font-size: 14px; text-align: center; width: 100%;\">ARRIVAL INSTRUCTIONS TERMINAL 1</th></tr>\n";
        $message .= "<tr style=\"width: 796px\"><td colspan=2 style=\"border: 0; margin: 0; padding: 5px; font-size: 14px; text-align: center; width: 100%;\">Once you have arrived at the San Jose del Cabo airport, your assigned driver will be waiting for you outside. Once you have your belongings with you, you will have to walk to the exit doors, which are only 2, one on the right side and the other on the left side. You must take the one on the right side that says "Exit Transporters." The people inside the airport will tell you that they work for our company PICATRANSFERS. Which is NOT the case! They are just timeshare personnel who will want to sell you their services. Please (IGNORE)</td></tr>\n";
        $message .= "<tr style=\"width: 796px\"><td colspan=2 style=\"background: url($homepage/images/backgrounds/terminal-1.jpg) no-repeat; height: 400px; width: 796px;\"></td></tr>\n";
        $message .= "<tr style=\"width: 796px\"><td colspan=2 style=\"border: 0; margin: 0; padding: 5px; font-size: 14px; text-align: center; width: 100%;\">To get more details about SJD Airport read our post, Los Cabos International Airport (SJD Airport), everything you should know if you are coming to Cabo.</td></tr>\n";
        $message .= "<tr style=\"width: 796px\"><td colspan=2 style=\"border: 0; margin: 0; padding: 5px; font-size: 14px; text-align: center; width: 100%;\">If you have any questions, please call me at this number (624) 160-13-72. Thank you very much for your preference and have a nice afternoon.</td></tr>\n";
    } else {
      $message .= "<tr style=\"width: 796px\"><th colspan=2 style=\"background-color: #556f7b; border: 0; color: #fff; margin: 0; padding: 5px; font-size: 14px; text-align: center; width: 100%;\">INSTRUCTIONS TERMINAL 2 HOW TO FIND US AT THE AIRPORT</th></tr>\n";
      $message .= "<tr style=\"width: 796px\"><td colspan=2 style=\"border: 0; margin: 0; padding: 5px; font-size: 14px; text-align: center; width: 100%;\">How to find us at the airport. After passing through Customs, completely exit the building. Your private, Pre-arranged Pica transfers   will be waiting outside. Look for a representative of Pica transfres holding a placard with PICATRANSFERS LOS CABOS on it at umbrella #5. Note: We are not associated with anyone inside the airport, you will hear our name shouted out many times before reaching us. You DO NOT need to show anyone your voucher or have it verified or confirmed as you exit. Simply ignore these people, continue out through the right exit door (GROUP ARRIVAL EXIT) of the building and look for our Representative person at umbrella #05 If your arrival flight is delayed we know it in advance and we will make arrangements to meet you accordingly.</td></tr>\n";
      $message .= "<tr style=\"width: 796px\"><td colspan=2 style=\"background: url($homepage/images/backgrounds/terminal-2.jpg) no-repeat; height: 400px; width: 796px;\"></td></tr>\n";
      $message .= "<tr style=\"width: 796px\"><td colspan=2 style=\"border: 0; margin: 0; padding: 5px; font-size: 14px; text-align: center; width: 100%;\">In case for any reason you feel lost, please contact us at +52 (624) 160 1372 and picatransfers.loscabos@gmail.com</td></tr>\n";
    }
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
