

<?php
require("login.php");
//require("dbase.php");





if(isset($_REQUEST['day'])) {
	$day = $_REQUEST['day'];

	
	
}else{
	
	
	$day = date("m/d/Y");
	
}




?>
<head>


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
  margin: 5px 0px;
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
	


	
	.buton1 {
		position: relative;
	background-color:#203A81;
	-moz-border-radius:10px;
	-webkit-border-radius:10px;
	border-radius:10px;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:more;
	font-size:20px;
	padding:8px 17px;
	text-decoration:none;
	text-shadow:0px 1px 0px #283966;
	width: 120px;
	text-transform: uppercase;
}

.buton1:active {
	position:relative;
	top:1px;
}

.buton1:hover {
		background-color: #0097ab;
	position:relative;
	top:1px;
}

	.buton2 {
		position: relative;
	background-color: #0097ab;
	-moz-border-radius:10px;
	-webkit-border-radius:10px;
	border-radius:10px;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:more;
	font-size:20px;
	padding:8px 17px;
	text-decoration:none;
	text-shadow:0px 1px 0px #283966;
	width: 120px;
	text-transform: uppercase;
}

.buton2:active {
	position:relative;
	top:1px;
}

.buton2:hover {
		background-color:#203A81;
	position:relative;
	top:1px;
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
	top:1px;
}

.buton3:hover {
		background-color:#203A81;
	position:relative;
	top:1px;
}

#bground {
		background-color:#F8F9F9;
		padding:8px 12px;
}

textarea {

  resize: none;
}

  li { list-style: none;

  }


#move{
position: relative; 
	width: 25px; 
	height: 25px;	
background: url(img/move.png) no-repeat;
cursor:move;	
	
}

.del{
position: relative; 
	width: 25px; 
	height: 25px;	
background: url(img/delete.png) no-repeat;
	
	
}
.hidden {
    display: none;
}

 </style>
  
</head>
<center>





<table width = "1200" id="bground">
<tr>
<td width = "25" align="center">

</td>
<td width = "100" align="center">
Item
</td>
<td width = "150" align="center">
Class
</td>
<td width = "110" align="center">
Description
</td>
<td width = "110" align="center">
Type
</td>
<td width = "100" align="center">
Sold After
</td>
<td width = "100" align="center">
Sold Before
</td>
<td width = "100" align="center">
Valid After
</td>
<td width = "100" align="center">
Valid Before
</td>
<td width = "80" align="center">
Valid For
</td>
<td width = "75" align="center">
Price
</td>
<td width = "100" valign="top" align="center">
Promo
</td>
<td width = "25" align="center">

</td>
</tr></table>


<ul id="list" style="padding-left: 0;
 width:1200px">

<?php

$aa6 = mysqli_query($db,"SELECT * FROM inventory where del is NULL order by name asc");   
$bb6 = mysqli_num_rows($aa6);

$aa = mysqli_query($db,"SELECT * FROM items where soldon like '$day' and del is NULL and master is NULL and itemtype = 'daily' order by ord asc");   
$bb = mysqli_num_rows($aa);

$r=0;

while ($r < $bb){
$id=utf8_encode(mysqli_result($aa,$r,"id"));	
$cat=utf8_encode(mysqli_result($aa,$r,"cat"));
$clas=utf8_encode(mysqli_result($aa,$r,"title"));
$desc=utf8_encode(mysqli_result($aa,$r,"description"));
$type=utf8_encode(mysqli_result($aa,$r,"type"));
$sa=mysqli_result($aa,$r,"soldafter");
$sb=mysqli_result($aa,$r,"soldbefore");
$va=mysqli_result($aa,$r,"validafter");
$vb=mysqli_result($aa,$r,"validbefore");
$vf=mysqli_result($aa,$r,"validfor");
$price=utf8_encode(mysqli_result($aa,$r,"price"));
$promo=utf8_encode(mysqli_result($aa,$r,"promo"));

$pq=utf8_encode(mysqli_result($aa,$r,"printq"));
$tic=utf8_encode(mysqli_result($aa,$r,"tictype"));
$redeem=utf8_encode(mysqli_result($aa,$r,"redeem"));
$inv=utf8_encode(mysqli_result($aa,$r,"inv"));
$sold=utf8_encode(mysqli_result($aa,$r,"sold"));


$weight=mysqli_result($aa,$r,"weight");
$height=mysqli_result($aa,$r,"height");
$shoe=mysqli_result($aa,$r,"shoe");
$helmet=mysqli_result($aa,$r,"helmet");
$sex=mysqli_result($aa,$r,"sex");
$age=mysqli_result($aa,$r,"age");
$ability=mysqli_result($aa,$r,"ability");
$equip=mysqli_result($aa,$r,"equip");
$sale=mysqli_result($aa,$r,"onsale");


if ($weight == NULL){
	$weight = 'false';
}
if ($height == NULL){
	$height = 'false';
}
if ($shoe == NULL){
	$shoe = 'false';
}
if ($helmet == NULL){
	$helmet = 'false';
}
if ($sex == NULL){
	$sex = 'false';
}
if ($age == NULL){
	$age = 'false';
}
if ($ability == NULL){
	$ability = 'false';
}
if ($equip == NULL){
	$equip = 'false';
}


if ($inv == NULL){
	
	$inv = "N/A";
}

if ($r % 2 == 0){
	$bgcolor = "#FFFFFF";
	
}else{
	$bgcolor = "#f4f6f6";
}
?>

<li id="item-<?php echo $id; ?>">
<table width = "1200" bgcolor = "<?php echo $bgcolor; ?>" class="open" var="<?php echo $id; ?>">

<tr>
<td width = "25" valign="center" align="center">
<div id="move" alt="Drag To Re-Order" title="Drag To Re-Order"></div>
</td>
<td width = "100" valign="center" align="center">
<select class = "daa1" id = "cat<?php echo $id; ?>" name="cat" var="<?php echo $id; ?>" b="<?php echo htmlspecialchars($cat); ?>">
  <option value="1" <?php if($cat == "1"){ ?> selected = "selected" <?php } ?>>Ticket</option>
  <option value="2" <?php if($cat == "2"){ ?> selected = "selected" <?php } ?>>Rental</option>
</select>
</td>
<td width = "150" valign="center" align="center">
<textarea class = "daa1" id = "Clas<?php echo $id; ?>"  b="<?php echo htmlspecialchars($clas); ?>" name="title" var="<?php echo $id; ?>" alt="Ex: Adult, Child" title="Ex: Adult, Child"><?php echo $clas; ?></textarea>
</td>
<td width = "110" valign="center" align="center">
<textarea class = "daa1" id = "Desc<?php echo $id; ?>" b="<?php echo htmlspecialchars($desc); ?>" name="description" var="<?php echo $id; ?>" alt="Ex: 18yrs & over" title="Ex: 18yrs & over"><?php echo $desc; ?></textarea>
</td>
<td width = "110" valign="center" align="center">
<textarea class = "daa1" id = "Type<?php echo $id; ?>" b="<?php echo htmlspecialchars($type); ?>" name="type" var="<?php echo $id; ?>" alt="Ex: Full Day" title="Ex: Full Day"><?php echo $type; ?></textarea>
</td>
<td width = "100" valign="center" align="center">
<select class = "daa1" id = "Soldafter<?php echo $id; ?>" b="<?php echo $sa; ?>" name="soldafter" var="<?php echo $id; ?>" alt="Ex: 8am" title="Ex: 8am">
  <option value = "05:00:00" <?php if($sa == "05:00:00"){ ?> selected = "selected" <?php } ?>>05:00am</option>
  <option value = "05:30:00" <?php if($sa == "05:30:00"){ ?> selected = "selected" <?php } ?>>05:30am</option> 
  <option value = "06:00:00" <?php if($sa == "06:00:00"){ ?> selected = "selected" <?php } ?>>06:00am</option>
  <option value = "06:30:00" <?php if($sa == "06:30:00"){ ?> selected = "selected" <?php } ?>>06:30am</option>
  <option value = "07:00:00" <?php if($sa == "07:00:00"){ ?> selected = "selected" <?php } ?>>07:00am</option>
  <option value = "07:30:00" <?php if($sa == "07:30:00"){ ?> selected = "selected" <?php } ?>>07:30am</option>
  <option value = "08:00:00" <?php if($sa == "08:00:00"){ ?> selected = "selected" <?php } ?>>08:00am</option>
  <option value = "08:30:00" <?php if($sa == "08:30:00"){ ?> selected = "selected" <?php } ?>>08:30am</option>
  <option value = "09:00:00" <?php if($sa == "09:00:00"){ ?> selected = "selected" <?php } ?>>09:00am</option>
  <option value = "09:30:00" <?php if($sa == "09:30:00"){ ?> selected = "selected" <?php } ?>>09:30am</option>
  <option value = "10:00:00" <?php if($sa == "10:00:00"){ ?> selected = "selected" <?php } ?>>10:00am</option>
  <option value = "10:30:00" <?php if($sa == "10:30:00"){ ?> selected = "selected" <?php } ?>>10:30am</option>
  <option value = "11:00:00" <?php if($sa == "11:00:00"){ ?> selected = "selected" <?php } ?>>11:00am</option>
  <option value = "11:30:00" <?php if($sa == "11:30:00"){ ?> selected = "selected" <?php } ?>>11:30am</option>
  <option value = "12:00:00" <?php if($sa == "12:00:00"){ ?> selected = "selected" <?php } ?>>12:00pm</option>
  <option value = "12:30:00" <?php if($sa == "12:30:00"){ ?> selected = "selected" <?php } ?>>12:30pm</option>
  <option value = "13:00:00" <?php if($sa == "13:00:00"){ ?> selected = "selected" <?php } ?>>01:00pm</option>
  <option value = "13:30:00" <?php if($sa == "13:30:00"){ ?> selected = "selected" <?php } ?>>01:30pm</option>
  <option value = "14:00:00" <?php if($sa == "14:00:00"){ ?> selected = "selected" <?php } ?>>02:00pm</option>
  <option value = "14:30:00" <?php if($sa == "14:30:00"){ ?> selected = "selected" <?php } ?>>02:30pm</option>
  <option value = "15:00:00" <?php if($sa == "15:00:00"){ ?> selected = "selected" <?php } ?>>03:00pm</option>
  <option value = "15:30:00" <?php if($sa == "15:30:00"){ ?> selected = "selected" <?php } ?>>03:30pm</option>    
  <option value = "16:00:00" <?php if($sa == "16:00:00"){ ?> selected = "selected" <?php } ?>>04:00pm</option>
  <option value = "16:30:00" <?php if($sa == "16:30:00"){ ?> selected = "selected" <?php } ?>>04:30pm</option>
  <option value = "17:00:00" <?php if($sa == "17:00:00"){ ?> selected = "selected" <?php } ?>>05:00pm</option>
  <option value = "17:30:00" <?php if($sa == "17:30:00"){ ?> selected = "selected" <?php } ?>>05:30pm</option>
  <option value = "18:00:00" <?php if($sa == "18:00:00"){ ?> selected = "selected" <?php } ?>>06:00pm</option>
  <option value = "18:30:00" <?php if($sa == "18:30:00"){ ?> selected = "selected" <?php } ?>>06:30pm</option>
  <option value = "19:00:00" <?php if($sa == "19:00:00"){ ?> selected = "selected" <?php } ?>>07:00pm</option>
  <option value = "19:30:00" <?php if($sa == "19:30:00"){ ?> selected = "selected" <?php } ?>>07:30pm</option>
  <option value = "20:00:00" <?php if($sa == "20:00:00"){ ?> selected = "selected" <?php } ?>>08:00pm</option>
  <option value = "20:30:00" <?php if($sa == "20:30:00"){ ?> selected = "selected" <?php } ?>>08:30pm</option>
  <option value = "21:00:00" <?php if($sa == "21:00:00"){ ?> selected = "selected" <?php } ?>>09:00pm</option>
  <option value = "21:30:00" <?php if($sa == "21:30:00"){ ?> selected = "selected" <?php } ?>>09:30pm</option>
  <option value = "22:00:00" <?php if($sa == "22:00:00"){ ?> selected = "selected" <?php } ?>>10:00pm</option>
  <option value = "22:30:00" <?php if($sa == "22:30:00"){ ?> selected = "selected" <?php } ?>>10:30pm</option>
  <option value = "23:00:00" <?php if($sa == "23:00:00"){ ?> selected = "selected" <?php } ?>>11:00pm</option>
  <option value = "23:30:00" <?php if($sa == "23:30:00"){ ?> selected = "selected" <?php } ?>>11:30pm</option>
  <option value = "24:00:00" <?php if($sa == "24:00:00"){ ?> selected = "selected" <?php } ?>>12:00am</option>
   

</select>
</td>
<td width = "100" valign="center" align="center">
<select class = "daa1" id = "Soldbefore<?php echo $id; ?>" b="<?php echo $sb; ?>" name="soldbefore" var="<?php echo $id; ?>" alt="Ex: 9pm" title="Ex: 9pm">
  <option value = "05:00:00" <?php if($sb == "05:00:00"){ ?> selected = "selected" <?php } ?>>05:00am</option>
  <option value = "05:30:00" <?php if($sb == "05:30:00"){ ?> selected = "selected" <?php } ?>>05:30am</option> 
  <option value = "06:00:00" <?php if($sb == "06:00:00"){ ?> selected = "selected" <?php } ?>>06:00am</option>
  <option value = "06:30:00" <?php if($sb == "06:30:00"){ ?> selected = "selected" <?php } ?>>06:30am</option>
  <option value = "07:00:00" <?php if($sb == "07:00:00"){ ?> selected = "selected" <?php } ?>>07:00am</option>
  <option value = "07:30:00" <?php if($sb == "07:30:00"){ ?> selected = "selected" <?php } ?>>07:30am</option>
  <option value = "08:00:00" <?php if($sb == "08:00:00"){ ?> selected = "selected" <?php } ?>>08:00am</option>
  <option value = "08:30:00" <?php if($sb == "08:30:00"){ ?> selected = "selected" <?php } ?>>08:30am</option>
  <option value = "09:00:00" <?php if($sb == "09:00:00"){ ?> selected = "selected" <?php } ?>>09:00am</option>
  <option value = "09:30:00" <?php if($sb == "09:30:00"){ ?> selected = "selected" <?php } ?>>09:30am</option>
  <option value = "10:00:00" <?php if($sb == "10:00:00"){ ?> selected = "selected" <?php } ?>>10:00am</option>
  <option value = "10:30:00" <?php if($sb == "10:30:00"){ ?> selected = "selected" <?php } ?>>10:30am</option>
  <option value = "11:00:00" <?php if($sb == "11:00:00"){ ?> selected = "selected" <?php } ?>>11:00am</option>
  <option value = "11:30:00" <?php if($sb == "11:30:00"){ ?> selected = "selected" <?php } ?>>11:30am</option>
  <option value = "12:00:00" <?php if($sb == "12:00:00"){ ?> selected = "selected" <?php } ?>>12:00pm</option>
  <option value = "12:30:00" <?php if($sb == "12:30:00"){ ?> selected = "selected" <?php } ?>>12:30pm</option>
  <option value = "13:00:00" <?php if($sb == "13:00:00"){ ?> selected = "selected" <?php } ?>>01:00pm</option>
  <option value = "13:30:00" <?php if($sb == "13:30:00"){ ?> selected = "selected" <?php } ?>>01:30pm</option>
  <option value = "14:00:00" <?php if($sb == "14:00:00"){ ?> selected = "selected" <?php } ?>>02:00pm</option>
  <option value = "14:30:00" <?php if($sb == "14:30:00"){ ?> selected = "selected" <?php } ?>>02:30pm</option>
  <option value = "15:00:00" <?php if($sb == "15:00:00"){ ?> selected = "selected" <?php } ?>>03:00pm</option>
  <option value = "15:30:00" <?php if($sb == "15:30:00"){ ?> selected = "selected" <?php } ?>>03:30pm</option>    
  <option value = "16:00:00" <?php if($sb == "16:00:00"){ ?> selected = "selected" <?php } ?>>04:00pm</option>
  <option value = "16:30:00" <?php if($sb == "16:30:00"){ ?> selected = "selected" <?php } ?>>04:30pm</option>
  <option value = "17:00:00" <?php if($sb == "17:00:00"){ ?> selected = "selected" <?php } ?>>05:00pm</option>
  <option value = "17:30:00" <?php if($sb == "17:30:00"){ ?> selected = "selected" <?php } ?>>05:30pm</option>
  <option value = "18:00:00" <?php if($sb == "18:00:00"){ ?> selected = "selected" <?php } ?>>06:00pm</option>
  <option value = "18:30:00" <?php if($sb == "18:30:00"){ ?> selected = "selected" <?php } ?>>06:30pm</option>
  <option value = "19:00:00" <?php if($sb == "19:00:00"){ ?> selected = "selected" <?php } ?>>07:00pm</option>
  <option value = "19:30:00" <?php if($sb == "19:30:00"){ ?> selected = "selected" <?php } ?>>07:30pm</option>
  <option value = "20:00:00" <?php if($sb == "20:00:00"){ ?> selected = "selected" <?php } ?>>08:00pm</option>
  <option value = "20:30:00" <?php if($sb == "20:30:00"){ ?> selected = "selected" <?php } ?>>08:30pm</option>
  <option value = "21:00:00" <?php if($sb == "21:00:00"){ ?> selected = "selected" <?php } ?>>09:00pm</option>
  <option value = "21:30:00" <?php if($sb == "21:30:00"){ ?> selected = "selected" <?php } ?>>09:30pm</option>
  <option value = "22:00:00" <?php if($sb == "22:00:00"){ ?> selected = "selected" <?php } ?>>10:00pm</option>
  <option value = "22:30:00" <?php if($sb == "22:30:00"){ ?> selected = "selected" <?php } ?>>10:30pm</option>
  <option value = "23:00:00" <?php if($sb == "23:00:00"){ ?> selected = "selected" <?php } ?>>11:00pm</option>
  <option value = "23:30:00" <?php if($sb == "23:30:00"){ ?> selected = "selected" <?php } ?>>11:30pm</option>
  <option value = "24:00:00" <?php if($sb == "24:00:00"){ ?> selected = "selected" <?php } ?>>12:00am</option>
   

</select>
</td>
<td width = "100" valign="center" align="center">
<select class = "daa1" id = "Validafter<?php echo $id; ?>" b="<?php echo $va; ?>" name="validafter" var="<?php echo $id; ?>" alt="Ex: 8am" title="Ex: 8am">
<option value="" disabled selected></option>
 <option value = "05:00:00" <?php if($va == "05:00:00"){ ?> selected = "selected" <?php } ?>>05:00am</option>
  <option value = "05:30:00" <?php if($va == "05:30:00"){ ?> selected = "selected" <?php } ?>>05:30am</option> 
  <option value = "06:00:00" <?php if($va == "06:00:00"){ ?> selected = "selected" <?php } ?>>06:00am</option>
  <option value = "06:30:00" <?php if($va == "06:30:00"){ ?> selected = "selected" <?php } ?>>06:30am</option>
  <option value = "07:00:00" <?php if($va == "07:00:00"){ ?> selected = "selected" <?php } ?>>07:00am</option>
  <option value = "07:30:00" <?php if($va == "07:30:00"){ ?> selected = "selected" <?php } ?>>07:30am</option>
  <option value = "08:00:00" <?php if($va == "08:00:00"){ ?> selected = "selected" <?php } ?>>08:00am</option>
  <option value = "08:30:00" <?php if($va == "08:30:00"){ ?> selected = "selected" <?php } ?>>08:30am</option>
  <option value = "09:00:00" <?php if($va == "09:00:00"){ ?> selected = "selected" <?php } ?>>09:00am</option>
  <option value = "09:30:00" <?php if($va == "09:30:00"){ ?> selected = "selected" <?php } ?>>09:30am</option>
  <option value = "10:00:00" <?php if($va == "10:00:00"){ ?> selected = "selected" <?php } ?>>10:00am</option>
  <option value = "10:30:00" <?php if($va == "10:30:00"){ ?> selected = "selected" <?php } ?>>10:30am</option>
  <option value = "11:00:00" <?php if($va == "11:00:00"){ ?> selected = "selected" <?php } ?>>11:00am</option>
  <option value = "11:30:00" <?php if($va == "11:30:00"){ ?> selected = "selected" <?php } ?>>11:30am</option>
  <option value = "12:00:00" <?php if($va == "12:00:00"){ ?> selected = "selected" <?php } ?>>12:00pm</option>
  <option value = "12:30:00" <?php if($va == "12:30:00"){ ?> selected = "selected" <?php } ?>>12:30pm</option>
  <option value = "13:00:00" <?php if($va == "13:00:00"){ ?> selected = "selected" <?php } ?>>01:00pm</option>
  <option value = "13:30:00" <?php if($va == "13:30:00"){ ?> selected = "selected" <?php } ?>>01:30pm</option>
  <option value = "14:00:00" <?php if($va == "14:00:00"){ ?> selected = "selected" <?php } ?>>02:00pm</option>
  <option value = "14:30:00" <?php if($va == "14:30:00"){ ?> selected = "selected" <?php } ?>>02:30pm</option>
  <option value = "15:00:00" <?php if($va == "15:00:00"){ ?> selected = "selected" <?php } ?>>03:00pm</option>
  <option value = "15:30:00" <?php if($va == "15:30:00"){ ?> selected = "selected" <?php } ?>>03:30pm</option>    
  <option value = "16:00:00" <?php if($va == "16:00:00"){ ?> selected = "selected" <?php } ?>>04:00pm</option>
  <option value = "16:30:00" <?php if($va == "16:30:00"){ ?> selected = "selected" <?php } ?>>04:30pm</option>
  <option value = "17:00:00" <?php if($va == "17:00:00"){ ?> selected = "selected" <?php } ?>>05:00pm</option>
  <option value = "17:30:00" <?php if($va == "17:30:00"){ ?> selected = "selected" <?php } ?>>05:30pm</option>
  <option value = "18:00:00" <?php if($va == "18:00:00"){ ?> selected = "selected" <?php } ?>>06:00pm</option>
  <option value = "18:30:00" <?php if($va == "18:30:00"){ ?> selected = "selected" <?php } ?>>06:30pm</option>
  <option value = "19:00:00" <?php if($va == "19:00:00"){ ?> selected = "selected" <?php } ?>>07:00pm</option>
  <option value = "19:30:00" <?php if($va == "19:30:00"){ ?> selected = "selected" <?php } ?>>07:30pm</option>
  <option value = "20:00:00" <?php if($va == "20:00:00"){ ?> selected = "selected" <?php } ?>>08:00pm</option>
  <option value = "20:30:00" <?php if($va == "20:30:00"){ ?> selected = "selected" <?php } ?>>08:30pm</option>
  <option value = "21:00:00" <?php if($va == "21:00:00"){ ?> selected = "selected" <?php } ?>>09:00pm</option>
  <option value = "21:30:00" <?php if($va == "21:30:00"){ ?> selected = "selected" <?php } ?>>09:30pm</option>
  <option value = "22:00:00" <?php if($va == "22:00:00"){ ?> selected = "selected" <?php } ?>>10:00pm</option>
  <option value = "22:30:00" <?php if($va == "22:30:00"){ ?> selected = "selected" <?php } ?>>10:30pm</option>
  <option value = "23:00:00" <?php if($va == "23:00:00"){ ?> selected = "selected" <?php } ?>>11:00pm</option>
  <option value = "23:30:00" <?php if($va == "23:30:00"){ ?> selected = "selected" <?php } ?>>11:30pm</option>
  <option value = "24:00:00" <?php if($va == "24:00:00"){ ?> selected = "selected" <?php } ?>>12:00am</option>
      

</select>
</td>
<td width = "100" valign="center" align="center">
<select class = "daa1" id = "Validbefore<?php echo $id; ?>" b="<?php echo $vb; ?>" name="validbefore" var="<?php echo $id; ?>" alt="Ex: 9pm" title="Ex: 9pm">
 <option value = "05:00:00" <?php if($vb == "05:00:00"){ ?> selected = "selected" <?php } ?>>05:00am</option>
  <option value = "05:30:00" <?php if($vb == "05:30:00"){ ?> selected = "selected" <?php } ?>>05:30am</option> 
  <option value = "06:00:00" <?php if($vb == "06:00:00"){ ?> selected = "selected" <?php } ?>>06:00am</option>
  <option value = "06:30:00" <?php if($vb == "06:30:00"){ ?> selected = "selected" <?php } ?>>06:30am</option>
  <option value = "07:00:00" <?php if($vb == "07:00:00"){ ?> selected = "selected" <?php } ?>>07:00am</option>
  <option value = "07:30:00" <?php if($vb == "07:30:00"){ ?> selected = "selected" <?php } ?>>07:30am</option>
  <option value = "08:00:00" <?php if($vb == "08:00:00"){ ?> selected = "selected" <?php } ?>>08:00am</option>
  <option value = "08:30:00" <?php if($vb == "08:30:00"){ ?> selected = "selected" <?php } ?>>08:30am</option>
  <option value = "09:00:00" <?php if($vb == "09:00:00"){ ?> selected = "selected" <?php } ?>>09:00am</option>
  <option value = "09:30:00" <?php if($vb == "09:30:00"){ ?> selected = "selected" <?php } ?>>09:30am</option>
  <option value = "10:00:00" <?php if($vb == "10:00:00"){ ?> selected = "selected" <?php } ?>>10:00am</option>
  <option value = "10:30:00" <?php if($vb == "10:30:00"){ ?> selected = "selected" <?php } ?>>10:30am</option>
  <option value = "11:00:00" <?php if($vb == "11:00:00"){ ?> selected = "selected" <?php } ?>>11:00am</option>
  <option value = "11:30:00" <?php if($vb == "11:30:00"){ ?> selected = "selected" <?php } ?>>11:30am</option>
  <option value = "12:00:00" <?php if($vb == "12:00:00"){ ?> selected = "selected" <?php } ?>>12:00pm</option>
  <option value = "12:30:00" <?php if($vb == "12:30:00"){ ?> selected = "selected" <?php } ?>>12:30pm</option>
  <option value = "13:00:00" <?php if($vb == "13:00:00"){ ?> selected = "selected" <?php } ?>>01:00pm</option>
  <option value = "13:30:00" <?php if($vb == "13:30:00"){ ?> selected = "selected" <?php } ?>>01:30pm</option>
  <option value = "14:00:00" <?php if($vb == "14:00:00"){ ?> selected = "selected" <?php } ?>>02:00pm</option>
  <option value = "14:30:00" <?php if($vb == "14:30:00"){ ?> selected = "selected" <?php } ?>>02:30pm</option>
  <option value = "15:00:00" <?php if($vb == "15:00:00"){ ?> selected = "selected" <?php } ?>>03:00pm</option>
  <option value = "15:30:00" <?php if($vb == "15:30:00"){ ?> selected = "selected" <?php } ?>>03:30pm</option>    
  <option value = "16:00:00" <?php if($vb == "16:00:00"){ ?> selected = "selected" <?php } ?>>04:00pm</option>
  <option value = "16:30:00" <?php if($vb == "16:30:00"){ ?> selected = "selected" <?php } ?>>04:30pm</option>
  <option value = "17:00:00" <?php if($vb == "17:00:00"){ ?> selected = "selected" <?php } ?>>05:00pm</option>
  <option value = "17:30:00" <?php if($vb == "17:30:00"){ ?> selected = "selected" <?php } ?>>05:30pm</option>
  <option value = "18:00:00" <?php if($vb == "18:00:00"){ ?> selected = "selected" <?php } ?>>06:00pm</option>
  <option value = "18:30:00" <?php if($vb == "18:30:00"){ ?> selected = "selected" <?php } ?>>06:30pm</option>
  <option value = "19:00:00" <?php if($vb == "19:00:00"){ ?> selected = "selected" <?php } ?>>07:00pm</option>
  <option value = "19:30:00" <?php if($vb == "19:30:00"){ ?> selected = "selected" <?php } ?>>07:30pm</option>
  <option value = "20:00:00" <?php if($vb == "20:00:00"){ ?> selected = "selected" <?php } ?>>08:00pm</option>
  <option value = "20:30:00" <?php if($vb == "20:30:00"){ ?> selected = "selected" <?php } ?>>08:30pm</option>
  <option value = "21:00:00" <?php if($vb == "21:00:00"){ ?> selected = "selected" <?php } ?>>09:00pm</option>
  <option value = "21:30:00" <?php if($vb == "21:30:00"){ ?> selected = "selected" <?php } ?>>09:30pm</option>
  <option value = "22:00:00" <?php if($vb == "22:00:00"){ ?> selected = "selected" <?php } ?>>10:00pm</option>
  <option value = "22:30:00" <?php if($vb == "22:30:00"){ ?> selected = "selected" <?php } ?>>10:30pm</option>
  <option value = "23:00:00" <?php if($vb == "23:00:00"){ ?> selected = "selected" <?php } ?>>11:00pm</option>
  <option value = "23:30:00" <?php if($vb == "23:30:00"){ ?> selected = "selected" <?php } ?>>11:30pm</option>
  <option value = "24:00:00" <?php if($vb == "24:00:00"){ ?> selected = "selected" <?php } ?>>12:00am</option>
   

</select>
</td>
<td width = "80" valign="center" align="center">
<select class = "daa1" id = "Validfor<?php echo $id; ?>" b="<?php echo $vf; ?>" name="validfor" var="<?php echo $id; ?>" placeholder="Valid For" alt="Ex: 2hrs" title="Ex: 2hrs">
  <option value = "N/A" <?php if($vf == NULL){ ?> selected = "selected" <?php } ?>>N/A</option>
  <option value = "1" <?php if($vf == "1"){ ?> selected = "selected" <?php } ?>>1 hr</option>
  <option value = "2" <?php if($vf == "2"){ ?> selected = "selected" <?php } ?>>2 hrs</option> 
  <option value = "3" <?php if($vf == "3"){ ?> selected = "selected" <?php } ?>>3 hrs</option>
  <option value = "4" <?php if($vf == "4"){ ?> selected = "selected" <?php } ?>>4 hrs</option>
  <option value = "5" <?php if($vf == "5"){ ?> selected = "selected" <?php } ?>>5 hrs</option>
  <option value = "6" <?php if($vf == "6"){ ?> selected = "selected" <?php } ?>>6 hrs</option>  
</select>
</td>
<td width = "75" valign="center" align="center">
<textarea class = "daa1" id = "Price<?php echo $id; ?>"  b="<?php echo htmlspecialchars($price); ?>" name="price" var="<?php echo $id; ?>" alt="Ex: 40.99" title="Ex: 40.99"><?php echo $price; ?></textarea>
</td>
<td width = "100" valign="center" align="center">
<div class = "buton3" id = "add" onclick="window.open('promo2.php?id=<?php echo $id; ?>', '_top')">
<?php 
if ($promo == NULL){
	?>
Add	
	<?php
}else{
?>
View
	
<?php	
}
?>
</div>
</td>
<td width = "25" valign="center" align="center">
<div id="<?php echo $id; ?>" class="del" alt="Delete Item" title="Delete Item"></div>
</td>
</tr><tr>
<td colspan ="13">


<div id="expand<?php echo $id; ?>" class="hidden">
<table width = "1150" id="bground4" bgcolor = "<?php echo $bgcolor; ?>" align="center" border = "0"><tr>
<td width = "80" align = "right">
Qty To Print: </td>
<td width = "70" align = "left">
<select class = "daa1" id = "printq<?php echo $id; ?>" b="<?php echo $pq; ?>" name="printq" var="<?php echo $id; ?>" alt="Ex: 1" title="Ex: 1">

  <option value = "1" <?php if($pq == "1"){ ?> selected = "selected" <?php } ?>>1</option>
  <option value = "2" <?php if($pq == "2"){ ?> selected = "selected" <?php } ?>>2</option>
  <option value = "3" <?php if($pq == "3"){ ?> selected = "selected" <?php } ?>>3</option>
  <option value = "4" <?php if($pq == "4"){ ?> selected = "selected" <?php } ?>>4</option>
  <option value = "5" <?php if($pq == "5"){ ?> selected = "selected" <?php } ?>>5</option>
  <option value = "6" <?php if($pq == "6"){ ?> selected = "selected" <?php } ?>>6</option>
  <option value = "7" <?php if($pq == "7"){ ?> selected = "selected" <?php } ?>>7</option>
  <option value = "8" <?php if($pq == "8"){ ?> selected = "selected" <?php } ?>>8</option>  
  <option value = "9" <?php if($pq == "9"){ ?> selected = "selected" <?php } ?>>9</option>
  <option value = "10" <?php if($pq == "10"){ ?> selected = "selected" <?php } ?>>10</option>  
  <option value = "11" <?php if($pq == "11"){ ?> selected = "selected" <?php } ?>>11</option>
  <option value = "12" <?php if($pq == "12"){ ?> selected = "selected" <?php } ?>>12</option>
  <option value = "13" <?php if($pq == "13"){ ?> selected = "selected" <?php } ?>>13</option>
  <option value = "14" <?php if($pq == "14"){ ?> selected = "selected" <?php } ?>>14</option>
  <option value = "15" <?php if($pq == "15"){ ?> selected = "selected" <?php } ?>>15</option>
  <option value = "16" <?php if($pq == "16"){ ?> selected = "selected" <?php } ?>>16</option>
  <option value = "17" <?php if($pq == "17"){ ?> selected = "selected" <?php } ?>>17</option>
  <option value = "18" <?php if($pq == "18"){ ?> selected = "selected" <?php } ?>>18</option>  
  <option value = "19" <?php if($pq == "19"){ ?> selected = "selected" <?php } ?>>19</option>
  <option value = "20" <?php if($pq == "20"){ ?> selected = "selected" <?php } ?>>20</option>     
  <option value = "21" <?php if($pq == "21"){ ?> selected = "selected" <?php } ?>>21</option>
  <option value = "23" <?php if($pq == "22"){ ?> selected = "selected" <?php } ?>>22</option>
  <option value = "23" <?php if($pq == "23"){ ?> selected = "selected" <?php } ?>>23</option>  
  <option value = "24" <?php if($pq == "24"){ ?> selected = "selected" <?php } ?>>24</option>
  <option value = "25" <?php if($pq == "25"){ ?> selected = "selected" <?php } ?>>25</option>   
  
  
  </select>
  </td>
<td width = "100" align = "right">
Ticket Type: </td>
<td width = "100" align = "left">
<select class = "daa1" id = "tictype<?php echo $id; ?>" b="<?php echo $tic; ?>" name="tictype" var="<?php echo $id; ?>" alt="Ex: Label/Bracelet" title="Ex: Label/Bracelet">
  <option value = "1" <?php if($tic == "1"){ ?> selected = "selected" <?php } ?>>Label/Bracelet</option>
  <option value = "2" <?php if($tic == "2"){ ?> selected = "selected" <?php } ?>>Rcpt Paper</option>  
</select>
</td>
<td width = "100" align = "right">
Instructions: </td>
<td width = "100" align = "left">
<textarea class = "daa1" id = "redeem<?php echo $id; ?>" b="<?php echo htmlspecialchars($redeem); ?>" name="redeem" var="<?php echo $id; ?>" alt="Ex: Redeem at..." title="Ex: Redeem at..."><?php echo $redeem; ?></textarea>

</td>
<td width = "100" align = "right">
Inventory:  
</td>
<td width = "100" align = "left">
<select class = "daa1" id = "inv<?php echo $id; ?>" b="<?php echo $inv; ?>" name="inv" var="<?php echo $id; ?>"  alt="Ex: Adult Bikes" title="Ex: Adult Bikes">
  <option value = "N/A" <?php if($inv == "N/A"){ ?> selected = "selected" <?php } ?>>N/A</option>
  <?php
  $fk = 0;
while ($fk < $bb6){
	$iid=mysqli_result($aa6,$fk,"id");
	$iname=mysqli_result($aa6,$fk,"name");

?>
  <option value = "<?php echo $iid; ?>" <?php if($inv == $iid){ ?> selected = "selected" <?php } ?>><?php echo $iname; ?></option>

<?php

$fk++;
}	
  
  ?>
  
  
  
  
</select>
</td>
<td width = "60" align = "right">
Sold: </td>
<td width = "85" align = "left">
<select class = "daa1" id = "sold<?php echo $id; ?>" b="<?php echo $sold; ?>" name="sold" var="<?php echo $id; ?>" alt="Ex: Kiosk" title="Ex: Kiosk">
  <option value = "1" <?php if($sold == "1"){ ?> selected = "selected" <?php } ?>>Kiosk</option>
  <option value = "2" <?php if($sold == "2"){ ?> selected = "selected" <?php } ?>>Web</option>  
    <option value = "3" <?php if($sold == "3"){ ?> selected = "selected" <?php } ?>>Both</option>  

</select>
</td>
<td width = "75" valign="center" align="center">

<table  width="72" border = "0">
<tr>
<td width="47" align="right" valign="center">
<div style="font-size: 12px;">On Sale</div>
</td><td width="25" valign="top">
<div style="position: relative; top: 3px;"><input class="daa14" name="onsale" var="<?php echo $id; ?>" type="checkbox" id="sale" alt="Displays Item As Being On Sale" title="Displays Item As Being On Sale" <?php if ($sale == "true") {  echo "checked=checked"; }?>>
</div>
</td>

</tr>


<?php
if ($cat == 2){
?>
<tr>
<td  width="72" colspan = "2" align="center">
<span style="font-size: 12px;"><a href="javascript:popup(<?php echo $id; ?>, <?php echo $height; ?>, <?php echo $weight; ?>, <?php echo $shoe; ?>, <?php echo $helmet; ?>, <?php echo $age; ?>, <?php echo $sex; ?>, <?php echo $ability; ?>, <?php echo $equip; ?>);">Collect</a>
</span>
</td>
</tr>
<?php	

	
}


?>

</table>



</td>
</tr></table>
</div>

</td>

</tr>

</table>


</li>
<?php
$r++;
}
?>


</ul>

</center>

<script type="text/javascript">



	$(".del").click(function(){
var idot = $(this).attr('id');
		
var r = confirm("Are you sure you want to delete this item?");
if (r == true) {

									
				var data="id="+idot+"&jack=";		
  $.ajax({
            data: data,
            type: 'POST',
            url: 'delete.php',
			success:function(data){
				
				if (data == '2'){
					
					        location.href = '/daily.php';

					
				}else{
				
			  
  	  $( "#items" ).load( "/tickets3.php?day=<?php echo $day; ?>", function( response, status, xhr ) {
  if ( status == "error" ) {
//var msg = "Sorry but there was an error: ";
    //alert( msg + xhr.status + " " + xhr.statusText );
  
  location.href = '/daily.php';
  }
});								
				}
	
					},
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
        location.href = '/daily.php';
    }

  
        });

}				
});	



$('#list').sortable({
    update: function (event, ui) {
        var data = $(this).sortable('serialize');
        // POST to server using $.post or $.ajax
        $.ajax({
            data: data,
            type: 'POST',
            url: 'sort.php',
			success:function(data){
				
							if (data == '2'){
					
					        location.href = '/daily.php';

					
				}		
					
	
					},
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
        location.href = '/daily.php';
    }  
				

  
        });
    }
});



$(".daa14").on('change', function(){
	
	var name = $(this).attr('name');


var id = $(this).attr('var');
var val = $(this).is(':checked');



								var data = {
	
					jack : '',
					id : id,
					name : name,
					val : val
						
	
};	
  $.ajax({
            data: data,
            type: 'POST',
            url: 'update.php',
			success:function(data){
				
			  						if (data == '2'){
					
					        location.href = '/daily.php';

					
				}
					
	
					},
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
        location.href = '/daily.php';
    }

  
        });
	
});





$(".daa1").on('change', function(){
var name = $(this).attr('name');
var ido = $(this).attr('id');
var b = $(this).attr('b');


var id = $(this).attr('var');
var val = $(this).val();

/* if (name == 'tictype'){
				var trt = '#redeem'+ id; 
				var name2 = $(trt).attr('name');

	if (val == "1"){
		
		$(trt).val('');
		$(trt).prop('disabled', true);
		var valt = "";

	}else{
		
		$(trt).prop('disabled', false);
				$(trt).val('Redeem at Attraction');
		var valt = "Redeem at Attraction";

	}
	
											var data = {
	
					jack : '',
					id : id,
					name : name,
					val : val
						
	
};	
  $.ajax({
            data: data,
            type: 'POST',
            url: 'update.php',
			success:function(data){
				
			  					
						if (data == '2'){
					
					        location.href = '/daily.php';

					
				}
	
					},
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
        location.href = '/daily.php';
    }

  
        });
		
		
												var data = {
	
					jack : '',
					id : id,
					name : name2,
					val : valt
						
	
};	
  $.ajax({
            data: data,
            type: 'POST',
            url: 'update.php',
			success:function(data){
				
			  					
						if (data == '2'){
					
					        location.href = '/daily.php';

					
				}
	
					},
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
        location.href = '/daily.php';
    }

  
        });
	
	
	
}
 */
 if (val == null || val == "" || Math.round(val) == 0){
	if (name == 'title' || name =='type' || name == 'price'){
	var th = '#'+ ido;
	
	$(th).val(b);

	alert('Cannot Be NULL!');
	}
	
	
	else{
		
		///update
				var data = {
	
					jack : '',
					id : id,
					name : name,
					val : val
						
	
};
		
		
		
						//var data="id="+id+"&name="+name+"&val="+val+"&jack=";		
  $.ajax({
            data: data,
            type: 'POST',
            url: 'update.php',
			success:function(data){
				
			  					
					if (data == '2'){
					
					        location.href = '/daily.php';

					
				}	
	
					},
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
        location.href = '/daily.php';
    }

  
        });
		
		
	}
}
else if (name == 'soldafter'){
	var trt = '#Soldbefore'+ id; 
	var trt = $(trt).val();

if (val >= trt){
	var th = '#'+ ido;
	$(th).val(b);
	alert('Sold After Cannot Be Greater Than Sold Before!');
}else{
	
	////update
										var data = {
	
					jack : '',
					id : id,
					name : name,
					val : val
						
	
};	
  $.ajax({
            data: data,
            type: 'POST',
            url: 'update.php',
			success:function(data){
				
			  					
						if (data == '2'){
					
					        location.href = '/daily.php';

					
				}
	
					},
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
        location.href = '/daily.php';
    }

  
        });
}

}
else if (name == 'soldbefore'){
	var trt = '#Soldafter'+ id; 
	var trt = $(trt).val();

if (val <= trt){
	var th = '#'+ ido;
	$(th).val(b);
	alert('Sold Before Cannot Be Less Than Sold After!');
}else{
	
	////update
									var data = {
	
					jack : '',
					id : id,
					name : name,
					val : val
						
	
};		
  $.ajax({
            data: data,
            type: 'POST',
            url: 'update.php',
			success:function(data){
				
			  			if (data == '2'){
					
					        location.href = '/daily.php';

					
				}			
					
	
					},
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
        location.href = '/daily.php';
    }

  
        });
}

}
else if (name == 'validafter'){
	var trt = '#Validbefore'+ id; 
	var trt = $(trt).val();

if (val >= trt){
	var th = '#'+ ido;
	$(th).val(b);
	alert('Valid After Cannot Be Greater Than Valid Before!');
}else{
	
	////update
									var data = {
	
					jack : '',
					id : id,
					name : name,
					val : val
						
	
};		
  $.ajax({
            data: data,
            type: 'POST',
            url: 'update.php',
			success:function(data){
				
			  					
						if (data == '2'){
					
					        location.href = '/daily.php';

					
				}
	
					},
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
        location.href = '/daily.php';
    }

  
        });
}

}	
else if (name == 'validbefore'){
	var trt = '#Validafter'+ id; 
	var trt = $(trt).val();

if (val <= trt){
	var th = '#'+ ido;
	$(th).val(b);
	alert('Valid Before Cannot Be Less Than Valid After!');
}else{
	
	////update
										var data = {
	
					jack : '',
					id : id,
					name : name,
					val : val
						
	
};		
  $.ajax({
            data: data,
            type: 'POST',
            url: 'update.php',
			success:function(data){
				
			  					
						if (data == '2'){
					
					        location.href = '/daily.php';

					
				}
	
					},
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
        location.href = '/daily.php';
    }

  
        });
}

}
else if (name == 'validfor'){
	

	
	////update
										var data = {
	
					jack : '',
					id : id,
					name : name,
					val : val
						
	
};		
  $.ajax({
            data: data,
            type: 'POST',
            url: 'update.php',
			success:function(data){
				
			  		if (data == '2'){
					
					        location.href = '/daily.php';

					
				}				
					
	
					},
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
        location.href = '/daily.php';
    }

  
        });


}
else if (name == 'price'){
var val = val.replace('$', '');
var val = val.replace(',', '');	
var val = val.replace('-', '');
var val = parseFloat(Math.round(val * 100) / 100).toFixed(2);	
if (isNaN(val)){
	var th = '#'+ ido;
	$(th).val(b);
	alert('Price Must Be A Number!');
}else{
	
	var th = '#'+ ido;
	$(th).val(val);
	////update
										var data = {
	
					jack : '',
					id : id,
					name : name,
					val : val
						
	
};		
  $.ajax({
            data: data,
            type: 'POST',
            url: 'update.php',
			success:function(data){
				
			  					
						if (data == '2'){
					
					        location.href = '/daily.php';

					
				}
	
					},
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
        location.href = '/daily.php';
    }

  
        });
}

}
else{
	
////update
								var data = {
	
					jack : '',
					id : id,
					name : name,
					val : val
						
	
};	
  $.ajax({
            data: data,
            type: 'POST',
            url: 'update.php',
			success:function(data){
				
			  					
						if (data == '2'){
					
					        location.href = '/daily.php';

					
				}
	
					},
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
        location.href = '/daily.php';
    }

  
        });
	
}

});



$(".open").mouseover(function() {

var id = $(this).attr('var');
	var trt = '#expand'+ id; 
 $(trt).show();
 
 
 //$(trt).mouseout(function() {

 //$(trt).html('');

//});
 
 $(".open").mouseout(function() {

var id = $(this).attr('var');
	var trt = '#expand'+ id; 
 $(trt).hide();
 

 
 

});

});





</script>
