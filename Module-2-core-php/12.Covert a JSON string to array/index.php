<?php
include ("connection.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax CRUD</title>
    <script src="jquery-3.7.1/jquery.min.js"></script>
</head>
<body>
    <form id="add-form">
        <div>
            Name : <input type="text" name="cname" id="cname">
        </div>

        <div>
            Age : <input type="text" name="cage" id="cage">
        </div>

        <div>
            City : <input type="text" name="ccity" id="ccity">
        </div>

        <div>
            <label>Gender</label>
            <input type="radio" name="cgen" id="cgen" value="Male">Male
            <input type="radio" name="cgen" id="cgen" value="Female">Female
        </div>

        <div>
        <label>Languages</label>
            <input type="checkbox" name="clan" id="clan" value="English">English
            <input type="checkbox" name="clan" id="clan" value="Hindi">Hindi
            <input type="checkbox" name="clan" id="clan" value="Gujarati">Gujarati
        </div>

        <div>
            <input type="button" value="submit" name="submit" id="submit">
        </div>

    </form>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Languages</th>
                <th>Age</th>
                <th>City</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="datatable">

        </tbody>
    </table>

    <script>
        function getData()
        {
           table = $('#datatable').html('');

            $.ajax({
                url:'http://localhost/prac/myphp/Advance%20PHP/oops/ajax-CRUD/fetchall.php',
                type:'GET',
                success:function(res){
                    console.log(res);
                    $.each(res,function(v,i){
                        table.append(`
                        <tr>
                        <td>${i.c_id}</td>
                        <td>${i.c_name}</td>
                        <td>${i.c_gender}</td>
                        <td>${i.c_lang}</td>
                        <td>${i.c_age}</td>
                        <td>${i.c_city}</td>
                        <td>
                        <button>Edit</button>
                        <button>Delete</button>
                        </td>
                        </tr>
                        `)
                    })
                }
                
            })
        }
        getData()
        function myfun(a)
        {
            
           
            arr = $('#add-form').serializeArray(); //serializeArray FUNCTION USE FOR OBJECT/DATA CONVERT IN TO ARRAY FORMAT.
         

            obj={};
            for(i=0;i<arr.length;i++)
            {
          
                obj[arr[i].name] = arr[i].value
            }
            stringobj = JSON.stringify(obj);
            console.log(stringobj)
            return stringobj
        
        }
        $('#submit').click(function(){

            var jsonDataobj = myfun('#add-form')

            $.ajax({
                url:'http://localhost/prac/myphp/Advance%20PHP/oops/ajax-CRUD/insert.php',
                type:'post',
                data:jsonDataobj,
                success: function(res){
                    getData()
                }
            })
        })
    </script>
</body>
</html>