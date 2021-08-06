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
	$Tax2 = "1.$Tax";
}
	$search = mysqli_real_escape_string($db,trim(strip_tags($_REQUEST['search'])));
	$search = str_replace('.', " ", $search);	
	$search = str_replace('-', " ", $search);	
	$search = str_replace('"', " ", $search);	
	$search = str_replace("'", " ", $search);	
	$search = str_replace("/", " ", $search);
	$search = str_replace("@", " ", $search);	
	$term = str_replace(" ", "* +", $search);

	$term = "+$term*";
	
	$aa1 = mysqli_query($db,"SELECT * 
	FROM orders
	WHERE 
	status = 'complete' and
	MATCH (referenceid, fullname, cardnumber, email, mobile)
	AGAINST ('".$term."' IN BOOLEAN MODE)
    ORDER BY TransDate Desc, TransTime desc limit 50"); 
	$bb1 = mysqli_num_rows($aa1);




									
		$r = 0;
while ($r < $bb1){		
if ($r == 0){
										$new_array[] = array('stop' => 'no');	

}
											$id=mysqli_result($aa1,$r,"id");
											$rid=mysqli_result($aa1,$r,"referenceid");
											$name=mysqli_result($aa1,$r,"fullname");
											$card=mysqli_result($aa1,$r,"cardnumber");
											$email=mysqli_result($aa1,$r,"email");
											$mobile=mysqli_result($aa1,$r,"mobile");
											$address=mysqli_result($aa1,$r,"address");
											$city=mysqli_result($aa1,$r,"city");
											$province=mysqli_result($aa1,$r,"province");
											$postal=mysqli_result($aa1,$r,"postal");

											$tdate=mysqli_result($aa1,$r,"TransDate");
											$ttime=mysqli_result($aa1,$r,"TransTime");
											$amount=mysqli_result($aa1,$r,"TransAmount");
											$loca=mysqli_result($aa1,$r,"purchlocation");
											$void=mysqli_result($aa1,$r,"void");
											
											
																						if ($address == null){
																							$address ="";
																						}
																						if ($city == null){
																							$city ="";
																						}
																						if ($province == null){
																							$province ="";
																						}
																						if ($postal == null){
																							$postal ="";
																						}
											
											
											
//											if ($loca <> 'web'){
//											if ($void == null){

//$void = '0.00';

//}else{
	
//$void = $amount;
	
	
//}
					//						}else{


												
												
	$a = mysqli_query($db,"SELECT * FROM oitems where oid = '$id' and void = 'yes'");                                               
$b = mysqli_num_rows($a);


$i = 0;

$tots = 0;



while ($i < $b){
	
	$amount2=mysqli_result($a,$i,"purchprice");	

$amount2 = $amount2 * $Tax2;

$amount2 = number_format($amount2, 2, '.','');


$tots = $tots + $amount2;
	
	$i++;
}
												
												
	$void = $tots;
											
												
												
								//			}
											
	
$void = number_format($void, 2);

	

$aa11 = mysqli_query($db,"SELECT * FROM cards where aid like '$id'");   
$bb11 = mysqli_num_rows($aa11);

if ($bb11 == 1){
	
	$cardy = true;
	$cnum =mysqli_result($aa11,0,"pan");
	
}else{
	
		$cardy = false;
	$cnum = "nope";

	
}


$amount = number_format($amount, 2);


											$date = "$tdate $ttime";
											$name = ucwords(strtolower(trim($name)));
											$loca = ucwords(strtolower(trim($loca)));

if ($loca <> "Web"){
	
	$loca = "Kiosk $loca";
	
}
				



									
		$new_array[] = array('id' => $id,'name' => $name,'rid' => $rid,'card' => $card,'email' => $email,'mobile' => $mobile,'date' => $date,'amount' => $amount,'loca' => $loca,'cardy' => $cardy,'rfund' => $void, 'cnum' => $cnum, 'address' => $address, 'city' => $city, 'province' => $province, 'postal' => $postal);	
$r++;
}
	
	
if ($r == 0){

								$new_array[] = array('stop' => 'yes');	

}



}
else{
	
	
										$new_array[] = array('stop' => 'yesy');	






	
	
	
}

echo json_encode( $new_array );	

?>
