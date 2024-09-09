

<!-- Write a PHP program to find the largest of three numbers using ternary Operator. -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Find Largest Number Out Of 3 Number</h1>
    <form method="post" action="04.Find Largest Number Out Of 3 Number.php">
        <table>
            <tr>
                <td><input type="number" name="num1" placeholder="First Enter Any Number"></td>
            </tr>
            <tr>
                <td><input type="number" name="num2" placeholder="Second Enter Any Number"></td>
            </tr>
            <tr>
                <td><input type="number" name="num3" placeholder="Third Enter Any Number"></td>
            </tr>
            <tr>
                <td><input type="Submit" value="Find" name="Find"></td>
            </tr>
           
        </table>
    </form>
</body>
</html>
<?php 
if (isset($_POST['Find'])) {
    $a = $_POST['num1'];
$b = $_POST['num2'];
$c = $_POST['num3'];

$res = ($a>$b) ? (($a>$c) ? $a : $c) : (($b>$c) ? $b : $c);
//  echo $res."<br><br>";

// $res =(($a>$b) ? (($a>$c) ? $a : (($b>$c) ? $b : $c))  );

if($a>$b)
{
    if($a>$c)
    {
        echo "<h2>". $a." Is Largest Number";
    }
    else
    {
        echo "<h2>".$c." Is Largest Number</h2>";
    }

}
else if($b>$c)
{
    echo "<h2>".$b." Is Largest Number</h2>";
}
else
{
    echo "<h2>".$c." Is Largest Number</h2>";
}
}
    ?>

    