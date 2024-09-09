

<!-- Use a for loop to total the contents of an integer array called numbers which has five elements. Store the result in an integer called total. -->

<?php

echo "<h3>Given Array Is [14, 31, 26, 20, 98]<br></h3>";
$num = [14, 31, 26, 20, 98];


$total = 0;

for ($x = 0; $x < count($num); $x++) {
  
    $num[$x] += $x;
    
 
    $total += $num[$x];
}


echo "<h3>The sum of the given array numbers is $total\n</h3>";

?>


