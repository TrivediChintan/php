<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head><h1>FIELD Are Same But Code In Javascript</h1>
<body>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 p-5">
            <h3>Custom dynamic function for require field validator</h3>
                <form>
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" id="name" class="form-control">
                        <div><b id="nmerr"></b><b id="nm err"></b></div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="text" id="pwd" class="form-control">
                        <div><b id="pas err"></b></div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Confirm Password</label>
                        <input type="text" id="cpwd" class="form-control">
                        <div><b id="cpass err"></div>
                    </div>
                    <button type="button" onclick="validate();" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

<script>
    nm = document.getElementById("name");
    nmerr = document.getElementById("nm err");

    pwd = document.getElementById("pwd");
    pwderr = document.getElementById("pas err");

    cpwd = document.getElementById("cpwd");
    cpwderr = document.getElementById("cpass err");



    function validate()
    {
        if(nm.value == "")
        {
            nmerr.innerHTML="Please Enter Name";
            nmerr.style.color="red";
        // alert("Please Enter Name");
        }else
        {
            nmerr.innerHTML="";
        }

        if(pwd.value == "")
        {
            pwderr.innerHTML="Please Enter Password";
            pwderr.style.color="red";
        }
        else
        {
            pwderr.innerHTML="";
        }

        if(cpwd.value == "")
        {
            cpwderr.innerHTML="Please Enter Confirm Password";
            cpwderr.style.color="red";
        }
        else
        {
            cpwderr.innerHTML="";
        

        if(cpwd.value != pwd.value)
        {
            cpwderr.innerHTML="Password Not Metch";
            cpwderr.style.color="red";
        }
        else
        {
            alert("Thank You For Register");
        }
    }

    }
</script>

</body>
</html>