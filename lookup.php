

<?php
require("login.php");
//require("userPermissionService.php");
//require("dbase.php");

if(isset($_REQUEST['id'])) {
	$id = $_REQUEST['id'];
}else{
    $id = '';
}

?>

<head>
  <meta charset="utf-8">
  <title>Botrow - Lookup</title>

  <link rel="shortcut icon" type="image/png" href="favicon.png">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="//code.jquery.com/jquery-3.4.1.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="mask.js"></script>

<!------<script src="jquery.ui.touch-punch.min.js"></script>--->

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




	.daa1 {
	
  color: #203A81;
  padding: 10px 10px;
  border: 1px solid #e2e2e2;
  width:100%;
   margin: 5px 0px; 
			font-family:more;
	font-size:14px;
	height: 38px;
		overflow: hidden; 
		

	}	
	

	

	.daa {
	
  color: #203A81;
  padding: 10px 10px;
  border: 1px solid #e2e2e2;
  margin-bottom: 10px;
  width:100%;
			font-family:more;
	font-size:24px;
	height: 48px;
	font-weight: bold;
		overflow: hidden; 
	

	}	

.cool{
	background-color:#203A81;
	color:#ffffff;
	padding:4px 17px;
	font-family:more;
	font-size:25px;
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


 
	.buton3 {
		margin: 0px;
		position: relative;
	background-color: #0097ab;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:more;
	font-size:18px;
	padding:8px 17px;
	text-decoration:none;
	text-shadow:0px 1px 0px #283966;
	width: 50px;
	text-transform: uppercase;
}

.buton3:active {
	position:relative;
	
}

.buton3:hover {
		background-color:#203A81;
	position:relative;
	
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
	width: 75px;
	text-transform: uppercase;
}

.buton4:active {
	position:relative;
	
}

.buton4:hover {
		background-color: #0097ab;
	position:relative;
	
}


	.buton7 {
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
	width: 175px;
	text-transform: uppercase;
}

.buton7:active {
	position:relative;
	
}

.buton7:hover {
		background-color: #0097ab;
	position:relative;
	
}

	.buton8 {
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
	width: 175px;
	text-transform: uppercase;
}

.buton8:active {
	position:relative;
	
}

.buton8:hover {
		background-color: #0097ab;
	position:relative;
	
}
#bground3 {
		background-color:#F8F9F9;
		padding:8px 12px 0;
}


#bground2 {
		background-color:#F8F9F9;
		padding:0 12px;
}

#bground4 {
		padding:0 12px;
}
textarea {
  resize: none;
}

.no-results {
	margin: auto;
    text-align: center;
    font-size: 120%;
    color: rgb(38,34,98);
	width:100%;
}
	
.bx1{
  margin: auto;
  width: 275px;
  font-size: 18px;
}

.bx1 input{

width: 100%;
padding: 5px 7px;


    outline: 0;
    border: none;
    border-bottom: 1px solid #d3d3d3;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    color: rgb(38, 34, 98);
    font-weight: 700;
    line-height: 1.2;
	background-color: #f2f2f2;
		font-family: calibri;

}

.bx1 select{

width: 100%;
padding: 3px;


    outline: 0;
    border: none;
    border-bottom: 1px solid #d3d3d3;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    color: rgb(38, 34, 98);
    font-weight: 700;
    line-height: 1.2;
	background-color: #f2f2f2;
		font-family: calibri;

}

/* Popup box BEGIN */
.hover_bkgr_fricc2{
    background:rgba(0,0,0,.4);
    display:none;
    height:100%;
    position:fixed;
    text-align:center;
    top:0;
	left:0;
    width:100%;
    z-index:10000;
	    overflow:auto;
 -ms-overflow-style: none;  /* IE and Edge */
  scrollbar-width: none;  /* Firefox */
}

.hover_bkgr_fricc2::-webkit-scrollbar {
  display: none;
}


.hover_bkgr_fricc2 .helper{
    display:inline-block;
    height:100%;
    vertical-align:middle;
}
.hover_bkgr_fricc2 > div {
    background-color: #fff;
    box-shadow: 10px 10px 60px #555;
    display: inline-block;
    height: auto;
    max-width: 551px;
    min-height: 300px;
    vertical-align: middle;
    width: 90%;
	margin: 0 0 80px 0;
	top: 40px;
    position: relative;
    border-radius: 8px;
    padding: 15px 5%;
	color: red;
	font-family: "Raleway", sans-serif;
	font-size: 20px;
	font-weight: 600;
	 -webkit-touch-callout: none; /* iOS Safari */
    -webkit-user-select: none; /* Safari */
     -khtml-user-select: none; /* Konqueror HTML */
       -moz-user-select: none; /* Old versions of Firefox */
        -ms-user-select: none; /* Internet Explorer/Edge */
            user-select: none;

}
.popupCloseButton2 {
    background-color: #fff;
    border: 3px solid #999;
    border-radius: 50px;
    cursor: pointer;
    display: inline-block;
    font-family: "Raleway", sans-serif;
    font-weight: bold;
    position: absolute;
    top: -15px;
    right: -15px;
    font-size: 30px;
    line-height: 30px;
    width: 30px;
    height: 30px;
    text-align: center;
}
.popupCloseButton2:hover {
    background-color: #ccc;
}
.trigger_popup_fricc2 {
    cursor: pointer;
    font-size: 20px;
    margin: 20px;
    display: inline-block;
    font-weight: bold;
}


.hover_bkgr_fricc7 {
    background: rgba(0, 0, 0, .4);
    display: none;
    height: 100%;
    position: fixed;
    text-align: center;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 10000;
    overflow: auto;
    -ms-overflow-style: none;
    scrollbar-width: none;
}

.hover_bkgr_fricc7::-webkit-scrollbar {
    display: none;
}

.hover_bkgr_fricc7 .helper {
    display: inline-block;
    height: 100%;
    vertical-align: middle;
}

.hover_bkgr_fricc7>div {
    background-color: #fff;
    box-shadow: 10px 10px 60px #555;
    display: inline-block;
    height: auto;
    max-width: 551px;
    min-height: 300px;
    vertical-align: middle;
    width: 90%;
    margin: 0 0 80px 0;
    top: 40px;
    position: relative;
    border-radius: 8px;
    padding: 15px 5%;
    color: red;
    font-family: "Raleway", sans-serif;
    font-size: 20px;
    font-weight: 600;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.popupCloseButton7 {
    background-color: #fff;
    border: 3px solid #999;
    border-radius: 50px;
    cursor: pointer;
    display: inline-block;
    font-family: "Raleway", sans-serif;
    font-weight: bold;
    position: absolute;
    top: -15px;
    right: -15px;
    font-size: 30px;
    line-height: 30px;
    width: 30px;
    height: 30px;
    text-align: center;
}

.popupCloseButton7:hover {
    background-color: #ccc;
}

.trigger_popup_fricc7 {
    cursor: pointer;
    font-size: 20px;
    margin: 20px;
    display: inline-block;
    font-weight: bold;
}


/* Popup box BEGIN */
.hover_bkgr_fricc3{
    background:rgba(0,0,0,.4);
    display:none;
    height:100%;
    position:fixed;
    text-align:center;
    top:0;
	left:0;
    width:100%;
    z-index:10000;
	    overflow:auto;
 -ms-overflow-style: none;  /* IE and Edge */
  scrollbar-width: none;  /* Firefox */
}

.hover_bkgr_fricc3::-webkit-scrollbar {
  display: none;
}


.hover_bkgr_fricc3 .helper{
    display:inline-block;
    height:100%;
    vertical-align:middle;
}
.hover_bkgr_fricc3 > div {
    background-color: #fff;
    box-shadow: 10px 10px 60px #555;
    display: inline-block;
    height: auto;
    max-width: 1000px;
    min-height: 100px;
    vertical-align: middle;
    width: 90%;
	margin: 0 0 80px 0;
	top: 40px;
    position: relative;
    border-radius: 8px;
    padding: 15px 5%;
	color: red;
	font-family: "Raleway", sans-serif;
	font-size: 20px;
	font-weight: 600;
	 -webkit-touch-callout: none; /* iOS Safari */
    -webkit-user-select: none; /* Safari */
     -khtml-user-select: none; /* Konqueror HTML */
       -moz-user-select: none; /* Old versions of Firefox */
        -ms-user-select: none; /* Internet Explorer/Edge */
            user-select: none;

}
.popupCloseButton3 {
    background-color: #fff;
    border: 3px solid #999;
    border-radius: 50px;
    cursor: pointer;
    display: inline-block;
    font-family: "Raleway", sans-serif;
    font-weight: bold;
    position: absolute;
    top: -15px;
    right: -15px;
    font-size: 30px;
    line-height: 30px;
    width: 30px;
    height: 30px;
    text-align: center;
}
.popupCloseButton3:hover {
    background-color: #ccc;
}
.trigger_popup_fricc3 {
    cursor: pointer;
    font-size: 20px;
    margin: 20px;
    display: inline-block;
    font-weight: bold;
}

	
	.buton5 {
		position: relative;
		background-color:#203A81;
		-moz-border-radius:10px;
		-webkit-border-radius:10px;
		border-radius:10px;
		display:inline-block;
		cursor:pointer;
		color:#ffffff;
		font-family:more;
		font-size:12px;
		padding:8px 17px;
		text-decoration:none;
		text-shadow:0px 1px 0px #283966;
		text-transform: uppercase;
		cursor: pointer;
	}

.buton5:active {
	position:relative;
	
}

.buton5:hover {
		background-color: #0097ab;
	position:relative;
}

	.buton6 {
		position: relative;
	background-color:#203A81;
	-moz-border-radius:10px;
	-webkit-border-radius:10px;
	border-radius:10px;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:more;
	font-size:12px;
	padding:8px 17px;
	text-decoration:none;
	text-shadow:0px 1px 0px #283966;
	text-transform: uppercase;
	width:100px;
}

.buton6:active {
	position:relative;
	
}

.buton6:hover {
		background-color: #0097ab;
	position:relative;
	
}
.bx2{
margin: auto;
  width: 390px;
  font-size: 18px;

}
.bx2 input{

width: 100%;
padding: 0 3px


    outline: 0;
    border: none;
    border-bottom: 1px solid #d3d3d3;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    color: rgb(38, 34, 98);
    font-weight: 700;
    line-height: 1.2;
	background-color: #f2f2f2;
		font-family: calibri;

}

.bx2 textarea{

width: 100%;
padding: 0 3px


    outline: 0;
    border: none;
    border-bottom: 1px solid #d3d3d3;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    color: rgb(38, 34, 98);
    font-weight: 700;
    line-height: 1.2;
	background-color: #f2f2f2;
		font-family: calibri;

}

.bx2 select{

width: 100%;
padding: 0 3px


    outline: 0;
    border: none;
    border-bottom: 1px solid #d3d3d3;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    color: rgb(38, 34, 98);
    font-weight: 700;
    line-height: 1.2;
	background-color: #f2f2f2;
		font-family: calibri;
		height: 35px;

}


.itit{
font-size: 14px; 
overflow:hidden; 
height:32px; 
line-height:16px; 
font-weight:500;
    color: #333333;

  -webkit-text-stroke-width: 1px;
  -webkit-text-stroke-color: #333333;
}

.hlite{
color: white;
    background-color: #203a81;
    border-radius: 5px;
	text-align: center;
	padding: 0 5px 0 5px;
 -webkit-text-stroke-width: 0px;
  -webkit-text-stroke-color: #FFF;
  font-size: 12px; 

}

.hlite3{
color: white;
    background-color: #05b08e;
    border-radius: 5px;
	text-align: center;
	padding: 0 5px 0 5px;
 -webkit-text-stroke-width: 0px;
  -webkit-text-stroke-color: #FFF;
  font-size: 12px; 

}

.hlite2{
color: #203a81;
   
	text-align: left;
 
  font-size: 14px; 
  font-weight: 600;
     display: inline-block;
   width:120px;

}

#msg4 select{

width: 75%;
padding: 0 3px;


    outline: 0;
    border: none;
    border-bottom: 1px solid #d3d3d3;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    color: rgb(38, 34, 98);
    font-weight: 700;
    line-height: 1.2;
	background-color: #f2f2f2;
	font-family: calibri;
		    border-radius: 5px ;

}

/* Popup box BEGIN */
.hover_bkgr_fricc{
    background:rgba(0,0,0,.4);
    display:none;
    height:100%;
    position:fixed;
    text-align:center;
    top:0;
	left:0;
    width:100%;
    z-index:10000;
	    overflow:auto;
 -ms-overflow-style: none;  /* IE and Edge */
  scrollbar-width: none;  /* Firefox */
}

.hover_bkgr_fricc::-webkit-scrollbar {
  display: none;
}


.hover_bkgr_fricc .helper{
    display:inline-block;
    height:100%;
    vertical-align:middle;
}
.hover_bkgr_fricc > div {
    background-color: #fff;
    box-shadow: 10px 10px 60px #555;
    display: inline-block;
    height: auto;
    max-width: 551px;
    min-height: 100px;
    vertical-align: middle;
    width: 90%;
	margin: 0 0 80px 0;
	top: 40px;
    position: relative;
    border-radius: 8px;
    padding: 15px 5%;
	color: red;
	font-family: "Raleway", sans-serif;
	font-size: 20px;
	font-weight: 600;
	 -webkit-touch-callout: none; /* iOS Safari */
    -webkit-user-select: none; /* Safari */
     -khtml-user-select: none; /* Konqueror HTML */
       -moz-user-select: none; /* Old versions of Firefox */
        -ms-user-select: none; /* Internet Explorer/Edge */
            user-select: none;

}
.popupCloseButton {
    background-color: #fff;
    border: 3px solid #999;
    border-radius: 50px;
    cursor: pointer;
    display: inline-block;
    font-family: "Raleway", sans-serif;
    font-weight: bold;
    position: absolute;
    top: -15px;
    right: -15px;
    font-size: 30px;
    line-height: 30px;
    width: 30px;
    height: 30px;
    text-align: center;
}
.popupCloseButton:hover {
    background-color: #ccc;
}
.trigger_popup_fricc {
    cursor: pointer;
    font-size: 20px;
    margin: 20px;
    display: inline-block;
    font-weight: bold;
}
	.daa5 {
	
  color: #203A81;
  padding: 10px 20px;
  border: 1px solid #e2e2e2;
    margin-top: 10px;

  margin-bottom: 10px;
  width:155px;
			font-family:more;
	font-size:24px;
	height: 48px;
	font-weight: bold;
		overflow: hidden; 
	

	}	
	
	.are{
	
	  padding: 8px 8px;

	width: 100px;
	height: 50px;
	  resize: none;

	
}
	.hidden {
    display: none;
}

	.are{
	
	
	width: 100%;
	height: 50px;
	  resize: none;
padding: 0 3px;


    outline: 0;
    border: none;
    border-bottom: 1px solid #d3d3d3;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    color: rgb(38, 34, 98);
    font-weight: 700;
    line-height: 1.2;
	background-color: #f2f2f2;
		font-family: calibri;

	
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

div.npad {
    width: 20px;
    height: 20px;
    background-image: url('notepad.png');
    margin: 0;
    padding: 0;
    cursor: pointer;
}

div.npad1 {
    width: 20px;
    height: 20px;
    background-image: url('notepad-notification.png');
    margin: 0;
    padding: 0;
    cursor: pointer;
}
.are2 {
    width: 300px;
    height: 100px;
    resize: none;
    outline: 0;
    border: none;
    border-bottom: 1px solid #d3d3d3;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    color: rgb(38, 34, 98);
    font-weight: 700;
    line-height: 1.2;
    background-color: #f2f2f2;
    font-family: calibri;
}

.buton88 {
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
	width: 175px;
	text-transform: uppercase;
}

.buton88:active {
	position:relative;
	
}

.buton88:hover {
	background-color:#6D6E70;
	position:relative;
	
}

 </style>
     <script>
$(function () {
  
  $( "#datepicker" ).datepicker(
  {
  minDate: 0,
  onSelect: function(date) {



        }
  }
  );
  
    $( "#age" ).datepicker(
  {
 changeMonth: true,
            changeYear: true,
            yearRange: '-100:+0'
  
  }
  );
  $( "#age2" ).datepicker(
  {
 changeMonth: true,
            changeYear: true,
            yearRange: '-100:+0'
  
  }
  );
  
    $( "#age3" ).datepicker(
  {
 changeMonth: true,
            changeYear: true,
            yearRange: '-100:+0'
  
  }
  );
  
    $( "#age4" ).datepicker(
  {
 changeMonth: true,
            changeYear: true,
            yearRange: '-100:+0'
  
  });
  
});
  </script>
</head>
<body onload="javascript:load('<?php echo $id; ?>')">


<center>

<div id='yo' style="color:gray;" class="hidden">
<table width = "1000"><tr><td align="center">
<img src="logo.png"><br/><br/><br/>
<font size="24"><b>Rental Form</b></font>
</td></tr>

<tr><td>
<br/>
<table width = "750" align="center">
<tr>
<td width="100" height="30" align="left" valign="bottom">Name:</td>
<td width="250" height="30" align="left" style="border-bottom: solid 1px black;"><div id="fname">Colin Costello</div></td>
<td width="50" height="30" align="left"></td>
<td width="250" height="30" align="left" style="border-bottom: solid 1px black;"></td>
<td width="100" height="30" align="left" valign="bottom"></td>

</tr>
<tr>
<td width="100" height="30" align="left" valign="bottom">Address:</td>
<td width="250" height="30" align="left" style="border-bottom: solid 1px black;"><div id="faddress"></div></td>
<td width="50" height="30" align="left"></td>
<td width="250" height="30" align="left" style="border-bottom: solid 1px black;"></td>
<td width="100" height="30" align="left" valign="bottom"></td>

</tr>
<tr>
<td width="100" height="30" align="left" valign="bottom">City:</td>
<td width="250" height="30" align="left" style="border-bottom: solid 1px black;"><div id="fcity"></div></td>
<td width="50" height="30" align="left"></td>
<td width="250" height="30" align="left" style="border-bottom: solid 1px black;"></td>
<td width="100" height="30" align="left" valign="bottom"></td>

</tr>
<tr>
<td width="100" height="30" align="left" valign="bottom">Province:</td>
<td width="250" height="30" align="left" style="border-bottom: solid 1px black;"><div id="fprovince"></div></td>
<td width="50" height="30" align="left"></td>
<td width="250" height="30" align="left" style="border-bottom: solid 1px black;"></td>
<td width="100" height="30" align="left" valign="bottom"></td>

</tr>
<tr>
<td width="100" height="30" align="left" valign="bottom">Country:</td>
<td width="250" height="30" align="left" style="border-bottom: solid 1px black;"><div id="fcountry"></div></td>
<td width="50" height="30" align="left"></td>
<td width="250" height="30" align="left" style="border-bottom: solid 1px black;"></td>
<td width="100" height="30" align="left" valign="bottom"></td>

</tr>
<tr>
<td width="100" height="30" align="left" valign="bottom">Postal:</td>
<td width="250" height="30" align="left" style="border-bottom: solid 1px black;"><div id="fpostal"></div></td>
<td width="50" height="30" align="left"></td>
<td width="250" height="30" align="left" style="border-bottom: solid 1px black;"></td>
<td width="100" height="30" align="left" valign="bottom"></td>

</tr>
<tr>
<td width="100" height="30" align="left" valign="bottom">Phone:</td>
<td width="250" height="30" align="left" style="border-bottom: solid 1px black;"><div id="fphone"></div></td>
<td width="50" height="30" align="left"></td>
<td width="250" height="30" align="left" style="border-bottom: solid 1px black;"></td>
<td width="100" height="30" align="left" valign="bottom"></td>

</tr>


</table>
</td></tr>


<tr><td align="center"><br/><br/>
<table width = "750" align="center">
<tr>
<td width="100" height="30" align="left" valign="bottom">Item:</td>
<td width="250" height="30" align="left" style="border-bottom: solid 1px black;"><div id="fitem"></div></td>
<td width="50" height="30" align="left"></td>
<td width="250" height="30" align="left" style="border-bottom: solid 1px black;"></td>
<td width="100" height="30" align="left" valign="bottom"></td>

</tr>
<tr>
<td width="100" height="30" align="left" valign="bottom">Hardware:</td>
<td width="250" height="30" align="left" style="border-bottom: solid 1px black;"><div id="fhardware"></div></td>
<td width="50" height="30" align="left"></td>
<td width="250" height="30" align="left" style="border-bottom: solid 1px black;"></td>
<td width="100" height="30" align="left" valign="bottom"></td>

</tr>
<tr>
<td width="100" height="30" align="left" valign="bottom">Height:</td>
<td width="250" height="30" align="left" style="border-bottom: solid 1px black;"><div id="fheight"></div></td>
<td width="50" height="30" align="left"></td>
<td width="250" height="30" align="left" style="border-bottom: solid 1px black;"></td>
<td width="100" height="30" align="left" valign="bottom"></td>


</tr>
<tr>
<td width="100" height="30" align="left" valign="bottom">Weight:</td>
<td width="250" height="30" align="left" style="border-bottom: solid 1px black;"><div id="fweight"></div></td>
<td width="50" height="30" align="left"></td>
<td width="250" height="30" align="left" style="border-bottom: solid 1px black;"></td>
<td width="100" height="30" align="left" valign="bottom"></td>

</tr>
<tr>
<td width="100" height="30" align="left" valign="bottom">Shoe Size:</td>
<td width="250" height="30" align="left" style="border-bottom: solid 1px black;"><div id="fshoe"></div></td>
<td width="50" height="30" align="left"></td>
<td width="250" height="30" align="left" style="border-bottom: solid 1px black;"></td>
<td width="100" height="30" align="left" valign="bottom"></td>

</tr>
<tr>
<td width="100" height="30" align="left" valign="bottom">Helmet Size:</td>
<td width="250" height="30" align="left" style="border-bottom: solid 1px black;"><div id="fhelmet"></div></td>
<td width="50" height="30" align="left"></td>
<td width="250" height="30" align="left" style="border-bottom: solid 1px black;"></td>
<td width="100" height="30" align="left" valign="bottom"></td>

</tr>
<tr>
<td width="100" height="30" align="left" valign="bottom">Age:</td>
<td width="250" height="30" align="left" style="border-bottom: solid 1px black;"><div id="fage"></div></td>
<td width="50" height="30" align="left"></td>
<td width="250" height="30" align="left" style="border-bottom: solid 1px black;"></td>
<td width="100" height="30" align="left" valign="bottom"></td>

</tr>
<tr>
<td width="100" height="30" align="left" valign="bottom">Gender:</td>
<td width="250" height="30" align="left" style="border-bottom: solid 1px black;"><div id="fgender"></div></td>
<td width="50" height="30" align="left"></td>
<td width="250" height="30" align="left" style="border-bottom: solid 1px black;"></td>
<td width="100" height="30" align="left" valign="bottom"></td>

</tr>
<tr>
<td width="100" height="30" align="left" valign="bottom">Skier Type:</td>
<td width="250" height="30" align="left" style="border-bottom: solid 1px black;"><div id="fability"></div></td>
<td width="50" height="30" align="left"></td>
<td width="250" height="30" align="left" style="border-bottom: solid 1px black;"></td>
<td width="100" height="30" align="left" valign="bottom"></td>

</tr>
<tr>
<td width="100" height="30" align="left" valign="bottom"><div id="fcustom"></div></td>
<td width="250" height="30" align="left" style="border-bottom: solid 1px black;"><div id="fcustom2"></div></td>
<td width="50" height="30" align="left"></td>
<td width="250" height="30" align="left" style="border-bottom: solid 1px black;"></td>
<td width="100" height="30" align="left" valign="bottom"></td>

</tr>

<tr>
<td width="100" height="30" align="left" valign="bottom">Din:</td>
<td width="250" height="30" align="left" style="border-bottom: solid 1px black;"></td>
<td width="50" height="30" align="left"></td>
<td width="250" height="30" align="left" style="border-bottom: solid 1px black;"></td>
<td width="100" height="30" align="left" valign="bottom"></td>

</tr>

</table>

</td></tr>

<tr><td>
<br/>
<table width = "750" align="center">
<tr>
<td width="100" height="400" align="left" valign="bottom"></td>


</tr>




</table>
</td></tr>

<tr><td>
<br/>
<table width = "950" align="center">
<tr>
<td width="100" height="30" align="left" valign="bottom">Date:</td>
<td width="250" height="30" align="left" style="border-bottom: solid 1px black;"><div id="fdate"></div></td>
<td width="250" height="30" align="left"></td>
<td width="100" height="30" align="left" valign="bottom">Signature:</td>
<td width="250" height="30" align="left" style="border-bottom: solid 1px black;"></td>

</tr>




</table>
</td></tr>


</table>

</div>




<div class="hover_bkgr_fricc3">
    <span class="helper"></span>
    <div>
        <div class="popupCloseButton3">&times;</div>
  <div id='msg4' style="color: #203A81; width:1000px;" class="hidden">


		</div>
    </div>
</div>

    <div class="hover_bkgr_fricc7">
        <span class="helper"></span>
        <div>
            <div class="popupCloseButton7">&times;</div>
            <div id='msg99' style="color: #203A81;">
                <input type="hidden" id="npID">
                <br />
                Notes:
                <br /><br />
                <div class="bx2">
                    <div style="width:99%; align: left;"><textarea style="padding: 10px;" maxlength="500" class="are2"
                            id="np1"></textarea></div>
                </div>
                <div class="bx2" style="padding:0 0 15px 0;">
                    <div class="buton88" id="updatenp" style="top:15px;">Update</div>
                </div>
            </div>
        </div>
    </div>
<div class="hover_bkgr_fricc2">
    <span class="helper"></span>
    <div>
        <div class="popupCloseButton2">&times;</div>
  <div id='msg3' style="color: #203A81;" class="hidden">
<br/>
		User Details:
		<br/><br/>
	<input type="hidden" id="idy">

<div class="bx2"><div style="float:left; width:40%; text-align: left; font-size: 14px; height: 40px; line-height: 35px;">Full Name:</div> <div style="float:left; width:59%; align: left; height: 40px;"><input type="text" id="fullname"></div></div>
<div class="bx2"><div style="float:left; width:40%; text-align: left; font-size: 14px; height: 40px; line-height: 35px;">Mobile Phone:</div> <div style="float:left; width:59%; align: left; height: 40px;"><input type="tel" id="mobile" name="mobile" pattern="^(?:\(\d{3}\)|\d{3})[- ]?\d{3}[- ]?\d{4}$"></div></div>
<div class="bx2"><div style="float:left; width:40%; text-align: left; font-size: 14px; height: 40px; line-height: 35px;">Email:</div> <div style="float:left; width:59%; align: left; height: 40px;"><input type="text" id="email"></div></div>
<div class="bx2"><div style="float:left; width:40%; text-align: left; font-size: 14px; height: 40px; line-height: 35px;">Address:</div> <div style="float:left; width:59%; align: left; height: 40px;"><input type="text" id="address"></div></div>
<div class="bx2"><div style="float:left; width:40%; text-align: left; font-size: 14px; height: 40px; line-height: 35px;">City:</div> <div style="float:left; width:59%; align: left; height: 40px;"><input type="text" id="city"></div></div>
<div class="bx2"><div style="float:left; width:40%; text-align: left; font-size: 14px; height: 40px; line-height: 35px;">Province:</div> <div style="float:left; width:59%; align: left; height: 40px;"><input type="text" id="province"></div></div>
<div class="bx2"><div style="float:left; width:40%; text-align: left; font-size: 14px; height: 40px; line-height: 35px;">Postal Code:</div> <div style="float:left; width:59%; align: left; height: 40px;"><input type="text" id="postal"></div></div>

<div id="mess"style="padding:15px 0 0 0; font-size:14px; color:red;"></div>

<div class="bx2" style="padding:0 0 25px 0;"><div class = "buton1" id = "process"  style="top:15px;">Update</div></div>

		</div>
		
		
		  <div id='msg9' style="color: #203A81;" class="hidden">
<br/>
		Charge Card: <span id="numc"></span>
		<br/><br/>
	<input type="hidden" id="laid">

<div class="bx2"><div style="float:left; width:40%; text-align: left; font-size: 14px; height: 40px; line-height: 35px;">Amount:</div> <div style="float:left; width:59%; align: left; height: 40px;"><input type="text" id="amo"></div></div>
<div class="bx2"><div style="float:left; width:40%; text-align: left; font-size: 14px; height: 40px; line-height: 35px;">Reason:</div> <div style="float:left; width:59%; align: left; height: 40px;"><textarea class="are" id="reason"></textarea></div></div>

<div class="bx2"><div style="float:left; width:100%; text-align: center; font-size: 14px; height: 40px; line-height: 35px;"><div id="mess9"style="padding:20px 0 0 0; font-size:14px; color:red;"></div></div></div>

<div class="bx2" style="padding:0 0 15px 0;"><div class = "buton1" id = "charge"  style="top:15px;">Charge</div></div>

		</div>
		
		
			  <div id='msg10' style="color: green; font-size:25px;" class="hidden">
<br/><br/><br/><br/>
		Transaction Approved!


		</div>
		
		  <div id='msg8' style="color: #203A81;" class="hidden">
<br/>
		Add Card Info:
		<br/><br/>
	
			<input type="hidden" id="caid">

<div class="bx2"><div style="float:left; width:40%; text-align: left; font-size: 14px; height: 40px; line-height: 35px;">Card Number:</div> <div style="float:left; width:59%; align: left; height: 40px;"><input type="text" name="card" id="card" maxlength="19"></div></div>

		<div class="bx2 height" id="f-height"><div style="float:left; width:40%; text-align: left; font-size: 14px; height: 40px; line-height: 35px;">Expiry:</div> <div style="float:left; width:28%; align: left; height: 40px;">
		<select id="month" style="padding: 0 8px;">
    <option disabled selected value></option>
		
		<option>01</option>
		<option>02</option>
		<option>03</option>
		<option>04</option>
		<option>05</option>
		<option>06</option>
		<option>07</option>
		<option>08</option>
		<option>09</option>
		<option>10</option>
		<option>11</option>
		<option>12</option>		
	
		</select>
		
		
		</div>
		
		
		<div style="float:left; width:3%; align: left; height: 40px;">
		
		</div>
		<div style="float:left; width:28%; align: left; height: 40px;">
		<select id="year" style="padding: 0 8px;">
    <option disabled selected value></option>

		<option value="20">2020</option>
		<option value="21">2021</option>
		<option value="22">2022</option>
		<option value="23">2023</option>
		<option value="24">2024</option>
		<option value="25">2025</option>
		<option value="26">2026</option>
		<option value="27">2027</option>
		<option value="28">2028</option>
		<option value="29">2029</option>
		<option value="30">2030</option>

		

		</select>
		</div></div>
		<div class="bx2"><div style="float:left; width:40%; text-align: left; font-size: 14px; height: 40px; line-height: 35px;">CVV:</div><div style="float:left; width:25%; align: left; height: 35px;"></div> <div style="float:left; width:34%; align: left; height: 35px;"><input type="text" name="cvv" id="cvv" maxlength="4"></div></div>

<div class="bx2"><div style="float:left; width:100%; text-align: center; font-size: 14px; height: 40px; line-height: 35px;"><div id="mess2"style="padding:10px 0 0 0; font-size:14px; color:red;"></div></div></div>

<div class="bx2" style="padding:0 0 25px 0;"><div class = "buton1" id = "addcard"  style="top:5px;">Add Card</div></div>

		</div>
		
		
    </div>
</div>
<div class="hover_bkgr_fricc">
    <span class="helper"></span>
    <div>
        <div class="popupCloseButton">&times;</div>
        <div id='msg2' style="color: grey;">
		<input type="hidden" id="myId">
			<input type="hidden" id="fields">
			<input type="hidden" id="ddown">

	
		<p><span id="rif">Rental Info:</span></p>
		<div class="bx1"><div id= "rif2" style="float:left; width:40%; text-align: left; font-size: 14px; height: 35px; line-height: 35px;">Renter's Name:</div> <div style="float:left; width:59%; align: left; height: 35px;"><input type="text" id="fullname2"></div></div>
		<div class="bx1 age hidden"><div style="float:left; width:40%; text-align: left; font-size: 14px; height: 35px; line-height: 35px;">Birth Date:</div> <div style="float:left; width:59%; align: left; height: 35px;"><input type="text" id="age" readonly='true'></div></div>
	
		<div class="bx1 fn2 hidden"><div id="rname" style="float:left; width:40%; text-align: left; font-size: 14px; height: 35px; line-height: 35px;">Passholder 2:</div> <div style="float:left; width:59%; align: left; height: 35px;"><input type="text" id="fullname2b"></div></div>
		<div class="bx1 age2 hidden"><div style="float:left; width:40%; text-align: left; font-size: 14px; height: 35px; line-height: 35px;">Birth Date:</div> <div style="float:left; width:59%; align: left; height: 35px;"><input type="text" id="age2" readonly='true'></div></div>

		<div class="bx1 fn3 hidden"><div id="rname" style="float:left; width:40%; text-align: left; font-size: 14px; height: 35px; line-height: 35px;">Passholder 3:</div> <div style="float:left; width:59%; align: left; height: 35px;"><input type="text" id="fullname3"></div></div>
		<div class="bx1 age3 hidden"><div style="float:left; width:40%; text-align: left; font-size: 14px; height: 35px; line-height: 35px;">Birth Date:</div> <div style="float:left; width:59%; align: left; height: 35px;"><input type="text" id="age3" readonly='true'></div></div>

		<div class="bx1 fn4 hidden"><div id="rname" style="float:left; width:40%; text-align: left; font-size: 14px; height: 35px; line-height: 35px;">Passholder 4:</div> <div style="float:left; width:59%; align: left; height: 35px;"><input type="text" id="fullname4"></div></div>
		<div class="bx1 age4 hidden"><div style="float:left; width:40%; text-align: left; font-size: 14px; height: 35px; line-height: 35px;">Birth Date:</div> <div style="float:left; width:59%; align: left; height: 35px;"><input type="text" id="age4" readonly='true'></div></div>
			


	<div class="bx1 weight hidden"><div style="float:left; width:40%; text-align: left; font-size: 14px; height: 35px; line-height: 35px;">Weight (lbs):</div> <div style="float:left; width:59%; align: left; height: 35px;"><input type="text" id="weight"></div></div>
		<div class="bx1 height hidden" id="f-height"><div style="float:left; width:40%; text-align: left; font-size: 14px; height: 35px; line-height: 35px;">Height:</div> <div style="float:left; width:28%; align: left; height: 35px;">
		<select id="feet">
    <option disabled selected value></option>
		
		<option value='2'>2'</option>
		<option value='3'>3'</option>
		<option value='4'>4'</option>
		<option value='5'>5'</option>
		<option value='6'>6'</option>
		<option value='7'>7'</option>
		<option value='8'>8'</option>
	
		</select>
		
		
		</div>
		
		
		<div style="float:left; width:3%; align: left; height: 35px;">
		
		</div>
		<div style="float:left; width:28%; align: left; height: 35px;">
		<select id="inches">
    <option disabled selected value></option>
		<option value='0'>0"</option>
		<option value='1'>1"</option>
		<option value='2'>2"</option>
		<option value='3'>3"</option>
		<option value='4'>4"</option>
		<option value='5'>5"</option>
		<option value='6'>6"</option>
		<option value='7'>7"</option>
		<option value='8'>8"</option>
		<option value='9'>9"</option>
		<option value='10'>10"</option>		
		<option value='11'>11"</option>	
		</select>
		</div></div>
		<div class="bx1 sex hidden" ><div style="float:left; width:40%; text-align: left; font-size: 14px; height: 35px; line-height: 35px;">Gender:</div> <div style="float:left; width:59%; align: left; height: 35px;">
		
		<select id="sex">
    <option disabled selected value></option>
		<option>Female</option>
		<option>Male</option>
		<option>Other</option>
	
		</select>		
		</div></div>
		<div class="bx1 equip hidden" ><div style="float:left; width:40%; text-align: left; font-size: 14px; height: 35px; line-height: 35px;">Equipment:</div> <div style="float:left; width:59%; align: left; height: 35px;">
		<select id="equip">
    <option disabled selected value></option>
		<option>Skis</option>
		<option>Snowboard</option>
		<option>Snowblades</option>
	
		</select>			
		
		</div></div>
		<div class="bx1 shoe hidden" ><div style="float:left; width:40%; text-align: left; font-size: 14px; height: 35px; line-height: 35px;">Shoe Size:</div> <div style="float:left; width:28%; align: left; height: 35px;">
		<select id="shoe1">
    <option disabled selected value></option>
		
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>4.5</option>
		<option>5</option>
		<option>5.5</option>
		<option>6</option>
		<option>6.5</option>
		<option>7</option>
		<option>7.5</option>
		<option>8</option>
		<option>8.5</option>
		<option>9</option>
		<option>9.5</option>
		<option>10</option>
		<option>10.5</option>
		<option>11</option>
		<option>11.5</option>
		<option>12</option>
		<option>12.5</option>
		<option>13</option>
		<option>13.5</option>
		<option>14</option>
		<option>14.5</option>
		<option>15</option>
		<option>15.5</option>
		<option>16</option>		
		</select>
		
		
		</div>
		
		
		<div style="float:left; width:3%; align: left; height: 35px;">
		
		</div>
		<div style="float:left; width:28%; align: left; height: 35px;">
		<select id="shoe2">
    <option disabled selected value></option>
		<option>Mens</option>
		<option>Womens</option>
		<option>Kids</option>	
		</select>
		</div></div>
		<div class="bx1 helmet hidden" ><div style="float:left; width:40%; text-align: left; font-size: 14px; height: 35px; line-height: 35px;">Helmet Size:</div> <div style="float:left; width:59%; align: left; height: 35px;">
			<select id="helmet">
    <option disabled selected value></option>
		<option>Small</option>
		<option>Medium</option>
		<option>Large</option>	
		</select>
		
		</div></div>
		<div class="bx1 ability hidden" ><div style="float:left; width:40%; text-align: left; font-size: 14px; height: 35px; line-height: 35px;">Skier Type:</div> <div style="float:left; width:59%; align: left; height: 35px;">
				<select id="ability">
    <option disabled selected value></option>
<option>Type 1</option>
<option>Type 2</option>
<option>Type 3</option>
	
		</select>	
		</div></div>
				<div id="drop"></div>
				<div class="bx1 notes hidden"><div style="float:left; width:40%; text-align: left; font-size: 14px; height: 35px; line-height: 35px;">Notes <span style="font-size:10px;">(optional)</span> :</div> <div style="float:left; width:59%; align: left; height: 60px;"><textarea class="are" id="notes"></textarea></div></div>

<div class="bx1" style="padding:25px;"><div class = "buton4" id = "add2"  style="top:15px">Update</div></div>
		</div>
		<div id='msg5' style="color: grey;">
				<input type="hidden" id="Rid">
<br/>
		Are you sure you want to refund this item?
		<div id="mes"style="padding:15px 0 0 0; font-size:14px; color:red;"></div>
		<div class="bx1" style="padding: 0 0 25px 0;"><div class = "buton7" id = "rid2"  style="top:15px">Process Refund</div></div>
		</div>
				<div id='msg6' style="color: grey;">
				<input type="hidden" id="Cid">
<br/>
		Select a new date to change day item can be redeemed!
		<br/>
		 <input type="text" class="daa5" id="datepicker" readonly='true' placeholder="Select Date">
		<div id="me"style="padding:0 0 0 0; font-size:10px; color:red;">(Leave date empty and customer can redeem anyday)</div>
		<div class="bx1" style="padding: 0 0 25px 0;"><div class = "buton8" id = "rid3"  style="top:15px">Change Date</div></div>
		</div>
						<div id='msg7' style="color: red;">
<br/>
		Failed: You must first edit the users details to include a name, email, and mobile number!
		</div>
    </div>
</div>

<table align="center" width="1200"><tr><td align="center">

<?php require("pageHeader.php"); ?>

<br/><br/>
<table border = "0" width = "400" cellspacing = "0" align="center">
<tr>
<td width = "400" align="center">
<p>
<input type="text" class="daa" id="sear" placeholder="Search" autocomplete="off">
<div style="font-size: 12px; color: #203A81;"> Search By Name, OID, Phone, Email or Card (First 4 Digits, space, Last 4 Digits)</div>
</p>
</td>
</tr>
</table>
</td></tr></table><br/>
<table width="1200" class="cool" align="center"><tr><td align="center"><font face="more" size="6"><b>Results: <span id="count">0</span></b></font>
</td></tr></table>
<div id="items" style="width:1200px;";></div>
</center>
<br/><br/><br/><br/><br/>
</body>
<script type = "text/javascript" >
    $('.popupCloseButton2').click(function () {
        $('.hover_bkgr_fricc2').hide();
    });

$('.popupCloseButton7').click(function () {
    $('.hover_bkgr_fricc7').hide();
});

$('.popupCloseButton3').click(function () {
    $('.hover_bkgr_fricc3').hide();
});

$('.popupCloseButton').click(function () {
    $('.hover_bkgr_fricc').hide();
});

function items(id) {

    var dataString = {
        id: id
    };

    $.ajax({
        type: "POST",
        url: 'order.php?',
        data: dataString,
        crossDomain: true,
        cache: false,
        dataType: 'json',
        success: function (data) {
            var te = data.length;
            $('#msg4').html('<br/>Order Items:<br/><br/>');
            if (data[0].stop == 'yes') {
                location.reload();
            }
            if (data[0].stop == 'stay') {
                $('#msg4').append('<br/>No Order Items!<br/><br/>');
            } else {
                var t = 1;
                while (t < te) {
                    var id = data[t].id;
                    var title = data[t].title;
                    var type = data[t].type;
                    var description = data[t].description;
                    var vaft = data[t].vaft;
                    var vbef = data[t].vbef;
                    var price = data[t].price;
                    var cat = data[t].cat;
                    var redeemdate = data[t].redeemdate;
                    var voi = data[t].voi;
                    var loca = data[t].loca;
                    var print = data[t].print;

                    if (cat == 1 || cat == 4) {
                        var tcat = "Ticket";
                    } else if (cat == 2) {
                        var tcat = "Rental";
                        var fullname = data[t].fullname;
                    } else if (cat == 5) {
                        var tcat = "Pass";
                        var fullname = data[t].fullname;
                    } else if (cat == 6) {
                        var tcat = "Family Pass";
                        var fullname = data[t].fullname;
                    } else if (cat == 7) {
                        var tcat = "Camp";
                        var fullname = data[t].fullname;
                    }
                    if (t % 2 == 0) {
                        var color = "#d8e0ed";
                    } else {
                        var color = "#F2F2F2";
                    }
                    var html = "";
                    if (cat == 2) {
                        html += '<div style="background-color: ' + color + '; overflow:hidden; height:75px;">';
                        html += '<div style="float:left; width: 40%; height: 100%; overflow:hidden; text-align:left; padding: 5px 0 5px 10px;">';
                        html += '<div class="itit" title="' + tcat + ' ' + title + ' - ' + type + '"><span class="hlite">' + tcat + '</span> <span class="hlite3">' + fullname + '</span> ' + title + ' - ' + type + '</div>';
                        html += '<div title="' + description + '" style="font-size: 12px; height:14px; line-height:14px; overflow:hidden; font-weight:600; color:#595959;">' + description + '</div>';
                        html += '<div title="' + redeemdate + ' ' + vaft + ' - ' + vbef + '" style="font-size: 12px; height:14px; line-height:14px; overflow:hidden; color:#808080; font-weight:600;"><span class="hlite2" id="RD' + id + '">Valid: ' + redeemdate + '</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' + vaft + ' - ' + vbef + '</div>';
                        html += '</div>';
                        html += '<div id="P' + id + '" style="float:left; width: 10%; height: 100%; text-align: center; overflow:hidden; padding: 25px 0 20px 0; ">';
                        html += '$' + price + '';
                        html += '</div>';
                        html += '<div style="float:left; width: 15%; height: 100%; text-align: center; overflow:hidden; ">';
                        
                        <?php if (GetUserPermissionsByDescription('Admin') || GetUserPermissionsByDescription('ItemInfo_ACCESS')) {
                            ?> html += '<div style="font-size: 10px; overflow:hidden; height:37.5px; padding: 3px 0 0 0; "><div id="RE' + id + '" class = "buton6" onclick="javascript:rental(' + id + ', 2);">Rental Info</div></div>';
                            <?php
                        } elseif (!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('ItemInfo_ACCESS')) {
                            ?> html += '<div style="font-size: 10px; overflow:hidden; height:37.5px; padding: 3px 0 0 0; "><div id="RE' + id + '" class = "buton6 disabled">Rental Info</div></div>';
                            <?php
                        }
                        ?>

                        <?php if (GetUserPermissionsByDescription('Admin') || GetUserPermissionsByDescription('PrintWaiver_ACCESS')) {
                            ?> html += '<div style="font-size: 10px; overflow:hidden; height:37.5px; padding: 0 0 0 0; "><div id="PR' + id + '" class = "buton6" onclick="javascript:print(' + id + ');">Print</div></div>';
                            <?php
                        } elseif (!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('PrintWaiver_ACCESS')) {
                            ?> html += '<div style="font-size: 10px; overflow:hidden; height:37.5px; padding: 0 0 0 0; "><div id="PR' + id + '" class = "buton6 disabled">Print</div></div>';
                            <?php
                        }
                        ?>                      
                        
                        html += '</div>';
                        html += '<div style="float:left; width: 15%; height: 100%; text-align: center; overflow:hidden; ">';

                        <?php if (GetUserPermissionsByDescription('Admin') || GetUserPermissionsByDescription('Refund_ACCESS')) {
                            ?> html += '<div style="font-size: 10px; overflow:hidden; height:37.5px; padding: 3px 0 0 0; "><div id="R' + id + '" class = "buton6" onclick="javascript:refund(' + id + ');">Refund Item</div></div>';
                            <?php
                        } elseif (!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('Refund_ACCESS')) {
                            ?> html += '<div style="font-size: 10px; overflow:hidden; height:37.5px; padding: 3px 0 0 0; "><div id="R' + id + '" class = "buton6 disabled">Refund Item</div></div>';
                            <?php
                        }
                        ?>  

                        <?php if (GetUserPermissionsByDescription('Admin') || GetUserPermissionsByDescription('ChangeDate_ACCESS')) {
                            ?> html += '<div style="font-size: 10px; overflow:hidden; height:37.5px; padding: 0 0 0 0; "><div id="C' + id + '" class = "buton6" onclick="javascript:change(' + id + ');">Change Date</div></div>';
                            <?php
                        } elseif (!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('ChangeDate_ACCESS')) {
                            ?> html += '<div style="font-size: 10px; overflow:hidden; height:37.5px; padding: 0 0 0 0; "><div id="C' + id + '" class = "buton6 disabled">Change Date</div></div>';
                            <?php
                        }
                        ?> 
                        
                        
                        
                        html += '</div>';
						html += '<div style="float:left; width: 2%; height: 100%; text-align: center; overflow:hidden; padding: 25px 0 20px 10px; ">';
						if(data[t].ItemNotes == ""){
						html += '<div id="NO'+ id +'" class = "npad" onclick="javascript:notep('+ id +');"></div>';	
						}else{
						html += '<div id="NO'+ id +'" class = "npad1" onclick="javascript:notep('+ id +');"></div>';
						}
						html += '</div>';
                        html += '<div id="S' + id + '" style="float:right; width: 15%; height: 100%; text-align: center; overflow:hidden; padding: 25px 0 20px 0; background-color: #fa3025; margin-top: 1px; margin-bottom: 1px;">';
                        html += '<select class="status" id="D' + id + '" name="' + id + '">';
                        html += '<option value="0">Ordered</option>';
                        html += '<option value="1">Prepared</option>';
                        html += '<option value="2">Picked Up</option>';
                        html += '<option value="3">Returned</option>';
                        html += '</select>';
                        html += '</div>';
                        html += '</div>';
                    } else if (cat == 5) {
                        html += '<div style="background-color: ' + color + '; overflow:hidden; height:75px;">';
                        html += '<div style="float:left; width: 40%; height: 100%; overflow:hidden; text-align:left; padding: 5px 0 5px 10px;">';
                        html += '<div class="itit" title="' + tcat + ' ' + title + ' - ' + type + '"><span class="hlite">' + tcat + '</span> <span class="hlite3">' + fullname + '</span> ' + title + ' - ' + type + '</div>';
                        html += '<div title="' + description + '" style="font-size: 12px; height:28px; line-height:14px; overflow:hidden; font-weight:600; color:#595959;">' + description + '</div>';
                        html += '</div>';
                        html += '<div id="P' + id + '" style="float:left; width: 10%; height: 100%; text-align: center; overflow:hidden; padding: 25px 0 20px 0; ">';
                        html += '$' + price + '';
                        html += '</div>';
                        html += '<div style="float:left; width: 15%; height: 100%; text-align: center; overflow:hidden; padding: 20px 0 20px 0; ">';

                        <?php if (GetUserPermissionsByDescription('Admin') || GetUserPermissionsByDescription('ItemInfo_ACCESS')) {
                            ?> html += '<div style="font-size: 10px; overflow:hidden; padding: 3px 0 0 0; "><div id="RE' + id + '" class = "buton6" onclick="javascript:rental(' + id + ', 5);">Pass Info</div></div>';
                            <?php
                        } elseif (!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('ItemInfo_ACCESS')) {
                            ?> html += '<div style="font-size: 10px; overflow:hidden; padding: 3px 0 0 0; "><div id="RE' + id + '" class = "buton6 disabled">Pass Info</div></div>';
                            <?php
                        }
                        ?>

                        
                        html += '</div>';
                        html += '<div style="float:left; width: 15%; height: 100%; text-align: center; overflow:hidden; ">';
                        
                        <?php if (GetUserPermissionsByDescription('Admin') || GetUserPermissionsByDescription('Refund_ACCESS')) {
                            ?> html += '<div style="font-size: 10px; overflow:hidden; height:37.5px; padding: 3px 0 0 0; "><div id="R' + id + '" class = "buton6" onclick="javascript:refund(' + id + ');">Refund Item</div></div>';
                            <?php
                        } elseif (!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('Refund_ACCESS')) {
                            ?> html += '<div style="font-size: 10px; overflow:hidden; height:37.5px; padding: 3px 0 0 0; "><div id="R' + id + '" class = "buton6 disabled">Refund Item</div></div>';
                            <?php
                        }
                        ?>  
                        
                        <?php if (GetUserPermissionsByDescription('Admin') || GetUserPermissionsByDescription('ChangeDate_ACCESS')) {
                            ?> html += '<div style="font-size: 10px; overflow:hidden; height:37.5px; padding: 0 0 0 0; "><div id="C' + id + '" class = "buton6" onclick="javascript:change(' + id + ');">Change Date</div></div>';
                            <?php
                        } elseif (!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('ChangeDate_ACCESS')) {
                            ?> html += '<div style="font-size: 10px; overflow:hidden; height:37.5px; padding: 0 0 0 0; "><div id="C' + id + '" class = "buton6 disabled">Change Date</div></div>';
                            <?php
                        }
                        ?> 

                        
                        
                        
                        html += '</div>';
						html += '<div style="float:left; width: 2%; height: 100%; text-align: center; overflow:hidden; padding: 25px 0 20px 10px; ">';
						if(data[t].ItemNotes == ""){
						html += '<div id="NO'+ id +'" class = "npad" onclick="javascript:notep('+ id +');"></div>';	
						}else{
						html += '<div id="NO'+ id +'" class = "npad1" onclick="javascript:notep('+ id +');"></div>';
						}
						html += '</div>';
                        html += '<div id="S' + id + '" style="float:right; width: 15%; height: 100%; text-align: center; overflow:hidden; padding: 25px 0 20px 0; background-color: #fa3025; margin-top: 1px; margin-bottom: 1px;">';
                        html += '<select class="status" id="D' + id + '" name="' + id + '">';
                        html += '<option value="0">Ordered</option>';
                        html += '<option value="2">Picked Up</option>';
                        html += '</select>';
                        html += '</div>';
                        html += '</div>';
                    } else if (cat == 6) {
                        html += '<div style="background-color: ' + color + '; overflow:hidden; height:75px;">';
                        html += '<div style="float:left; width: 40%; height: 100%; overflow:hidden; text-align:left; padding: 5px 0 5px 10px;">';
                        html += '<div class="itit" title="' + tcat + ' ' + title + ' - ' + type + '"><span class="hlite">' + tcat + '</span> <span class="hlite3">' + fullname + '</span> ' + title + ' - ' + type + '</div>';
                        html += '<div title="' + description + '" style="font-size: 12px; height:28px; line-height:14px; overflow:hidden; font-weight:600; color:#595959;">' + description + '</div>';
                        html += '</div>';
                        html += '<div id="P' + id + '" style="float:left; width: 10%; height: 100%; text-align: center; overflow:hidden; padding: 25px 0 20px 0; ">';
                        html += '$' + price + '';
                        html += '</div>';
                        html += '<div style="float:left; width: 15%; height: 100%; text-align: center; overflow:hidden; padding: 20px 0 20px 0; ">';

                        <?php if (GetUserPermissionsByDescription('Admin') || GetUserPermissionsByDescription('ItemInfo_ACCESS')) {
                            ?> html += '<div style="font-size: 10px; overflow:hidden; padding: 3px 0 0 0; "><div id="RE' + id + '" class = "buton6" onclick="javascript:rental(' + id + ', 6);">Pass Info</div></div>';
                            <?php
                        } elseif (!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('ItemInfo_ACCESS')) {
                            ?> html += '<div style="font-size: 10px; overflow:hidden; padding: 3px 0 0 0; "><div id="RE' + id + '" class = "buton6 disabled">Pass Info</div></div>';
                            <?php
                        }
                        ?>

                        
                        html += '</div>';
                        html += '<div style="float:left; width: 15%; height: 100%; text-align: center; overflow:hidden; ">';
                        
                        <?php if (GetUserPermissionsByDescription('Admin') || GetUserPermissionsByDescription('Refund_ACCESS')) {
                            ?> html += '<div style="font-size: 10px; overflow:hidden; height:37.5px; padding: 3px 0 0 0; "><div id="R' + id + '" class = "buton6" onclick="javascript:refund(' + id + ');">Refund Item</div></div>';
                            <?php
                        } elseif (!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('Refund_ACCESS')) {
                            ?> html += '<div style="font-size: 10px; overflow:hidden; height:37.5px; padding: 3px 0 0 0; "><div id="R' + id + '" class = "buton6 disabled">Refund Item</div></div>';
                            <?php
                        }
                        ?>  
                        
                        <?php if (GetUserPermissionsByDescription('Admin') || GetUserPermissionsByDescription('ChangeDate_ACCESS')) {
                            ?> html += '<div style="font-size: 10px; overflow:hidden; height:37.5px; padding: 0 0 0 0; "><div id="C' + id + '" class = "buton6" onclick="javascript:change(' + id + ');">Change Date</div></div>';
                            <?php
                        } elseif (!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('ChangeDate_ACCESS')) {
                            ?> html += '<div style="font-size: 10px; overflow:hidden; height:37.5px; padding: 0 0 0 0; "><div id="C' + id + '" class = "buton6 disabled">Change Date</div></div>';
                            <?php
                        }
                        ?> 
                        
                        
                        
                        html += '</div>';
						html += '<div style="float:left; width: 2%; height: 100%; text-align: center; overflow:hidden; padding: 25px 0 20px 10px; ">';
						if(data[t].ItemNotes == ""){
						html += '<div id="NO'+ id +'" class = "npad" onclick="javascript:notep('+ id +');"></div>';	
						}else{
						html += '<div id="NO'+ id +'" class = "npad1" onclick="javascript:notep('+ id +');"></div>';
						}
						html += '</div>';
                        html += '<div id="S' + id + '" style="float:right; width: 15%; height: 100%; text-align: center; overflow:hidden; padding: 25px 0 20px 0; background-color: #fa3025; margin-top: 1px; margin-bottom: 1px;">';
                        html += '<select class="status" id="D' + id + '" name="' + id + '">';
                        html += '<option value="0">Ordered</option>';
                        html += '<option value="2">Picked Up</option>';
                        html += '</select>';
                        html += '</div>';
                        html += '</div>';
                    } else if (cat == 7) {
                        html += '<div style="background-color: ' + color + '; overflow:hidden; height:75px;">';
                        html += '<div style="float:left; width: 40%; height: 100%; overflow:hidden; text-align:left; padding: 5px 0 5px 10px;">';
                        html += '<div class="itit" title="' + tcat + ' ' + title + ' - ' + type + '"><span class="hlite">' + tcat + '</span> <span class="hlite3">' + fullname + '</span> ' + title + ' - ' + type + '</div>';
                        html += '<div title="' + description + '" style="font-size: 12px; height:28px; line-height:14px; overflow:hidden; font-weight:600; color:#595959;">' + description + '</div>';
                        html += '</div>';
                        html += '<div id="P' + id + '" style="float:left; width: 10%; height: 100%; text-align: center; overflow:hidden; padding: 25px 0 20px 0; ">';
                        html += '$' + price + '';
                        html += '</div>';
                        html += '<div style="float:left; width: 15%; height: 100%; text-align: center; overflow:hidden; padding: 20px 0 20px 0; ">';

                        <?php if (GetUserPermissionsByDescription('Admin') || GetUserPermissionsByDescription('ItemInfo_ACCESS')) {
                            ?> html += '<div style="font-size: 10px; overflow:hidden; padding: 3px 0 0 0; "><div id="RE' + id + '" class = "buton6" onclick="javascript:rental(' + id + ', 7);">Camp Info</div></div>';
                            <?php
                        } elseif (!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('ItemInfo_ACCESS')) {
                            ?> html += '<div style="font-size: 10px; overflow:hidden; padding: 3px 0 0 0; "><div id="RE' + id + '" class = "buton6 disabled">Camp Info</div></div>';
                            <?php
                        }
                        ?>
                        
                        html += '</div>';
                        html += '<div style="float:left; width: 15%; height: 100%; text-align: center; overflow:hidden; ">';
                        
                        <?php if (GetUserPermissionsByDescription('Admin') || GetUserPermissionsByDescription('Refund_ACCESS')) {
                            ?> html += '<div style="font-size: 10px; overflow:hidden; height:37.5px; padding: 3px 0 0 0; "><div id="R' + id + '" class = "buton6" onclick="javascript:refund(' + id + ');">Refund Item</div></div>';
                            <?php
                        } elseif (!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('Refund_ACCESS')) {
                            ?> html += '<div style="font-size: 10px; overflow:hidden; height:37.5px; padding: 3px 0 0 0; "><div id="R' + id + '" class = "buton6 disabled">Refund Item</div></div>';
                            <?php
                        }
                        ?>  
                        
                        <?php if (GetUserPermissionsByDescription('Admin') || GetUserPermissionsByDescription('ChangeDate_ACCESS')) {
                            ?> html += '<div style="font-size: 10px; overflow:hidden; height:37.5px; padding: 0 0 0 0; "><div id="C' + id + '" class = "buton6" onclick="javascript:change(' + id + ');">Change Date</div></div>';
                            <?php
                        } elseif (!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('ChangeDate_ACCESS')) {
                            ?> html += '<div style="font-size: 10px; overflow:hidden; height:37.5px; padding: 0 0 0 0; "><div id="C' + id + '" class = "buton6 disabled">Change Date</div></div>';
                            <?php
                        }
                        ?> 
                        
                        
                        
                        html += '</div>';
						html += '<div style="float:left; width: 2%; height: 100%; text-align: center; overflow:hidden; padding: 25px 0 20px 10px; ">';
						if(data[t].ItemNotes == ""){
						html += '<div id="NO'+ id +'" class = "npad" onclick="javascript:notep('+ id +');"></div>';	
						}else{
						html += '<div id="NO'+ id +'" class = "npad1" onclick="javascript:notep('+ id +');"></div>';
						}
						html += '</div>';
                        html += '<div id="S' + id + '" style="float:right; width: 15%; height: 100%; text-align: center; overflow:hidden; padding: 25px 0 20px 0; background-color: #fa3025; margin-top: 1px; margin-bottom: 1px;">';
                        html += '<select class="status" id="D' + id + '" name="' + id + '">';
                        html += '<option value="0">Ordered</option>';
                        html += '<option value="2">Picked Up</option>';
                        html += '</select>';
                        html += '</div>';
                        html += '</div>';
                    } else {
                        html += '<div style="background-color: ' + color + '; overflow:hidden; height:75px;">';
                        html += '<div style="float:left; width: 40%; height: 100%; overflow:hidden; text-align:left; padding: 5px 0 5px 10px;">';
                        html += '<div class="itit" title="' + tcat + ' ' + title + ' - ' + type + '"><span class="hlite">' + tcat + '</span> ' + title + ' - ' + type + '</div>';
                        html += '<div title="' + description + '" style="font-size: 12px; height:14px; line-height:14px; overflow:hidden; font-weight:600; color:#595959;">' + description + '</div>';
                        html += '<div title="' + redeemdate + ' ' + vaft + ' - ' + vbef + '" style="font-size: 12px; height:14px; line-height:14px; overflow:hidden; color:#808080; font-weight:600;"><span class="hlite2" id="RD' + id + '">Valid: ' + redeemdate + '</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' + vaft + ' - ' + vbef + '</div>';
                        html += '</div>';
                        html += '<div id="P' + id + '" style="float:left; width: 10%; height: 100%; text-align: center; overflow:hidden; padding: 25px 0 20px 0;">';
                        html += '$' + price + '';
                        html += '</div>';
                        html += '<div style="float:left; width: 15%; height: 100%; text-align: center; overflow:hidden; padding: 25px 0 20px 0; ">';
                        html += '</div>';
                        html += '<div style="float:left; width: 15%; height: 100%; text-align: center; overflow:hidden; ">';
                        
                        <?php if (GetUserPermissionsByDescription('Admin') || GetUserPermissionsByDescription('Refund_ACCESS')) {
                            ?> html += '<div style="font-size: 10px; overflow:hidden; height:37.5px; padding: 3px 0 0 0; "><div id="R' + id + '" class = "buton6" onclick="javascript:refund(' + id + ');">Refund Item</div></div>';
                            <?php
                        } elseif (!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('Refund_ACCESS')) {
                            ?> html += '<div style="font-size: 10px; overflow:hidden; height:37.5px; padding: 3px 0 0 0; "><div id="R' + id + '" class = "buton6 disabled">Refund Item</div></div>';
                            <?php
                        }
                        ?>  
                        
                        <?php if (GetUserPermissionsByDescription('Admin') || GetUserPermissionsByDescription('ChangeDate_ACCESS')) {
                            ?> html += '<div style="font-size: 10px; overflow:hidden; height:37.5px; padding: 0 0 0 0; "><div id="C' + id + '" class = "buton6" onclick="javascript:change(' + id + ');">Change Date</div></div>';
                            <?php
                        } elseif (!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('ChangeDate_ACCESS')) {
                            ?> html += '<div style="font-size: 10px; overflow:hidden; height:37.5px; padding: 0 0 0 0; "><div id="C' + id + '" class = "buton6 disabled">Change Date</div></div>';
                            <?php
                        }
                        ?> 
                        
                        
                        
                        html += '</div>';
						html += '<div style="float:left; width: 2%; height: 100%; text-align: center; overflow:hidden; padding: 25px 0 20px 10px; ">';
						if(data[t].ItemNotes == ""){
						html += '<div id="NO'+ id +'" class = "npad" onclick="javascript:notep('+ id +');"></div>';	
						}else{
						html += '<div id="NO'+ id +'" class = "npad1" onclick="javascript:notep('+ id +');"></div>';
						}
						html += '</div>';
                        html += '<div id="S' + id + '" style="float:right; width: 15%; height: 100%; text-align: center; overflow:hidden; padding: 25px 0 20px 0; background-color: #fa3025; margin-top: 1px; margin-bottom: 1px;">';
                        html += '<select class="status" id="D' + id + '" name="' + id + '">';
                        html += '<option value="0">Ordered</option>';
                        html += '<option value="2">Picked Up</option>';
                        html += '</select>';
                        html += '</div>';
                        html += '</div>';
                    }

                    $('#msg4').append(html);

                    if (print == 0) {
                        $('#D' + id + '').val('0');
                        $('#S' + id + '').css('background-color', '#fa3025');
                    }
                    if (print == 1) {
                        $('#D' + id + '').val('1');
                        $('#S' + id + '').css('background-color', '#FFC300');
                    }
                    if (print == 2) {
                        $('#D' + id + '').val('2');
                        $('#S' + id + '').css('background-color', '#45c23c');
                    }
                    if (print == 3) {
                        $('#D' + id + '').val('3');
                        $('#S' + id + '').css('background-color', '#a947f5');
                    }

                    if (cat == 5 || cat == 6 || cat == 7) {
                        $('#C' + id + '').addClass('disabled');
                    }
                    if (voi == 'yes') {
                        $('#R' + id + '').addClass('disabled');
                        $('#S' + id + '').addClass('disabled');
                        $('#C' + id + '').addClass('disabled');
                        $('#P' + id + '').css('text-decoration', 'line-through');
                        $('#P' + id + '').css('color', 'red');
                        if (cat == 2) {
                            $('#RE' + id + '').addClass('disabled');
                            $('#PR' + id + '').addClass('disabled');
                        }
                        if (cat == 5 || cat == 6 || cat == 7) {
                            $('#RE' + id + '').addClass('disabled');
                        }
                    }
                    if (loca != 'web') {
                        $('#R' + id + '').addClass('disabled');
                    }
                    var t = t + 1;
                }
                $(".status").on('change', function () {
                    var id = $(this).attr('name');
                    var status = $(this).val();
                    if (status == 0) {
                        $('#S' + id + '').css('background-color', '#fa3025');
                    }
                    if (status == 1) {
                        $('#S' + id + '').css('background-color', '#FFC300');
                    }
                    if (status == 2) {
                        $('#S' + id + '').css('background-color', '#45c23c');
                    }
                    if (status == 3) {
                        $('#S' + id + '').css('background-color', '#a947f5');
                    }
                    var dataString = {
                        id: id,
                        print: status
                    };

                    $.ajax({
                        type: "POST",
                        url: 'update6.php?',
                        data: dataString,
                        crossDomain: true,
                        cache: false,
                        dataType: 'json',
                        success: function (data) {
                            var te = data.length;
                            //alert(data[0].stop);

                            if (data == '2') {
                                location.reload();
                            }
                        },
                        error: function (XMLHttpRequest, textStatus, errorThrown) {
                            location.reload();
                        }
                    });
                });
            }
            $('#msg4').append('<br/><br/>');
            $('#msg4').show();
            $('.hover_bkgr_fricc3').show();
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            location.reload();
            //alert(errorThrown);
        }
    });
}

function refund(id) {
    $('#rid2').removeClass('disabled');
    $('#mes').html('');
    $('#Rid').val(id);
    $('#msg2').hide();
    $('#msg6').hide();
    $('#msg7').hide();
    $('#msg5').show();
    $('.hover_bkgr_fricc').show();
}


function change(id) {
    $('#rid3').removeClass('disabled');
    $('#Cid').val(id);
    $('#datepicker').val('');
    $('#msg2').hide();
    $('#msg7').hide();
    $('#msg5').hide();
    $('#msg6').show();
    $('.hover_bkgr_fricc').show();
}

function notep(id) {
    $('#npID').val(id);
    $('#np1').val('');
    getnotes(id);
    $('.hover_bkgr_fricc7').show();
}


function rental(id, cat) {
    $('#ddown').val('false');

    if (cat == 5) {
        $('#rif').html('Passholder Info:');
        $('#rif2').html('Full Name:');
    }
    if (cat == 6) {
        $('#rif').html('Family Pass Info:');
        $('#rif2').html('Passholder 1:');


    } else if (cat == 7) {
        $('#rif').html('Camper Info:');
        $('#rif2').html('Full Name:');
    } else {
        dbox(id);
        $('#rif').html("Rental Info:");
        $('#rif2').html("Renter's Name:");
    }
    $('#msg5').hide();
    $('#msg6').hide();
    $('#msg7').hide();
    $('#fullname2').val('');
    $('#feet').val('');
    $('#inches').val('');
    $('#weight').val('');
    $('#shoe1').val('');
    $('#shoe2').val('');
    $('#helmet').val('');
    $('#age').val('');
    $('#sex').val('');
    $('#ability').val('');
    $('#equip').val('');
    $('#notes').val('');
    $('#fullname2b').val('');
    $('#age2').val('');
    $('#fullname3').val('');
    $('#age3').val('');
    $('#fullname4').val('');
    $('#age4').val('');
    $('.bx1.height').hide();
    $('.bx1.weight').hide();
    $('.bx1.shoe').hide();
    $('.bx1.helmet').hide();
    $('.bx1.age').hide();
    $('.bx1.sex').hide();
    $('.bx1.ability').hide();
    $('.bx1.equip').hide();
    $('.bx1.notes').hide();
    $('.passh1').hide();
    $('.passh2').hide();
    $('.passh3').hide();
    $('.passh4').hide();
    $('.bx1.age2').hide();
    $('.bx1.age3').hide();
    $('.bx1.age4').hide();
    $('.bx1.fn2').hide();
    $('.bx1.fn3').hide();
    $('.bx1.fn4').hide();
    $('#fullname2').css('border-bottom', 'solid 1px #d3d3d3');
    $('#feet').css('border-bottom', 'solid 1px #d3d3d3');
    $('#inches').css('border-bottom', 'solid 1px #d3d3d3');
    $('#weight').css('border-bottom', 'solid 1px #d3d3d3');
    $('#shoe1').css('border-bottom', 'solid 1px #d3d3d3');
    $('#shoe2').css('border-bottom', 'solid 1px #d3d3d3');
    $('#helmet').css('border-bottom', 'solid 1px #d3d3d3');
    $('#age').css('border-bottom', 'solid 1px #d3d3d3');
    $('#sex').css('border-bottom', 'solid 1px #d3d3d3');
    $('#ability').css('border-bottom', 'solid 1px #d3d3d3');
    $('#equip').css('border-bottom', 'solid 1px #d3d3d3');
    $('#notes').css('border-bottom', 'solid 1px #d3d3d3');

    $('#fullname2b').css('border-bottom', 'solid 1px #d3d3d3');
    $('#age2').css('border-bottom', 'solid 1px #d3d3d3');
    $('#fullname3').css('border-bottom', 'solid 1px #d3d3d3');
    $('#age3').css('border-bottom', 'solid 1px #d3d3d3');
    $('#fullname4').css('border-bottom', 'solid 1px #d3d3d3');
    $('#age4').css('border-bottom', 'solid 1px #d3d3d3');
    var dataString = {
        id: id
    };

    $.ajax({
        type: "POST",
        url: 'dets.php?',
        data: dataString,
        crossDomain: true,
        cache: false,
        dataType: 'json',
        success: function (data) {
            var te = data.length;

            if (data[0].stop == 'no') {
                var field1 = data[1].height;
                var field2 = data[1].weight;
                var field3 = data[1].shoe;
                var field4 = data[1].helmet;
                var field5 = data[1].sex;
                var field6 = data[1].age;
                var field7 = data[1].ability;
                var field8 = data[1].equip;
                if (cat == 7) {
                    var field9 = "true";
                    var fields = "" + field1 + "-" + field2 + "-" + field3 + "-" + field4 + "-" + field6 + "-" + field5 + "-" + field7 + "-" + field8 + "-" + field9 + "-";
                } else if (cat == 6) {
                    var field9 = "false";
                    var fields = "" + field1 + "-" + field2 + "-" + field3 + "-" + field4 + "-" + field6 + "-" + field5 + "-" + field7 + "-" + field8 + "-" + field9 + "-" + cat + "-";
                } else {
                    var fields = "" + field1 + "-" + field2 + "-" + field3 + "-" + field4 + "-" + field6 + "-" + field5 + "-" + field7 + "-" + field8 + "-";
                }
                $('#fields').val(fields);
                $('#myId').val(id);

                var fullname = data[1].a;
                var height = data[1].b;
                var height2 = data[1].c;
                var weight = data[1].d;
                var shoe = data[1].e;
                var shoe2 = data[1].f;
                var age = data[1].g;
                var sex = data[1].h;
                var ability = data[1].i;
                var equip = data[1].j;
                var helmet = data[1].k;

                var notes = data[1].notes;
                var fn2 = data[1].fn2;
                var fn3 = data[1].fn3;
                var fn4 = data[1].fn4;
                var ag2 = data[1].ag2;
                var ag3 = data[1].ag3;
                var ag4 = data[1].ag4;
                $('#fullname2').val(fullname);

                if (field1 == "true") {
                    $('#feet').val(height);
                    $('#inches').val(height2);
                    $('.bx1.height').show();
                }

                if (field2 == "true") {
                    $('#weight').val(weight);
                    $('.bx1.weight').show();
                }
                if (field3 == "true") {
                    $('#shoe1').val(shoe);
                    $('#shoe2').val(shoe2);
                    $('.bx1.shoe').show();
                }
                if (field4 == "true") {
                    $('#helmet').val(helmet);
                    $('.bx1.helmet').show();
                }
                if (field6 == "true") {
                    $('#age').val(age);
                    $('.bx1.age').show();
                }
                if (field5 == "true") {
                    $('#sex').val(sex);
                    $('.bx1.sex').show();
                }
                if (field7 == "true") {
                    $('#ability').val(ability);
                    $('.bx1.ability').show();
                }
                if (field8 == "true") {
                    $('#equip').val(equip);
                    $('.bx1.equip').show();
                }
                if (field9 == "true") {
                    $('#notes').val(notes);
                    $('.bx1.notes').show();
                }

                if (cat == 6) {
                    $('#fullname2b').val(fn2);
                    $('#fullname3').val(fn3);
                    $('#fullname4').val(fn4);
                    $('#age2').val(ag2);
                    $('#age3').val(ag3);
                    $('#age4').val(ag4);
                    $('.bx1.fn2').show();
                    $('.bx1.fn3').show();
                    $('.bx1.fn4').show();
                    $('.bx1.age2').show();
                    $('.bx1.age3').show();
                    $('.bx1.age4').show();
                }
            } else {
                location.reload();
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            location.reload();
        }
    });
    $('#msg2').show();
    $('.hover_bkgr_fricc').show();
}

function charge(id, cnum) {
    var cnum = "*****" + cnum;
    $('#numc').html(cnum);

    $('#msg10').hide();
    $('#msg3').hide();
    $('#msg8').hide();

    $("#mess9").html('');

    $('#amo').val('');
    $('#reason').val('');

    $('#laid').val(id);
    $('#amo').css('border-bottom', 'solid 1px #d3d3d3');
    $('#reason').css('border-bottom', 'solid 1px #d3d3d3');

    $('.hover_bkgr_fricc2').show();
    $('#msg9').show();
}

function card(id) {
    $('#msg9').hide();
    $('#msg10').hide();
    $('#msg3').hide();
    $("#mess2").html('');

    $('#card').val('');
    $('#month').val('');
    $('#year').val('');
    $('#cvv').val('');

    $('#caid').val(id);

    $('#card').css('border-bottom', 'solid 1px #d3d3d3');
    $('#month').css('border-bottom', 'solid 1px #d3d3d3');
    $('#year').css('border-bottom', 'solid 1px #d3d3d3');
    $('#cvv').css('border-bottom', 'solid 1px #d3d3d3');

    $('.hover_bkgr_fricc2').show();
    $('#msg8').show();
}

function users(id) {
    $('#msg8').hide();
    $('#msg9').hide();
    $('#msg10').hide();

    var name = $('#N' + id + '').html();

    $('#fullname').val(name);
    var mobile = $('#M' + id + '').html();
    var email = $('#E' + id + '').html();
    var address = $('#AD' + id + '').val();
    var city = $('#CI' + id + '').val();
    var province = $('#PR' + id + '').val();
    var postal = $('#PO' + id + '').val();
    var mobile = mobile.substring(1);

    $('#mobile').val(mobile);
    $('#email').val(email);
    $('#address').val(address);
    $('#city').val(city);
    $('#province').val(province);
    $('#postal').val(postal);
    $('#idy').val(id);

    $('#fullname').css('border-bottom', 'solid 1px #d3d3d3');
    $('#mobile').css('border-bottom', 'solid 1px #d3d3d3');
    $('#email').css('border-bottom', 'solid 1px #d3d3d3');
    $('#address').css('border-bottom', 'solid 1px #d3d3d3');
    $('#city').css('border-bottom', 'solid 1px #d3d3d3');
    $('#province').css('border-bottom', 'solid 1px #d3d3d3');
    $('#postal').css('border-bottom', 'solid 1px #d3d3d3');
    $('.hover_bkgr_fricc2').show();
    $('#msg3').show();
}

var timeoutSearch = null;

function load(id) {
    $('#sear').val(id);
    $('#sear').focus();
    findUsers();
    $("#sear").on("keyup", delaySearch);
}

function delaySearch(e) {
    // Clear the timeout if it has already been set.
    // This will prevent the previous task from executing
    // if it has been less than <MILLISECONDS>
    clearTimeout(timeoutSearch);
    // Make a new timeout set to go off in 500ms
    timeoutSearch = setTimeout(function () {
        findUsers(e);
    }, 100);
}


function print(id) {
    $('#fname').html('');
    $('#faddress').html('');
    $('#fcity').html('');
    $('#fprovince').html('');
    $('#fcountry').html('');
    $('#fpostal').html('');
    $('#fphone').html('');
    $('#fitem').html('');
    $('#fhardware').html('');
    $('#fheight').html('');
    $('#fweight').html('');

    $('#fshoe').html('');
    $('#fhelmet').html('');
    $('#fage').html('');
    $('#fgender').html('');
    $('#fability').html('');
    $('#fcustom').html('Other:');
    $('#fcustom2').html('');

    var dataString = {
        id: id
    };

    $.ajax({
        type: "POST",
        url: 'dets2.php?',
        data: dataString,
        crossDomain: true,
        cache: false,
        dataType: 'json',
        success: function (data) {
            var te = data.length;
            //alert(data[0].stop);

            if (data[0].stop == 'no') {

                var fullname = data[1].fname;
                var height = data[1].height;
                var weight = data[1].weight;
                var shoe = data[1].shoe;
                var age = data[1].age;
                var gender = data[1].gender;
                var ability = data[1].ability;
                var hardware = data[1].hardware;
                var helmet = data[1].helmet;

                var mobile = data[1].mobile;
                var address = data[1].address;
                var city = data[1].city;
                var province = data[1].province;
                var postal = data[1].postal;
                var country = data[1].country;
                var item = data[1].item;

                $('#fname').html(fullname);
                $('#faddress').html(address);
                $('#fcity').html(city);
                $('#fprovince').html(province);
                $('#fcountry').html(country);
                $('#fpostal').html(postal);
                $('#fphone').html(mobile);
                $('#fitem').html(item);
                $('#fhardware').html(hardware);
                $('#fheight').html(height);
                $('#fweight').html(weight);

                $('#fshoe').html(shoe);
                $('#fhelmet').html(helmet);
                $('#fage').html(age);
                $('#fgender').html(gender);
                $('#fability').html(ability);

                var custom = data[2].custom;
                if (custom == 'yes') {
                    var title9 = data[3].title;
                    var name9 = data[3].name;
                    $('#fcustom').html(title9);
                    $('#fcustom2').html(name9);
                }

                var divToPrint = document.getElementById('yo');
                var newWin = window.open('', 'Print-Window');
                newWin.document.open();
                newWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</body></html>');
                newWin.document.close();
                setTimeout(function () {
                    newWin.close();
                }, 10);
            } else {
                location.reload();
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            location.reload();
        }
    });
}

function findUsers() {
    var sea = $('#sear').val().trim();

    if (sea === "") {
        $('#items').html("<div class='no-results'><br><br>Sorry there were no results.</div>");
        $('#count').html('0');
    } else {
        var dataString = {
            search: sea
        };

        $.ajax({
            type: "POST",
            url: 'search.php',
            data: dataString,
            crossDomain: true,
            cache: false,
            dataType: 'json',
            success: function (data) {
                var te = data.length;
                var cur = data[0].stop;
                //alert(cur);    
                $('#items').empty();

                if (cur == 'no') {
                    var t = 1;
                    while (t < te) {
                        var rid = data[t].rid;
                        var name = data[t].name;
                        var card = data[t].card;
                        var date = data[t].date;
                        var mobile = data[t].mobile;
                        var email = data[t].email;
                        var address = data[t].address;
                        var city = data[t].city;
                        var province = data[t].province;
                        var postal = data[t].postal;

                        var amount = data[t].amount;
                        var loca = data[t].loca;
                        var cardy = data[t].cardy;
                        var id = data[t].id;
                        var rfund = data[t].rfund;
                        var cnum = data[t].cnum;

                        var cnum = cnum.substr(cnum.length - 4);

                        if (mobile == false) {
                            var mobile = "";
                        }

                        if (email == false) {
                            var email = "";
                        }

                        if (t % 2 == 0) {
                            var color = "#d8e0ed";
                        } else {
                            var color = "#FFFFFF";
                        }

                        if (rfund != 0) {
                            var color5 = "red";
                        } else {
                            var color5 = "#595959";
                        }

                        var html = "";
                        html += '<div style="background-color: ' + color + '; overflow:hidden; height:55px; width:1200px;">';
                        html += '<div style="float:left; width: 15%; height: 100%; overflow:hidden; text-align:left; padding: 5px 0 5px 10px;">';
                        html += '<div style="font-size: 14px; height:15px; line-height:14px; white-space: nowrap; text-overflow: ellipsis; font-weight:600; color:#595959;"><span style="color: #203A81; display: inline-block; width:50px;">OID:</span> ' + rid + '</div>';
                        html += '<div style="font-size: 14px; height:15px; line-height:14px; white-space: nowrap; text-overflow: ellipsis; font-weight:600; color:#595959;"><span style="color: #203A81; display: inline-block; width:50px;">Date:</span> ' + date + '</div>';
                        html += '<div style="font-size: 14px; height:15px; line-height:14px; white-space: nowrap; text-overflow: ellipsis; color:#595959; font-weight:600;"><span style="color: #203A81; display: inline-block; width:50px;">Card #:</span> ' + card + '</div>';
                        html += '</div>';
                        html += '<div style="float:left; width: 23%; height: 100%; overflow:hidden; text-align:left; padding: 5px 0 5px 10px;">';
                        html += '<div style="font-size: 14px; height:15px; line-height:14px; white-space: nowrap; text-overflow: ellipsis; font-weight:600; color:#595959;"><span style="color: #203A81; display: inline-block; width:50px">Name:</span> <span id="N' + id + '">' + name + '</span></div>';
                        html += '<div style="font-size: 14px; height:15px; line-height:14px; white-space: nowrap; text-overflow: ellipsis; font-weight:600; color:#595959;"><span style="color: #203A81; display: inline-block; width:50px">Email:</span> <span id="E' + id + '">' + email + '</span></div>';
                        html += '<div style="font-size: 14px; height:15px; line-height:14px; white-space: nowrap; text-overflow: ellipsis; color:#595959; font-weight:600;"><span style="color: #203A81; display: inline-block; width:50px">Mobile:</span> <span id="M' + id + '">' + mobile + '</span></div>';
                        html += '<input type="hidden" id="AD' + id + '" value="' + address + '"><input type="hidden" id="CI' + id + '" value="' + city + '"><input type="hidden" id="PR' + id + '" value="' + province + '"><input type="hidden" id="PO' + id + '" value="' + postal + '">';

                        html += '</div>';
                        html += '<div style="float:left; width: 12%; height: 100%; overflow:hidden; text-align:left; padding: 5px 0 5px 10px;">';
                        html += '<div style="font-size: 14px; height:15px; line-height:14px; white-space: nowrap; text-overflow: ellipsis; font-weight:600; color:#595959;"><span style="color: #203A81; display: inline-block; width:65px">Amount:</span> $' + amount + '</div>';
                        html += '<div style="font-size: 14px; height:15px; line-height:14px; white-space: nowrap; text-overflow: ellipsis; font-weight:600; color:' + color5 + ';"><span style="color: #203A81; display: inline-block; width:65px">Refunded:</span> $' + rfund + '</div>';

                        html += '<div style="font-size: 14px; height:15px; line-height:14px; white-space: nowrap; text-overflow: ellipsis; color:#595959; font-weight:600;"><span style="color: #203A81; display: inline-block; width:65px">Sold On:</span> ' + loca + '</div>';
                        html += '</div>';
                        html += '<div style="float:left; width: 10%; height: 100%; overflow:hidden; text-align:center; padding: 12px 0 5px 10px;">';

                        <?php
                        if (GetUserPermissionsByDescription('Admin') or GetUserPermissionsByDescription('Lookup_EDIT')) {
                            ?>
                            html += '<div class = "buton5" onclick="javascript:users(' + id + ');">Edit Details</div>'; <?php
                        } else if (!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('Lookup_EDIT')) {
                            ?>
                            html += '<div class = "buton5 disabled" >Edit Details</div>'; <?php
                        } ?>

                        html += '</div>';
                        html += '<div style="float:left; width: 10%; height: 100%; overflow:hidden; text-align:center; padding: 12px 0 5px 10px;">';
                        if (cardy == false) {
                            <?php
                            if (GetUserPermissionsByDescription('Admin') or GetUserPermissionsByDescription('Lookup_ADDCARD')) {
                                ?>
                                html += '<div class = "buton5" onclick="javascript:card(' + id + ');">Add Card</div>'; <?php
                            } else if (!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('Lookup_ADDCARD')) {
                                ?>
                                html += '<div class = "buton5 disabled">Add Card</div>'; <?php
                            } ?>
                        }

                        html += '</div>';
                        html += '<div style="float:left; width: 10%; height: 100%; overflow:hidden; text-align:center; padding: 12px 0 5px 10px;">'; <?php
                        if (GetUserPermissionsByDescription('Admin') or GetUserPermissionsByDescription('Lookup_CHARGECARD')) {
                            ?>
                            html += '<div id="hj' + id + '" class = "buton5" onclick="javascript:charge(' + id + ',' + cnum + ');">Charge Card</div>'; <?php
                        } else if (!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('Lookup_CHARGECARD')) {
                            ?>
                            html += '<div id="hj' + id + '" class = "buton5 disabled">Charge Card</div>'; <?php
                        } ?>

                        html += '</div>';
                        html += '<div style="float:left; width: 10%; height: 100%; overflow:hidden; text-align:center; padding: 12px 0 5px 10px;">';

                        <?php
                        if (GetUserPermissionsByDescription('Admin') or GetUserPermissionsByDescription('Lookup_ORDERITEMS')) {
                            ?>
                            html += '<div class = "buton5" onclick="javascript:items(' + id + ');">Order Items</div>'; <?php
                        } else if (!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('Lookup_ORDERITEMS')) {
                            ?>
                            html += '<div class = "buton5 disabled">Order Items</div>'; <?php
                        } ?>

                        html += '</div>';
                        html += '<div style="float:left; width: 3%; height: 100%; text-align: center; overflow:hidden; padding: 12px 0 0 0; "><a href="https://order.botrow.com/2/' + rid + '" target="_blank"><img src="qr.png"></a>';
                        html += '</div>';
                        html += '</div>';

                        $('#items').append(html);
                        if (cardy == false) {
                            $("#hj" + id + "").addClass('disabled');
                        }
                        var t = t + 1;
                    } //end while loop

                    $('#count').html(te - 1);
                } //end if statement
                else if (cur == 'yes') {
                    $('#items').html("<div class='no-results'><br><br>Sorry there were no results.</div>");
                    $('#count').html('0');
                } else {
                    location.reload();
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                location.reload();
            }
        });
    }
}

$('#mobile').inputmask("(999) 999-9999");

$("#process").click(function () {
    $("#mess").html('');

    var fullname = $('#fullname').val().trim();
    var mobile = $('#mobile').val().trim();
    var email = $('#email').val().trim();
    var address = $('#address').val().trim();
    var city = $('#city').val().trim();
    var province = $('#province').val().trim();
    var postal = $('#postal').val().trim();
    var id = $('#idy').val().trim();

    var nameRegex = new RegExp("^.{5,30}$");
    var sd = 0;

    if (fullname == "") {
        var sd = 1;
        $('#fullname').css('border-bottom', 'solid 1px red');
    } else if (fullname.indexOf(' ') == -1) {
        var sd = 1;
        $('#fullname').css('border-bottom', 'solid 1px red');
    } else if (!nameRegex.test(fullname)) {
        var sd = 1;
        $('#fullname').css('border-bottom', 'solid 1px red');
    } else {
        $('#fullname').css('border-bottom', 'solid 1px #d3d3d3');
    }

    if (mobile.indexOf('_') != -1) {
        var sd = 1;
        $('#mobile').css('border-bottom', 'solid 1px red');
    } else if (mobile.length != 14) {
        var sd = 1;
        $('#mobile').css('border-bottom', 'solid 1px red');
    } else {
        $('#mobile').css('border-bottom', 'solid 1px #d3d3d3');
    }

    var tes = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if (email.match(tes)) {
        $('#email').css('border-bottom', 'solid 1px #d3d3d3');
    } else {
        var sd = 1;
        $('#email').css('border-bottom', 'solid 1px red');
    }

    if (address == "") {
        var sd = 1;
        $('#address').css('border-bottom', 'solid 1px red');
    } else {
        $('#address').css('border-bottom', 'solid 1px #d3d3d3');
    }
    if (city == "") {
        var sd = 1;
        $('#city').css('border-bottom', 'solid 1px red');
    } else {
        $('#city').css('border-bottom', 'solid 1px #d3d3d3');
    }
    if (province == "") {
        var sd = 1;
        $('#province').css('border-bottom', 'solid 1px red');
    } else {
        $('#province').css('border-bottom', 'solid 1px #d3d3d3');
    }
    if (postal == "") {
        var sd = 1;
        $('#postal').css('border-bottom', 'solid 1px red');
    } else {
        $('#postal').css('border-bottom', 'solid 1px #d3d3d3');
    }
    if (sd == 0) {

        $("#process").addClass('disabled');
        var dataString = {
            fullname: fullname,
            mobile: mobile,
            email: email,
            address: address,
            city: city,
            province: province,
            postal: postal,
            id: id
        };

        $.ajax({
            type: "POST",
            url: 'update4.php?',
            data: dataString,
            crossDomain: true,
            cache: false,
            dataType: 'json',
            success: function (data) {
                var te = data.length;
                if (data == '1') {
                    findUsers();
                    $('#msg3').hide();
                    $('.hover_bkgr_fricc2').hide();
                    $("#process").removeClass('disabled');
                } else if (data == '2') {
                    location.reload();
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                location.reload();
            }
        });
    }
});

$(".buton4").click(function () {
    var fields = $('#fields').val();
    var myId = $('#myId').val();
    var fields = fields.split("-");
    var height = fields[0];
    var weight = fields[1];
    var shoe = fields[2];
    var helmet = fields[3];
    var age = fields[4];
    var sex = fields[5];
    var ability = fields[6];
    var equip = fields[7];
    var cat = fields[9];
    var sd = 0;
    var h0 = $('#fullname2').val().trim();

    if (h0 == "") {
        var sd = 1;
        $('#fullname2').css('border-bottom', 'solid 1px red');
    } else {
        $('#fullname2').css('border-bottom', 'solid 1px #d3d3d3');
    }

    if (height == "true") {
        var h1 = $('#feet').val();
        var h2 = $('#inches').val();
        if (h1 == null) {
            var sd = 1;
            $('#feet').css('border-bottom', 'solid 1px red');
        } else {
            $('#feet').css('border-bottom', 'solid 1px #d3d3d3');
        }

        if (h2 == null) {
            var sd = 1;
            $('#inches').css('border-bottom', 'solid 1px red');
        } else {
            $('#inches').css('border-bottom', 'solid 1px #d3d3d3');
        }
    }
    if (weight == "true") {
        var h3 = $('#weight').val().trim();
        if (h3 == "") {
            var sd = 1;
            $('#weight').css('border-bottom', 'solid 1px red');
        } else {
            $('#weight').css('border-bottom', 'solid 1px #d3d3d3');
        }
    }
    if (shoe == "true") {
        var h4 = $('#shoe1').val();
        var h5 = $('#shoe2').val();
        if (h4 == null) {
            var sd = 1;
            $('#shoe1').css('border-bottom', 'solid 1px red');
        } else {
            $('#shoe1').css('border-bottom', 'solid 1px #d3d3d3');
        }
        if (h5 == null) {
            var sd = 1;
            $('#shoe2').css('border-bottom', 'solid 1px red');
        } else {
            $('#shoe2').css('border-bottom', 'solid 1px #d3d3d3');
        }
    }
    if (helmet == "true") {
        var h10 = $('#helmet').val();
        if (h10 == null) {
            var sd = 1;
            $('#helmet').css('border-bottom', 'solid 1px red');
        } else {
            $('#helmet').css('border-bottom', 'solid 1px #d3d3d3');
        }
    }
    if (age == "true") {
        var h6 = $('#age').val().trim();
        if (h6 == "") {
            var sd = 1;
            $('#age').css('border-bottom', 'solid 1px red');
        } else {
            $('#age').css('border-bottom', 'solid 1px #d3d3d3');
        }
    }
    if (sex == "true") {
        var h7 = $('#sex').val();
        if (h7 == null) {
            var sd = 1;
            $('#sex').css('border-bottom', 'solid 1px red');
        } else {
            $('#sex').css('border-bottom', 'solid 1px #d3d3d3');
        }
    }
    if (ability == "true") {
        var h8 = $('#ability').val();
        if (h8 == null) {
            var sd = 1;
            $('#ability').css('border-bottom', 'solid 1px red');
        } else {
            $('#ability').css('border-bottom', 'solid 1px #d3d3d3');
        }
    }
    if (equip == "true") {
        var h9 = $('#equip').val();
        if (h9 == null) {
            var sd = 1;
            $('#equip').css('border-bottom', 'solid 1px red');
        } else {
            $('#equip').css('border-bottom', 'solid 1px #d3d3d3');
        }
    }
    //////family passes
    if (cat == '6') {
        var fn2 = $('#fullname2b').val().trim();
        var arr = fn2.split(" ");
        if (fn2 == "") {
            var sd = 1;
            $('#fullname2b').css('border-bottom', 'solid 1px red');
        } else if (fn2.indexOf(' ') == -1) {
            var sd = 1;
            //both first and last name exist                  
            $('#fullname2b').css('border-bottom', 'solid 1px red');
            $('#warn').html('First & Last Name Required');
        } else if (arr[0].length < 2) {
            var sd = 1;
            //both first name to short                
            $('#fullname2b').css('border-bottom', 'solid 1px red');
            $('#warn').html('Please Provide Full First Name');
        } else if (arr[arr.length - 1].length < 2) {
            var sd = 1;
            $('#fullname2b').css('border-bottom', 'solid 1px red');
            $('#warn').html('Please Provide Full Last Name');
        } else {
            $('#fullname2b').css('border-bottom', 'solid 1px #d3d3d3');
            $('#warn').html('');
        }

        var ag2 = $('#age2').val().trim();

        if (ag2 == "") {
            var sd = 1;
            $('#age2').css('border-bottom', 'solid 1px red');
        } else {
            $('#age2').css('border-bottom', 'solid 1px #d3d3d3');
        }

        var fn3 = $('#fullname3').val().trim();
        var arr = fn3.split(" ");

        if (fn3 == "") {
            var sd = 1;
            $('#fullname3').css('border-bottom', 'solid 1px red');
        } else if (fn3.indexOf(' ') == -1) {
            var sd = 1;
            //both first and last name exist                  
            $('#fullname3').css('border-bottom', 'solid 1px red');
            $('#warn').html('First & Last Name Required');
        } else if (arr[0].length < 2) {
            var sd = 1;
            //both first name to short                
            $('#fullname3').css('border-bottom', 'solid 1px red');
            $('#warn').html('Please Provide Full First Name');
        } else if (arr[arr.length - 1].length < 2) {
            var sd = 1;
            //both first name to short                
            $('#fullname3').css('border-bottom', 'solid 1px red');
            $('#warn').html('Please Provide Full Last Name');
        } else {
            $('#fullname3').css('border-bottom', 'solid 1px #d3d3d3');
            $('#warn').html('');
        }

        var ag3 = $('#age3').val().trim();

        if (ag3 == "") {
            var sd = 1;
            $('#age3').css('border-bottom', 'solid 1px red');
        } else {
            $('#age3').css('border-bottom', 'solid 1px #d3d3d3');
        }

        var fn4 = $('#fullname4').val().trim();
        var arr = fn4.split(" ");

        if (fn4 == "") {
            var sd = 1;
            $('#fullname4').css('border-bottom', 'solid 1px red');
        } else if (fn4.indexOf(' ') == -1) {
            var sd = 1;
            //both first and last name exist                  
            $('#fullname4').css('border-bottom', 'solid 1px red');
            $('#warn').html('First & Last Name Required');
        } else if (arr[0].length < 2) {
            var sd = 1;
            //both first name to short                
            $('#fullname4').css('border-bottom', 'solid 1px red');
            $('#warn').html('Please Provide Full First Name');
        } else if (arr[arr.length - 1].length < 2) {
            var sd = 1;
            //both first name to short                
            $('#fullname4').css('border-bottom', 'solid 1px red');
            $('#warn').html('Please Provide Full Last Name');
        } else {
            $('#fullname4').css('border-bottom', 'solid 1px #d3d3d3');
            $('#warn').html('');
        }

        var ag4 = $('#age4').val().trim();

        if (ag4 == "") {
            var sd = 1;
            $('#age4').css('border-bottom', 'solid 1px red');
        } else {
            $('#age4').css('border-bottom', 'solid 1px #d3d3d3');
        }
    }

    var h11 = $('#notes').val().trim();
    var ddown = $('#ddown').val();

    if (ddown == "true") {
        var r5 = $('#r5').val().trim();
    }

    if (sd == 0) {
        var dataString = {
            fullname: h0,
            height: h1,
            height2: h2,
            weight: h3,
            shoe: h4,
            shoe2: h5,
            age: h6,
            sex: h7,
            helmet: h10,
            ability: h8,
            equip: h9,
            id: myId,
            notes: h11,
            fn2: fn2,
            ag2: ag2,
            fn3: fn3,
            ag3: ag3,
            fn4: fn4,
            ag4: ag4,
            ddown: ddown,
            r5: r5
        };

        $.ajax({
            type: "POST",
            url: 'update5.php?',
            data: dataString,
            crossDomain: true,
            cache: false,
            dataType: 'json',
            success: function (data) {
                var te = data.length;
                if (data[0].stop == '1') {
                    $('#msg2').hide();
                    $('.hover_bkgr_fricc').hide();
                    var gid = data[1].oid;
                    items(gid);
                } else if (data[0].stop == '2') {
                    location.reload();
                } else if (data[0].stop == '3') {
                    $('#r5').css('border-bottom', 'solid 1px red');
                    alert('No Inventory');
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                location.reload();
            }
        });
    }
});


$(".buton88").click(function () {
    var npID = $('#npID').val();
    var np1 = $('#np1').val();
    var dataString = {
        id: npID,
        note: np1
    };
    $.ajax({
        type: "POST",
        url: 'updatenotes.php?',
        data: dataString,
        crossDomain: true,
        cache: false,
        dataType: 'json',
        success: function (data) {
            var te = data.length;
            //alert(data[0].stop);
            if (data == '1') {
                $('.hover_bkgr_fricc7').hide();
            } else {
                location.reload();
            }
            if (np1 == "") {
                $(`#NO${npID}`).removeClass('npad1');
                $(`#NO${npID}`).addClass('npad');
            } else {
                $(`#NO${npID}`).addClass('npad1');
                $(`#NO${npID}`).removeClass('npad');
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            location.reload();
        }
    });
});

$(".buton7").click(function () {
    $("#mes").html('');
    $('#rid2').addClass('disabled');
    var Rid = $('#Rid').val();
    var dataString = {
        id: Rid
    };

    $.ajax({
        type: "POST",
        url: 'refund.php?',
        data: dataString,
        crossDomain: true,
        cache: false,
        dataType: 'json',
        success: function (data) {
            var te = data.length;
            //alert(data[0].stop);
            if (data == '1') {
                $('#R' + Rid + '').addClass('disabled');
                $('#S' + Rid + '').addClass('disabled');
                $('#C' + Rid + '').addClass('disabled');
                $('#P' + Rid + '').css('text-decoration', 'line-through');
                $('#P' + Rid + '').css('color', 'red');
                $('#RE' + Rid + '').addClass('disabled');
                findUsers();
                $('.hover_bkgr_fricc').hide();
            } else if (data == '2') {
                $("#mes").html('Refund Failed');
                $('#rid2').removeClass('disabled');
            } else {
                location.reload();
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            location.reload();
        }
    });
});

$(".buton8").click(function () {
    $('#rid3').addClass('disabled');
    var Cid = $('#Cid').val();
    var cdate = $('#datepicker').val();
    var dataString = {
        id: Cid,
        date: cdate
    };

    $.ajax({
        type: "POST",
        url: 'update7.php?',
        data: dataString,
        crossDomain: true,
        cache: false,
        dataType: 'json',
        success: function (data) {
            var te = data.length;
            if (data == '1') {
                if (cdate == '') {
                    cdate = 'Anyday';
                }
                $('#RD' + Cid + '').html('Valid: ' + cdate + '');
                $('#D' + Cid + '').val('0');
                $('#S' + Cid + '').css('background-color', '#fa3025');
                $('.hover_bkgr_fricc').hide();
            } else if (data == '3') {
                $('#msg6').hide();
                $('#msg7').show();
            } else {
                location.reload();
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            location.reload();
        }
    });
});

$("#card").inputmask('Regex', {
    regex: "^[0-9]{1,19}"
});

$("#cvv").inputmask('Regex', {
    regex: "^[0-9]{1,4}"
});

$("#amo").inputmask('currency', {
    rightAlign: true
});

$("#addcard").click(function () {
    $("#mess2").html('');
    var card = $('#card').val().trim();
    var month = $('#month').val();
    var year = $('#year').val();
    var cvv = $('#cvv').val().trim();
    var id = $('#caid').val();
    var sd = 0;
    if (card == "") {
        var sd = 1;
        $('#card').css('border-bottom', 'solid 1px red');
    } else if (card.length < 13) {
        var sd = 1;
        $('#card').css('border-bottom', 'solid 1px red');
    } else {
        $('#card').css('border-bottom', 'solid 1px #d3d3d3');
    }
    if (month == null) {
        var sd = 1;
        $('#month').css('border-bottom', 'solid 1px red');
    } else {
        $('#month').css('border-bottom', 'solid 1px #d3d3d3');
    }
    if (year == null) {
        var sd = 1;
        $('#year').css('border-bottom', 'solid 1px red');
    } else {
        $('#year').css('border-bottom', 'solid 1px #d3d3d3');
    }
    if (cvv == "") {
        var sd = 1;
        $('#cvv').css('border-bottom', 'solid 1px red');
    } else if (cvv.length < 3) {
        var sd = 1;
        $('#cvv').css('border-bottom', 'solid 1px red');
    } else {
        $('#cvv').css('border-bottom', 'solid 1px #d3d3d3');
    }
    if (sd == 0) {
        $("#mess2").html('<img src="245.gif">');
        $("#addcard").addClass('disabled');
        var dataString = {
            id: id,
            card: card,
            month: month,
            year: year,
            cvv: cvv
        };

        $.ajax({
            type: "POST",
            url: 'card.php?',
            data: dataString,
            crossDomain: true,
            cache: false,
            dataType: 'json',
            success: function (data) {
                var te = data.length;
                //alert(data[0].stop);
                if (data == 1) {
                    findUsers();
                    $('#msg8').hide();
                    $('.hover_bkgr_fricc2').hide();
                    $("#addcard").removeClass('disabled');
                } else if (data == 2) {
                    //alert('error');
                    $("#mess2").html('An Error Occurred!');
                    $("#addcard").removeClass('disabled');
                } else if (data == 3) {
                    //alert('declined');
                    $("#mess2").html('Card Add Failed.');
                    $("#addcard").removeClass('disabled');
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                location.reload();
            }
        });
    }
});

$("#charge").click(function () {
    $("#mess9").html('');
    var amo = $('#amo').val().trim();
    var amo = amo.substring(2);
    var reason = $('#reason').val().trim();
    var amo = amo.replace(/,/g, '');
    var id = $('#laid').val();
    var sd = 0;

    if (amo == "") {
        var sd = 1;
        $('#amo').css('border-bottom', 'solid 1px red');
    } else {
        $('#amo').css('border-bottom', 'solid 1px #d3d3d3');
    }

    if (reason == "") {
        var sd = 1;
        $('#reason').css('border-bottom', 'solid 1px red');
    } else {
        $('#reason').css('border-bottom', 'solid 1px #d3d3d3');
    }

    if (sd == 0) {
        $("#mess9").html('<img src="245.gif">');
        $("#charge").addClass('disabled');
        var dataString = {
            id: id,
            amo: amo,
            reason: reason

        };

        $.ajax({
            type: "POST",
            url: 'charge.php?',
            data: dataString,
            crossDomain: true,
            cache: false,
            dataType: 'json',
            success: function (data) {
                var te = data.length;
                //alert(data[0].stop);
                if (data == 1) {
                    $('#msg9').hide();
                    $('#msg10').show();
                    $("#charge").removeClass('disabled');
                } else if (data == 2) {
                    //alert('error');
                    $("#mess9").html('An Error Occurred!');
                    $("#charge").removeClass('disabled');
                } else if (data == 3) {
                    //alert('declined');
                    $("#mess9").html('Charge Declined.');
                    $("#charge").removeClass('disabled');
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                location.reload();
            }
        });
    }
});

function dbox(id) {
    $('#ddown').val('false');
    var dataString = {

        id: id
    };

    $.ajax({
        type: "POST",
        url: 'dbox3.php?',
        data: dataString,
        crossDomain: true,
        cache: false,
        dataType: 'json',
        success: function (data) {
            var te = data.length;
            //alert(data[0].stop);
            //alert('hello');	
            if (data[0].resp == 1) {

                var title = data[1].title;
                $('#ddown').val('true');
                var text = "";

                text += '<div class="bx1 dropped" ><div style="float:left; width:40%; text-align: left; font-size: 14px; height: 35px; line-height: 35px;">' + title + ':</div> <div style="float:left; width:59%; align: left; height: 35px;">';
                text += '<select id="r5">';
                var t = 2;

                while (t < te) {
                    var idd2 = data[t].id;
                    var name = data[t].name;
                    text += '<option value="' + idd2 + '">' + name + '</option>';
                    var t = t + 1;
                }
                text += '</select></div></div>';
                $('#drop').html(text);
            } else if (data[0].resp == 2) {
                $('#drop').html('');
            } else {
                location.reload();
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            location.reload();
        }
    });
}

function getnotes(id) {
    var dataString = {
        id: id
    };
    $.ajax({
        type: "POST",
        url: 'dbox4.php?',
        data: dataString,
        crossDomain: true,
        cache: false,
        dataType: 'json',
        success: function (data) {
            var te = data.length;
            //alert(data[0].stop);
            //alert('hello');	
            if (data[0].resp == 1) {
                var notes = data[1].notes;
                var empty = data[2].empty;
                if (empty == "yes") {
                    $('#np1').val('');
                } else {
                    $('#np1').val(notes);
                    if (notes == "") {
                        $(`NO${id}`).removeClass('npad1');
                        $(`NO${id}`).addClass('npad');
                    } else {
                        $(`NO${id}`).addClass('npad1');
                        $(`NO${id}`).removeClass('npad');
                    }
                }
            } else {
                location.reload();
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            location.reload();
        }
    });
}
</script>