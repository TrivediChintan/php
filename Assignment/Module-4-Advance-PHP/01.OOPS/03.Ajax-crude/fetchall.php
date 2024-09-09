<?php

header('Content-Type: Application/json');
header('Access-Control-Allow-Origin: *');

include ("connection.php");

$sel = "select * from client";
$run = mysqli_query($con,$sel);

if(mysqli_num_rows($run) > 0)
{
    $op = mysqli_fetch_all($run, MYSQLI_ASSOC);
    echo json_encode($op);
}




?>