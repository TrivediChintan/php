

<!-- How can you declare the array (all type) in PHP? -->

<h1>There is 3 type of Array</h1>
<h3>
<ol>
    <li style="color: blue;">Indexed Array</li>
    <li style="color: orangered;">Associative Array</li>
    <li style="color: green;">Multidimensional Array</li>
</ol>
</h3>

<h1>
   
        <li style="color: blue;">1. Indexed Array</li>

    <p style="margin-left: 50px;">indexed arrays are created using "[]" and "()" brackets to define the array, And followed by a comma-separated list of values</p>
    <p>
        <u>Styntax 1</u><br/>
        $array_name = [value1, value2, value3, ..., valueN];<br/>
        <u>Styntax 2</u><br/>
        $array_name = (value1, value2, value3, ..., valueN);<br/>

        <b><u>Exampal</u></b><br/>
        <?php
        $bike = array("Hero", "Royal Enfield", "Yamaha", "Honda");

        echo "I like ". $bike[1] . " and " . $bike[3] ;

?>

    </p>
</h1>


<h1>
   
        <li style="color: orangered;">2. Associative Array</li>
    
    <p style="margin-left: 50px;"> In Associative Array its a list of key-value pairs and it is separated by commas. Each key-value pair is written as a key => value, where the key is the string key and the value is the value associated with the key.</p>
    <p>
        <u>Styntax 1</u><br/>
        $bike = array("name" => "Royal Enfield","price" => "2 Lakh","Model" => "Hunter 350");<br/>
        <u>Styntax 2</u><br/>
        $bike["name"] = "Royal Enfield";<br/>
        $bike["price"] = "2 Lakh";<br/>
        $bike["Model"] = "Hunter 350";<br/>

<br/>

        <b><u>Exampal</u></b><br/>
        <?php
        $bike = array(
            "name" => "Royal Enfield",
            "price" => "2 Lakh",
            "Model" => "Hunter 350"
        );
        
        $keys = array_keys($bike);
        $values = array_values($bike);
        
        $i = 0;
        while($i < count($bike)) {
            echo $keys[$i] . ": " . $values[$i] . "<br>";
            $i++;
        }
        
        

?>

    </p>
</h1>


<h1>
 
        <li style="color: green;">Multidimensional Array</li>
  
    <p style="margin-left: 50px;">Multidimensional array is an array that contains other arrays as its elements.multidimensional arrays that are two, three, four, five, or more levels deep.</p>
    <p>
        <u>Styntax</u><br/>
        $matrix =   array(
                    array(1, 2, 3),
                    array(4, 5, 6),
                    array(7, 8, 9));<br/>

        <b><u>Exampal</u></b><br/>
        <?php
        $matrix = array(
            array(1, 2, 3),
            array(4, 5, 6),
            array(7, 8, 9));

        echo $value = $matrix[0][0]."\n",
             $value = $matrix[0][1]."\n",
             $value = $matrix[0][2]."<br>",

             $value = $matrix[1][0]."\n",
             $value = $matrix[1][1]."\n",
             $value = $matrix[1][2]."<br>",

             $value = $matrix[2][0]."\n",
             $value = $matrix[2][1]."\n",
             $value = $matrix[2][2]."<br>";

?>

    </p>
</h1>

