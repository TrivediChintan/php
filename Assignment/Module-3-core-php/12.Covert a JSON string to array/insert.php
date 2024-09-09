<?php   

header('content-type: application/json');  //THIS HEADER FILE KNOWN THAT THE DATA/FILE/APPLICATION IS JSON TYPE

include("connection.php");

$data = json_decode(file_get_contents('php://input'),true);  //JSON DECODE FUNCTION USE TO THAT AJAX/JS DATA NOW READBLE FOR PHP OR ALL DATA CONVERT IN TO PHP UNDERSTANDS
$name = $data['cname'];                                      //file_get_contents THAT KNOW THE INPUT DATA NOW READABLE FOR PHP.
$gen = $data['cgen'];
$lang = $data['clan'];

$age = $data['cage'];
$city = $data['ccity'];


$ins = "insert into client (c_name,c_gender,c_lang,c_age,c_city) values ('{$name}','{$gen}','{$lang}','{$age}','{$city}')";
$run = mysqli_query($con,$ins);

if($run)
{
    echo json_encode(array('message' => 'Record Inserted','status'=>true));  //JASON ENCODE FUNCTION USE TO THAT PHP DATA NOW READBLE FOR AJAX OR ALL DATA CONVERT IN TO AGAIN AJAX/JS UNDERSTANDS
}

?>