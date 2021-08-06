

<?php
require("login.php");
//require("dbase.php");
$de = date('Y-m-d');





if(isset($_REQUEST['startdate'])) {
	$date1 = $_REQUEST['startdate'];
		$date2 = $_REQUEST['enddate'];

	
	
}else{
	
	$date1 = $de;
	
	$date2 = $de;
	
}

$date3 = "$date1 00:00:00";
$date4 = "$date2 23:59:59";


?>
<head>
  <meta charset="utf-8">
<title>Botrow - Card Charges</title>

  <link rel="shortcut icon" type="image/png" href="favicon.png">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
  } );
    $( function() {
    $( "#datepicker2" ).datepicker({ dateFormat: 'yy-mm-dd' });
  } );
  </script>
  <style type='text/css'>
  a:link {
    color: blue;
	 text-decoration: none;
}

/* visited link */
a:visited {
    color: blue;
	 text-decoration: none;
}

/* mouse over link */
a:hover {
    color: blue;
	 text-decoration: none;
}

/* selected link */
a:active {
    color: red;
}


	input {
	
  color: #585858;
  padding: 10px 12px;
  border: 1px solid #e2e2e2;
  margin-bottom: 10px;
  width:50%;
		
	}
	
		input[type=submit] {
	
  color: #585858;
  padding: 10px 12px;
  border: 1px solid #e2e2e2;
  margin-bottom: 10px;
  width:100%;
		
	}
	

	
	.buton1 {
position: relative;
background-color: #203A81;
-moz-border-radius: 10px;
-webkit-border-radius: 10px;
border-radius: 10px;
display: inline-block;
cursor: pointer;
color: #ffffff;
font-family: more;
font-size: 20px;
padding: 8px 17px;
text-decoration: none;
text-shadow: 0px 1px 0px #283966;
width: 120px;
text-transform: uppercase;
margin: 5px;
}

.buton1:active {
position: relative;
top: 1px;
}

.buton1:hover {
background-color: #0097ab;
position: relative;
top: 1px;
}

.buton2 {
position: relative;
background-color: #0097ab;
-moz-border-radius: 10px;
-webkit-border-radius: 10px;
border-radius: 10px;
display: inline-block;
cursor: pointer;
color: #ffffff;
font-family: more;
font-size: 20px;
padding: 8px 17px;
text-decoration: none;
text-shadow: 0px 1px 0px #283966;
width: 120px;
text-transform: uppercase;
margin: 5px;
}

.buton2:active {
position: relative;
top: 1px;
}

.buton2:hover {
background-color: #203A81;
position: relative;
top: 1px;
}

	
	.buton4 {
		position: relative;
	background-color:#203A81;
	-moz-border-radius:10px;
	-webkit-border-radius:10px;
	border-radius:10px;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
//	font-family:more;
	font-size:20px;
	padding:8px 17px;
	text-decoration:none;
	text-shadow:0px 1px 0px #283966;
	width: 300px;
	text-transform: uppercase;
}

.buton4:active {
	position:relative;
	
}

.buton4:hover {
		background-color: #0097ab;
	position:relative;
	
}

	.daa {
	
  color: #203A81;
  padding: 10px 10px;
  border: 1px solid #e2e2e2;
  margin-bottom: 10px;
			font-family:more;
	font-size:24px;
	height: 48px;
	font-weight: bold;
		overflow: hidden; 
	

	}	

	.btn_disabled {
position: relative;
background-color: #474545;
-moz-border-radius: 10px;
-webkit-border-radius: 10px;
border-radius: 10px;
display: inline-block;
color: #787171;
font-family: more;
font-size: 20px;
padding: 8px 17px;
text-decoration: none;
text-shadow: 0px 1px 0px #283966;
width: 120px;
text-transform: uppercase;
cursor: not-allowed;
margin: 5px;
}

._disabled,
._disabled:hover {
background-color: #474545;
color: #787171;
cursor: not-allowed;
}
  </style>
</head>
<center>
<table align="center"><tr><td align="center">
<?php require("pageHeader.php"); ?>

<br/><br/>


<form action="charges.php" method="get">

<table border = "0" width = "700" cellspacing = "0" align="center">
<tr>
<td width = "300" align="center">
<p>Start Date: <input type="text" class="daa" id="datepicker" name="startdate" value="<?php echo $date1; ?>"></p>
</td>
<td width = "300" align="center">
<p>End Date: <input type="text" class="daa" id="datepicker2" name="enddate" value="<?php echo $date2; ?>"></p>

</td>
<td width = "100" align="center">
  <input type="submit" name="btn" value="Submit">
</td>
</tr>


</table>

</form><br/>

<?php







	$a = mysqli_query($db,"SELECT * FROM charges where status = 'complete' and date >= '$date3' and date <= '$date4' order by date desc");                                               
$b = mysqli_num_rows($a);


$i = 0;


$tots = 0;
$tot = 0;


while ($i < $b){
	
	$amount=mysqli_result($a,$i,"TransAmount");	



$amount = number_format($amount, 2, '.','');


$tots = $tots + $amount;
$tot++;
	



	
	
	
	
	
	
	$i++;
}





	
?>
<table width = "1000" align ="center" cellspacing="0" cellpadding="5">
<tr bgcolor = "#f4f6f6">
<td width = "200" align="center"></td>
<td width = "400" align="center"><b>Quantity</b></td>
<td width = "400" align="center"><b>Total</b></td>




</tr>
<tr>
<td width = "200" align="center" bgcolor = "#f4f6f6"><b>Card Charges:</b></td>
<td width = "400" align="center"><?php echo $tot; ?></td>
<td width = "400" align="center"><?php echo "$ ".number_format($tots, 2); ?></td>




</tr>
</table><br/>





<br/>
<div class = "buton4" onclick="window.open('reports4.php?go=yes&start=<?php echo $date3; ?>&end=<?php echo $date4; ?>', '_top')">Download CSV File</div>		

<br/><br/>
<table width = "1200" align ="center" cellspacing="0">
<tr bgcolor = "#f4f6f6" height="50">
<td width = "100" align="center"><b>OID</b></td>
<td width = "100" align="center"><b>Date</b></td>
<td width = "350" align="center"><b>Reason</b></td>
<td width = "50" align="center"><b>Locale</b></td>
<td width = "50" align="center"><b>Card #</b></td>
<td width = "75" align="center"><b>Card Type</b></td>
<td width = "75" align="center"><b>Amount</b></td>
</tr>
<?php

	$a = mysqli_query($db,"SELECT * FROM charges where status = 'complete' and date >= '$date3' and date <= '$date4' order by date desc");                                               
$b = mysqli_num_rows($a);


$i = 0;

while ($i < $b){
	
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
$ctype = "Amex";
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
if ($ctype == 'UP'){
	$ctype = "Unionpay";
}	

if ($i % 2 == 0){
	$bgcolor = "#FFFFFF";
	
}else{
	$bgcolor = "#f4f6f6";
}

$cnumb = substr($cnumb, -4);
?>
<tr  bgcolor = "<?php echo $bgcolor; ?>">
<td width = "100" align="center"><a href="lookup.php?id=<?php echo $id; ?>"><?php echo $id; ?></a></td>
<td width = "100" align="center"><?php echo $date; ?></td>
<td width = "350" align="center"><?php echo $reason; ?></td>
<td width = "50" align="center"><?php echo $kiosk; ?></td>
<td width = "50" align="center"><?php echo $cnumb; ?></td>
<td width = "75" align="center"><?php echo $ctype; ?></td>
<td width = "75" align="center"><?php echo "$ ".number_format($amount, 2); ?></td>
</tr>
<?php	
	
	
	
	
	
	
	$i++;
}


?>

</table>
</td></tr></table><br/><br/><br/>
</center>
