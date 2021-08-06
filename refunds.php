

<?php
require("login.php");
//require("dbase.php");
$de = date('Y-m-d');





if(isset($_REQUEST['startdate'])) {
	$d1 = $_REQUEST['startdate'];
		$d2 = $_REQUEST['enddate'];

	$date1 = "$d1 00:00:00";
	$date2 = "$d2 23:59:59";

	
}else{
	$d1 = $de;
	$d2 = $de;
	$date1 = "$de 00:00:00";
	
	$date2 = "$de 23:59:59";
	
}

$a1d1 = mysqli_query($db,"SELECT * FROM users where id = '1'");  
$b1d1 = mysqli_num_rows($a1d1);

if ($b1d1 <> 0 ){
	

	$Tax=mysqli_result($a1d1,0,"taxrate");
	$Tax1 = ".$Tax";
	$Tax2 = "1.$Tax";
}


?>
<head>
  <meta charset="utf-8">
<title>Botrow - Refunds</title>

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


<form action="refunds.php" method="get">

<table border = "0" width = "700" cellspacing = "0" align="center">
<tr>
<td width = "300" align="center">
<p>Start Date: <input type="text" class="daa" id="datepicker" name="startdate" value="<?php echo $d1; ?>"></p>
</td>
<td width = "300" align="center">
<p>End Date: <input type="text" class="daa" id="datepicker2" name="enddate" value="<?php echo $d2; ?>"></p>

</td>
<td width = "100" align="center">
  <input type="submit" name="btn" value="Submit">
</td>
</tr>


</table>

</form><br/>

<?php


	$cv = mysqli_query($db,"SELECT * from items");                                               
$bv = mysqli_num_rows($cv);

$ry = 0;

while($ry < $bv){
	
	$id=mysqli_result($cv,$ry,"id");	
	$title=mysqli_result($cv,$ry,"title");	
	$desc=mysqli_result($cv,$ry,"description");		
	$type=mysqli_result($cv,$ry,"type");		
	
	
	$idd[$id] = $title;
	$typ[$id] = $type;
	
	$ry++;
}




	$a = mysqli_query($db,"SELECT * FROM orders inner join oitems on orders.id = oitems.oid where orders.status = 'complete' and oitems.voiddate >= '$date1' and oitems.voiddate <= '$date2' and oitems.void = 'yes' order by orders.date desc");                                               
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
$camps = 0;
$camps1 = 0;

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
else if ($cat == 5 or $cat == 6){
		$pass = $pass + $amount;		
$tot3++;

}
else if ($cat == 7){
		$camps = $camps + $amount;		
$camps1++;

}

	
	
	
	
	
	
	$i++;
}


$before = $tots / $Tax2;
	$hst = $tots - $before;



	
?>
<table width = "1000" align ="center" cellspacing="0" cellpadding="5">
<tr bgcolor = "#f4f6f6">
<td width = "200" align="center"></td>
<td width = "200" align="center"><b>Quantity</b></td>
<td width = "200" align="center"><b>Before Tax</b></td>
<td width = "200" align="center"><b>Tax (<?php echo $Tax; ?>%)</b></td>
<td width = "200" align="center"><b>After Tax</b></td>



</tr>
<tr>
<td width = "200" align="center" bgcolor = "#f4f6f6"><b>Items Refunded:</b></td>
<td width = "200" align="center"><?php echo $tot; ?></td>
<td width = "200" align="center"><?php echo "$ ".number_format($before, 2); ?></td>
<td width = "200" align="center"><?php echo "$ ".number_format($hst, 2); ?></td>
<td width = "200" align="center"><?php echo "$ ".number_format($tots, 2); ?></td>



</tr>
</table><br/>


<?php
$before = $ticks / $Tax2;
	$hst = $ticks - $before;

?>
<table width = "1000" align ="center" cellspacing="0" cellpadding="5">
<tr bgcolor = "#f4f6f6">
<td width = "200" align="center"></td>
<td width = "200" align="center"><b>Quantity</b></td>
<td width = "200" align="center"><b>Before Tax</b></td>
<td width = "200" align="center"><b>Tax (<?php echo $Tax; ?>%)</b></td>
<td width = "200" align="center"><b>After Tax</b></td>



</tr>
<tr>
<td width = "200" align="center" bgcolor = "#f4f6f6"><b>Tickets Refunded:</b></td>
<td width = "200" align="center"><?php echo $tot1; ?></td>
<td width = "200" align="center"><?php echo "$ ".number_format($before, 2); ?></td>
<td width = "200" align="center"><?php echo "$ ".number_format($hst, 2); ?></td>
<td width = "200" align="center"><?php echo "$ ".number_format($ticks, 2); ?></td>



</tr>
</table><br/>

<?php
$before = $rents / $Tax2;
	$hst = $rents - $before;

?>
<table width = "1000" align ="center" cellspacing="0" cellpadding="5">
<tr bgcolor = "#f4f6f6">
<td width = "200" align="center"></td>
<td width = "200" align="center"><b>Quantity</b></td>
<td width = "200" align="center"><b>Before Tax</b></td>
<td width = "200" align="center"><b>Tax (<?php echo $Tax; ?>%)</b></td>
<td width = "200" align="center"><b>After Tax</b></td>



</tr>
<tr>
<td width = "200" align="center" bgcolor = "#f4f6f6"><b>Rentals Refunded:</b></td>
<td width = "200" align="center"><?php echo $tot2; ?></td>
<td width = "200" align="center"><?php echo "$ ".number_format($before, 2); ?></td>
<td width = "200" align="center"><?php echo "$ ".number_format($hst, 2); ?></td>
<td width = "200" align="center"><?php echo "$ ".number_format($rents, 2); ?></td>



</tr>
</table><br/>

<?php
$before = $pass / $Tax2;
	$hst = $pass - $before;

?>
<table width = "1000" align ="center" cellspacing="0" cellpadding="5">
<tr bgcolor = "#f4f6f6">
<td width = "200" align="center"></td>
<td width = "200" align="center"><b>Quantity</b></td>
<td width = "200" align="center"><b>Before Tax</b></td>
<td width = "200" align="center"><b>Tax (<?php echo $Tax; ?>%)</b></td>
<td width = "200" align="center"><b>After Tax</b></td>



</tr>
<tr>
<td width = "200" align="center" bgcolor = "#f4f6f6"><b>Passes Refunded:</b></td>
<td width = "200" align="center"><?php echo $tot3; ?></td>
<td width = "200" align="center"><?php echo "$ ".number_format($before, 2); ?></td>
<td width = "200" align="center"><?php echo "$ ".number_format($hst, 2); ?></td>
<td width = "200" align="center"><?php echo "$ ".number_format($pass, 2); ?></td>



</tr>
</table><br/>
<?php
$before = $camps / $Tax2;
	$hst = $camps - $before;

?>
<table width = "1000" align ="center" cellspacing="0" cellpadding="5">
<tr bgcolor = "#f4f6f6">
<td width = "200" align="center"></td>
<td width = "200" align="center"><b>Quantity</b></td>
<td width = "200" align="center"><b>Before Tax</b></td>
<td width = "200" align="center"><b>Tax (<?php echo $Tax; ?>%)</b></td>
<td width = "200" align="center"><b>After Tax</b></td>



</tr>
<tr>
<td width = "200" align="center" bgcolor = "#f4f6f6"><b>Camps Refunded:</b></td>
<td width = "200" align="center"><?php echo $camps1; ?></td>
<td width = "200" align="center"><?php echo "$ ".number_format($before, 2); ?></td>
<td width = "200" align="center"><?php echo "$ ".number_format($hst, 2); ?></td>
<td width = "200" align="center"><?php echo "$ ".number_format($camps, 2); ?></td>



</tr>
</table><br/>

<br/>
<div class = "buton4" onclick="window.open('reports3.php?go=yes&start=<?php echo $date1; ?>&end=<?php echo $date2; ?>', '_top')">Download CSV File</div>		

<br/><br/>
<table width = "1200" align ="center" cellspacing="0">
<tr bgcolor = "#f4f6f6" height="50">
<td width = "100" align="center"><b>OID</b></td>
<td width = "100" align="center"><b>Date</b></td>
<td width = "100" align="center"><b>Item</b></td>
<td width = "100" align="center"><b>Type</b></td>
<td width = "150" align="center"><b>Class</b></td>
<td width = "50" align="center"><b>Locale</b></td>
<td width = "50" align="center"><b>Card #</b></td>
<td width = "75" align="center"><b>Card Type</b></td>
<td width = "75" align="center"><b>Amount</b></td>
</tr>
<?php

	$a = mysqli_query($db,"SELECT * FROM orders inner join oitems on orders.id = oitems.oid where orders.status = 'complete' and oitems.voiddate >= '$date1' and oitems.voiddate <= '$date2' and oitems.void = 'yes' order by oitems.voiddate desc");                                               
$b = mysqli_num_rows($a);


$i = 0;

while ($i < $b){
	
	$id=mysqli_result($a,$i,"orders.referenceid");
	$amount=mysqli_result($a,$i,"oitems.purchprice");	
	$date=mysqli_result($a,$i,"oitems.voiddate");
	$kiosk=mysqli_result($a,$i,"orders.purchlocation");	
	$cnumb=mysqli_result($a,$i,"orders.cardnumber");
	$ctype=mysqli_result($a,$i,"orders.CardType");
	$itemid=mysqli_result($a,$i,"oitems.itemid");
	$cat=mysqli_result($a,$i,"oitems.cat");
	$void=mysqli_result($a,$i,"orders.void");
$amount = $amount * $Tax2;
	
		if ($cat == 1 or $cat == 4){
$cat = "Ticket";	
}
else if ($cat == 2){
	
	$cat = "Rental";
}
else if ($cat == 5 or $cat == 6){
	
	$cat = "Pass";
}	
	else if ($cat == 7){
	
	$cat = "Camp";
}	
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
<tr  bgcolor = "<?php echo $bgcolor; ?>" style="color:red;">
<td width = "100" align="center"><a href="lookup.php?id=<?php echo $id; ?>"><?php echo $id; ?></a></td>
<td width = "100" align="center"><?php echo $date; ?></td>
<td width = "100" align="center"><?php echo $cat; ?></td>
<td width = "100" align="center"><?php echo $typ[$itemid]; ?></td>
<td width = "150" align="center"><?php echo $idd[$itemid]; ?></td>
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
