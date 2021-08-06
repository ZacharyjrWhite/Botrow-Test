<?php
require("dbase.php");
session_start();

header('Access-Control-Allow-Origin: *');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

mysqli_set_charset($db, "utf8");


	$date = date("Y-m-d", strtotime($date));

$date = date('Y-m-d');
$timelimit = strtotime('+1 day', strtotime($date));
$date1 = date('Y-m-d', $timelimit);
$timelimit = strtotime('+2 day', strtotime($date));
$date2 = date('Y-m-d', $timelimit);
$timelimit = strtotime('+3 day', strtotime($date));
$date3 = date('Y-m-d', $timelimit);
$timelimit = strtotime('+4 day', strtotime($date));
$date4 = date('Y-m-d', $timelimit);
$timelimit = strtotime('+5 day', strtotime($date));
$date5 = date('Y-m-d', $timelimit);

$query = mysqli_query($db,"SELECT * FROM oitems INNER JOIN items ON oitems.itemid = items.id INNER JOIN orders ON oitems.oid = orders.id where orders.status = 'complete' and oitems.rdate = '$date1' and items.cat <> '2' and oitems.void is NULL order by oitems.date desc");                                               
$tot1 = mysqli_num_rows($query);
	
$query = mysqli_query($db,"SELECT * FROM oitems INNER JOIN items ON oitems.itemid = items.id INNER JOIN orders ON oitems.oid = orders.id where orders.status = 'complete' and oitems.rdate = '$date2' and items.cat <> '2' and oitems.void is NULL order by oitems.date desc");                                               
$tot2 = mysqli_num_rows($query);

$query = mysqli_query($db,"SELECT * FROM oitems INNER JOIN items ON oitems.itemid = items.id INNER JOIN orders ON oitems.oid = orders.id where orders.status = 'complete' and oitems.rdate = '$date3' and items.cat <> '2' and oitems.void is NULL order by oitems.date desc");                                               
$tot3 = mysqli_num_rows($query);

$query = mysqli_query($db,"SELECT * FROM oitems INNER JOIN items ON oitems.itemid = items.id INNER JOIN orders ON oitems.oid = orders.id where orders.status = 'complete' and oitems.rdate = '$date4' and items.cat <> '2' and oitems.void is NULL order by oitems.date desc");                                               
$tot4 = mysqli_num_rows($query);

$query = mysqli_query($db,"SELECT * FROM oitems INNER JOIN items ON oitems.itemid = items.id INNER JOIN orders ON oitems.oid = orders.id where orders.status = 'complete' and oitems.rdate = '$date5' and items.cat <> '2' and oitems.void is NULL order by oitems.date desc");                                               
$tot5 = mysqli_num_rows($query);

echo "$tot1 $tot2 $tot3 $tot4 $tot5";


			$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'donationprocessors.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'orders@botrow.com';                     // SMTP username
    $mail->Password   = 'Molson25!!';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('report@botrow.com', 'Daily Report');
    $mail->addAddress('krystlef@horseshoeresort.com');     // Add a recipient
    $mail->addAddress('hannahs@horseshoeresort.com');     // Add a recipient
    $mail->addAddress('benr@horseshoeresort.com');     // Add a recipient
    $mail->addAddress('dylant@horseshoeresort.com');     // Add a recipient
    $mail->addAddress('jeremys@horseshoeresort.com');     // Add a recipient
    $mail->addAddress('briannek@horseshoeresort.com');     // Add a recipient

    $mail->addReplyTo('no-reply@botrow.com', 'no-reply');



$ma = '<b><u>Upcoming Skier Count</b></u><br/><br/>
'.$date1.': <b>'.$tot1.'</b><br/>
'.$date2.': <b>'.$tot2.'</b><br/>
'.$date3.': <b>'.$tot3.'</b><br/>
'.$date4.': <b>'.$tot4.'</b><br/>
'.$date5.': <b>'.$tot5.'</b><br/>';




    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Upcoming Skier Count';
    //$mail->Body    = 'Thank you for ordering from the '.$name.' webstore.<br/><br/> Your QR code, for picking up your order, can be found at the following link:<br/><br/><a href="https://order.botrow.com/'.$id.'/'.$rid.'">https://order.botrow.com/'.$id.'/'.$rid.'</a>';
$mail->Body    = $ma;
    $mail->AltBody = 'Upcoming Skier Count: '.$date1.': '.$tot1.', '.$date2.': '.$tot2.', '.$date3.': '.$tot3.', '.$date4.': '.$tot4.', '.$date5.': '.$tot5.'';


    $mail->send();
    //echo 'Message has been sent';
					
	
} catch (Exception $e) {
    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
	
?>