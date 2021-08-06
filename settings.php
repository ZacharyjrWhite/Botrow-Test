

<?php
require("login.php");
//require("userPermissionService.php");
//require("dbase.php");
$de = date('Y-m-d');
?>

<head>
  <meta charset="utf-8">
<title>Botrow - Settings</title>

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
	
}

.buton4:hover {
		background-color: #0097ab;
	position:relative;
	
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

.disabled,
.disabled:hover {
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

<?php if(GetUserPermissionsByDescription('Admin') or GetUserPermissionsByDescription('Settings_WAIVER')){ ?>
	<td width = "600" align="center"><a href="waiver.php" class="buton4 w3-center w3-button">WAIVER</a></td></tr><?php 
}else if(!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('Settings_WAIVER')){ ?>
	<td width = "600" align="center"><a href="#" class="buton4 w3-center w3-button disabled" >WAIVER</a></td></tr> <?php 
}
?>

<?php if(GetUserPermissionsByDescription('Admin') or GetUserPermissionsByDescription('Settings_LOCATIONS')){ ?>
	<td width = "600" align="center"><a href="method.php" class="buton4 w3-center w3-button">SELLING LOCATIONS</a></td></tr><?php 
}else if(!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('Settings_LOCATIONS')){ ?>
	<td width = "600" align="center"><a href="#" class="buton4 w3-center w3-button disabled" >SELLING LOCATIONS</a></td></tr> <?php 
}
?>

<?php if(GetUserPermissionsByDescription('Admin')){ ?>
	<td width = "600" align="center"><a href="userManagement.php" class="buton4 w3-center w3-button">USER MANAGEMENT</a></td></tr><?php 
}else if(!GetUserPermissionsByDescription('Admin')){ ?>
	<td width = "600" align="center"><a href="#" class="buton4 w3-center w3-button disabled" >USER MANAGEMENT</a></td></tr> <?php 
}
?>

<?php if(GetUserPermissionsByDescription('Admin') or GetUserPermissionsByDescription('Email_ACCESS')){ ?>
	<td width = "600" align="center"><a href="emailMarketing.php" class="buton4 w3-center w3-button">EMAIL MARKETING</a></td></tr><?php 
}else if(!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('Email_ACCESS')){ ?>
	<td width = "600" align="center"><a href="#" class="buton4 w3-center w3-button disabled" >EMAIL MARKETING</a></td></tr> <?php 
}
?>

</table><br/>




</td></tr></table><br/><br/><br/>
</center>
