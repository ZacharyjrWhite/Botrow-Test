<html>
<head>
    <title>jQuery Print Element Tester</title>

<script src="//code.jquery.com/jquery-3.4.1.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script type="text/javascript" src="printThis.js"></script>


</head>
<body>
<div id='DivIdToPrint'>
    <p>This is a sample text for printing purpose.</p>
</div>
<p>Do not print.</p>
<input type='button' id='btn' value='Print''>	

<div id='yo'>
    <p>This is a sample text for printing.</p>
</div>
<p>Do not print.</p>
<input type='button' id='btn' value='Print' onclick='printDiv();'>
</body>
</html>

    <script type="text/javascript">
	
	
	
	$('#yo').hide();
	
	
	function printDiv() 
{

  var divToPrint=document.getElementById('yo');

  var newWin=window.open('','Print-Window');

  newWin.document.open();

  newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');

  newWin.document.close();

  setTimeout(function(){newWin.close();},10);

}
	

 $('#btn').on("click", function () {
      $('#DivIdToPrint').printThis({
        importCSS: false,
        header: "<h1>Rental Details</h1>"
      });
    });
  
  
    </script>