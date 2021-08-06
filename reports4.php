<?php
require("dbase.php");

session_start();

mysqli_set_charset($db, "utf8");

$user = $_SESSION["user"];
$pass = $_SESSION["pass"];




$aa = mysqli_query($db,"SELECT * FROM users where username like '$user' and password = '$pass'");   
$bb = mysqli_num_rows($aa);



if ($bb == 1){
	

		
		
$go = $_REQUEST['go'];

if ($go == "yes"){
	

	
	
$date1 = $_REQUEST['start'];
$date2 = $_REQUEST['end'];

$da = date('Y-m-d');
	// output headers so that the file is downloaded rather than displayed
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=report-'.$da.'.csv');


// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

// output the column headings
	fputcsv($output, array('Reference ID', 'Date', 'Reason', 'Locale', 'Card #', 'Card Type', 'Amount'));

// fetch the data
	$a = mysqli_query($db,"SELECT * FROM charges where status = 'complete' and date >= '$date1' and date <= '$date2' order by date desc");                                               
$hnn1 = mysqli_num_rows($a);


$i = 0;
while ($i < $hnn1){
		
$id=mysqli_result($a,$i,"referenceid");
	$amount=mysqli_result($a,$i,"TransAmount");	
	$date=mysqli_result($a,$i,"date");
	$kiosk=mysqli_result($a,$i,"purchlocation");	
	$cnumb=mysqli_result($a,$i,"cardnumber");
	$ctype=mysqli_result($a,$i,"CardType");
	$reason=mysqli_result($a,$i,"reason");

	


	
$ctype = trim($ctype);

if ($ctype == 'M'){
	$ctype = "Mastercard";
}
if ($ctype == 'V'){
$ctype = "Visa";
}
if ($ctype == 'AX'){
$ctype = "American Express";
}
if ($ctype == 'NO'){
	$ctype = "Novus/Discover";
}
if ($ctype == 'DS'){
	$ctype = "Discover";
}
if ($ctype == 'C'){
	$ctype = "JCB";
}
if ($ctype == 'C1'){
	$ctype = "JCB";
}
if ($ctype == 'SE'){
	$ctype = "Sears";
}		
if ($ctype == 'P'){
	$ctype = "Debit";
}
if ($ctype == 'D'){
	$ctype = "Debit";
}	

$amount = "$".number_format($amount, 2);

$cnumb = substr($cnumb, -4);

	

	
fputcsv($output, array($id, $date, $reason, $kiosk, $cnumb, $ctype, $amount));	
	$i++;
}


}
else{
	header("Location: index.php");
		
		exit();
	
}

		
	}
	




	?>