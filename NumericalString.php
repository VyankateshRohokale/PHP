<!DOCTYPE html>
<html>
<body>

<?php
// Check if the variable is numeric   
$a = 5121;
var_dump(is_numeric($a));
echo "<br>";
$b = "5121";
var_dump(is_numeric($b));
echo "<br>";
$c = "51.11" + 11;
var_dump(is_numeric($c));
echo "<br>";
$x = "Hello";
var_dump(is_numeric($x));
?>  

</body>
</html>
