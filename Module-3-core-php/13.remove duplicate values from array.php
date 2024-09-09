

<!-- Write program to remove duplicate values from array -->

<?php
echo "<h3>Given Array Is (1, 2, 2, 3, 4, 4, 5, 6, 6, 7)<br></h3>";
$originalArray = array(1, 2, 2, 3, 4, 4, 5, 6, 6, 7);


$uniqueArray = array_unique($originalArray);

print_r($uniqueArray);
?>

