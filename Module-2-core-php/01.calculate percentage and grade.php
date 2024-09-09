


<!-- Write a PHP program to enter marks of five subjects Physics, Chemistry, Biology, Mathematics and Computer, calculate percentage and grade by if else -->

<?php

if (isset($_POST['Cal'])) {
    $phy = $_POST['phy'];
$chem = $_POST['chem'];
$maths = $_POST['maths'];
$bio = $_POST['bio'];
$eng = $_POST['eng'];
$Perce = 0;
    $Perce = ($phy + $chem + $maths + $bio + $eng) / 5;
    echo "<h2>Percecentage obtained by student is <u>$Perce</u> %</br></h2>";

    if ($Perce >= 90) {
        $Perce = 1;
    } else if ($Perce >= 80) {
        $Perce = 2;
    } else if ($Perce >= 70) {
        $Perce = 3;
    } else if ($Perce >= 60) {
        $Perce = 4;
    } else if ($Perce >= 40) {
        $Perce = 5;
    } else {
        $Perce = 6;
    }

    switch ($Perce) {
        case 1:
            echo "<h2>Grade : A</h2>";
            break;

        case 2:
            echo "<h2>Grade : B</h2>";
            break;

        case 3:
            echo "<h2>Grade : C</h2>";
            break;

        case 4:
            echo "<h2>Grade : D</h2>";
            break;

        case 5:
            echo "<h2>Grade : E</h2>";
            break;

        default:
            echo "Fail!!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2> Calculate Percesentage and grade of 5 subject</h2>
    <form method="post" action="01.calculate percentage and grade.php">
        <table>
            <tr>
                <td><input type="number" name="phy" placeholder="Enter Physics Marks"></td>
            </tr>
            <tr>
                <td><input type="number" name="chem" placeholder="Enter Chemistry Marks"></td>
            </tr>
            <tr>
                <td><input type="number" name="maths" placeholder="Enter Mathematics Marks"></td>
            </tr>
            <tr>
                <td><input type="number" name="bio" placeholder="Enter Biology Marks"></td>
            </tr>
            <tr>
                <td><input type="number" name="eng" placeholder="Enter Computer Marks"></td>
            </tr>
            <tr>
                <td><input type="Submit" value="Calculate" name="Cal"></td>
            </tr>

        </table>
    </form>
</body>
</html>