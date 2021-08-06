

<?php
require("login.php");
//require("dbase.php");









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





<table width = "800" id="bground">
<tr>

<td width = "300" align="center">
Promo Code
</td>
<td width = "300" align="center">
Percent Off
</td>
<td width = "200" align="center">

</td>
</tr></table>



<?php

$aa = mysqli_query($db,"SELECT * FROM promocode where del is NULL order by name asc");   
$bb = mysqli_num_rows($aa);

$r=0;

while ($r < $bb){
$id=utf8_encode(mysqli_result($aa,$r,"id"));	
$nam=utf8_encode(mysqli_result($aa,$r,"name"));
$num=utf8_encode(mysqli_result($aa,$r,"percentoff"));



if ($r % 2 == 0){
	$bgcolor = "#FFFFFF";
	
}else{
	$bgcolor = "#f4f6f6";
}
?>

<table width = "800" bgcolor = "<?php echo $bgcolor; ?>" class="open" var="<?php echo $id; ?>">

<tr>


<td width = "300" valign="center" align="center">
<textarea class = "daa1" id = "nam<?php echo $id; ?>"  b="<?php echo htmlspecialchars($nam); ?>" name="name" var="<?php echo $id; ?>" alt="Ex: StaffDiscount" title="Ex: StaffDiscount"><?php echo $nam; ?></textarea>
</td>
<td width = "300" valign="center" align="center">
<textarea class = "daa1" id = "num<?php echo $id; ?>" b="<?php echo htmlspecialchars($num); ?>" name="percentoff" var="<?php echo $id; ?>" alt="Ex: 20" title="Ex: 20"><?php echo $num; ?></textarea>
</td>

<td width = "200" valign="center" align="center">
<div id="<?php echo $id; ?>" class="del" alt="Delete Item" title="Delete Item"></div>
</td>
</tr>

</table>


<?php
$r++;
}
?>




</center>

<script type="text/javascript">



	$(".del").click(function(){
var idot = $(this).attr('id');
		
var r = confirm("Are you sure you want to delete this promo code?");
if (r == true) {

									
				var data="id="+idot+"&jack=";		
  $.ajax({
            data: data,
            type: 'POST',
            url: 'delete4.php',
			success:function(data){
				
			  	 if (data == 3){

  location.href = '/pcodes.php';



						}							
						
						else{
  	  $( "#items" ).load( "/pcodes2.php", function( response, status, xhr ) {
  if ( status == "error" ) {
//var msg = "Sorry but there was an error: ";
    //alert( msg + xhr.status + " " + xhr.statusText );
  
  location.href = '/pcodes.php';
  }
});								
						}	
	
					},
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
        location.href = '/pcodes.php';
    }

  
        });

}				
});	








$(".daa1").on('change', function(){
var name = $(this).attr('name');
var ido = $(this).attr('id');
var b = $(this).attr('b');


var id = $(this).attr('var');
var val = $(this).val();



 if (val == null || val == ""){
	var th = '#'+ ido;
	
	$(th).val(b);

	alert('Cannot Be NULL!');
	
}




else if ( name == "percentoff"){
	
	var val = parseFloat(Math.round(val * 100) / 100).toFixed(0);	

if (isNaN(val)){
		var th = '#'+ ido;
	
	$(th).val(b);
	alert('Must Be A Number!');
}
else if (val < 0){
		var th = '#'+ ido;
	
	$(th).val(b);
	alert('Must Be A Positive Number!');
}
else if (val > 100){
		var th = '#'+ ido;
	
	$(th).val(b);
	alert('Cannot Be Greater Than 100!');
}

	else{
		
		var val = val.replace('-', '');

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
            url: 'update8.php',
			success:function(data){
			  					if (data == 3){
									
									        location.href = '/pcodes.php';

									
								}
					
	
					},
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
        location.href = '/pcodes.php';
    }

  
        });
		
	}
	
}

else if ( name == "name"){
	
	
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
            url: 'update8.php',
			success:function(data){
			  			if (data == 2){

var th = '#'+ ido;
	
	$(th).val(b);
	alert('That Promo Code Already Exists!');
						
						}
								  			else if (data == 4){

var th = '#'+ ido;
	
	$(th).val(b);
	alert('Promo Code Cannot Contain A Space!');
						
						}
						
						
						else if (data == 3){
									
									        location.href = '/pcodes.php';

									
								}							
					
	
					},
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
        location.href = '/pcodes.php';
    }

  
        });
		
	
	
}

});









</script>
