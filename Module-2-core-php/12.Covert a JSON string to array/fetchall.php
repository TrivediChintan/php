<?php

header('Content-Type: Application/json');  //THIS HEADER FILE KNOWN THAT THE DATA/FILE/APPLICATION IS JSON TYPE.
header('Access-Control-Allow-Origin: *');  //THIS HEADER FILE GIVE ALL TYPE OF FILE REQUEST/RESPONCE FOR ACCESS OF FILES. 

include ("connection.php");

$sel = "select * from client";
$run = mysqli_query($con,$sel);

if(mysqli_num_rows($run) > 0)
{
    $op = mysqli_fetch_all($run, MYSQLI_ASSOC);
    echo json_encode($op);
}




?>