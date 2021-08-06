

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





<table width = "1200" id="bground">
<tr>
<td width = "25" align="center">

</td>
<td width = "100" align="center">
Item
</td>
<td width = "250" align="center">
Class
</td>
<td width = "210" align="center">
Description
</td>
<td width = "210" align="center">
Type
</td>
<td width = "100" align="center">
Inventory
</td>

<td width = "155" align="center">
Price
</td>
<td width = "100" valign="top" align="center">

</td>
<td width = "25" align="center">

</td>
</tr></table>


<ul id="list" style="padding-left: 0;
 width:1200px">

<?php



$aa = mysqli_query($db,"SELECT * FROM items where (cat like '5' or  cat like '6' or  cat like '7') and del is NULL and itemtype = 'passes' order by ord asc");   
$bb = mysqli_num_rows($aa);

$r=0;

while ($r < $bb){
$id=utf8_encode(mysqli_result($aa,$r,"id"));	
$cat=utf8_encode(mysqli_result($aa,$r,"cat"));
$clas=utf8_encode(mysqli_result($aa,$r,"title"));
$desc=utf8_encode(mysqli_result($aa,$r,"description"));
$type=utf8_encode(mysqli_result($aa,$r,"type"));
$inv=utf8_encode(mysqli_result($aa,$r,"inv"));

$price=utf8_encode(mysqli_result($aa,$r,"price"));

$sold=utf8_encode(mysqli_result($aa,$r,"sold"));


if ($inv == NULL or $inv == ""){

$inv = "N/A";
}else{
$aa6 = mysqli_query($db,"SELECT * FROM inventory where id = '$inv' order by name asc");   
$bb6 = mysqli_num_rows($aa6);

$inv=utf8_encode(mysqli_result($aa6,0,"name"));

}	


if ($r % 2 == 0){
	$bgcolor = "#FFFFFF";
	
}else{
	$bgcolor = "#f4f6f6";
}



if ($cat == 5){
	
$cat = "Pass";	
}
else if ($cat == 6){
	$cat = "Family Pass";	

}
else if ($cat == 7){
	$cat = "Camp";	

}
?>

<li id="item-<?php echo $id; ?>">
<table width = "1200" bgcolor = "<?php echo $bgcolor; ?>" class="open" var="<?php echo $id; ?>">

<tr>
<td width = "25" valign="center" align="center">
<div id="move" alt="Drag To Re-Order" title="Drag To Re-Order"></div>
</td>
<td width = "100" valign="center" align="center">
<textarea disabled class = "daa1" id = "Ite<?php echo $id; ?>" b="<?php echo htmlspecialchars($cat); ?>" name="ite" var="<?php echo $id; ?>" alt="Ex: Pass" title="Ex: Pass"><?php echo $cat; ?></textarea>
</td>
<td width = "250" valign="center" align="center">
<textarea disabled class = "daa1" id = "Clas<?php echo $id; ?>"  b="<?php echo htmlspecialchars($clas); ?>" name="title" var="<?php echo $id; ?>" alt="Ex: Adult, Child" title="Ex: Adult, Child"><?php echo $clas; ?></textarea>
</td>
<td width = "210" valign="center" align="center">
<textarea disabled class = "daa1" id = "Desc<?php echo $id; ?>" b="<?php echo htmlspecialchars($desc); ?>" name="description" var="<?php echo $id; ?>" alt="Ex: 18yrs & over" title="Ex: 18yrs & over"><?php echo $desc; ?></textarea>
</td>
<td width = "210" valign="center" align="center">
<textarea disabled class = "daa1" id = "Type<?php echo $id; ?>" b="<?php echo htmlspecialchars($type); ?>" name="type" var="<?php echo $id; ?>" alt="Ex: Full Day" title="Ex: Full Day"><?php echo $type; ?></textarea>
</td>
<td width = "100" valign="center" align="center">
<textarea disabled class = "daa1" id = "Inv<?php echo $id; ?>" b="<?php echo htmlspecialchars($inv); ?>" name="inv" var="<?php echo $id; ?>" alt="Ex: Adult Bikes" title="Ex: Adult Bikes"><?php echo $inv; ?></textarea>
</td>
<td width = "155" valign="center" align="center">
<textarea disabled class = "daa1" id = "Price<?php echo $id; ?>"  b="<?php echo htmlspecialchars($price); ?>" name="price" var="<?php echo $id; ?>" alt="Ex: 40.99" title="Ex: 40.99"><?php echo $price; ?></textarea>
</td>
<td width = "100" valign="center" align="center">

</td>
<td width = "25" valign="center" align="center">
<div id="<?php echo $id; ?>" class="del" alt="Delete Item" title="Delete Item"></div>
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
					
					        location.href = '/passes.php';

					
				}else{
				
			  
  	  $( "#items" ).load( "/tickets4.php?day=<?php echo $day; ?>", function( response, status, xhr ) {
  if ( status == "error" ) {
//var msg = "Sorry but there was an error: ";
    //alert( msg + xhr.status + " " + xhr.statusText );
  
  location.href = '/passes.php';
  }
});								
					
				}
					},
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
        location.href = '/passes.php';
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
					
					        location.href = '/passes.php';

					
				}
					
	
					},
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
        location.href = '/passes.php';
    }  
				

  
        });
    }
});











</script>
