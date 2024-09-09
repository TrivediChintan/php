

<!-- PHP program for find „Thursday‟ in week using switch Function. -->



<form method="post">
<input style="width: 250px;" type="Number" name="inp" placeholder="ENTER Number Between 1 To 7"><br/>
<input type="submit" value="find" name="find">
</form>

<?php
if (isset($_POST['find'])) {

$day=$_POST['inp'];
switch($day){
    case 1: echo("Monday");
    break;
    case 2: echo("Tuesday");
    break;
    case 3: echo("Wednesday");
    break;
    case 4: echo("Thursday");
    break;
    case 5: echo("Friday");
    break;
    case 6: echo("Saturday");
    break;
    case 7: echo("Sunday");
    break;
    default: echo("Enter a valid Number");
}
}
?>