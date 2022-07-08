<html>  
<body>  
<form method = "post">   
Width: <input type="number" name="width">   
<br><br>   
Length: <input type="number" name="length"> <br>   
  
<button onclick="RecArea($width, $length)" name="submit">Calculate the area  </button>
</form>   
</body>   
</html>  
<?php    
   if (isset($_POST['submit']) ) {
   	# code...
  
  $width = $_POST['width'];   
  $length = $_POST['length'];

function RecArea($width, $length) {
    $area = $width*$length;
    echo "The area of a rectangle with $width x $length is $area";   
}
 }
    RecArea($width, $length);
?> 
