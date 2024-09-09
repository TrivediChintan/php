

<!-- Get random values from array -->

<form method="post">
<input style="width: 250px;" type="Number" name="inp" placeholder="ENTER Number Between 1 To 4"><br/>
<input type="submit" value="find" name="find">
</form>

<?php
if (isset($_POST['find'])) {

if($numValues=$_POST['inp'])  
{     

$array = ['apple', 'banana', 'cherry', 'date'];
// $numValues = 2; //

$randomKeys = array_rand($array, $numValues);

foreach ($randomKeys as $key) {
    echo $array[$key] . "\n";
}
}
}
?>

