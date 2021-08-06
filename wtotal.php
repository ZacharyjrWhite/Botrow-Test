<?php
require("login.php");

$date3 = "2021-03-20 00:00:00";
$date4 = "2021-03-26 23:59:59";

$a1d1 = mysqli_query($db,"SELECT * FROM users where id = '1'");  
$b1d1 = mysqli_num_rows($a1d1);

if ($b1d1 <> 0 ){
	

	$Tax=mysqli_result($a1d1,0,"taxrate");
	$Tax1 = ".$Tax";
	$Tax2 = "1.$Tax";
}


	$a = mysqli_query($db,"SELECT * FROM orders inner join oitems on orders.id = oitems.oid where orders.status = 'complete' and orders.purchlocation = 'web' and orders.date >= '$date3' and orders.date <= '$date4' order by orders.date desc");                                               
$b = mysqli_num_rows($a);


$i = 0;

$tots = 0;



while ($i < $b){
	
	$amount=mysqli_result($a,$i,"oitems.purchprice");	


$amount = $amount * $Tax2;

$amount = number_format($amount, 2, '.','');


$tots = $tots + $amount;
$tot++;
	

	
	
	
	
	
	$i++;
}



	$a = mysqli_query($db,"SELECT * FROM orders inner join oitems on orders.id = oitems.oid where orders.status = 'complete' and orders.purchlocation <> 'web' and orders.date >= '$date3' and orders.date <= '$date4' order by orders.date desc");                                               
$b = mysqli_num_rows($a);


$i = 0;

$tots2 = 0;



while ($i < $b){
	
	$amount2=mysqli_result($a,$i,"oitems.purchprice");	


$amount2 = $amount2 * $Tax2;

$amount2 = number_format($amount2, 2, '.','');


$tots2 = $tots2 + $amount2;
$tot++;
	

	
	
	
	
	
	$i++;
}


echo "Web: $tots";
echo "<br/>";
echo "Kiosk: $tots2";

echo "<br/>";
$gtot = $tots + $tots2;
echo "Total: $gtot";

?>