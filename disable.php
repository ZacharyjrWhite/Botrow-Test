

<?php
require("login.php");
//require("dbase.php");

?>
<head>
  <meta charset="utf-8">
  <title>Botrow - Enable/Disable Items</title>

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
	
	
	
	.daa5 {
	
  color: #203A81;
  padding: 10px 10px;
  border: 1px solid #e2e2e2;
  margin-bottom: 10px;
  width:150px;
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

.tit1{
  position: relative;
width:100%;
background-color: #d9d7d7;
    padding: 4px;
	font-weight: 600;
	    border-radius: 5px 5px 0 0;


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

.hlite5{
color: white;
    background-color: red;
    border-radius: 5px;
	text-align: center;
	padding: 0 5px 0 5px;
 -webkit-text-stroke-width: 0px;
  -webkit-text-stroke-color: #FFF;
  font-size: 12px; 

}

.statusButton{
	width: 100px;
	height: 50px;
	border: none;
	color: white;
	background-color: #2d99cf;
	text-transform: uppercase;
	font-weight: bold;
}

.statusButton:hover{
	background-color: #2377a1;
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
  
  $( "#datepicker" ).datepicker(
  {
  minDate: 0,
  onSelect: function(date) {

 	load(date);
        }
  }
  );
});
  </script>
</head>
<center>

<div class="hover_bkgr_fricc">
    <span class="helper"></span>
    <div>
        <div class="popupCloseButton">&times;</div>
        <div id='msg'></div>
    </div>
</div>

<table align="center" width="1000px"><tr><td align="center">
<?php require("pageHeader.php"); ?>

<br/><br/>


<table border = "0" width = "400" cellspacing = "0" align="center">
<tr>
<td width = "400" align="center">
<p>

 <input type="text" class="daa5" id="datepicker" placeholder="Select Date" readonly='true'>
</p>

</td>
</tr>


</table>


</td></tr></table><br/>





<table width="1000px" class="cool" align="center"><tr><td align="center" width="600px"><font face="more" size="6"><b>Check The Box To Pause Selling:</td><td align="center" width="400px">
	<span style="width: 150px; margin-left: 20px; float:right;"><button style="width: 150px;" class="statusButton" onclick="unpauseAll()" class="unpauseAll" id="unpauseAll">Unpause All</button></span>
	<span style="width: 150px; float:right;"><button style="width: 150px;" class="statusButton" onclick="pauseAll()" class="pauseAll" id="pauseAll">Pause All</button></span>
</b></font>
</td></tr></table>
<div id="items" style="width:600px; max-width: 1000px;"><br/><br/><span style="font-size: 20px; font-weight: 400;">No Items Available.</span></div>
</center>
<br/><br/><br/><br/><br/>
<script type="text/javascript">
var count = 0;
function eventFire(el, etype){
  if (el.fireEvent) {
    el.fireEvent('on' + etype);
  } else {
    var evObj = document.createEvent('Events');
    evObj.initEvent(etype, true, false);
    el.dispatchEvent(evObj);
  }
}
function unpauseAll(){
	var checkboxes = document.querySelectorAll(".daa14");
	checkboxes.forEach(box =>{
		if(box.checked){
			eventFire(box, 'change');
			box.checked = !box.checked;
		}
	});
}
function pauseAll(){
	var checkboxes = document.querySelectorAll(".daa14");
	checkboxes.forEach(box =>{
		if(!box.checked){
			eventFire(box, 'change');
			box.checked = !box.checked;
		}
	});
}
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







function load(date) {
    
	                 $('#items').html('<br/>');


        var dataString = {

            date: date


        };




//////load tickets

        $.ajax({
            type: "POST",
            url: 'get.php',
            data: dataString,
            crossDomain: true,
            cache: false,
            dataType: 'json',
            success: function (data) {
                var te = data.length;
					if (data[0].stop == 'no'){
						
												                                                   $('#items').append('<div class="tit1">ITEMS</div>');

                       
                        var t = 1;
                        while (t < te) {
                            var id = data[t].id;
                            var title = data[t].title;
                            var type = data[t].type;
                            var price = data[t].price;
                            var description = data[t].description;
                            var vbef = data[t].vbef;
                            var vaft = data[t].vaft;
                            var vafor = data[t].vafor;
							var onsale = data[t].onsale;
							var sold = data[t].sold;
							var pau = data[t].pau;
							var cat = data[t].cat;
							
							if (cat == 1){
							var tcat = "Ticket";
							}
							else if (cat == 2){
							
						
														var tcat = "Rental";

							}
							
							if (sold == "1"){
								var soldon = "Sold On: Kiosk";
								
							}else if (sold == "2"){
																var soldon = "Sold On: Web";

								
							}else if (sold == "3"){
																var soldon = "Sold On: Kiosk/Web";

								
							}


if (inv == 'none'){

var inv = '&#8734;';

}
                           
    
	if (t%2 == 0){
		var color = "#d8e0ed";

	
	}else{
	
		var color = "#FFFFFF";

	}



							var html = "";




html += '<div style="background-color: '+ color +'; overflow:hidden; height:75px;">';
html += '<div style="float:left; width: 55%; height: 100%; overflow:hidden; text-align:left; padding: 5px 0 5px 10px;">';
if (onsale == "true"){
html += '<div class="itit" title="'+ title +' - '+ type +'"><span class="hlite5">Sale</span> <span class="hlite">'+ tcat +'</span> '+ title +' - '+ type +'</div>';

}else{

html += '<div class="itit" title="'+ title +' - '+ type +'"><span class="hlite">'+ tcat +'</span> '+ title +' - '+ type +'</div>';

}

html += '<div title="'+ description +'" style="font-size: 12px; height:14px; line-height:14px; overflow:hidden; font-weight:600; color:#595959;">'+ description +'</div>';
html += '<div title="'+ vaft +' - '+ vbef +'" style="font-size: 12px; height:14px; line-height:14px; overflow:hidden; color:#808080; font-weight:600;">'+ vaft +' - '+ vbef +'  &nbsp;&nbsp;&nbsp;&nbsp;   <span style="color:#203A81;">'+ soldon +'</span></div>';

html += '</div>';
html += '<div style="float:left; width: 15%; height: 100%; overflow:hidden; text-align: center; vertical-align: middle;">';
html += '<div style="font-size: 20px; overflow:hidden; margin: 6px; font-weight:600; background-color: #cff7c1; padding: 20px 0 20px 0; ">$'+ price +'</div>';


html += '</div>';
html += '<div style="float:left; width: 25%; height: 100%; overflow:hidden; padding: 26px 0 20px 5px;">';
if (pau == "true"){
	html += '<input style="transform: scale(1.5);" class="daa14" var="'+ id +'" type="checkbox" id="sale" checked=checked>';

}
else{
	html += '<input style="transform: scale(1.5);" class="daa14" var="'+ id +'" type="checkbox" id="sale">';

	
}
html += '</div>';

html += '</div>';


                            $('#items').append(html);



                            var t = t + 1;

						}
						
						                            $('#items').append('<br/>');
													
													


$( ".daa14" ).change(function() {

var myId = $(this).attr('var');
//var myname = $(this).attr('name');
//var sale = $(this).is(':checked');

update( myId, date );


});

						
						}
						
						else if (data[0].stop == 'yes'){
						
												                            $('#items').append('<br/><span style="font-size: 20px; font-weight: 400;">No Items Available.</span><br/><br/>');

						
						
						}
						
		
								else if (data[0].stop == 'reload'){


location.reload();


								}
						

            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                //alert('Please make sure you are connected to the internet!');
location.reload();

                //alert(errorThrown);	
            }
        });
	
	
	
}







function update(myId, date){

							
							
							
							var data = {
	
					jack : '',
					id : myId,
					date : date
						
	
};		
  $.ajax({
            data: data,
            type: 'POST',
            url: 'update3.php',
			success:function(data){
				
			  				if (data == '2'){	
								
				location.reload();


							}
					},
    error: function(XMLHttpRequest, textStatus, errorThrown) { 
	alert('Error!');

location.reload();
    }

  
        });
		count = 0;

					};

</script>
