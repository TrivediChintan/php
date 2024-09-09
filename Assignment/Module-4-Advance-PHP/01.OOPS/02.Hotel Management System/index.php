<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Hotel room booking system</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container p-5">
        <div class="row justify-content-center">
            <div class="col-xl-6">

                <h1>Hotel Room Booking System</h1>
                --------------------------------------------------------------------------------- <br>
                <form method="get" action="">

                    <h3><label>Book Room (Select Day)</label></h3><br><br>

                    <button class="btn btn-info" name="full">Full Day</button> <button class="btn btn-warning" name="half">Half Day</button> <button class="btn btn-success" name="custom">Custom Day</button>

                    <?php
                    if (isset($_REQUEST['full']))                          //using isset method for choosing day mode
                    { ?>
                        <br><br><label>
                            Select Check-In Date :
                            <input type="date" name="datein" />
                        </label>

                        <br><br><label>
                            Select Check-Out Date :
                            <input type="date" name="dateout" />
                        </label>

                        <p><button class="btn btn-danger" name="fullselect">Submit</button></p>


                    <?php }
                    ?>
                    <?php
                    if (isset($_REQUEST['fullselect']))          //printing the input value in form
                    { ?>
                        <br><br>
                        Thank you for booking with us !! <br>
                        booked date : <?php echo $_REQUEST['datein']; ?> To <?php echo $_REQUEST['dateout']; ?>

                    <?php }
                    ?>

                    <?php
                    if (isset($_REQUEST['half'])) { ?>
                        <br><br><label>
                            Select slot :
                        </label>
                        <button class="btn btn-secondary" name="morning">Morning</button> <button class="btn btn-dark" name="evening">Evening</button><br>
                        <h3><b><u>Note : </u></b></h3>
                        <h6>If You Select Morning Slot Then Time Will Be (8AM TP 6PM).</h6>
                        <h5>OR</h5>
                        <h6>If You Select Evening Slot Then Time Will Be (6PM TP 8AM).</h6>

                    <?php } ?>

                    <?php
                    if (isset($_REQUEST['morning'])) { ?>
                        <br><br><label>
                            Select date for bookng :
                            <input type="date" name="date" />
                        </label>

                        <p><button class="btn btn-danger" name="mor">Submit</button></p>


                    <?php }
                    ?>

                    <?php
                    if (isset($_REQUEST['mor'])) { ?>
                        <br><br>
                        Thank you for booking with us !! <br>
                        booked date : <?php echo $_REQUEST['date']; ?>
                        <br>
                        Your selected Slot is : Morning (8AM TO 6PM)

                    <?php }
                    ?>

                    <?php
                    if (isset($_REQUEST['evening'])) { ?>
                        <br><br><label>
                            Select date for bookng :
                            <input type="date" name="date" />
                        </label>

                        <p><button class="btn btn-danger" name="eve">Submit</button></p>


                    <?php }
                    ?>

                    <?php
                    if (isset($_REQUEST['eve'])) { ?>
                        <br><br>
                        Thank you for booking with us !! <br>
                        booked date : <?php echo $_REQUEST['date']; ?> <br>
                        Your selected Slot is : Evening (7PM to Morning 7AM)

                    <?php }
                    ?>


                    <?php
                    if (isset($_REQUEST['custom'])) { ?>
                        <br><br><label>
                            Select date for bookng :
                            <input type="date" name="date" />
                        </label><br>
                        <label for="timefrom">Booking from </label>
                        <input type="time" id="timefrom" name="timefrom"> <br>


                        <label for="timefrom">Booking till </label>
                        <input type="time" id="booktill" name="booktill"> <br>





                        <p><button class="btn btn-danger" name="cus">Submit</button></p>


                    <?php }
                    ?>

                    <?php
                    if (isset($_REQUEST['cus'])) { ?>
                        <br><br>
                        Thank you for booking with us !! <br>
                        booked date : <?php echo $_REQUEST['date']; ?> <br>
                        selected time : <br>
                        from : <?php echo $_REQUEST['timefrom']; ?>
                        To : <?php echo $_REQUEST['booktill']; ?> <br>

                    <?php }
                    ?>
            </div>
        </div>
    </div>
</body>

</html>