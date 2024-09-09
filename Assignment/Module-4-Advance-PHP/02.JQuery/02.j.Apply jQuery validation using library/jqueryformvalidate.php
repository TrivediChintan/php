<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply jQuery validation using library.</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<h1>field are same but code in JQuery</h1>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 p-5">
                <h3>Apply jQuery validation using library</h3>
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="text" id="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div><b id="nmerr"></b></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="text" id="pwd" class="form-control" id="exampleInputPassword1">
                        <div><b id="paserr"></b></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="text" id="cpwd" class="form-control" id="exampleInputPassword1">
                        <div><b id="cpasserr"></b></div>
                    </div>
                    <button type="button" onclick="check();" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- <table>
        <tr>
            <td>Name :</td>
            <td><input type="text" id="name"></td>
            <td></td>
        </tr>

        <tr>
            <td>Password :</td>
            <td><input type="text" id="pwd"></td>
            <td><b id="paserr"></b></td>
        </tr>

        <tr>
            <td>Confirm Password :</td>
            <td><input type="text" id="cpwd"></td>
            <td><b id="cpasserr"></b></td>
        </tr>

        <tr>
            <td><button onclick="check();">Validate</button></td>
        </tr>
    </table> -->


    <script>
        $("button").click(function check() {
            if ($("#name").val() == "") {
                $("#nmerr").html("Name Is reuired");
                $("#nmerr").css("color", "red");
            } else {
                $("#nmerr").html("");
            }


            if ($("#pwd").val() == "") {
                $("#paserr").html("Pasword is Required");
                $("#paserr").css("color", "red");
            } else {
                $("#paserr").html("");
            }


            if ($("#cpwd").val() == "") {
                $("#cpasserr").html("Confirm Password Is Required");
                $("#cpasserr").css("color", "red");
            } else {
                $("#cpasserr").html("");

                if ($("#pwd").val() != $("#cpwd").val()) {
                    $("#cpasserr").html("Password Does Not Match");
                    $("#cpasserr").css("color", "red");
                } else {
                    alert("Thank You For Register");
                }
            }


        })
    </script>


</body>

</html>