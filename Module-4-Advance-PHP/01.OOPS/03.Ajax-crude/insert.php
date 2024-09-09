<?php   

header('content-type: application/json');

include("connection.php");

$data = json_decode(file_get_contents('php://input'),true);
$name = $data['cname'];
$gen = $data['cgen'];
$lang = $data['clan'];
// foreach($language as $lang)
//     {
//         $lang = implode(',',$language);
//     }

$age = $data['cage'];
$city = $data['ccity'];


$ins = "insert into client (c_name,c_gender,c_lang,c_age,c_city) values ('{$name}','{$gen}','{$lang}','{$age}','{$city}')";
$run = mysqli_query($con,$ins);

if($run)
{
    echo json_encode(array('message' => 'Record Inserted','status'=>true));
}

?>