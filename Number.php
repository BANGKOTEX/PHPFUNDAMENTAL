<!DOCTYPE html>
<html>
<body>

<?php
// Periksa apakah jenis variabel adalah bilangan bulat  
$x = 5985;
var_dump(is_int($x));

echo "<br>";

// Periksa lagi...
$x = 59.85;
var_dump(is_int($x));
?>  

</body>
</html>
