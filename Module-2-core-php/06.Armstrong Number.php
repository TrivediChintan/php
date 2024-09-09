

<!-- Armstrong Number is that is equal to the sum of cubes of its digits. for example 153,370,371,407 Are the Armstrong Number -->


<form method="post">
    <input type="Number" name="inp" placeholder="ENTER Any Number"><br />
    <input type="submit" value="find" name="find">
</form>
<?php
if (isset($_POST['find'])) {

    if ($n = $_POST['inp']) {
        $sum = 0;
        $temp = $n;

        while ($n > 0) {
            $r = $n % 10;
            $sum = $sum + ($r * $r * $r);
            $n = $n / 10;
        }
        if ($temp == $sum) {
            echo "The Number $temp is Armstrong Number";
        } else {
            echo "The Number $temp is Not Armstrong Number";
        }
    }
}

?>