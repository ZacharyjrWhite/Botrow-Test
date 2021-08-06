

<?php
require("login.php");
//require("dbase.php");
$de = date('Y-m-d');








?>
<head>
  <meta charset="utf-8">
<title>Botrow - Payout</title>

  <link rel="shortcut icon" type="image/png" href="favicon.png">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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

<br/><br/><br/>


<table width = "800" align ="center" cellspacing="0" cellpadding="5">
<tr bgcolor = "#f4f6f6">
<td width = "200" align="center"><b>Accrual Period</b></td>
<td width = "200" align="center"><b>Amount</b></td>
<td width = "200" align="center"><b>Locale</b></td>
<td width = "200" align="center"><b>Status</b></td>



</tr>
<?php

	$cv = mysqli_query($db,"SELECT * from payout order by id desc");                                               
$bv = mysqli_num_rows($cv);

$ry = 0;

while($ry < $bv){
	
	$status=mysqli_result($cv,$ry,"paystatus");	
	$beg=mysqli_result($cv,$ry,"begdate");	
	$end=mysqli_result($cv,$ry,"enddate");		
	$amount=mysqli_result($cv,$ry,"amount");	
		$refunds=mysqli_result($cv,$ry,"refunds");	
				$locale=mysqli_result($cv,$ry,"locale");	
				
				if ($locale == "Web"){
					
					$fee = 0.039;
				}
				else if ($locale == "Kiosk"){
					
					$fee = 0.029;

					
				}


	 $beg = str_replace("-", "/", $beg);
	 $end = str_replace("-", "/", $end);
$period = "$beg - $end";


								$paid=mysqli_result($cv,$ry,"id");	

if ($paid < 14){
$amount = $amount - $refunds;
$fee = $amount * $fee;
$total = $amount - $fee;	
}
else{
$fee = $amount * $fee;
$total = $amount - $fee;
	
		$total = $total - $refunds;

	
}
	
?>
<tr>
<td width = "200" align="center"><?php echo $period; ?></td>
<td width = "200" align="center"><?php echo "$ ".number_format($total, 2); ?></td>
<td width = "200" align="center"><?php echo $locale; ?></td>
<td width = "200" align="center"><?php echo $status; ?></td>



</tr>
<?php
	
	$ry++;
}
?>


</table><br/>




</td></tr></table><br/><br/><br/>
</center>
