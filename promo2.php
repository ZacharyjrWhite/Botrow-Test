

<?php
require("login.php");
//require("dbase.php");





if(isset($_REQUEST['id'])) {
	$ids = $_REQUEST['id'];

	
	
}else{
?>
<script type="text/javascript">

   location.href = '/daily.php';
</script>

<?php	
	
	
}


?>
<head>
  <meta charset="utf-8">
  <title>Botrow - Daily Promo</title>

  <link rel="shortcut icon" type="image/png" href="favicon.png">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="//code.jquery.com/jquery-3.4.1.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

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
   margin: 5px 0px; 
  width:100%;
			font-family:more;
	font-size:14px;
	height: 38px;
		overflow: hidden; 
	

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
		margin: 5px 0px;
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

#bground {
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


.del{
position: relative; 
	width: 25px; 
	height: 25px;	
background: url(img/delete.png) no-repeat;
	
	
}

.cool2{
		background-color:#203A81;
	color:#ffffff;
	padding:8px 17px;
	font-family:more;
	font-size:25px;
width: 1217px;
	
}

.cool{
		background-color:#203A81;
	color:#ffffff;
	padding:4px 17px;
	font-family:more;
	font-size:25px;
	
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

<table align="center" width = "1250"><tr><td align="center">
<?php require("pageHeader.php"); ?>


<br/><br/>




</td></tr></table>
<table width="1250" class="cool" align="center"><tr><td align="center">
<b>Promotions For:</b>
</td></tr></table>

<table width = "1250" id="bground">
<tr>

<td width = "100" align="center">
Item
</td>
<td width = "120" align="center">
Class
</td>
<td width = "120" align="center">
Description
</td>
<td width = "150" align="center">
Type
</td>
<td width = "100" align="center">
Sold After
</td>
<td width = "100" align="center">
Sold Before
</td>
<td width = "90" align="center">
Valid After
</td>
<td width = "90" align="center">
Valid Before
</td>
<td width = "80" align="center">
Valid For
</td>
<td width = "75" align="center">
Price
</td>

</tr></table>



<?php


$aa = mysqli_query($db,"SELECT * FROM items where id = '$ids' and del is NULL and master is NULL and itemtype = 'daily' order by ord asc");   
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
$soldon=utf8_encode(mysqli_result($aa,$r,"soldon"));
$sold=utf8_encode(mysqli_result($aa,$r,"sold"));


if ($r % 2 == 0){
	$bgcolor = "#FFFFFF";
	
}else{
	$bgcolor = "#f4f6f6";
}
?>
<input type="hidden" id = "daa" value="<?php echo $soldon; ?>">

<table width = "1250" bgcolor = "<?php echo $bgcolor; ?>">

<tr>
<td width = "100" valign="center" align="center">
<select disabled class = "daa1" id = "cat<?php echo $id; ?>" name="cat" var="<?php echo $id; ?>" b="<?php echo htmlspecialchars($cat); ?>">
  <option value="1" <?php if($cat == "1"){ ?> selected = "selected" <?php } ?>>Ticket</option>
  <option value="2" <?php if($cat == "2"){ ?> selected = "selected" <?php } ?>>Rental</option>
</select>
</td>
<td width = "120" valign="center" align="center">
<textarea disabled class = "daa1" id = "Clas<?php echo $id; ?>"  b="<?php echo htmlspecialchars($clas); ?>" name="title" var="<?php echo $id; ?>" alt="Ex: Adult, Child" title="Ex: Adult, Child"><?php echo $clas; ?></textarea>
</td>
<td width = "120" valign="center" align="center">
<textarea disabled class = "daa1" id = "Desc<?php echo $id; ?>" b="<?php echo htmlspecialchars($desc); ?>" name="description" var="<?php echo $id; ?>" alt="Ex: 18yrs & over" title="Ex: 18yrs & over"><?php echo $desc; ?></textarea>
</td>
<td width = "150" valign="center" align="center">
<textarea disabled class = "daa1" id = "Type<?php echo $id; ?>" b="<?php echo htmlspecialchars($type); ?>" name="type" var="<?php echo $id; ?>" alt="Ex: Full Day" title="Ex: Full Day"><?php echo $type; ?></textarea>
</td>
<td width = "100" valign="center" align="center">
<select disabled class = "daa1" id = "Soldafter<?php echo $id; ?>" b="<?php echo $sa; ?>" name="soldafter" var="<?php echo $id; ?>" alt="Ex: 8am" title="Ex: 8am">
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
<select disabled class = "daa1" id = "Soldbefore<?php echo $id; ?>" b="<?php echo $sb; ?>" name="soldbefore" var="<?php echo $id; ?>" alt="Ex: 9pm" title="Ex: 9pm">
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
<td width = "90" valign="center" align="center">
<select disabled class = "daa1" id = "Validafter<?php echo $id; ?>" b="<?php echo $va; ?>" name="validafter" var="<?php echo $id; ?>" alt="Ex: 8am" title="Ex: 8am">
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
<td width = "90" valign="center" align="center">
<select disabled class = "daa1" id = "Validbefore<?php echo $id; ?>" b="<?php echo $vb; ?>" name="validbefore" var="<?php echo $id; ?>" alt="Ex: 9pm" title="Ex: 9pm">
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
<select disabled class = "daa1" id = "Validfor<?php echo $id; ?>" b="<?php echo $vf; ?>" name="validfor" var="<?php echo $id; ?>" alt="Ex: 9pm" title="Ex: 9pm">
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
<textarea disabled class = "daa1" id = "Price<?php echo $id; ?>"  b="<?php echo htmlspecialchars($price); ?>" name="price" var="<?php echo $id; ?>" alt="Ex: 40.99" title="Ex: 40.99"><?php echo $price; ?></textarea>
</td>
</tr>
</table>
<?php
$r++;
}



if($promo == NULL){
?>	
<br/><br/><table width="1250" align="center" class="cool"><tr><td align="center"><b>Add A Promo!</b></td></tr></table>


<table width = "1250" id="bground">
<tr><td width = "100" align="center">
Item
</td>
<td width = "150" align="center">
Class
</td>
<td width = "150" align="center">
Description
</td>
<td width = "150" align="center">
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
<td width = "100" align="center">
Valid For
</td>
<td width = "100" align="center">
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
    <option value="4" >Auto Tic</option>

</select>
</td>
<td width = "150" valign="center" align="center">
<textarea class = "daa1" id = "Clas"  placeholder="Ex: Adult, Child" alt="Ex: Adult, Child" title="Ex: Adult, Child"></textarea>
</td>
<td width = "150" valign="center" align="center">
<textarea class = "daa1" id = "Desc"  placeholder="Ex: 18yrs & over" alt="Ex: 18yrs & over" title="Ex: 18yrs & over"></textarea>
</td>
<td width = "150" valign="center" align="center">
<textarea class = "daa1" id = "Type"  placeholder="Ex: Full Day" alt="Ex: Full Day" title="Ex: Full Day"></textarea>
</td>
<td width = "100" valign="center" align="center">
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
<td width = "100" valign="center" align="center">
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
<td width = "100" valign="center" align="center">
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
<td width = "100" valign="center" align="center">
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
<td width = "100" valign="center" align="center">
<textarea class = "daa1" id = "Price"  placeholder="Ex: 0.00" alt="Ex: 0.00" title="Ex: 0.00"></textarea>
</td>
<td width = "50" valign="top" align="center">
<div class = "buton3" id = "add" >Add</div>
</td>
</tr>

<tr>


<table width = "1250" id="bground2" align="center" border = "0"><tr>
<td width = "120" align = "right">
Qty To Print: </td>
<td width = "80" align = "left">
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
<td width = "80" align = "right">
Ticket Type: </td>
<td width = "100" align = "left">
<select class = "daa1" id = "tictype"  placeholder="tic type" alt="Ex: Label/Bracelet" title="Ex: Label/Bracelet">
<option value="" disabled selected></option>
  <option value = "1">Label/Bracelet</option>
  <option value = "2">Rcpt Paper</option>  
</select>
</td>
<td width = "80" align = "right">
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
<td width = "70" align="right">
Limit:
</td>
<td width = "50" align="left">
<textarea class = "daa1" id = "Limit"  placeholder="Ex: 3" alt="Ex: 3" title="Ex: 3"></textarea>

</td>
<td width = "90" align="right">
</td>
</tr></table>
</tr>


</table>



	
	
	<?php
}
else{
	?>
	<br/><br/><div class="cool2"><b>Promo Running:</b></div>


<table width = "1250" id="bground">
<tr>

<td width = "100" align="center">
Item
</td>
<td width = "120" align="center">
Class
</td>
<td width = "120" align="center">
Description
</td>
<td width = "150" align="center">
Type
</td>
<td width = "100" align="center">
Sold After
</td>
<td width = "100" align="center">
Sold Before
</td>
<td width = "90" align="center">
Valid After
</td>
<td width = "90" align="center">
Valid Before
</td>
<td width = "80" align="center">
Valid For
</td>
<td width = "75" align="center">
Price
</td>
<td width = "25" align="center">

</td>
</tr></table>



<?php
$aa6 = mysqli_query($db,"SELECT * FROM inventory where del is NULL order by name asc");   
$bb6 = mysqli_num_rows($aa6);
$aa = mysqli_query($db,"SELECT * FROM items where master = '$ids' and itemtype='daily' and del is NULL order by ord asc");   
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

$weight=mysqli_result($aa,$r,"weight");
$height=mysqli_result($aa,$r,"height");
$shoe=mysqli_result($aa,$r,"shoe");
$helmet=mysqli_result($aa,$r,"helmet");
$sex=mysqli_result($aa,$r,"sex");
$age=mysqli_result($aa,$r,"age");
$ability=mysqli_result($aa,$r,"ability");
$equip=mysqli_result($aa,$r,"equip");

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


if ($r % 2 == 0){
	$bgcolor = "#FFFFFF";
	
}else{
	$bgcolor = "#f4f6f6";
}
?>


<table width = "1250" bgcolor = "<?php echo $bgcolor; ?>">

<tr>
<td width = "100" valign="center" align="center">
<select disabled class = "daa1" id = "cat<?php echo $id; ?>" name="cat" var="<?php echo $id; ?>" b="<?php echo htmlspecialchars($cat); ?>">
  <option value="1" <?php if($cat == "1"){ ?> selected = "selected" <?php } ?>>Ticket</option>
  <option value="2" <?php if($cat == "2"){ ?> selected = "selected" <?php } ?>>Rental</option>
  <option value="4" <?php if($cat == "4"){ ?> selected = "selected" <?php } ?>>Auto Tic</option>

</select>
</td>
<td width = "120" valign="center" align="center">
<textarea disabled class = "daa1" id = "Clas<?php echo $id; ?>"  b="<?php echo htmlspecialchars($clas); ?>" name="title" var="<?php echo $id; ?>" alt="Ex: Adult, Child" title="Ex: Adult, Child"><?php echo $clas; ?></textarea>
</td>
<td width = "120" valign="center" align="center">
<textarea disabled class = "daa1" id = "Desc<?php echo $id; ?>" b="<?php echo htmlspecialchars($desc); ?>" name="description" var="<?php echo $id; ?>" alt="Ex: 18yrs & over" title="Ex: 18yrs & over"><?php echo $desc; ?></textarea>
</td>
<td width = "150" valign="center" align="center">
<textarea disabled class = "daa1" id = "Type<?php echo $id; ?>" b="<?php echo htmlspecialchars($type); ?>" name="type" var="<?php echo $id; ?>" alt="Ex: Full Day" title="Ex: Full Day"><?php echo $type; ?></textarea>
</td>
<td width = "100" valign="center" align="center">
<select disabled class = "daa1" id = "Soldafter<?php echo $id; ?>" b="<?php echo $sa; ?>" name="soldafter" var="<?php echo $id; ?>" alt="Ex: 8am" title="Ex: 8am">
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
<select disabled class = "daa1" id = "Soldbefore<?php echo $id; ?>" b="<?php echo $sb; ?>" name="soldbefore" var="<?php echo $id; ?>" alt="Ex: 9pm" title="Ex: 9pm">
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
<td width = "90" valign="center" align="center">
<select disabled class = "daa1" id = "Validafter<?php echo $id; ?>" b="<?php echo $va; ?>" name="validafter" var="<?php echo $id; ?>" alt="Ex: 8am" title="Ex: 8am">
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
<td width = "90" valign="center" align="center">
<select disabled class = "daa1" id = "Validbefore<?php echo $id; ?>" b="<?php echo $vb; ?>" name="validbefore" var="<?php echo $id; ?>" alt="Ex: 9pm" title="Ex: 9pm">
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
<select disabled class = "daa1" id = "Validfor<?php echo $id; ?>" b="<?php echo $vf; ?>" name="validfor" var="<?php echo $id; ?>" alt="Ex: 9pm" title="Ex: 9pm">
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
<textarea disabled class = "daa1" id = "Price<?php echo $id; ?>"  b="<?php echo htmlspecialchars($price); ?>" name="price" var="<?php echo $id; ?>" alt="Ex: 40.99" title="Ex: 40.99"><?php echo $price; ?></textarea>
</td>

<td width = "25" valign="center" align="center">
<div id="<?php echo $id; ?>" class="del" alt="Delete Item" title="Delete Item"></div>
</td>
</tr>


<tr>
<td colspan ="11">


<table width = "1250" id="bground4" align="center" border = "0"><tr>
<td width = "120" align = "right">
Qty To Print: </td>
<td width = "80" align = "left">
<select disabled class = "daa1" id = "printq<?php echo $id; ?>" b="<?php echo $pq; ?>" name="printq" var="<?php echo $id; ?>" alt="Ex: 1" title="Ex: 1">

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
<td width = "80" align = "right">
Ticket Type: </td>
<td width = "100" align = "left">
<select disabled class = "daa1" id = "tictype<?php echo $id; ?>" b="<?php echo $tic; ?>" name="tictype" var="<?php echo $id; ?>" alt="Ex: Label/Bracelet" title="Ex: Label/Bracelet">
  <option value = "1" <?php if($tic == "1"){ ?> selected = "selected" <?php } ?>>Label/Bracelet</option>
  <option value = "2" <?php if($tic == "2"){ ?> selected = "selected" <?php } ?>>Rcpt Paper</option>  
</select>
</td>
<td width = "80" align = "right">
Instructions: </td>
<td width = "100" align = "left">
<textarea disabled <?php if($tic == "1"){ ?> disabled <?php } ?> class = "daa1" id = "redeem<?php echo $id; ?>" b="<?php echo htmlspecialchars($redeem); ?>" name="redeem" var="<?php echo $id; ?>" alt="Ex: Redeem at..." title="Ex: Redeem at..."><?php echo $redeem; ?></textarea>

</td>
<td width = "80" align = "right">
Inventory: </td>
<td width = "100" align = "left">
<select disabled class = "daa1" id = "inv<?php echo $id; ?>" b="<?php echo $inv; ?>" name="inv" var="<?php echo $id; ?>"  alt="Ex: Adult Bikes" title="Ex: Adult Bikes">
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
<td width = "70" align="center">
Limit:
</td>
<td width = "50" align="center">
<textarea disabled class = "daa1" id = "Limit<?php echo $id; ?>"  b="<?php echo htmlspecialchars($promo); ?>" name="limit" var="<?php echo $id; ?>" alt="Ex: 3" title="Ex: 3"><?php echo $promo; ?></textarea>

</td>
<td width = "90" valign="center" align="center">
<?php
if ($cat == 2){
?>
<a href="javascript:popup(<?php echo $id; ?>, <?php echo $height; ?>, <?php echo $weight; ?>, <?php echo $shoe; ?>, <?php echo $helmet; ?>, <?php echo $age; ?>, <?php echo $sex; ?>, <?php echo $ability; ?>, <?php echo $equip; ?>);">Collect</a>

<?php	

	
}


?>
</td>
</tr></table>

</td>

</tr>
</table>
<?php
$r++;
}	
	
	
}


?>



</center>

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
html += '</p>';
html += '<div class="bx1" style="padding:25px;"><div class = "buton4" id = "add2"  style="top:15px">Submit</div></div>';



							$('#msg').html(html);

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
					equip : equip
	
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
  
  


  
					}

								else if (data[0].resp == 2){
				
	  alert('Error!');	
  
  
         location.href = '/daily.php';

  
  
					}							
					
	
					},
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
        location.href = '/daily.php';
    }  
					});



});
	   
			}


    $('.popupCloseButton').click(function(){
        $('.hover_bkgr_fricc').hide();
    });

function added(we){
	
	if (we == 1){
		
				  alert('Item Updated!');	

	}else{
		  alert('Item Added!');	
	}
	
	var idd = '<?php echo $ids; ?>';

    location.href = '/promo2.php?id='+idd+'';
	
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


});
 */


$("#item").on('change', function(){
	var hjk = $(this).val();
	$('#Limit').css({'border':'1px solid #e2e2e2'});
	$('#Price').css({'border':'1px solid #e2e2e2'});


if (hjk == '1'){

$("#Limit").val('');

$("#Limit").prop('disabled', false);


$("#Price").val('');

$("#Price").prop('disabled', false);

$("#inventory").val('');

$("#inventory").prop('disabled', false);
}

if (hjk == '2'){

$("#Limit").val('');

$("#Limit").prop('disabled', false);


$("#Price").val('');

$("#Price").prop('disabled', false);

$("#inventory").val('');

$("#inventory").prop('disabled', false);
}

if (hjk == '4'){

$("#Limit").val('1');

$("#Limit").prop('disabled', true);


$("#Price").val('0.00');

$("#Price").prop('disabled', true);

$("#inventory").val('N/A');

$("#inventory").prop('disabled', true);
}


});


	$(".del").click(function(){
var idot = $(this).attr('id');
		
var r = confirm("Are you sure you want to delete this item?");
if (r == true) {

									
				var data="id="+idot+"&jack=";		
  $.ajax({
            data: data,
            type: 'POST',
            url: 'delete2.php',
			success:function(data){
				
if (data == '2'){
					alert('Error!');
					
					  location.href = '/promo2.php?id=<?php echo $ids; ?>';

					
				}else{
  location.href = '/promo2.php?id=<?php echo $ids; ?>';
				}			
					
	
					},
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
        location.href = '/daily.php';
    }

  
        });

}				
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
        //window.location.reload();
     location.href = '/index.php';
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
	$('#Price').css({'border':'1px solid #e2e2e2'});
$('#Limit').css({'border':'1px solid #e2e2e2'});	

	$('#printq').css({'border':'1px solid #e2e2e2'});
	$('#tictype').css({'border':'1px solid #e2e2e2'});
	$('#redeem').css({'border':'1px solid #e2e2e2'});
	$('#inventory').css({'border':'1px solid #e2e2e2'});
	$('#Validfor').css({'border':'1px solid #e2e2e2'});


var daa = $("#daa").val();
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
var Limit = $("#Limit").val();


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
else if (TT == '2' && (RE == null || RE == "")){
	
		$('#redeem').css({'border':'1px solid red'});
	
	
}
else if (IN == null || IN == ""){
	
		$('#inventory').css({'border':'1px solid red'});
	
	
}

else if (Limit == null || Limit == "" || Limit < 1){
	
		$('#Limit').css({'border':'1px solid red'});
	
	
}
else{
	
var Price = Price.replace('$', '');
var Price = Price.replace(',', '');
var Price = Price.replace('-', '');
var Limit = Limit.replace('-', '');
var Price = parseFloat(Math.round(Price * 100) / 100).toFixed(2);	

if ( SA >= SB){
	
	$('#Soldbefore').css({'border':'1px solid red'});
	$('#Soldafter').css({'border':'1px solid red'});
}
else if ( VA >= VB){
	
	$('#Validbefore').css({'border':'1px solid red'});
	$('#Validafter').css({'border':'1px solid red'});
}
else if (isNaN(Price)){
		$('#Price').css({'border':'1px solid red'});
}
else if (isNaN(Limit)){
		$('#Limit').css({'border':'1px solid red'});
}
else if(Limit != parseInt(Limit, 10)){
	
		$('#Limit').css({'border':'1px solid red'});
}
else{
var idd = '<?php echo $ids; ?>';
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
					lim : Limit,
					id : '<?php echo $ids; ?>',
					sld : '<?php echo $sold; ?>'
						
	
};
			
			
			
					$.ajax({
					type: "POST",
					url: 'add5.php?',
					data: dataString,
					crossDomain: true,
					cache: false,
					dataType:'json', 
					success:function(data){
					var te = data.length;
					//alert(data[0].stop);
					  	//alert('hello');	
					if (data[0].resp == 1){
				
	  alert('Promo Added!');	
  
  
  location.href = '/promo2.php?id='+idd+'';
	
  
  
					}

								else if (data[0].resp == 2){
				
	  alert('Error!');	
  
  
           location.href = '/daily.php';

  
  
					}
else if (data[0].resp == 5){
var itemid = data[1].itemid;
popup(itemid);

					}					
					
	
					},
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
        location.href = '/daily.php';
    }  
					});
				
	
}
}
	
					});

</script>
