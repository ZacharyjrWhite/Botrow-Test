

<?php
require("login.php");
//require("dbase.php");
$de = date('Y-m-d');








?>
<head>
  <meta charset="utf-8">
<title>Botrow - Selling Locations</title>

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
	background-color: #0097ab;
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
		background-color:#203A81;
	position:relative;
	
}

.hello{
position: fixed;
font-family: "Raleway", sans-serif;
text-align: center;
font-size: 20px;
background-color: #F9FAF9;

z-index: 5;

}

.are{
	
	
	width: 500px;
	height: 200px;
	  resize: none;

	
}


	.buton3 {
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
	width: 100px;
	text-transform: uppercase;
}

.buton3:active {
	position:relative;
	
}

.buton3:hover {
		background-color: #0097ab;
	position:relative;
	
}
select{

width: 30%;


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


<?php
$aa = mysqli_query($db,"SELECT * FROM settings where id = '1' and kiosk is not null");   
$bb = mysqli_num_rows($aa);

if ($bb == 1){
	$kiosk=utf8_encode(mysqli_result($aa,0,"kiosk"));	

	
	
}
else{
	
	$kiosk = 1;
	
}

?>


<table width = "600" align ="center" cellspacing="0" cellpadding="5">
<tr>

<td class="hello" width = "600" align="center">
<br/>
Where Do You Want To Sell Tickets:

<br/><br/>

	<select id="kiosk" style="padding: 8px 8px;">
		
		<option Value="3" <?php if ($kiosk == 3){ echo "selected"; } ?>>Kiosk(s)</option>
		<option Value="2"<?php if ($kiosk == 2){ echo "selected"; } ?>>Webstore</option>
		<option Value="1"<?php if ($kiosk == 1){ echo "selected"; } ?>>Kiosk(s) & Webstore</option>	
		</select>

<br/><br/>
<div class = "buton3" id = "add" >Submit</div>
<br/><br/>

</td></tr>



</table><br/>




</td></tr></table><br/><br/><br/>
</center>
<script>


$("#add").click(function(){



var kiosk = $("#kiosk").val();


			var dataString = {
	
					kiosk : kiosk
	
};
			
			
			
					$.ajax({
					type: "POST",
					url: 'add7.php?',
					data: dataString,
					crossDomain: true,
					cache: false,
					dataType:'json', 
					success:function(data){
					var te = data.length;
					//alert(data[0].stop);
					  	//alert('hello');	
					if (data[0].resp == 1){
						
						
						
				
	  alert('Update Succeeded!');	
  

  
  
					}

								else if (data[0].resp == 2){
				
	  alert('Error!');	
  
          location.href = '/method.php';

 
  
  
					}						
					
	
					},
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
        location.href = '/method.php';
    }  
					});
				
	

	
					});



</script>