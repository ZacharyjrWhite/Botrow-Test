

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



<table align="center" width="1200"><tr><td align="center">
<?php require("pageHeader.php"); ?>


<br/><br/>



</td></tr></table><br/>




<table width = "1200" id="bground3" align="center">
<tr>
<td width = "100" align="center">
Item
</td>
<td width = "250" align="center">
Class
</td>
<td width = "255" align="center">
Description
</td>
<td width = "255" align="center">
Type
</td>
<td width = "100" align="center">
Inventory
</td>


<td width = "190" align="center">
Price
</td>
<td width = "50" valign="top" align="center">

</td>
</tr>
<tr>
<td width = "100" valign="center" align="center">
<select class = "daa1" id = "item">
<option value="" disabled selected></option>
  <option value="5" >Pass</option>
  <option value="6" >Family Pass (4 passes)</option>
  <option value="7" >Camp</option>
</select>
</td>
<td width = "250" valign="center" align="center">
<textarea class = "daa1" id = "Clas"  placeholder="Ex: Adult, Child" alt="Ex: Adult, Child" title="Ex: Adult, Child"></textarea>
</td>
<td width = "255" valign="center" align="center">
<textarea class = "daa1" id = "Desc"  placeholder="Ex: 18yrs & over" alt="Ex: 18yrs & over" title="Ex: 18yrs & over"></textarea>
</td>
<td width = "255" valign="center" align="center">
<textarea class = "daa1" id = "Type"  placeholder="Ex: Full Day" alt="Ex: Full Day" title="Ex: Full Day"></textarea>
</td>

<td width = "100" valign="center" align="center">
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

<td width = "190" valign="center" align="center">
<textarea class = "daa1" id = "Price"  placeholder="Ex: 40.99" alt="Ex: 40.99" title="Ex: 40.99"></textarea>
</td>
<td width = "50" valign="center" align="center">
<div class = "buton3" id = "add" >Add</div>
</td>
</tr>


</table>

<br/><br/><table width="1200" class="cool" align="center"><tr><td align="center"><font face="more" size="6"><b>Passes & Camps For Sale:</b></font>
</td></tr></table>
<div id="items"></div>
</center>
<br/><br/><br/><br/><br/>
<script type="text/javascript">









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


  	  $( "#items" ).load( "/tickets4.php?day=<?php echo $day; ?>", function( response, status, xhr ) {
  if ( status == "error" ) {
var msg = "Sorry but there was an error: ";
    alert( msg + xhr.status + " " + xhr.statusText );
  
  location.href = '/index.php';
  }
});	


function getDay(selectObject) {
    var value = selectObject.value;  
	
	location.href = '/passes.php?day='+value+'';
}







function added(we){
	
	if (we == 1){
		
				  alert('Item Updated!');	

	}else{
		  alert('Item Added!');	
	}
	
}



$("#add").click(function(){
	$('#Clas').css({'border':'1px solid #e2e2e2'});
	$('#Type').css({'border':'1px solid #e2e2e2'});
	$('#Price').css({'border':'1px solid #e2e2e2'});	
	$('#inventory').css({'border':'1px solid #e2e2e2'});	
	$('#item').css({'border':'1px solid #e2e2e2'});	


var item = $("#item").val();
var Clas = $("#Clas").val();
var Desc = $("#Desc").val();
var Type = $("#Type").val();
var Price = $("#Price").val();
var inventory = $("#inventory").val();

var sold = '2';


 if (Clas == null || Clas == ""){
	
	$('#Clas').css({'border':'1px solid red'});
	
}
else if (Type == null || Type == ""){
	
		$('#Type').css({'border':'1px solid red'});
	
}


else if (Price == null || Price == ""){
	
		$('#Price').css({'border':'1px solid red'});
	
	
}

else if (sold == null || sold == ""){
	
		$('#sold').css({'border':'1px solid red'});
	
	
}
else if (inventory == null || inventory == ""){
	
		$('#inventory').css({'border':'1px solid red'});
	
	
}
else if (item == null || item == ""){
	
		$('#item').css({'border':'1px solid red'});
	
	
}
else{
	
var Price = Price.replace('$', '');
var Price = Price.replace(',', '');
var Price = parseFloat(Math.round(Price * 100) / 100).toFixed(2);	

 if (isNaN(Price)){
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
					inventory: inventory,
					sld : sold
	
};
			
			
			
					$.ajax({
					type: "POST",
					url: 'add8.php?',
					data: dataString,
					crossDomain: true,
					cache: false,
					dataType:'json', 
					success:function(data){
					var te = data.length;
					//alert(data[0].stop);
					  	//alert('hello');	
					if (data[0].resp == 1){
						
						
						
				
	  alert('Pass Added!');	
  
  
   	  $( "#items" ).load( "/tickets4.php?day=<?php echo $day; ?>", function( response, status, xhr ) {
  if ( status == "error" ) {
//var msg = "Sorry but there was an error: ";
    //alert( msg + xhr.status + " " + xhr.statusText );
  
  location.href = '/passes.php';
  }
});	
  
  
					}

								else if (data[0].resp == 2){
				
	  alert('Error!');	
  
  
         location.href = '/passes.php';

  
  
					}					
					
	
					},
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
        location.href = '/passes.php';
    }  
					});
				
	
}
}
	
					});

</script>
