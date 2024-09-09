

<!-- Write a PHP program to check Leap years between 1901 to 2016 Using nested if. -->


<form method="post">
<input type="Number" name="inp" placeholder="ENTER Number Between 1 To 7"><br/>
<input type="submit" value="find" name="find">
</form>

<?php
if (isset($_POST['find'])) {

if($year=$_POST['inp'])  
{     
     
    if( ($year % 4 == 0) && ($year % 100 != 0) || ($year % 400 == 0) )  
    {  
        echo "<h2>$year is a Leap Year</h2>";    
    }  
    else  
    {  
        echo "<h2>$year is not a Leap Year</h2>";    
    }  
}
}
?>