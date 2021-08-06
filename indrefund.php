<?php

require("dbase.php");
require "mpgClasses.php";

session_start();

mysqli_set_charset($db, "utf8");

$user = $_SESSION["user"];
$pass = $_SESSION["pass"];

$date = date('Y-m-d H:i:s');

$det = date('Y-m-d H:i:s');


$aa = mysqli_query($db,"SELECT * FROM users where username like '$user' and password = '$pass'");   
$bb = mysqli_num_rows($aa);



if ($bb == 1){
	
	$id = '121206';

	
	////
	
$aq = mysqli_query($db,"SELECT * FROM oitems INNER JOIN orders ON oitems.oid = orders.id where oitems.id = '$id' and oitems.void is NULL");                                               
$bq = mysqli_num_rows($aq);


if ($bq == 1){
	
	$pprice=utf8_encode(mysqli_result($aq,0,"oitems.purchprice"));	
	$txn=utf8_encode(mysqli_result($aq,0,"orders.TxnNumber"));	
	$orderid=utf8_encode(mysqli_result($aq,0,"orders.ReceiptId"));	
	$wid=utf8_encode(mysqli_result($aq,0,"orders.id"));	
	$itemid=utf8_encode(mysqli_result($aq,0,"oitems.itemid"));	
	$rdate=utf8_encode(mysqli_result($aq,0,"oitems.redeemdate"));	

	
//		$a1d1e = mysqli_query($db,"SELECT * FROM items where id = '$itemid' and aff is not NULL");  
//$b1d1e = mysqli_num_rows($a1d1e);
	
	
	
	
	$a1d1 = mysqli_query($db,"SELECT * FROM users where id = '1'");  
$b1d1 = mysqli_num_rows($a1d1);

if ($b1d1 <> 0 ){
	

	$Tax=mysqli_result($a1d1,0,"taxrate");
		$abbrev=mysqli_result($a1d1,0,"abbrev");
		$resort=mysqli_result($a1d1,0,"resort");


	$Tax2 = "1.$Tax";
}

$pprice = number_format($pprice, 2, '.', '');



$pprice = $pprice * $Tax2;
//$pprice = $pprice - 0.01;
$pprice = number_format($pprice, 2, '.', '');


	$timelimit = strtotime('+3 minutes', strtotime($date));
$timelimit = date('Y-m-d H:i:s', $timelimit);
	
	if ($pprice == 0.00){
		
	
	@mysqli_query($db,"Update oitems SET 
			void='yes',
			voiddate='$det'
			where id = '$id'");	
				
			
			

		@mysqli_query($db,"Update orders SET 
			ndate='$timelimit',
			notify='yes',
			nmess='2'
			where ReceiptId = '$orderid'");	
			
	
echo '1';		
		
		
		
	}else{

	////
	
	
	
$custid=$wid;
/************************ Request Variables **********************************/

$store_id='monca72279';
$api_token='SUBqVuwV3Tmdvi5HzArQ';

/************************ Transaction Variables ******************************/

$txnArray=array('type'=>'refund',
         'txn_number'=>$txn,
         'order_id'=>$orderid,
         'amount'=>$pprice,
         'crypt_type'=>'7',
         'cust_id'=> $custid,
		'dynamic_descriptor'=>$resort
                                                );
 
 


/************************ Transaction Object *******************************/

$mpgTxn = new mpgTransaction($txnArray);


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
					$refid = substr(md5(uniqid(mt_rand(), true)), 0, 12);


if ($ResponseCode < 50 and is_numeric($ResponseCode)){
	///approved


	
		@mysqli_query($db,"Insert into refunds SET 
			referenceid = '$refid',
			date='$da',
			status='complete',
			purchlocation='web',
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
			

	@mysqli_query($db,"Update oitems SET 
			void='yes',
			voiddate='$det'
			where id = '$id'");	
			
			
//	if ($b1d1e <> 0){

	//	$aff=mysqli_result($a1d1e,0,"aff");
//	@mysqli_query($db,"Update oitems SET 
	//		void='yes'
		//	where oid = '$wid' and cat = '4' and itemid ='$aff' and redeemdate='$rdate' limit 1");	

	//}		
			
			

		@mysqli_query($db,"Update orders SET 
			ndate='$timelimit',
			notify='yes',
			nmess='2'
			where ReceiptId = '$orderid'");	
			
	
echo '1';			

	
}else{
	///declined
	
		@mysqli_query($db,"Insert into declined SET 
			referenceid = '$refid',
			date='$da',
			status='declined',
			purchlocation='web',
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

	
		echo '2';			

	
}
	}

}else{
	
	
	echo '2';
}

			

}else{
	
	
	echo '3';
	
}


?>
