<?php
include "connection.php";
        $country = $_POST['country'];

$result = "select * from state where country_id_fk = $country";
$run = mysqli_query($con,$result);
?>

<option>-- Select State --</option>

<?php 
while($fetchstste = mysqli_fetch_array($run))
{
?>
            <option value="<?php echo $fetchstste['state_id'];  ?>"><?php echo $fetchstste['state_name'];?></option>
            <?php } ?>