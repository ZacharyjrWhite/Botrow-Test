<?php
require("dbase.php");
require "mpgClasses.php";

session_start();

mysqli_set_charset($db, "utf8");

$user = $_SESSION["user"];
$pass = $_SESSION["pass"];




$aa = mysqli_query($db,"SELECT * FROM users where username like '$user' and password = '$pass'");   
$bb = mysqli_num_rows($aa);



if ($bb == 1){
	
	


$id=mysqli_real_escape_string($db,trim($_REQUEST['id']));
$amount=mysqli_real_escape_string($db, htmlspecialchars(trim($_REQUEST['amo'])));
$reason=mysqli_real_escape_string($db, htmlspecialchars(trim($_REQUEST['reason'])));

	$a1d1 = mysqli_query($db,"SELECT * FROM users where id = '1'");  
$b1d1 = mysqli_num_rows($a1d1);

if ($b1d1 <> 0 ){
	

	$Tax=mysqli_result($a1d1,0,"taxrate");
		$abbrev=mysqli_result($a1d1,0,"abbrev");
		$resort=mysqli_result($a1d1,0,"resort");


	$Tax2 = "1.$Tax";
}



$aa11 = mysqli_query($db,"SELECT * FROM orders inner join cards on orders.id = cards.aid where cards.aid like '$id'");   
$bb11 = mysqli_num_rows($aa11);

if ($bb11 == 1){
	
	$rid =mysqli_result($aa11,0,"orders.referenceid");
		$DataKey =mysqli_result($aa11,0,"cards.datakey");
		$IssuerId =mysqli_result($aa11,0,"cards.issuerid");

	
	$orrid = bin2hex(random_bytes(2));
	$orderid=$abbrev.'-'.$orrid.'-'.date("dmy-G:i:s");
		
	$orderid=$orrid.'-'.date("dmy-G:i:s");
$custid=$id;
$crypt_type='7';
/************************ Request Variables **********************************/


$store_id='monca72279';
$api_token='SUBqVuwV3Tmdvi5HzArQ';

/************************ Transaction Variables ******************************/

$txnArray=array('type'=>'res_purchase_cc',
                                                                                'data_key'=>$DataKey,
                                                'order_id'=>$orderid,
                                                'cust_id'=>$custid,
                                                'amount'=>$amount,
                                                'crypt_type'=>$crypt_type,
                                                                                //'expdate'=>$expdate,
                                                                                'dynamic_descriptor'=>$resort
                                                );
 
 


/************************ Transaction Object *******************************/

$mpgTxn = new mpgTransaction($txnArray);

/******************* Credential on File **********************************/
 
$cof = new CofInfo();
$cof->setPaymentIndicator("Z");
$cof->setPaymentInformation("2");
$cof->setIssuerId($IssuerId);
 
$mpgTxn->setCofInfo($cof);

/************************ Request Object **********************************/
 
$mpgRequest = new mpgRequest($mpgTxn);
$mpgRequest->setProcCountryCode("CA"); //"US" for sending transaction to US environment
//$mpgRequest->setTestMode(true); //false or comment out this line for production transactions
 
/************************ mpgHttpsPost Object ******************************/
 
$mpgHttpPost  =new mpgHttpsPost($store_id,$api_token,$mpgRequest);
 
/************************ Response Object **********************************/
 

$mpgResponse=$mpgHttpPost->getMpgResponse();


$CardType = $mpgResponse->getCardType();
$TransAmount = $mpgResponse->getTransAmount();
$TxnNumber = $mpgResponse->getTxnNumber();
$ReceiptId = $mpgResponse->getReceiptId();
$TransType = $mpgResponse->getTransType();
$ReferenceNum = $mpgResponse->getReferenceNum();
$ResponseCode = $mpgResponse->getResponseCode();
$Message = $mpgResponse->getMessage();
$AuthCode = $mpgResponse->getAuthCode();
$Complete = $mpgResponse->getComplete();
$TransDate = $mpgResponse->getTransDate();
$TransTime = $mpgResponse->getTransTime();
$Ticket = $mpgResponse->getTicket();
$TimedOut = $mpgResponse->getTimedOut();

//print("\nDataKey = " . $mpgResponse->getDataKey());



$ISO = $mpgResponse->getISO();
$Pan = $mpgResponse->getResDataMaskedPan();
//print("\nAVSResponse = " . $mpgResponse->getAvsResultCode());
//print("\nResSuccess = " . $mpgResponse->getResSuccess());
$PType = $mpgResponse->getPaymentType();
//print("\nIssuerId = " . $mpgResponse->getIssuerId());

$da = date('Y-m-d H:i:s');
					//$refid = substr(md5(uniqid(mt_rand(), true)), 0, 12);


if ($ResponseCode < 50 and is_numeric($ResponseCode)){
	///approved


	
		@mysqli_query($db,"Insert into charges SET 
			referenceid = '$rid',
			date='$da',
			status='complete',
			purchlocation='admin',
			cardnumber='$Pan',
			CardType='$CardType',
			TransAmount ='$TransAmount',
			TxnNumber='$TxnNumber',
			ReceiptId='$ReceiptId',
			TransType='$TransType',
			ReferenceNum='$ReferenceNum',
			ResponseCode='$ResponseCode',
			Message='$Message',
			AuthCode='$AuthCode',
			Complete='$Complete',
			TransDate='$TransDate',
			TransTime='$TransTime',
			CloudTicket='$Ticket',
			TimedOut='$TimedOut',
			ISO='$ISO',
			paymenttype='$PType',
			reason='$reason'");	
			

			
	
echo '1';




	
}else{
	///declined
	
		@mysqli_query($db,"Insert into declined SET 
			referenceid = '$rid',
			date='$da',
			status='declined',
			purchlocation='admin',
			cardnumber='$Pan',
			CardType='$CardType',
			TransAmount ='$TransAmount',
			TxnNumber='$TxnNumber',
			ReceiptId='$ReceiptId',
			TransType='$TransType',
			ReferenceNum='$ReferenceNum',
			ResponseCode='$ResponseCode',
			Message='$Message',
			AuthCode='$AuthCode',
			Complete='$Complete',
			TransDate='$TransDate',
			TransTime='$TransTime',
			CloudTicket='$Ticket',
			TimedOut='$TimedOut',
			ISO='$ISO',
			paymenttype='$PType'");	

	
	echo '3';
	
}

	
	
	
	
	
	
}else{
	
			echo '2';


	
}



	


}else{
	
	
	echo '2';
	
}


?>
