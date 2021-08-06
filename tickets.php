

<?php
require("login.php");
//require("userPermissionService.php");
//require("dbase.php");
$de = date('Y-m-d');
?>

<head>
  <meta charset="utf-8">
<title>Botrow - Items</title>

  <link rel="shortcut icon" type="image/png" href="favicon.png">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <style type='text/css'>



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
	
	.buton4 {
		margin: 0px;
		position: relative;
	background-color:#203A81;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:more;
	font-size:18px;
	padding:8px 17px;
	text-decoration:none;
	text-shadow:0px 1px 0px #283966;
	width: 300px;
	text-transform: uppercase;
}

.buton4:active {
	position:relative;
	top:1px;
}

.buton4:hover {
		background-color: #0097ab;
	position:relative;
	top:1px;
}

.btn_disabled{
	position: relative;
	background-color: #474545;
	-moz-border-radius:10px;
	-webkit-border-radius:10px;
	border-radius:10px;
	display:inline-block;
	color: #787171;
	font-family:more;
	font-size:20px;
	padding:8px 17px;
	text-decoration:none;
	text-shadow:0px 1px 0px #283966;
	width: 120px;
	text-transform: uppercase;
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


<table width = "600" align ="center" cellspacing="0" cellpadding="5">
<tr>
	
<?php if(GetUserPermissionsByDescription('Admin') or GetUserPermissionsByDescription('Items_WEEKLY')){ ?>
	<td width = "600" align="center"><a href="weekly.php" class="buton4 w3-center w3-button" >WEEKLY ITEMS</a></td></tr><?php 
}else if(!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('Items_WEEKLY')){ ?>
	<td width = "600" align="center"><a href="#" class="buton4 w3-center w3-button _disabled" >WEEKLY ITEMS</a></td></tr> <?php 
}
?>

<tr>

<?php if(GetUserPermissionsByDescription('Admin') or GetUserPermissionsByDescription('Items_DAILY')){ ?>
	<td width = "600" align="center"><a href="daily.php" class="buton4 w3-center w3-button">DAILY ITEMS</a></td></tr> <?php 
}else if(!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('Items_DAILY')){ ?>
	<td width = "600" align="center"><a href="#" class="buton4 w3-center w3-button _disabled" >DAILY ITEMS</a></td></tr> <?php 
}
?>


<tr>

<?php if(GetUserPermissionsByDescription('Admin') or GetUserPermissionsByDescription('Items_SEASON')){ ?>
	<td width = "600" align="center"><a href="passes.php" class="buton4 w3-center w3-button">SEASON PASSES & CAMPS</a></td></tr> <?php 
}else if(!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('Items_SEASON')){ ?>
	<td width = "600" align="center"><a href="#" class="buton4 w3-center w3-button _disabled" >SEASON PASSES & CAMPS</a></td></tr> <?php 
}
?>


<tr>

<?php if(GetUserPermissionsByDescription('Admin') or GetUserPermissionsByDescription('Items_ENABLEDISABLE')){ ?>
	<td width = "600" align="center"><a href="disable.php" class="buton4 w3-center w3-button">ENABLE/DISABLE ITEMS</a></td></tr> <?php 
}else if(!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('Items_ENABLEDISABLE')){ ?>
	<td width = "600" align="center"><a href="#" class="buton4 w3-center w3-button _disabled" >ENABLE/DISABLE ITEMS</a></td></tr> <?php 
}
?>

<tr>

<?php if(GetUserPermissionsByDescription('Admin') or GetUserPermissionsByDescription('Items_INVENTORY')){ ?>
	<td width = "600" align="center"><a href="inventory.php" class="buton4 w3-center w3-button">INVENTORY</a></td></tr> <?php 
}else if(!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('Items_INVENTORY')){ ?>
	<td width = "600" align="center"><a href="#" class="buton4 w3-center w3-button _disabled" >INVENTORY</a></td></tr> <?php 
}
?>
<tr>

<?php if(GetUserPermissionsByDescription('Admin') or GetUserPermissionsByDescription('Items_RENTALINVENTORY')){ ?>
	<td width = "600" align="center"><a href="rinv.php" class="buton4 w3-center w3-button">RENTAL INVENTORY</a></td></tr> <?php 
}else if(!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('Items_RENTALINVENTORY')){ ?>
	<td width = "600" align="center"><a href="#" class="buton4 w3-center w3-button _disabled" >RENTAL INVENTORY</a></td></tr> <?php 
}
?>

<tr>

<?php if(GetUserPermissionsByDescription('Admin') or GetUserPermissionsByDescription('Items_PROMOCODES')){ ?>
	<td width = "600" align="center"><a href="pcodes.php" class="buton4 w3-center w3-button">PROMO CODES</a></td></tr> <?php 
}else if(!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('Items_PROMOCODES')){ ?>
	<td width = "600" align="center"><a href="#" class="buton4 w3-center w3-button _disabled" >PROMO CODES</a></td></tr> <?php 
}
?>

</table><br/>




</td></tr></table><br/><br/><br/>
</center>
