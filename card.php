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
$card=mysqli_real_escape_string($db, htmlspecialchars(trim($_REQUEST['card'])));
$month=mysqli_real_escape_string($db, htmlspecialchars(trim($_REQUEST['month'])));
$year=mysqli_real_escape_string($db, htmlspecialchars(trim($_REQUEST['year'])));
$cvd=mysqli_real_escape_string($db, htmlspecialchars(trim($_REQUEST['cvv'])));


	$expiry = "$year$month";
	





$store_id='store5';
$api_token='yesguy';
 
$txnArray=array('type'=>'card_verification',
         'order_id'=>'ord-'.date("dmy-G:i:s"),
         'cust_id'=>'botrow',
         'pan'=>$card,
         'expdate'=>$expiry,
         'crypt_type'=>'7'
           );
 
$mpgTxn = new mpgTransaction($txnArray);
 
 
/************************** CVD Variables *****************************/
 
$cvd_indicator = '1';
$cvd_value = $cvd;

 
/********************** CVD Associative Array *************************/
 
$cvdTemplate = array(
    'cvd_indicator' => $cvd_indicator,
    'cvd_value' => $cvd_value
);
 

 
/************************** CVD Object ********************************/
 
$mpgCvdInfo = new mpgCvdInfo ($cvdTemplate);
 
/*********************** Credential on File ************************/
$cof = new CofInfo();
$cof->setPaymentIndicator("C");
$cof->setPaymentInformation("0");
$cof->setIssuerId("");
 
$mpgTxn->setCvdInfo($mpgCvdInfo);
$mpgTxn->setCofInfo($cof);
 
$mpgRequest = new mpgRequest($mpgTxn);
$mpgRequest->setProcCountryCode("CA"); //"US" for sending transaction to US environment
$mpgRequest->setTestMode(true); //false or comment out this line for production transactions
 
$mpgHttpPost  =new mpgHttpsPost($store_id,$api_token,$mpgRequest);
 
$mpgResponse=$mpgHttpPost->getMpgResponse();
 
$CardType = $mpgResponse->getCardType();
//print("\nTransAmount = " . $mpgResponse->getTransAmount());
//print("\nTxnNumber = " . $mpgResponse->getTxnNumber());
//print("\nReceiptId = " . $mpgResponse->getReceiptId());
//print("\nTransType = " . $mpgResponse->getTransType());
//print("\nReferenceNum = " . $mpgResponse->getReferenceNum());
$ResponseCode = $mpgResponse->getResponseCode();
//print("\nISO = " . $mpgResponse->getISO());
//print("\nMessage = " . $mpgResponse->getMessage());
$deb = $mpgResponse->getIsVisaDebit();
//print("\nAuthCode = " . $mpgResponse->getAuthCode());
//print("\nComplete = " . $mpgResponse->getComplete());
//print("\nTransDate = " . $mpgResponse->getTransDate());
//print("\nTransTime = " . $mpgResponse->getTransTime());
//print("\nTicket = " . $mpgResponse->getTicket());
//print("\nTimedOut = " . $mpgResponse->getTimedOut());
$IssuerId = $mpgResponse->getIssuerId();
$CvdResultCode = $mpgResponse->getCvdResultCode();	

if ($ResponseCode < 50 and is_numeric($ResponseCode) and $CvdResultCode = "1M"){



$type='res_add_cc';
$cust_id='botrow';
$crypt_type='7';



/*********************** Transactional Associative Array **********************/

$txnArray=array('type'=>$type,
			'cust_id'=>$cust_id,
    		'pan'=>$card,
   			'expdate'=>$expiry,
			'crypt_type'=>$crypt_type
		);



/************************** AVS Object ***************************************/

//$mpgAvsInfo = new mpgAvsInfo ($avsTemplate);

/******************* Credential on File **********************************/

$cof = new CofInfo();
$cof->setIssuerId($IssuerId);

/**************************** Transaction Object *****************************/

$mpgTxn = new mpgTransaction($txnArray);
$mpgTxn->setAvsInfo($mpgAvsInfo);
$mpgTxn->setCofInfo($cof);

/****************************** Request Object *******************************/

$mpgRequest = new mpgRequest($mpgTxn);
$mpgRequest->setProcCountryCode("CA"); //"US" for sending transaction to US environment
$mpgRequest->setTestMode(true); //false or comment out this line for production transactions

/***************************** HTTPS Post Object *****************************/

$mpgHttpPost  =new mpgHttpsPost($store_id,$api_token,$mpgRequest);

/******************************* Response ************************************/

$mpgResponse=$mpgHttpPost->getMpgResponse();

$DataKey = $mpgResponse->getDataKey();
$ResponseCode2 = $mpgResponse->getResponseCode();
//$Message = $mpgResponse->getMessage();
//$TransDate = $mpgResponse->getTransDate();
//$TransTime = $mpgResponse->getTransTime();
$Complete = $mpgResponse->getComplete();
//$TimedOut = $mpgResponse->getTimedOut();
//$ResSuccess = $mpgResponse->getResSuccess();
//$PaymentType = $mpgResponse->getPaymentType();
//$IssuerId = $mpgResponse->getIssuerId();

//----------------- ResolveData ------------------------------

$CustID = $mpgResponse->getResDataCustId();
//$Phone = $mpgResponse->getResDataPhone();
//$Email = $mpgResponse->getResDataEmail();
//$Note = $mpgResponse->getResDataNote();
$MaskedPan = $mpgResponse->getResDataMaskedPan();
//$ExpDate = $mpgResponse->getResDataExpDate();
//$CryptType = $mpgResponse->getResDataCryptType();


if ($ResponseCode2 < 50 and is_numeric($ResponseCode2)){



	$as = mysqli_query($db,"SELECT * FROM cards where aid = '$id'");  
$bs = mysqli_num_rows($as);

if ($bs == 1){
	@mysqli_query($db,"Update cards SET
	datakey='$DataKey',
	issuerid='$IssuerId',
	pan='$MaskedPan',
	 ctype='$CardType',
	 debit='$deb' where aid='$id'");	
	
}else{

@mysqli_query($db,"Insert into cards SET
	aid='$id',
	datakey='$DataKey',
	issuerid='$IssuerId',
	pan='$MaskedPan',
	 ctype='$CardType',
	 debit='$deb'");	
	
}



	echo '1';

	


}
else{
	///decline
	
	echo '3';
		
}
	
}
else{
///decline

			echo '3';

	
}


}else{
	
	
	echo '2';
	
}


?>
