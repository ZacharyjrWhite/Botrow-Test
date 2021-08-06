

<?php
require("login.php");
//require("dbase.php");





if(isset($_REQUEST['day'])) {
	$day = $_REQUEST['day'];

	
	
}else{
	
	
	$day = date("l");
	
}





?>
<head>
  <meta charset="utf-8">
  <title>Botrow - Weekly Items</title>

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


	select {
	
  color: #585858;
  padding: 10px 12px;
  border: 1px solid #e2e2e2;
  margin-bottom: 10px;
  width:100%;
			font-family:more;
	font-size:14px;
		height: 38px;
	}
	
	::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #585858;
  opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: #585858;
}

::-ms-input-placeholder { /* Microsoft Edge */
  color: #585858;
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
	background-color: #0097ab;
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
		background-color:#203A81;
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


	
/* Popup box BEGIN */
.hover_bkgr_fricc{
    background:rgba(0,0,0,.4);
    cursor:pointer;
    display:none;
    height:100%;
    position:fixed;
    text-align:center;
    top:0;
	left:0;
    width:100%;
    z-index:10000;
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
    width: 60%;
    position: relative;
    border-radius: 8px;
    padding: 15px 5%;
	color: red;
	font-family: "Raleway", sans-serif;
	font-size: 25px;
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
    top: -20px;
    right: -20px;
    font-size: 25px;
    line-height: 25px;
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

.bx1{
margin: auto;
  width: 200px;
  font-size: 18px;
	
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

<div class="hover_bkgr_fricc">
    <span class="helper"></span>
    <div>
        <div class="popupCloseButton">&times;</div>
        <div id='msg'></div>
    </div>
</div>

<table align="center" width="1200"><tr><td align="center">
<?php require("pageHeader.php"); ?>


<br/><br/>


<table border = "0" width = "400" cellspacing = "0" align="center">
<tr>
<td width = "400" align="center">
<p>

<select class = "daa" id = "daaa" onchange="getDay(this)">
  <option value="Sunday" <?php if($day == "Sunday"){ ?> selected = "selected" <?php } ?>>Sunday</option>
  <option value="Monday" <?php if($day == "Monday"){ ?> selected = "selected" <?php } ?>>Monday</option>
  <option value="Tuesday" <?php if($day == "Tuesday"){ ?> selected = "selected" <?php } ?>>Tuesday</option>
  <option value="Wednesday" <?php if($day == "Wednesday"){ ?> selected = "selected" <?php } ?>>Wednesday</option>
  <option value="Thursday" <?php if($day == "Thursday"){ ?> selected = "selected" <?php } ?>>Thursday</option>
    <option value="Friday" <?php if($day == "Friday"){ ?> selected = "selected" <?php } ?>>Friday</option>
  <option value="Saturday" <?php if($day == "Saturday"){ ?> selected = "selected" <?php } ?>>Saturday</option>
</select>

</p>

</td>
</tr>


</table>


</td></tr></table><br/>




<table width = "1200" id="bground3" align="center">
<tr><td width = "100" align="center">
Item
</td>
<td width = "150" align="center">
Class
</td>
<td width = "140" align="center">
Description
</td>
<td width = "140" align="center">
Type
</td>
<td width = "105" align="center">
Sold After
</td>
<td width = "105" align="center">
Sold Before
</td>
<td width = "110" align="center">
Valid After
</td>
<td width = "110" align="center">
Valid Before
</td>
<td width = "100" align="center">
Valid For
</td>
<td width = "90" align="center">
Price
</td>
<td width = "50" valign="top" align="center">

</td>
</tr>
<tr><td width = "100" valign="center" align="center">
<select class = "daa1" id = "item">
<option value="" disabled selected></option>
  <option value="1" >Ticket</option>
  <option value="2" >Rental</option>
</select>
</td>
<td width = "150" valign="center" align="center">
<textarea class = "daa1" id = "Clas"  placeholder="Ex: Adult, Child" alt="Ex: Adult, Child" title="Ex: Adult, Child"></textarea>
</td>
<td width = "140" valign="center" align="center">
<textarea class = "daa1" id = "Desc"  placeholder="Ex: 18yrs & over" alt="Ex: 18yrs & over" title="Ex: 18yrs & over"></textarea>
</td>
<td width = "140" valign="center" align="center">
<textarea class = "daa1" id = "Type"  placeholder="Ex: Full Day" alt="Ex: Full Day" title="Ex: Full Day"></textarea>
</td>
<td width = "105" valign="center" align="center">
<select class = "daa1" id = "Soldafter"  placeholder="Sold After" alt="Ex: 8am" title="Ex: 8am">
<option value="" disabled selected></option>
  <option value = "05:00:00">05:00am</option>
  <option value = "05:30:00">05:30am</option> 
  <option value = "06:00:00">06:00am</option>
  <option value = "06:30:00">06:30am</option>
  <option value = "07:00:00">07:00am</option>
  <option value = "07:30:00">07:30am</option>
  <option value = "08:00:00">08:00am</option>
  <option value = "08:30:00">08:30am</option>
  <option value = "09:00:00">09:00am</option>
  <option value = "09:30:00">09:30am</option>
  <option value = "10:00:00">10:00am</option>
  <option value = "10:30:00">10:30am</option>
  <option value = "11:00:00">11:00am</option>
  <option value = "11:30:00">11:30am</option>
  <option value = "12:00:00">12:00pm</option>
  <option value = "12:30:00">12:30pm</option>
  <option value = "13:00:00">01:00pm</option>
  <option value = "13:30:00">01:30pm</option>
  <option value = "14:00:00">02:00pm</option>
  <option value = "14:30:00">02:30pm</option>
  <option value = "15:00:00">03:00pm</option>
  <option value = "15:30:00">03:30pm</option>    
  <option value = "16:00:00">04:00pm</option>
  <option value = "16:30:00">04:30pm</option>
  <option value = "17:00:00">05:00pm</option>
  <option value = "17:30:00">05:30pm</option>
  <option value = "18:00:00">06:00pm</option>
  <option value = "18:30:00">06:30pm</option>
  <option value = "19:00:00">07:00pm</option>
  <option value = "19:30:00">07:30pm</option>
  <option value = "20:00:00">08:00pm</option>
  <option value = "20:30:00">08:30pm</option>
  <option value = "21:00:00">09:00pm</option>
  <option value = "21:30:00">09:30pm</option>
  <option value = "22:00:00">10:00pm</option>
  <option value = "22:30:00">10:30pm</option>
  <option value = "23:00:00">11:00pm</option>
  <option value = "23:30:00">11:30pm</option>
  <option value = "24:00:00">12:00am</option>
   

</select>
</td>
<td width = "105" valign="center" align="center">
<select class = "daa1" id = "Soldbefore"  placeholder="Sold Before" alt="Ex: 9pm" title="Ex: 9pm">
<option value="" disabled selected></option>
  <option value = "05:00:00">05:00am</option>
  <option value = "05:30:00">05:30am</option> 
  <option value = "06:00:00">06:00am</option>
  <option value = "06:30:00">06:30am</option>
  <option value = "07:00:00">07:00am</option>
  <option value = "07:30:00">07:30am</option>
  <option value = "08:00:00">08:00am</option>
  <option value = "08:30:00">08:30am</option>
  <option value = "09:00:00">09:00am</option>
  <option value = "09:30:00">09:30am</option>
  <option value = "10:00:00">10:00am</option>
  <option value = "10:30:00">10:30am</option>
  <option value = "11:00:00">11:00am</option>
  <option value = "11:30:00">11:30am</option>
  <option value = "12:00:00">12:00pm</option>
  <option value = "12:30:00">12:30pm</option>
  <option value = "13:00:00">01:00pm</option>
  <option value = "13:30:00">01:30pm</option>
  <option value = "14:00:00">02:00pm</option>
  <option value = "14:30:00">02:30pm</option>
  <option value = "15:00:00">03:00pm</option>
  <option value = "15:30:00">03:30pm</option>    
  <option value = "16:00:00">04:00pm</option>
  <option value = "16:30:00">04:30pm</option>
  <option value = "17:00:00">05:00pm</option>
  <option value = "17:30:00">05:30pm</option>
  <option value = "18:00:00">06:00pm</option>
  <option value = "18:30:00">06:30pm</option>
  <option value = "19:00:00">07:00pm</option>
  <option value = "19:30:00">07:30pm</option>
  <option value = "20:00:00">08:00pm</option>
  <option value = "20:30:00">08:30pm</option>
  <option value = "21:00:00">09:00pm</option>
  <option value = "21:30:00">09:30pm</option>
  <option value = "22:00:00">10:00pm</option>
  <option value = "22:30:00">10:30pm</option>
  <option value = "23:00:00">11:00pm</option>
  <option value = "23:30:00">11:30pm</option>
  <option value = "24:00:00">12:00am</option>
   

</select>
</td>
<td width = "110" valign="center" align="center">
<select class = "daa1" id = "Validafter"  placeholder="Valid After" alt="Ex: 8am" title="Ex: 8am">
<option value="" disabled selected></option>
  <option value = "05:00:00">05:00am</option>
  <option value = "05:30:00">05:30am</option> 
  <option value = "06:00:00">06:00am</option>
  <option value = "06:30:00">06:30am</option>
  <option value = "07:00:00">07:00am</option>
  <option value = "07:30:00">07:30am</option>
  <option value = "08:00:00">08:00am</option>
  <option value = "08:30:00">08:30am</option>
  <option value = "09:00:00">09:00am</option>
  <option value = "09:30:00">09:30am</option>
  <option value = "10:00:00">10:00am</option>
  <option value = "10:30:00">10:30am</option>
  <option value = "11:00:00">11:00am</option>
  <option value = "11:30:00">11:30am</option>
  <option value = "12:00:00">12:00pm</option>
  <option value = "12:30:00">12:30pm</option>
  <option value = "13:00:00">01:00pm</option>
  <option value = "13:30:00">01:30pm</option>
  <option value = "14:00:00">02:00pm</option>
  <option value = "14:30:00">02:30pm</option>
  <option value = "15:00:00">03:00pm</option>
  <option value = "15:30:00">03:30pm</option>    
  <option value = "16:00:00">04:00pm</option>
  <option value = "16:30:00">04:30pm</option>
  <option value = "17:00:00">05:00pm</option>
  <option value = "17:30:00">05:30pm</option>
  <option value = "18:00:00">06:00pm</option>
  <option value = "18:30:00">06:30pm</option>
  <option value = "19:00:00">07:00pm</option>
  <option value = "19:30:00">07:30pm</option>
  <option value = "20:00:00">08:00pm</option>
  <option value = "20:30:00">08:30pm</option>
  <option value = "21:00:00">09:00pm</option>
  <option value = "21:30:00">09:30pm</option>
  <option value = "22:00:00">10:00pm</option>
  <option value = "22:30:00">10:30pm</option>
  <option value = "23:00:00">11:00pm</option>
  <option value = "23:30:00">11:30pm</option>
  <option value = "24:00:00">12:00am</option>
   

</select>
</td>
<td width = "110" valign="center" align="center">
<select class = "daa1" id = "Validbefore"  placeholder="Valid Before" alt="Ex: 9pm" title="Ex: 9pm">
<option value="" disabled selected></option>
  <option value = "05:00:00">05:00am</option>
  <option value = "05:30:00">05:30am</option> 
  <option value = "06:00:00">06:00am</option>
  <option value = "06:30:00">06:30am</option>
  <option value = "07:00:00">07:00am</option>
  <option value = "07:30:00">07:30am</option>
  <option value = "08:00:00">08:00am</option>
  <option value = "08:30:00">08:30am</option>
  <option value = "09:00:00">09:00am</option>
  <option value = "09:30:00">09:30am</option>
  <option value = "10:00:00">10:00am</option>
  <option value = "10:30:00">10:30am</option>
  <option value = "11:00:00">11:00am</option>
  <option value = "11:30:00">11:30am</option>
  <option value = "12:00:00">12:00pm</option>
  <option value = "12:30:00">12:30pm</option>
  <option value = "13:00:00">01:00pm</option>
  <option value = "13:30:00">01:30pm</option>
  <option value = "14:00:00">02:00pm</option>
  <option value = "14:30:00">02:30pm</option>
  <option value = "15:00:00">03:00pm</option>
  <option value = "15:30:00">03:30pm</option>    
  <option value = "16:00:00">04:00pm</option>
  <option value = "16:30:00">04:30pm</option>
  <option value = "17:00:00">05:00pm</option>
  <option value = "17:30:00">05:30pm</option>
  <option value = "18:00:00">06:00pm</option>
  <option value = "18:30:00">06:30pm</option>
  <option value = "19:00:00">07:00pm</option>
  <option value = "19:30:00">07:30pm</option>
  <option value = "20:00:00">08:00pm</option>
  <option value = "20:30:00">08:30pm</option>
  <option value = "21:00:00">09:00pm</option>
  <option value = "21:30:00">09:30pm</option>
  <option value = "22:00:00">10:00pm</option>
  <option value = "22:30:00">10:30pm</option>
  <option value = "23:00:00">11:00pm</option>
  <option value = "23:30:00">11:30pm</option>
  <option value = "24:00:00">12:00am</option>
   

</select>
</td>
<td width = "100" valign="center" align="center">
<select class = "daa1" id = "Validfor"  placeholder="Valid For" alt="Ex: 2hrs" title="Ex: 2hrs">
<option value="" disabled selected></option>
  <option value = "N/A">N/A</option>
  <option value = "1">1 hr</option>
  <option value = "2">2 hrs</option> 
  <option value = "3">3 hrs</option>
  <option value = "4">4 hrs</option>
  <option value = "5">5 hrs</option>
  <option value = "6">6 hrs</option>  
</select>
</td>
<td width = "90" valign="center" align="center">
<textarea class = "daa1" id = "Price"  placeholder="Ex: 40.99" alt="Ex: 40.99" title="Ex: 40.99"></textarea>
</td>
<td width = "50" valign="center" align="center">
<div class = "buton3" id = "add" >Add</div>
</td>
</tr>


<tr><table width = "1200" id="bground2" align="center" border = "0"><tr>
<td width = "100" align = "right">
Qty To Print: </td>
<td width = "60" align = "left">
<select class = "daa1" id = "printq"  placeholder="" alt="Ex: 1" title="Ex: 1">

<option value="" disabled selected></option>
  <option value = "1">1</option>
  <option value = "2">2</option>
  <option value = "3">3</option>
  <option value = "4">4</option>
  <option value = "5">5</option>
  <option value = "6">6</option>
  <option value = "7">7</option>
  <option value = "8">8</option>  
  <option value = "9">9</option>
  <option value = "10">10</option>  
  <option value = "11">11</option>
  <option value = "12">12</option>
  <option value = "13">13</option>
  <option value = "14">14</option>
  <option value = "15">15</option>
  <option value = "16">16</option>
  <option value = "17">17</option>
  <option value = "18">18</option>  
  <option value = "19">19</option>
  <option value = "20">20</option>     
  <option value = "21">21</option>
  <option value = "23">22</option>
  <option value = "23">23</option>  
  <option value = "24">24</option>
  <option value = "25">25</option> 
  </select>
  </td>
<td width = "100" align = "right">
Ticket Type: </td>
<td width = "100" align = "left">
<select class = "daa1" id = "tictype"  placeholder="tic type" alt="Ex: Label/Bracelet" title="Ex: Label/Bracelet">
<option value="" disabled selected></option>
  <option value = "1">Label/Bracelet</option>
  <option value = "2">Rcpt Paper</option>  
</select>
</td>
<td width = "100" align = "right">
Instructions: </td>
<td width = "100" align = "left">
<textarea class = "daa1" id = "redeem"  placeholder="Ex: Redeem at..." alt="Ex: Redeem at..." title="Ex: Redeem at..."></textarea>

</td>
<td width = "80" align = "right">
Inventory: </td>
<td width = "100" align = "left">
<select class = "daa1" id = "inventory"  placeholder="" alt="Ex: Adult Bikes" title="Ex: Adult Bikes">
<option value="" disabled selected></option>
  <option value = "N/A">N/A</option>
  
  <?php

$aa6 = mysqli_query($db,"SELECT * FROM inventory where del is NULL order by name asc");   
$bb6 = mysqli_num_rows($aa6);

$fk = 0;
while ($fk < $bb6){
	$iid=mysqli_result($aa6,$fk,"id");
	$iname=mysqli_result($aa6,$fk,"name");

?>
  <option value = "<?php echo $iid; ?>"><?php echo $iname; ?></option>

<?php

$fk++;
}	
  
  ?>
  
  
</select>
</td>
<td width = "60" align = "right">
Sold: </td>
<td width = "80" align = "left">
<select class = "daa1" id = "sold"  placeholder="" alt="Ex: Kiosk" title="Ex: Kiosk">
<option value="" disabled selected></option>
  <option value = "1">Kiosk</option>
  <option value = "2">Web</option>  
   <option value = "3">Both</option>  

</select>
</td>
<td width = "100" valign="center" align="center">

</td>
</tr></table>
</tr>


</table>

<br/><br/><table width="1200" class="cool" align="center"><tr><td align="center"><font face="more" size="6"><b>Items For Sale:</b></font>
</td></tr></table>
<div id="items"></div>
</center>
<br/><br/><br/><br/><br/>
<script type="text/javascript">


		function popup(itemid, height, weight, shoe, helmet, age, sex, ability, equip) {

html = '';
html += '<p>Select Rental Fields To Collect:';
if (equip == true) { 
html += '<div class="bx1" ><div style="float:left; width:70%; text-align: left;">Hardware:</div> <div style="float:left; width:20%; align: right;"><input type="checkbox" id="equip" checked=checked></div></div>';
}
else{
html += '<div class="bx1" ><div style="float:left; width:70%; text-align: left;">Hardware:</div> <div style="float:left; width:20%; align: right;"><input type="checkbox" id="equip"></div></div>';
	
}
if (height == true) { 
html += '<div class="bx1" ><div style="float:left; width:70%; text-align: left;">Height:</div> <div style="float:left; width:20%; align: right;"><input type="checkbox" id="height" checked=checked></div></div>';
}
else{
html += '<div class="bx1" ><div style="float:left; width:70%; text-align: left;">Height:</div> <div style="float:left; width:20%; align: right;"><input type="checkbox" id="height"></div></div>';
	
}
if (weight == true) { 
html += '<div class="bx1" ><div style="float:left; width:70%; text-align: left;">Weight:</div> <div style="float:left; width:20%; align: right;"><input type="checkbox" id="weight" checked=checked></div></div>';
}
else{
html += '<div class="bx1" ><div style="float:left; width:70%; text-align: left;">Weight:</div> <div style="float:left; width:20%; align: right;"><input type="checkbox" id="weight"></div></div>';
	
}
if (shoe == true) { 
html += '<div class="bx1" ><div style="float:left; width:70%; text-align: left;">Shoe Size:</div> <div style="float:left; width:20%; align: right;"><input type="checkbox" id="shoe" checked=checked></div></div>';
}
else{
html += '<div class="bx1" ><div style="float:left; width:70%; text-align: left;">Shoe Size:</div> <div style="float:left; width:20%; align: right;"><input type="checkbox" id="shoe"></div></div>';
	
}
if (helmet == true) { 
html += '<div class="bx1" ><div style="float:left; width:70%; text-align: left;">Helmet Size:</div> <div style="float:left; width:20%; align: right;"><input type="checkbox" id="helmet" checked=checked></div></div>';
}
else{
html += '<div class="bx1" ><div style="float:left; width:70%; text-align: left;">Helmet Size:</div> <div style="float:left; width:20%; align: right;"><input type="checkbox" id="helmet"></div></div>';
	
}
if (age == true) { 
html += '<div class="bx1" ><div style="float:left; width:70%; text-align: left;">Age:</div> <div style="float:left; width:20%; align: right;"><input type="checkbox" id="age" checked=checked></div></div>';
}
else{
html += '<div class="bx1" ><div style="float:left; width:70%; text-align: left;">Age:</div> <div style="float:left; width:20%; align: right;"><input type="checkbox" id="age"></div></div>';
	
}
if (sex == true) { 
html += '<div class="bx1" ><div style="float:left; width:70%; text-align: left;">Sex:</div> <div style="float:left; width:20%; align: right;"><input type="checkbox" id="sex" checked=checked></div></div>';
}
else{
html += '<div class="bx1" ><div style="float:left; width:70%; text-align: left;">Sex:</div> <div style="float:left; width:20%; align: right;"><input type="checkbox" id="sex"></div></div>';
	
}
if (ability == true) { 
html += '<div class="bx1" ><div style="float:left; width:70%; text-align: left;">Skier Type:</div> <div style="float:left; width:20%; align: right;"><input type="checkbox" id="ability" checked=checked></div></div>';
}
else{
html += '<div class="bx1" ><div style="float:left; width:70%; text-align: left;">Skier Type:</div> <div style="float:left; width:20%; align: right;"><input type="checkbox" id="ability"></div></div>';
	
}


html += '<div class="bx1"" ><div style="float:left; width:90%; align: center; position:relative; padding-top:25px;">Inventory Options:</div></div>';

html += '<div class="bx1" ><div id = "rinv" style="float:left; width:90%; align: center;"></div></div>';


html += '</p>';
html += '<div class="bx1" style="padding:25px;"><div class = "buton4" id = "add2"  style="top:15px">Submit</div></div>';



							$('#msg').html(html);
							
							
							
dbox(itemid);

							

									$('#msg').css('color', 'grey');

if (height != null || weight != null || shoe != null || helmet != null || age != null || sex != null || ability != null || equip != null){
	
	
	var upd = 'yes';
}else{
		var upd = 'no';

	
}


		
       $('.hover_bkgr_fricc').show();
	   
	   
$("#add2").click(function(){

	var height = $("#height").is(':checked');
	var weight = $("#weight").is(':checked');
	var shoe = $("#shoe").is(':checked');
	var helmet = $("#helmet").is(':checked');
	var age = $("#age").is(':checked');
	var sex = $("#sex").is(':checked');
	var ability = $("#ability").is(':checked');
var equip = $("#equip").is(':checked');

var drop = $("#r5").val();


			var dataString = {
	
					jack : '',
					id : itemid,
					height : height,
					weight : weight,
					shoe : shoe,
					helmet : helmet,
					age : age,
					sex : sex,
					ability : ability,
					equip : equip,
					drop : drop
	
};
			
			
			
					$.ajax({
					type: "POST",
					url: 'addrentals.php?',
					data: dataString,
					crossDomain: true,
					cache: false,
					dataType:'json', 
					success:function(data){
					var te = data.length;
					//alert(data[0].stop);
					  	//alert('hello');	
					if (data[0].resp == 1){
						
						
						
						 $('.hover_bkgr_fricc').hide();
						 
						 if (upd == 'yes'){
						 
						 setTimeout(function() { added(1); }, 500);
						 }
						 else{
						 setTimeout(function() { added(2); }, 500);

							 
						 }
  
  
   	  $( "#items" ).load( "/tickets2.php?day=<?php echo $day; ?>", function( response, status, xhr ) {
  if ( status == "error" ) {
//var msg = "Sorry but there was an error: ";
    //alert( msg + xhr.status + " " + xhr.statusText );
  
  location.href = 'weekly.php';
  }
});	
  
  
					}

								else if (data[0].resp == 2){
				
	  alert('Error!');	
  
          location.href = 'weekly.php';

 
  
  
					}							

	
					},
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
        location.href = 'weekly.php';
    }  
					});



});
	   
			}


    $('.popupCloseButton').click(function(){
        $('.hover_bkgr_fricc').hide();
    });







var idleTime = 0;
$(document).ready(function () {
    //Increment the idle time counter every minute.
    var idleInterval = setInterval(timerIncrement, 60000); // 1 minute

    //Zero the idle timer on mouse movement.
    $(this).mousemove(function (e) {
        idleTime = 0;

    });
    $(this).keypress(function (e) {
        idleTime = 0;
    });
});

function timerIncrement() {
    idleTime = idleTime + 1;
    if (idleTime > 24) { // 25 minutes
        window.location.reload();
     //location.href = '/index.php';
	}
}


  	  $( "#items" ).load( "tickets2.php?day=<?php echo $day; ?>", function( response, status, xhr ) {
  if ( status == "error" ) {
var msg = "Sorry but there was an error: ";
    alert( msg + xhr.status + " " + xhr.statusText );
  
  location.href = 'index.php';
  }
});	


function getDay(selectObject) {
    var value = selectObject.value;  
	
	location.href = 'weekly.php?day='+value+'';
}


/* $("#tictype").on('change', function(){
	var hjk = $(this).val();
	$('#redeem').css({'border':'1px solid #e2e2e2'});

if (hjk == '1'){

$("#redeem").val('');

$("#redeem").prop('disabled', true);
}

if (hjk == '2'){

$("#redeem").prop('disabled', false);
}


}); */




function added(we){
	
	if (we == 1){
		
				  alert('Item Updated!');	

	}else{
		  alert('Item Added!');	
	}
	
}



$("#add").click(function(){
	$('#item').css({'border':'1px solid #e2e2e2'});
	$('#Clas').css({'border':'1px solid #e2e2e2'});
	$('#Type').css({'border':'1px solid #e2e2e2'});
	$('#Soldafter').css({'border':'1px solid #e2e2e2'});
	$('#Soldbefore').css({'border':'1px solid #e2e2e2'});
	$('#Validafter').css({'border':'1px solid #e2e2e2'});
	$('#Validbefore').css({'border':'1px solid #e2e2e2'});
	$('#Validfor').css({'border':'1px solid #e2e2e2'});
	$('#Price').css({'border':'1px solid #e2e2e2'});	

	$('#printq').css({'border':'1px solid #e2e2e2'});
	$('#tictype').css({'border':'1px solid #e2e2e2'});
	$('#redeem').css({'border':'1px solid #e2e2e2'});
	$('#inventory').css({'border':'1px solid #e2e2e2'});
		$('#sold').css({'border':'1px solid #e2e2e2'});


var daa = $("#daaa").val();
var item = $("#item").val();
var Clas = $("#Clas").val();
var Desc = $("#Desc").val();
var Type = $("#Type").val();
var SA = $("#Soldafter").val();
var SB = $("#Soldbefore").val();
var VA = $("#Validafter").val();
var VB = $("#Validbefore").val();
var VF = $("#Validfor").val();
var Price = $("#Price").val();
var PQ = $("#printq").val();
var TT = $("#tictype").val();
var RE = $("#redeem").val();
var IN = $("#inventory").val();
var sold = $("#sold").val();


if (item == null || item == ""){
	$('#item').css({'border':'1px solid red'});
		
	
}
else if (Clas == null || Clas == ""){
	
	$('#Clas').css({'border':'1px solid red'});
	
}
else if (Type == null || Type == ""){
	
		$('#Type').css({'border':'1px solid red'});
	
}
else if (SA == null || SA == ""){
	
		$('#Soldafter').css({'border':'1px solid red'});
	
}
else if (SB == null || SB == ""){
	
		$('#Soldbefore').css({'border':'1px solid red'});
	
	
}
else if (VA == null || VA == ""){
	
		$('#Validafter').css({'border':'1px solid red'});
	
	
}
else if (VB == null || VB == ""){
	
		$('#Validbefore').css({'border':'1px solid red'});
	
	
}
else if (VF == null || VF == ""){
	
		$('#Validfor').css({'border':'1px solid red'});
	
	
}
else if (Price == null || Price == ""){
	
		$('#Price').css({'border':'1px solid red'});
	
	
}
else if (PQ == null || PQ == ""){
	
		$('#printq').css({'border':'1px solid red'});
	
	
}
else if (TT == null || TT == ""){
	
		$('#tictype').css({'border':'1px solid red'});
	
	
}
/* else if (TT == '2' && (RE == null || RE == "")){
	
		$('#redeem').css({'border':'1px solid red'});
	
	
} */
else if (IN == null || IN == ""){
	
		$('#inventory').css({'border':'1px solid red'});
	
	
}
else if (sold == null || sold == ""){
	
		$('#sold').css({'border':'1px solid red'});
	
	
}
else{
	
var Price = Price.replace('$', '');
var Price = Price.replace(',', '');
var Price = parseFloat(Math.round(Price * 100) / 100).toFixed(2);	

if ( SA >= SB){
	
	$('#Soldbefore').css({'border':'1px solid red'});
	$('#Soldafter').css({'border':'1px solid red'});
}
else if (VA >= VB){
	
	$('#Validbefore').css({'border':'1px solid red'});
	$('#Validafter').css({'border':'1px solid red'});
}
else if (isNaN(Price)){
		$('#Price').css({'border':'1px solid red'});
}
else if (Math.round(Price) == 0){
		$('#Price').css({'border':'1px solid red'});
}
else{

			var dataString = {
	
					jack : '',
					cat : item,
					title : Clas,
					desc : Desc,
					type : Type,
					price : Price,
					soldon : daa,
					sa : SA,
					sb : SB,
					va : VA,
					vb : VB,
					vf : VF,
					pq : PQ,
					tt : TT,
					re : RE,
					inv : IN,
					sld : sold
	
};
			
			
			
					$.ajax({
					type: "POST",
					url: 'add.php?',
					data: dataString,
					crossDomain: true,
					cache: false,
					dataType:'json', 
					success:function(data){
					var te = data.length;
					//alert(data[0].stop);
					  	//alert('hello');	
					if (data[0].resp == 1){
						
						
						
				
	  alert('Item Added!');	
  
  
   	  $( "#items" ).load( "/tickets2.php?day=<?php echo $day; ?>", function( response, status, xhr ) {
  if ( status == "error" ) {
//var msg = "Sorry but there was an error: ";
    //alert( msg + xhr.status + " " + xhr.statusText );
  
  location.href = 'weekly.php';
  }
});	
  
  
					}

								else if (data[0].resp == 2){
				
	  alert('Error!');	
  
  
         location.href = 'weekly.php';

  
  
					}	else if (data[0].resp == 5){
var itemid = data[1].itemid;
popup(itemid);

					}						
					
	
					},
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
        location.href = 'weekly.php';
    }  
					});
				
	
}
}
	
					});

function dbox(itemid){
	
	
				var dataString = {
	
					id : itemid
					
	
};
			
			
			
					$.ajax({
					type: "POST",
					url: 'dbox.php?',
					data: dataString,
					crossDomain: true,
					cache: false,
					dataType:'json', 
					success:function(data){
					var te = data.length;
					//alert(data[0].stop);
					  	//alert('hello');	
					if (data[0].resp == 1){
						
						var sele = data[1].box;
						
							var text = "";
							text += '<select id="r5">';
							text += '<option value="N/A">N/A</option>';
							
						 var t = 2;
                        while (t < te) {
					 var id2 = data[t].id;
					 var title = data[t].title;
						
						if (id2 == sele){
	
        text += '<option value="'+ id2 +'" selected>'+ title +'</option>';
						}else{
							
						        text += '<option value="'+ id2 +'">'+ title +'</option>';
	
							
						}
							
					                           
											   var t = t + 1;

						}
						
															text += '</select>';

														$('#rinv').html(text);			
				
	
  
  
					}

								else if (data[0].resp == 2){
				
							var text = "";
							text += '<select id="r5">';
							text += '<option value="N/A">N/A</option>';
	
	text += '</select>';

														$('#rinv').html(text);		
  
  
					}else{


        location.href = 'weekly.php';


					}						
					
	
					},
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
        location.href = 'weekly.php';
    }  
					});
	
	
	
			
}
														
</script>
