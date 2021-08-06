

<?php
require("login.php");
//require("userPermissionService.php");
//require("dbase.php");
	$day = date("m/d/Y");
?>
<head>
<title>Botrow - Rentals</title>

  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/png" href="favicon.png">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="//code.jquery.com/jquery-3.4.1.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!------<script src="jquery.ui.touch-punch.min.js"></script>--->

  <style type='text/css'>
a:link {
    color: blue;
    text-decoration: none;
}

a:visited {
    color: blue;
    text-decoration: none;
}

a:hover {
    color: blue;
    text-decoration: none;
}

a:active {
    color: red;
}

.daa1 {
    color: #203A81;
    padding: 10px 10px;
    border: 1px solid #e2e2e2;
    width: 100%;
    margin: 5px 0px;
    font-family: more;
    font-size: 14px;
    height: 38px;
    overflow: hidden;
}

.daa {
    color: #203A81;
    padding: 10px 10px;
    border: 1px solid #e2e2e2;
    margin-bottom: 10px;
    font-family: more;
    font-size: 24px;
    height: 48px;
    font-weight: bold;
    overflow: hidden;
}

.cool {
    background-color: #203A81;
    color: #ffffff;
    padding: 4px 17px;
    font-family: more;
    font-size: 25px;
    max-width: 1000px;
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
    display: inline-block;
    cursor: pointer;
    color: #ffffff;
    font-family: more;
    font-size: 18px;
    padding: 8px 17px;
    text-decoration: none;
    text-shadow: 0px 1px 0px #283966;
    width: 50px;
    text-transform: uppercase;
}

.buton3:active {
    position: relative;
    top: 1px;
}

.buton3:hover {
    background-color: #203A81;
    position: relative;
    top: 1px;
}

.buton4 {
    margin: 0px;
    position: relative;
    background-color: #203A81;
    display: inline-block;
    cursor: pointer;
    color: #ffffff;
    font-family: more;
    font-size: 18px;
    padding: 8px 17px;
    text-decoration: none;
    text-shadow: 0px 1px 0px #283966;
    width: 75px;
    text-transform: uppercase;
}

.buton4:active {
    position: relative;
    top: 1px;
}

.buton4:hover {
    background-color: #0097ab;
    position: relative;
    top: 1px;
}

.buton7 {
    margin: 0px;
    position: relative;
    background-color: #203A81;
    display: inline-block;
    cursor: pointer;
    color: #ffffff;
    font-family: more;
    font-size: 18px;
    padding: 8px 17px;
    text-decoration: none;
    text-shadow: 0px 1px 0px #283966;
    width: 175px;
    text-transform: uppercase;
}

.buton7:active {
    position: relative;
    top: 1px;
}

.buton7:hover {
    background-color: #0097ab;
    position: relative;
    top: 1px;
}

.buton8 {
    margin: 0px;
    position: relative;
    background-color: #203A81;
    display: inline-block;
    cursor: pointer;
    color: #ffffff;
    font-family: more;
    font-size: 18px;
    padding: 8px 17px;
    text-decoration: none;
    text-shadow: 0px 1px 0px #283966;
    width: 175px;
    text-transform: uppercase;
}

.buton8:active {
    position: relative;
    top: 1px;
}

.buton8:hover {
    background-color: #0097ab;
    position: relative;
    top: 1px;
}

#bground3 {
    background-color: #F8F9F9;
    padding: 8px 12px 0;
}

#bground2 {
    background-color: #F8F9F9;
    padding: 0 12px;
}

#bground4 {
    padding: 0 12px;
}

textarea {
    resize: none;
}

.no-results {
    margin: auto;
    text-align: center;
    font-size: 120%;
    color: rgb(38, 34, 98);
    width: 100%;
}

.bx1 {
    margin: auto;
    width: 275px;
    font-size: 18px;
}

.bx1 input {
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

.bx1 select {
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


.hover_bkgr_fricc2 {
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

.hover_bkgr_fricc2::-webkit-scrollbar {
    display: none;
}

.hover_bkgr_fricc2 .helper {
    display: inline-block;
    height: 100%;
    vertical-align: middle;
}

.hover_bkgr_fricc2>div {
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


.hover_bkgr_fricc3 {
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

.hover_bkgr_fricc3::-webkit-scrollbar {
    display: none;
}

.hover_bkgr_fricc3 .helper {
    display: inline-block;
    height: 100%;
    vertical-align: middle;
}

.hover_bkgr_fricc3>div {
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
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
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
    background-color: #203A81;
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
    border-radius: 10px;
    display: inline-block;
    cursor: pointer;
    color: #ffffff;
    font-family: more;
    font-size: 12px;
    padding: 8px 17px;
    text-decoration: none;
    text-shadow: 0px 1px 0px #283966;
    text-transform: uppercase;
}

.buton5:active {
    position: relative;
    top: 1px;
}

.buton5:hover {
    background-color: #0097ab;
    position: relative;
    top: 1px;
}

.buton6 {
    position: relative;
    background-color: #203A81;
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
    border-radius: 10px;
    display: inline-block;
    cursor: pointer;
    color: #ffffff;
    font-family: more;
    font-size: 12px;
    padding: 8px 17px;
    text-decoration: none;
    text-shadow: 0px 1px 0px #283966;
    text-transform: uppercase;
    width: 100px;
}

.buton6:active {
    position: relative;
    top: 1px;
}

.disabled {
    pointer-events: none;
    background-color: #474545;
}

.buton6:hover {
    background-color: #0097ab;
    position: relative;
    top: 1px;
}

.bx2 {
    margin: auto;
    width: 390px;
    font-size: 18px;
}

.bx2 input {
    width: 100%;
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

.itit {
    font-size: 14px;
    overflow: hidden;
    height: 32px;
    line-height: 16px;
    font-weight: 500;
    color: #333333;
    -webkit-text-stroke-width: 1px;
    -webkit-text-stroke-color: #333333;
}

.hlite {
    color: white;
    background-color: #203a81;
    border-radius: 5px;
    text-align: center;
    padding: 0 5px 0 5px;
    -webkit-text-stroke-width: 0px;
    -webkit-text-stroke-color: #FFF;
    font-size: 12px;
}

.hlite3 {
    color: white;
    background-color: #05b08e;
    border-radius: 5px;
    text-align: center;
    padding: 0 5px 0 5px;
    -webkit-text-stroke-width: 0px;
    -webkit-text-stroke-color: #FFF;
    font-size: 12px;
}

.hlite2 {
    color: #203a81;
    text-align: left;
    font-size: 14px;
    font-weight: 600;
}

#items select {
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
    border-radius: 5px;
}


.hover_bkgr_fricc {
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

.hover_bkgr_fricc::-webkit-scrollbar {
    display: none;
}

.hover_bkgr_fricc .helper {
    display: inline-block;
    height: 100%;
    vertical-align: middle;
}

.hover_bkgr_fricc>div {
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
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
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
    width: 155px;
    font-family: more;
    font-size: 24px;
    height: 48px;
    font-weight: bold;
    overflow: hidden;
}

.buton9 {
    position: relative;
    background-color: #203A81;
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
    border-radius: 10px;
    display: inline-block;
    cursor: pointer;
    color: #ffffff;
    //font-family:more;
    font-size: 20px;
    padding: 8px 17px;
    text-decoration: none;
    text-shadow: 0px 1px 0px #283966;
    width: 300px;
    text-transform: uppercase;
}

.buton9:active {
    position: relative;
    top: 1px;
}

.buton9:hover {
    background-color: #0097ab;
    position: relative;
    top: 1px;
}

input[type=submit] {
    color: #585858;
    padding: 10px 12px;
    border: 1px solid #e2e2e2;
    margin-bottom: 10px;
    width: 100%;
}

.hidden {
    display: none;
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

.are {
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
<script>
$(function () {
    $("#datepicker").datepicker({
        minDate: 0,
        onSelect: function (date) {
        }
    });
    $("#age").datepicker({
        changeMonth: true,
        changeYear: true,
        yearRange: '-100:+0'
    });
    $("#datepicker2").datepicker({
        onSelect: function (date) {
            //items(date);
        }
    });
    $("#datepicker3").datepicker({
        onSelect: function (date) {
            //items(date);
        }
    });
});
  </script>
</head>
<body onload="javascript:items('<?php echo $day; ?>','<?php echo $day; ?>');">
<center>
    <div id='yo' style="color:gray;" class="hidden">
        <table width="1000">
            <tr>
                <td align="center">
                    <img src="logo.png"><br /><br /><br />
                    <font size="24"><b>Rental Form</b></font>
                </td>
            </tr>
            <tr>
                <td>
                    <br />
                    <table width="750" align="center">
                        <tr>
                            <td width="100" height="30" align="left" valign="bottom">Name:</td>
                            <td width="250" height="30" align="left" style="border-bottom: solid 1px black;">
                                <div id="fname">Colin Costello</div>
                            </td>
                            <td width="50" height="30" align="left"></td>
                            <td width="250" height="30" align="left" style="border-bottom: solid 1px black;"></td>
                            <td width="100" height="30" align="left" valign="bottom"></td>
                        </tr>
                        <tr>
                            <td width="100" height="30" align="left" valign="bottom">Address:</td>
                            <td width="250" height="30" align="left" style="border-bottom: solid 1px black;">
                                <div id="faddress"></div>
                            </td>
                            <td width="50" height="30" align="left"></td>
                            <td width="250" height="30" align="left" style="border-bottom: solid 1px black;"></td>
                            <td width="100" height="30" align="left" valign="bottom"></td>
                        </tr>
                        <tr>
                            <td width="100" height="30" align="left" valign="bottom">City:</td>
                            <td width="250" height="30" align="left" style="border-bottom: solid 1px black;">
                                <div id="fcity"></div>
                            </td>
                            <td width="50" height="30" align="left"></td>
                            <td width="250" height="30" align="left" style="border-bottom: solid 1px black;"></td>
                            <td width="100" height="30" align="left" valign="bottom"></td>
                        </tr>
                        <tr>
                            <td width="100" height="30" align="left" valign="bottom">Province:</td>
                            <td width="250" height="30" align="left" style="border-bottom: solid 1px black;">
                                <div id="fprovince"></div>
                            </td>
                            <td width="50" height="30" align="left"></td>
                            <td width="250" height="30" align="left" style="border-bottom: solid 1px black;"></td>
                            <td width="100" height="30" align="left" valign="bottom"></td>
                        </tr>
                        <tr>
                            <td width="100" height="30" align="left" valign="bottom">Country:</td>
                            <td width="250" height="30" align="left" style="border-bottom: solid 1px black;">
                                <div id="fcountry"></div>
                            </td>
                            <td width="50" height="30" align="left"></td>
                            <td width="250" height="30" align="left" style="border-bottom: solid 1px black;"></td>
                            <td width="100" height="30" align="left" valign="bottom"></td>
                        </tr>
                        <tr>
                            <td width="100" height="30" align="left" valign="bottom">Postal:</td>
                            <td width="250" height="30" align="left" style="border-bottom: solid 1px black;">
                                <div id="fpostal"></div>
                            </td>
                            <td width="50" height="30" align="left"></td>
                            <td width="250" height="30" align="left" style="border-bottom: solid 1px black;"></td>
                            <td width="100" height="30" align="left" valign="bottom"></td>
                        </tr>
                        <tr>
                            <td width="100" height="30" align="left" valign="bottom">Phone:</td>
                            <td width="250" height="30" align="left" style="border-bottom: solid 1px black;">
                                <div id="fphone"></div>
                            </td>
                            <td width="50" height="30" align="left"></td>
                            <td width="250" height="30" align="left" style="border-bottom: solid 1px black;"></td>
                            <td width="100" height="30" align="left" valign="bottom"></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td align="center"><br /><br />
                    <table width="750" align="center">
                        <tr>
                            <td width="100" height="30" align="left" valign="bottom">Item:</td>
                            <td width="250" height="30" align="left" style="border-bottom: solid 1px black;">
                                <div id="fitem"></div>
                            </td>
                            <td width="50" height="30" align="left"></td>
                            <td width="250" height="30" align="left" style="border-bottom: solid 1px black;"></td>
                            <td width="100" height="30" align="left" valign="bottom"></td>
                        </tr>
                        <tr>
                            <td width="100" height="30" align="left" valign="bottom">Hardware:</td>
                            <td width="250" height="30" align="left" style="border-bottom: solid 1px black;">
                                <div id="fhardware"></div>
                            </td>
                            <td width="50" height="30" align="left"></td>
                            <td width="250" height="30" align="left" style="border-bottom: solid 1px black;"></td>
                            <td width="100" height="30" align="left" valign="bottom"></td>
                        </tr>
                        <tr>
                            <td width="100" height="30" align="left" valign="bottom">Height:</td>
                            <td width="250" height="30" align="left" style="border-bottom: solid 1px black;">
                                <div id="fheight"></div>
                            </td>
                            <td width="50" height="30" align="left"></td>
                            <td width="250" height="30" align="left" style="border-bottom: solid 1px black;"></td>
                            <td width="100" height="30" align="left" valign="bottom"></td>
                        </tr>
                        <tr>
                            <td width="100" height="30" align="left" valign="bottom">Weight:</td>
                            <td width="250" height="30" align="left" style="border-bottom: solid 1px black;">
                                <div id="fweight"></div>
                            </td>
                            <td width="50" height="30" align="left"></td>
                            <td width="250" height="30" align="left" style="border-bottom: solid 1px black;"></td>
                            <td width="100" height="30" align="left" valign="bottom"></td>
                        </tr>
                        <tr>
                            <td width="100" height="30" align="left" valign="bottom">Shoe Size:</td>
                            <td width="250" height="30" align="left" style="border-bottom: solid 1px black;">
                                <div id="fshoe"></div>
                            </td>
                            <td width="50" height="30" align="left"></td>
                            <td width="250" height="30" align="left" style="border-bottom: solid 1px black;"></td>
                            <td width="100" height="30" align="left" valign="bottom"></td>
                        </tr>
                        <tr>
                            <td width="100" height="30" align="left" valign="bottom">Helmet Size:</td>
                            <td width="250" height="30" align="left" style="border-bottom: solid 1px black;">
                                <div id="fhelmet"></div>
                            </td>
                            <td width="50" height="30" align="left"></td>
                            <td width="250" height="30" align="left" style="border-bottom: solid 1px black;"></td>
                            <td width="100" height="30" align="left" valign="bottom"></td>
                        </tr>
                        <tr>
                            <td width="100" height="30" align="left" valign="bottom">Age:</td>
                            <td width="250" height="30" align="left" style="border-bottom: solid 1px black;">
                                <div id="fage"></div>
                            </td>
                            <td width="50" height="30" align="left"></td>
                            <td width="250" height="30" align="left" style="border-bottom: solid 1px black;"></td>
                            <td width="100" height="30" align="left" valign="bottom"></td>
                        </tr>
                        <tr>
                            <td width="100" height="30" align="left" valign="bottom">Gender:</td>
                            <td width="250" height="30" align="left" style="border-bottom: solid 1px black;">
                                <div id="fgender"></div>
                            </td>
                            <td width="50" height="30" align="left"></td>
                            <td width="250" height="30" align="left" style="border-bottom: solid 1px black;"></td>
                            <td width="100" height="30" align="left" valign="bottom"></td>
                        </tr>
                        <tr>
                            <td width="100" height="30" align="left" valign="bottom">Skier Type:</td>
                            <td width="250" height="30" align="left" style="border-bottom: solid 1px black;">
                                <div id="fability"></div>
                            </td>
                            <td width="50" height="30" align="left"></td>
                            <td width="250" height="30" align="left" style="border-bottom: solid 1px black;"></td>
                            <td width="100" height="30" align="left" valign="bottom"></td>
                        </tr>
                        <tr>
                            <td width="100" height="30" align="left" valign="bottom">
                                <div id="fcustom"></div>
                            </td>
                            <td width="250" height="30" align="left" style="border-bottom: solid 1px black;">
                                <div id="fcustom2"></div>
                            </td>
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
                </td>
            </tr>
            <tr>
                <td>
                    <br />
                    <table width="750" align="center">
                        <tr>
                            <td width="100" height="400" align="left" valign="bottom"></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <br />
                    <table width="950" align="center">
                        <tr>
                            <td width="100" height="30" align="left" valign="bottom">Date:</td>
                            <td width="250" height="30" align="left" style="border-bottom: solid 1px black;">
                                <div id="fdate"></div>
                            </td>
                            <td width="250" height="30" align="left"></td>
                            <td width="100" height="30" align="left" valign="bottom">Signature:</td>
                            <td width="250" height="30" align="left" style="border-bottom: solid 1px black;"></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
    <div class="hover_bkgr_fricc2">
        <span class="helper"></span>
        <div>
            <div class="popupCloseButton2">&times;</div>
            <div id='msg9' style="color: #203A81;">
                <input type="hidden" id="npID">
                <br />
                Notes:
                <br /><br />
                <div class="bx2">
                    <div style="width:99%; align: left;"><textarea style="padding: 10px;" maxlength="500" class="are"
                            id="np1"></textarea></div>
                </div>
                <div class="bx2" style="padding:0 0 15px 0;">
                    <div class="buton88" id="updatenp" style="top:15px;">Update</div>
                </div>
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
                <p>Rental Info:</p>
                <div class="bx1">
                    <div
                        style="float:left; width:40%; text-align: left; font-size: 14px; height: 35px; line-height: 35px;">
                        Renter's Name:</div>
                    <div style="float:left; width:59%; align: left; height: 35px;"><input type="text" id="fullname2">
                    </div>
                </div>
                <div class="bx1 age hidden">
                    <div
                        style="float:left; width:40%; text-align: left; font-size: 14px; height: 35px; line-height: 35px;">
                        Birth Date:</div>
                    <div style="float:left; width:59%; align: left; height: 35px;"><input type="text" id="age"
                            readonly='true'></div>
                </div>
                <div class="bx1 weight hidden">
                    <div
                        style="float:left; width:40%; text-align: left; font-size: 14px; height: 35px; line-height: 35px;">
                        Weight (lbs):</div>
                    <div style="float:left; width:59%; align: left; height: 35px;"><input type="text" id="weight"></div>
                </div>
                <div class="bx1 height hidden" id="f-height">
                    <div
                        style="float:left; width:40%; text-align: left; font-size: 14px; height: 35px; line-height: 35px;">
                        Height:</div>
                    <div style="float:left; width:28%; align: left; height: 35px;">
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
                    </div>
                </div>
                <div class="bx1 sex hidden">
                    <div
                        style="float:left; width:40%; text-align: left; font-size: 14px; height: 35px; line-height: 35px;">
                        Gender:</div>
                    <div style="float:left; width:59%; align: left; height: 35px;">
                        <select id="sex">
                            <option disabled selected value></option>
                            <option>Female</option>
                            <option>Male</option>
                            <option>Other</option>
                        </select>
                    </div>
                </div>
                <div class="bx1 equip hidden">
                    <div
                        style="float:left; width:40%; text-align: left; font-size: 14px; height: 35px; line-height: 35px;">
                        Equipment:</div>
                    <div style="float:left; width:59%; align: left; height: 35px;">
                        <select id="equip">
                            <option disabled selected value></option>
                            <option>Skis</option>
                            <option>Snowboard</option>
                            <option>Snowblades</option>
                        </select>
                    </div>
                </div>
                <div class="bx1 shoe hidden">
                    <div
                        style="float:left; width:40%; text-align: left; font-size: 14px; height: 35px; line-height: 35px;">
                        Shoe Size:</div>
                    <div style="float:left; width:28%; align: left; height: 35px;">
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
                    </div>
                </div>
                <div class="bx1 helmet hidden">
                    <div
                        style="float:left; width:40%; text-align: left; font-size: 14px; height: 35px; line-height: 35px;">
                        Helmet Size:</div>
                    <div style="float:left; width:59%; align: left; height: 35px;">
                        <select id="helmet">
                            <option disabled selected value></option>
                            <option>Small</option>
                            <option>Medium</option>
                            <option>Large</option>
                        </select>
                    </div>
                </div>
                <div class="bx1 ability hidden">
                    <div
                        style="float:left; width:40%; text-align: left; font-size: 14px; height: 35px; line-height: 35px;">
                        Skier Type:</div>
                    <div style="float:left; width:59%; align: left; height: 35px;">
                        <select id="ability">
                            <option disabled selected value></option>
                            <option>Type 1</option>
                            <option>Type 2</option>
                            <option>Type 3</option>
                        </select>
                    </div>
                </div>
                <div id="drop"></div>
                <div class="bx1" style="padding:25px;">
                    <div class="buton4" id="add2" style="top:15px">Update</div>
                </div>
            </div>
            <div id='msg5' style="color: grey;">
                <input type="hidden" id="Rid">
                <br />
                Are you sure you want to refund this item?
                <div id="mes" style="padding:15px 0 0 0; font-size:14px; color:red;"></div>
                <div class="bx1" style="padding: 0 0 25px 0;">
                    <div class="buton7" id="rid2" style="top:15px">Process Refund</div>
                </div>
            </div>
            <div id='msg6' style="color: grey;">
                <input type="hidden" id="Cid">
                <br />
                Select a new date to change day item can be redeemed!
                <br />
                <input type="text" class="daa5" id="datepicker" readonly='true' placeholder="Select Date">
                <div id="me" style="padding:0 0 0 0; font-size:10px; color:red;">(Leave date empty and customer can
                    redeem anyday)</div>
                <div class="bx1" style="padding: 0 0 25px 0;">
                    <div class="buton8" id="rid3" style="top:15px">Change Date</div>
                </div>
            </div>
            <div id='msg7' style="color: red;">
                <br />
                Failed: You must first edit the users details to include a name, email, and mobile number!
            </div>
        </div>
    </div>
    <table align="center" width="1000">
        <tr>
            <td align="center">
                <?php require("pageHeader.php"); ?>
                <br /><br />
                <table border="0" width="700" cellspacing="0" align="center">
                    <tr>
                        <td width="300" align="center">
                            <p>Start Date: <input type="text" class="daa" id="datepicker2" name="startdate"
                                    autocomplete="off"></p>
                        </td>
                        <td width="300" align="center">
                            <p>End Date: <input type="text" class="daa" id="datepicker3" name="enddate"
                                    autocomplete="off"></p>
                        </td>
                        <td width="100" align="center">
                            <input type="submit" name="btn" id="btn" value="Submit">
                        </td>
                    </tr>
                </table>
                <a href="javascript:items('Anyday','Anyday');">Show Anyday Rentals</a>
            </td>
        </tr>
    </table>
    <br />
    <div class="buton9" onclick="javascript:report();">Download CSV File</div>
    <br /><br />
    <br /><br />
    <table width="1000" class="cool" align="center">
        <tr>
            <td align="center">
                <font face="more" size="6"><b>Rentals: <span id="count">0</span></b></font>
            </td>
        </tr>
    </table>
    <div id="items" style="color: #203A81; width:1000px; font-family: 'Raleway', sans-serif; font-weight:600;"></div>
</center>
<br /><br /><br /><br /><br />
</body>
<script type="text/javascript">
$('.popupCloseButton').click(function () {
    $('.hover_bkgr_fricc').hide();
});

$('.popupCloseButton2').click(function () {
    $('.hover_bkgr_fricc2').hide();
});

function report() {
    var dw = $('#datepicker2').val();
    var dw2 = $('#datepicker3').val();
    window.open('reports6.php?go=yes&date=' + dw + '&date2=' + dw2 + '', '_top')
}

$("#btn").click(function () {
    var d1 = $('#datepicker2').val();
    var d2 = $('#datepicker3').val();
    if (d1 == "Anyday") {
        $('#datepicker2').val('Anyday');
        var d2 = 'Anyday';
    }
    if (d2 == "Anyday") {
        $('#datepicker3').val('Anyday');
        var d1 = 'Anyday';
    }
    items(d1, d2);
});

function items(date, date2, yo) {
    if (yo == 1) {
        date = $('#datepicker2').val();
        date2 = $('#datepicker3').val();
    } else {
        $('#datepicker2').val(date);
        $('#datepicker3').val(date2);
    }
    $('#items').html('');
    var dataString = {
        date: date,
        date2: date2
    };
    $.ajax({
        type: "POST",
        url: 'order2.php?',
        data: dataString,
        crossDomain: true,
        cache: false,
        dataType: 'json',
        success: function (data) {
            var te = data.length;
            if (data[0].stop == 'yes') {
                location.reload();
            }
            if (data[0].stop == 'stay') {
                $('#items').append('<br/><br/><br/>No Rentals Ordered!<br/><br/>');
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
                    var refid = data[t].rid;
                    if (cat == 1 || cat == 4) {
                        var tcat = "Ticket";
                    } else if (cat == 2) {
                        var tcat = "Rental";
                        var fullname = data[t].fullname;
                    }
                    if (t % 2 == 0) {
                        var color = "#d8e0ed";
                    } else {
                        var color = "#F2F2F2";
                    }
                    var html = "";
                    if (cat == 2) {
                        html += '<div id="I' + id + '" style="background-color: ' + color + '; overflow:hidden; height:75px;">';
                        html += '<div style="float:left; width: 40%; height: 100%; overflow:hidden; text-align:left; padding: 5px 0 5px 10px;">';
                        html += '<div class="itit" title="' + tcat + ' ' + title + ' - ' + type + '"><span class="hlite">' + tcat + '</span> <span class="hlite3">' + fullname + '</span> ' + title + ' - ' + type + '</div>';
                        html += '<div title="' + description + '" style="font-size: 12px; height:14px; line-height:14px; overflow:hidden; font-weight:600; color:#595959;">' + description + '</div>';
                        html += '<div title="' + redeemdate + ' ' + vaft + ' - ' + vbef + '" style="font-size: 12px; height:14px; line-height:14px; overflow:hidden; color:#808080; font-weight:600;"><span class="hlite2" id="RD' + id + '">Valid: ' + redeemdate + '</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' + vaft + ' - ' + vbef + '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="lookup.php?id=' + refid + '">OID: ' + refid + '</a></div>';
                        html += '</div>';
                        html += '<div id="P' + id + '" style="float:left; width: 10%; height: 100%; text-align: center; overflow:hidden; padding: 25px 0 20px 0; ">';
                        html += '$' + price + '';
                        html += '</div>';
                        html += '<div style="float:left; width: 15%; height: 100%; text-align: center; overflow:hidden; ">';
                        <?php if (GetUserPermissionsByDescription('Admin') || GetUserPermissionsByDescription('ItemInfo_ACCESS')) {
						?> html += '<div style="font-size: 10px; overflow:hidden; height:37.5px; padding: 3px 0 0 0; "><div id="RE'+ id +'" class = "buton6" onclick="javascript:rental('+ id +');">Rental Info</div></div>';
						<?php
						} elseif (!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('ItemInfo_ACCESS')) {
						?> html += '<div style="font-size: 10px; overflow:hidden; height:37.5px; padding: 3px 0 0 0; "><div id="RE'+ id +'" class = "buton6 disabled">Rental Info</div></div>';
						<?php
						}
						?>
						
						
						<?php if (GetUserPermissionsByDescription('Admin') || GetUserPermissionsByDescription('PrintWaiver_ACCESS')) {
						?> html += '<div style="font-size: 10px; overflow:hidden; height:37.5px; padding: 0 0 0 0; "><div id="PR'+ id +'" class = "buton6" onclick="javascript:print('+ id +');">Print</div></div>';
						<?php
						} elseif (!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('PrintWaiver_ACCESS')) {
						?> html += '<div style="font-size: 10px; overflow:hidden; height:37.5px; padding: 0 0 0 0; "><div id="PR'+ id +'" class = "buton6 disabled">Print</div></div>';
						<?php
						}
						?>
                            
                            
                            
						html += '</div>';
						html += '<div style="float:left; width: 15%; height: 100%; text-align: center; overflow:hidden; ">';
						
						<?php if (GetUserPermissionsByDescription('Admin') || GetUserPermissionsByDescription('Refund_ACCESS')) {
						?> html += '<div style="font-size: 10px; overflow:hidden; height:37.5px; padding: 3px 0 0 0; "><div id="R'+ id +'" class = "buton6" onclick="javascript:refund('+ id +');">Refund Item</div></div>';
						<?php
						} elseif (!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('Refund_ACCESS')) {
						?> html += '<div style="font-size: 10px; overflow:hidden; height:37.5px; padding: 3px 0 0 0; "><div id="R'+ id +'" class = "buton6 disabled">Refund Item</div></div>';
						<?php
						}
						?>
						
						<?php if (GetUserPermissionsByDescription('Admin') || GetUserPermissionsByDescription('ChangeDate_ACCESS')) {
						?> html += '<div style="font-size: 10px; overflow:hidden; height:37.5px; padding: 0 0 0 0; "><div id="C'+ id +'" class = "buton6" onclick="javascript:change('+ id +');">Change Date</div></div>';
						<?php
						} elseif (!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('ChangeDate_ACCESS')) {
						?> html += '<div style="font-size: 10px; overflow:hidden; height:37.5px; padding: 0 0 0 0; "><div id="C'+ id +'" class = "buton6 disabled">Change Date</div></div>';
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
						html += '<div id="S'+ id +'" style="float:right; width: 15%; height: 100%; text-align: center; overflow:hidden; padding: 25px 0 20px 0; background-color: #fa3025; margin-top: 1px; margin-bottom: 1px;">';
						html += '<select class="status" id="D'+ id +'" name="'+ id +'">';
						html += '<option value="0">Ordered</option>';
						html += '<option value="1">Prepared</option>';
						html += '<option value="2">Picked Up</option>';
						html += '<option value="3">Returned</option>';
						html += '</select>';
						html += '</div>';
						html += '</div>';
						
                    }else{
                            
						html += '<div id="I'+ id +'" style="background-color: '+ color +'; overflow:hidden; height:75px;">';
						html += '<div style="float:left; width: 40%; height: 100%; overflow:hidden; text-align:left; padding: 5px 0 5px 10px;">';
						html += '<div class="itit" title="'+ tcat +' '+ title +' - '+ type +'"><span class="hlite">'+ tcat +'</span> '+ title +' - '+ type +'</div>';
						html += '<div title="'+ description +'" style="font-size: 12px; height:14px; line-height:14px; overflow:hidden; font-weight:600; color:#595959;">'+ description +'</div>';
						html += '<div title="'+ redeemdate +' '+ vaft +' - '+ vbef +'" style="font-size: 12px; height:14px; line-height:14px; overflow:hidden; color:#808080; font-weight:600;"><span class="hlite2" id="RD'+ id +'">Valid: '+ redeemdate +'</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+ vaft +' - '+ vbef +'</div>';
						html += '</div>';
						html += '<div id="P'+ id +'" style="float:left; width: 10%; height: 100%; text-align: center; overflow:hidden; padding: 25px 0 20px 0;">';
						html += '$'+ price +'';
						html += '</div>';
						html += '<div style="float:left; width: 15%; height: 100%; text-align: center; overflow:hidden; padding: 25px 0 20px 0; ">';
						html += '</div>';
						html += '<div style="float:left; width: 15%; height: 100%; text-align: center; overflow:hidden; ">';
					
						<?php if (GetUserPermissionsByDescription('Admin') || GetUserPermissionsByDescription('Refund_ACCESS')) {
						?> html += '<div style="font-size: 10px; overflow:hidden; height:37.5px; padding: 3px 0 0 0; "><div id="R'+ id +'" class = "buton6" onclick="javascript:refund('+ id +');">Refund Item</div></div>';
						<?php
						} elseif (!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('Refund_ACCESS')) {
						?> html += '<div style="font-size: 10px; overflow:hidden; height:37.5px; padding: 3px 0 0 0; "><div id="R'+ id +'" class = "buton6 disabled">Refund Item</div></div>';
						<?php
						}
						?>
						
						<?php if (GetUserPermissionsByDescription('Admin') || GetUserPermissionsByDescription('ChangeDate_ACCESS')) {
						?> html += '<div style="font-size: 10px; overflow:hidden; height:37.5px; padding: 0 0 0 0; "><div id="C'+ id +'" class = "buton6" onclick="javascript:change('+ id +');">Change Date</div></div>';
						<?php
						} elseif (!GetUserPermissionsByDescription('Admin') || !GetUserPermissionsByDescription('ChangeDate_ACCESS')) {
						?> html += '<div style="font-size: 10px; overflow:hidden; height:37.5px; padding: 0 0 0 0; "><div id="C'+ id +'" class = "buton6 disabled">Change Date</div></div>';
						<?php
						}
						?>
						
						html += '</div>';
						html += '<div id="S'+ id +'" style="float:right; width: 15%; height: 100%; text-align: center; overflow:hidden; padding: 25px 0 20px 0; background-color: #fa3025; margin-top: 1px; margin-bottom: 1px;">';
						html += '<select class="status" id="D'+ id +'" name="'+ id +'">';
						html += '<option value="0">Ordered</option>';
						html += '<option value="2">Picked Up</option>';
						html += '</select>';
						html += '</div>';
						html += '</div>';
                            
                    }
                    $('#items').append(html);
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
                    if (voi == 'yes') {
                        $('#R' + id + '').addClass('disabled');
                        $('#S' + id + '').addClass('disabled');
                        $('#C' + id + '').addClass('disabled');
                        $('#P' + id + '').css('text-decoration', 'line-through');
                        $('#P' + id + '').css('color', 'red');
                        if (cat == 2) {
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
            $('#items').append('<br/><br/>');
            $('#count').html(te - 1);
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

function notep(id) {
    $('#npID').val(id);
    $('#np1').val('');
    getnotes(id);
    $('.hover_bkgr_fricc2').show();
}

function rental(id) {
    $('#msg5').hide();
    $('#msg6').hide();
    $('#msg7').hide();
    dbox(id);
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
    $('.bx1.height').hide();
    $('.bx1.weight').hide();
    $('.bx1.shoe').hide();
    $('.bx1.helmet').hide();
    $('.bx1.age').hide();
    $('.bx1.sex').hide();
    $('.bx1.ability').hide();
    $('.bx1.equip').hide();
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
            //alert(data[0].stop);
            if (data[0].stop == 'no') {
                var field1 = data[1].height;
                var field2 = data[1].weight;
                var field3 = data[1].shoe;
                var field4 = data[1].helmet;
                var field5 = data[1].sex;
                var field6 = data[1].age;
                var field7 = data[1].ability;
                var field8 = data[1].equip;
                var fields = "" + field1 + "-" + field2 + "-" + field3 + "-" + field4 + "-" + field6 + "-" + field5 + "-" + field7 + "-" + field8 + "-";
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
                //alert(data[0].stop);
                if (data[0].stop == '1') {
                    //alert('success');
                    $('#msg2').hide();
                    $('.hover_bkgr_fricc').hide();
                    items(1, 1, 1);
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
                $('.hover_bkgr_fricc2').hide();
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
                $('.hover_bkgr_fricc').hide();
                $('#I' + Rid + '').slideUp();
                var count = $('#count').html();
                $('#count').html(count - 1);
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
            //alert(data[0].stop);
            if (data == '1') {
                if (cdate == '') {
                    cdate = 'Anyday';
                }
                $('#RD' + Cid + '').html('Valid: ' + cdate + '');
                $('#D' + Cid + '').val('0');
                $('#S' + Cid + '').css('background-color', '#fa3025');
                $('.hover_bkgr_fricc').hide();
                $('#I' + Cid + '').slideUp();
                var count = $('#count').html();
                $('#count').html(count - 1);
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
