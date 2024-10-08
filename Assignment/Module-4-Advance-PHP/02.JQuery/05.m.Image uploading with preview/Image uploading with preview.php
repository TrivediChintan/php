

                           <!--  Image uploading with preview.  -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Image Preview</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    
    </script>

    <style>
        .holder {
            height: 300px;
            width: 300px;
            border: 2px solid black;
        }

        img {
            max-width: 300px;
            max-height: 300px;
            min-width: 300px;
            min-height: 300px;
        }

        input[type="file"] {
            margin-top: 5px;
        }

        .heading {
            font-family: Montserrat;
            font-size: 45px;
            color: green;
        }
    </style>
</head>

<body>
    <center>
        <span class="heading">Image Preview</span>
        <form id="myForm">
            <div class="holder">
                <img id="imgPreview" src="#" alt="pic" />
            </div>
            <input type="file" name="photograph" id="photo" required="true"/>
            <input type="button" id="formBtn" value="Upload Image">
        </form>
    </center>
    <script>
        $(document).ready(() => {
            const photoInp = $("#photo");
            let file;

            $('#formBtn').click((e)=>{
                e.preventDefault();
                if(file){
                    alert("The image is uploaded successfully!!");
                }
                else{
                    alert("Please select a Image first!!");
                }
                
            });

            photoInp.change(function (e) {
                file = this.files[0];
                if (file) {
                    let reader = new FileReader();
                    reader.onload = function (event) {
                        $("#imgPreview")
                            .attr("src", event.target.result);
                    };
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>
</body>

</html>
