

<!-- How can you tell if a number is even or odd without using any Condition or loop? -->


<form method="post">
<input type="Number" name="inp" placeholder="ENTER Number Between 1 To 7"><br/>
<input type="submit" value="find" name="find">
</form>

<?php
if (isset($_POST['find'])) {

if($number=$_POST['inp'])  
{     

$result = ["<h2>Entered Number Is Even </h2>", "<h2>Entered Number Is Odd </h2>"];


$check = $number % 2;

echo $result[$check];

}
}
?>