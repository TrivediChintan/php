<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    Name: <input type="text" id="nm">
    <b></b><br>
    <button>Validate</button>


    <script>
       console.log( $("#nm").val());
       $("button").click(function(){
        if($("#nm").val() =="")
        {
            $("b").html("Name Is Required");
            $("b").css("color","red")
        }
        else
        {
            $("b").html("");
        }
       })
    </script>
</body>
</html>