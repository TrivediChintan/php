<!-- Write a program to print the below format : -->
<!--        5 9
            2610
            3711
            4812    -->

<?php
$startNumbers = [5, 9];

echo $startNumbers[0] . " " .$startNumbers[1];

$start1 = 2; $start2 = 6;

for ($i = 0; $i < 3; $i++) {
    
   echo("<br>". $start1 + $i. $start2 + $i);

   echo($startNumbers[1]+1+$i);

}
?>
