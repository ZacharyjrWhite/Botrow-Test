

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
  <title>Botrow - Rental Inventory</title>

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




<table width = "800" id="bground3" align="center">
<tr><td width = "300" align="center">
Name
</td>
<td width = "300" align="center">
Description
</td>
<td width = "200" valign="top" align="center">

</td>
</tr>
<tr>
<td width = "300" valign="center" align="center">
<textarea class = "daa1" id = "nam"  placeholder="Ex: Boot Size" alt="Ex: Boot Size" title="Ex: Boot Size"></textarea>
</td>
<td width = "300" valign="center" align="center">
<textarea class = "daa1" id = "dsc"  placeholder="Ex: Downhill" alt="Ex: Downhill" title="Ex: Downhill"></textarea>
</td>
<td width = "200" valign="center" align="center">
<div class = "buton3" id = "add" >Add</div>

</td>
</tr>


</table>

<br/><br/><table width="800" class="cool" align="center"><tr><td align="center"><font face="more" size="6"><b>Rental Inventory:</b></font>
</td></tr></table>
<div id="items"></div>
</center>

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


  	  $( "#items" ).load( "/rinv2.php", function( response, status, xhr ) {
  if ( status == "error" ) {
var msg = "Sorry but there was an error: ";
    alert( msg + xhr.status + " " + xhr.statusText );
  
  location.href = '/index.php';
  }
});	










$("#add").click(function(){
	$('#nam').css({'border':'1px solid #e2e2e2'});

var nam = $("#nam").val();

$('#dsc').css({'border':'1px solid #e2e2e2'});

var dsc = $("#dsc").val();

if (nam == null || nam == ""){
	$('#nam').css({'border':'1px solid red'});
		
	
}
else if (dsc == null || dsc == ""){
	$('#dsc').css({'border':'1px solid red'});
		
	
}

else{
	


			var dataString = {
	
					jack : '',
					nam : nam,
					dsc : dsc
	
};
			
			
			
					$.ajax({
					type: "POST",
					url: 'add33.php?',
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
  
  
   	  $( "#items" ).load( "/rinv2.php", function( response, status, xhr ) {
  if ( status == "error" ) {
//var msg = "Sorry but there was an error: ";
    //alert( msg + xhr.status + " " + xhr.statusText );
  
  location.href = '/rinv.php';
  }
});	
  
  
					}

								else if (data[0].resp == 2){
				
	  alert('Error!');	
  
  
 
          location.href = '/rinv.php';

  
					}						
								else if (data[0].resp == 3){
				
	  alert('There is already inventory with that description!');	
  
  
 
  
  
					}	
	
					},
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
        location.href = '/rinv.php';
    }  
					});
				
	

}
	
					});

</script>
