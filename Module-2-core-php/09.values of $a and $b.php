<!-- What will be the values of $a and $b after the code below is executed? Explain your answer. -->
<!--        $a = '1';
            $b = &$a;
            $b = "2$b";      -->


<h1><b><u>Question :-</u></b> What will be the values of $a and $b after the code below is executed? Explain your answer. <br/>
            $a = '1'; <br/>
            $b = &$a; <br/>
            $b = "2$b"; <br/></h1>

<h2><b><u>Answer:-</u></b> '$a = 21' and '$b = 21'</h2>
<h2><b><u>Explanation :-</u></b> first '$a' value is '1'.after that in '$b = &$a' in this formula '&' means reference '$a' so '$a' value is '1' that is put in '$b = &$a' so we get '$b = 1'.
    now put value of '$b = 1' in '$b = "2$b"' there for '$b = 21'. now put that value of '$b = 21' in $b = "2$b" now the equation is '21 = &$a' now '&$a' is reference of '$a' so now put '$a' to place of '&$a' so finaly we get '21 = $a'.
    so finaly we get the value of '$a = 21' an '$b = 21'.
</h2>
