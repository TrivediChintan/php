<u><h3>a.- Use of The $this keyword</h3></u>
<h3><u>Answer.- </u>JQuery is a JavaScript library.It is free, open-source software.it is used designed to simplify HTML DOM tree traversal and manipulation, event handling, CSS animations, and Ajax.<br/></h3>


<u><h3>b.- How are JavaScript and jQuery different?</h3></u>
<h3><u>Answer.- </u>JavaScript is a programming language that can perform all web development tasks independently.<br/>
jQuery is a library of JavaScript to simplify common tasks such as DOM manipulation, event handling, and AJAX calls.<br/></h3>

<u><h3>c.- Which is the starting point of code execution in jQuery?</h3></u>
<h3><u>Answer.- </u>The jQuery starts its code execution from the "$" Sign.<br/>
syntax : $(selector).action().<br/></h3>

<u><h3>d.- Document Load Vs Window. Load() jQuery?</h3></u>
<h3><u>Answer.- </u><br/>
<u>Document Load</u> is triggered when the HTML document has been completely parsed and the DOM is ready for manipulation.<br/>
This function allows you to perform actions as soon as the DOM is ready, even if some external resources like images are still loading.<br/>
<u>Window Load Function</u> The window load function is triggered when all the resources on a web page, including images,  scripts, and stylesheets, have finished loading.<br/>
his function is useful when you need to perform actions on the complete loading of the page.<br/>

<u><h3>e.- What is the difference between prop and attr?</h3></u>
<h3><u>Answer.- </u> Prop() is a jQuery method that is used to set or return properties and values for the selected elements.<br/>
<u>syntax</u><br/>
$(selector).prop(property)<br/>
The attr() method is used to set or returns the attributes and values of the chosen elements.<br/>
<u>syntax</u><br/>
$(selector).attr(attribute)<br/></h3>


<u><h3>g.- How We Can Select The Specified (li) Element From The ListOf (li) Elements In (ul)?</h3></u>
<h3><u>Answer.- </u> To select the specified (li) through to Given different ID name or Class name to all (li) element from the list of (li) eliments in (ul).</h3>


<u><h3>h.- In (TABLE) tag Design Change The Color Of Even (TR) tag Elements To
“green”And Change The Color Of Odd (TR) tag Elements To “blue” Color? Give An Example Code?</h3></u>
<h3>Through tr:nth-child(odd) and tr:nth-child(even) we do that</h3>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
        <tbody>
            <tr>
                <td>Row 1</td>
            </tr>
            <tr>
                <td>Row 2</td>
            </tr>
            <tr>
                <td>Row 3</td>
            <tr>
                <td>Row 4</td>
            </tr>
            <tr>
                <td>Row 5</td>
            </tr>
            <tr>
                <td>Row 6</td>
            </tr>
            <tr>
                <td>Row 7</td>
            </tr>
            <tr>
                <td>Row 8</td>
            </tr>
            <tr>
                <td>Row 9</td>
            </tr>
            <tr>
                <td>Row 10</td>
            </tr>
        </tbody>
    </table>
    <script>
        row = $('tr');

        for (i = 0; i < row.length; i++) {
            if(i%2 ==0)
        {
            row[i].style.background = "blue";
        }
        else{
            row[i].style.background = "green";
        }
        }
    </script>
</body>
</html>


<u><h3>i.- How We Can Implement Animation Effects In Jquery?</h3></u>
<h3><u>Answer.- </u><br/>
We can use animate() in-built function that implements animation effects in jquery.