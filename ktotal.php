<?php

	$a = mysqli_query($db,"SELECT * FROM orders inner join oitems on orders.id = oitems.oid where orders.status = 'complete' and orders.date >= '$date3' and orders.date <= '$date4' order by orders.date desc");                                               
$b = mysqli_num_rows($a);


$i = 0;

$ticks = 0;
$rents = 0;
$tots = 0;
$tot = 0;
$tot1 = 0;
$tot2 = 0;
$tot3 = 0;
$pass = 0;


while ($i < $b){
	
	$amount=mysqli_result($a,$i,"oitems.purchprice");	

	$cat=mysqli_result($a,$i,"oitems.cat");

$amount = $amount * $Tax2;

$amount = number_format($amount, 2, '.','');


$tots = $tots + $amount;
$tot++;
	
		if ($cat == 1 or $cat == 4){
			
	$ticks = $ticks + $amount;		
	$tot1++;
		
			
}
else if ($cat == 2){
		$rents = $rents + $amount;		
$tot2++;

}
else if ($cat == 5){
		$pass = $pass + $amount;		
$tot3++;

}

	
	
	
	
	
	
	$i++;
}

?>