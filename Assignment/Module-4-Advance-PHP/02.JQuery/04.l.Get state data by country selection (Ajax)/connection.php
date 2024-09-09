<?php 

$con= mysqli_connect('localhost','root','','classdb');

if($con)
{
    echo "DB Connected.....";
}
else
{
    echo "DB Not Connected.....";
}





?>