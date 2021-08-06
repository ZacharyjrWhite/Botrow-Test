<?php
require("dbase.php");

session_start();

mysqli_set_charset($db, "utf8");

$user = $_SESSION["user"];
$pass = $_SESSION["pass"];




$aa = mysqli_query($db,"SELECT * FROM users where username like '$user' and password = '$pass'");   
$bb = mysqli_num_rows($aa);



if ($bb == 1){
	
	$a1d1 = mysqli_query($db,"SELECT * FROM users where id = '1'");  
$b1d1 = mysqli_num_rows($a1d1);

if ($b1d1 <> 0 ){
	

	$Tax=mysqli_result($a1d1,0,"taxrate");
	$Tax1 = ".$Tax";
	$Tax2 = "1.$Tax";
}
		
		
$go = $_REQUEST['go'];

if ($go == "yes"){
	
		$cv = mysqli_query($db,"SELECT * from items");                                               
$bv = mysqli_num_rows($cv);

$ry = 0;

while($ry < $bv){
	
	$id=mysqli_result($cv,$ry,"id");	
	$type=mysqli_result($cv,$ry,"type");		
	$title=mysqli_result($cv,$ry,"title");	

	
	$idd[$id] = $title;
	$typ[$id] = $type;
	
	$ry++;
}
	
	
$date1 = $_REQUEST['date'];
$date2 = $_REQUEST['date2'];
if ($date1 == "Anyday"){
	$date2 = "Anyday";
}
else if ($date2 == "Anyday"){
	$date1 = "Anyday";
}

if ($date1 <> "Anyday" and $date2 <> "Anyday"){
			$date1 = date("Y-m-d", strtotime($date1));
			$date2 = date("Y-m-d", strtotime($date2));

	
}

$da = date('Y-m-d');
	// output headers so that the file is downloaded rather than displayed
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=Rental-Report-'.$date1.'.csv');


// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

// output the column headings
	fputcsv($output, array('Reference ID', 'Date', 'Item', 'Type', 'Class', 'Locale', 'Card #', 'Card Type', 'Before Tax', 'Tax', 'Total', 'Name', 'Age', 'Address', 'City', 'Province', 'Postal', 'Redeem Date', 'Transaction', 'Picked Up', 'Height', 'Weight', 'Shoe Size', 'Gender', 'Ability', 'Equipment', 'Helmet', 'Custom'));

// fetch the data
$a = mysqli_query($db,"SELECT * FROM oitems INNER JOIN items ON oitems.itemid = items.id INNER JOIN orders ON oitems.oid = orders.id where orders.status = 'complete' and oitems.rdate >= '$date1' and oitems.rdate <= '$date2' and items.cat = '2' and oitems.void is NULL order by oitems.date desc");                                               

	//$a = mysqli_query($db,"SELECT * FROM orders inner join oitems on orders.id = oitems.oid where orders.status = 'complete' and orders.date >= '$date1' and orders.date <= '$date2' order by orders.date desc");                                               
$hnn1 = mysqli_num_rows($a);


$i = 0;
while ($i < $hnn1){
		

	$id=mysqli_result($a,$i,"orders.referenceid");
	$amount=mysqli_result($a,$i,"oitems.purchprice");	
	$date=mysqli_result($a,$i,"orders.date");
	$kiosk=mysqli_result($a,$i,"orders.purchlocation");	
	$cnumb=mysqli_result($a,$i,"orders.cardnumber");
	$ctype=mysqli_result($a,$i,"orders.CardType");
	$itemid=mysqli_result($a,$i,"oitems.itemid");
	$cat=mysqli_result($a,$i,"oitems.cat");
	$void=mysqli_result($a,$i,"orders.void");
		$name=mysqli_result($a,$i,"oitems.fullname");
	$age=mysqli_result($a,$i,"oitems.age");


		$height=mysqli_result($a,$i,"oitems.height");
		$height2=mysqli_result($a,$i,"oitems.height2");
		$weight=mysqli_result($a,$i,"oitems.weight");
		$shoe=mysqli_result($a,$i,"oitems.shoe");
		$shoe2=mysqli_result($a,$i,"oitems.shoe2");
		$sex=mysqli_result($a,$i,"oitems.sex");				
		$ability=mysqli_result($a,$i,"oitems.ability");
		$equip=mysqli_result($a,$i,"oitems.equip");
		$helmet=mysqli_result($a,$i,"oitems.helmet");	
		$inv=utf8_encode(mysqli_result($a,$i,"oitems.inv"));

		if ($height <> null){
	
		$height = "$height' $height2\"";
	
}
if ($shoe <> null){
	
		$shoe = "$shoe $shoe2";
	
}


		$address=mysqli_result($a,$i,"orders.address");
			$city=mysqli_result($a,$i,"orders.city");
		$province=mysqli_result($a,$i,"orders.province");
		$postal=mysqli_result($a,$i,"orders.postal");
	$redeem=mysqli_result($a,$i,"oitems.redeemdate");

$print=utf8_encode(mysqli_result($a,$i,"oitems.printed"));

if ($print == null or $print == 0){
	
	$pri = "No";
}else{
	
		$pri = "Yes";

	
}
	
	
	
$tax = $amount * $Tax1;
	

$amount2 = $amount * $Tax2;
	
		if ($cat == 1 or $cat == 4){
$cat = "Ticket";	
}
else if ($cat == 2){
	
	$cat = "Rental";
}

	
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

$amount2 = "$".number_format($amount2, 2);
$amount = "$".number_format($amount, 2);
$tax = "$".number_format($tax, 2);


$cnumb = substr($cnumb, -4);

		if ($cat == 1 or $cat == 4){
$cat = "Ticket";	
}
else if ($cat == 2){
	
	$cat = "Rental";
}
else if ($cat == 5){
	
	$cat = "Season Pass";
}	



if ($inv <> NULL){
	
	$aa65 = mysqli_query($db,"SELECT * FROM rinventory left join rentalinv on rinventory.invid = rentalinv.id where rinventory.id = '$inv'");   
$bb65 = mysqli_num_rows($aa65);

if ($bb65 <> 0){
										$name9=utf8_encode(mysqli_result($aa65,0,"rinventory.name"));	
									$title9=utf8_encode(mysqli_result($aa65,0,"rentalinv.title"));	


$cust = "$title9: $name9";
	
}
	
	
}else{
	
	$cust = NULL;
	
}


	
fputcsv($output, array($id, $date, $cat, $typ[$itemid], $idd[$itemid], $kiosk, $cnumb, $ctype, $amount, $tax, $amount2, $name, $age, $address, $city, $province, $postal, $redeem, 'purchase', $pri, $height, $weight, $shoe, $sex, $ability, $equip, $helmet, $cust));	
	$i++;
}


}
else{
	header("Location: index.php");
		
		exit();
	
}

		
	}
	




	?>