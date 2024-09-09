<?php
include ("connection.php");

$selecountry = "select * from country";
$run = mysqli_query($con,$selecountry);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax</title>
    <script src="jquery-3.7.1/jquery.min.js"></script>
</head>
<body>

    <form>
        <select id="country">
            <option>-- Select Country --</option>
            <?php  
            while($fetchcountry = mysqli_fetch_array($run))
            {
            ?>
            <option value="<?php echo $fetchcountry['country_id'];  ?>"><?php echo $fetchcountry['country_name']; ?></option>

            
            <?php }?>
        </select>

        <select id="state">
        <option>-- Select State --</option>
            
        </select>
    </form>

  <script>
    $('#country').change(function(){
       mycountry= $('#country').val();

        $.ajax({
            url: 'ajax-state.php',
            type: 'post',
            data: {country: mycountry},
            success:function(c_result) {
                $('#state').html(c_result)
            }
        })
    })


  </script>  
</body>
</html>