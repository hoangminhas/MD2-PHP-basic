<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Selection</h1>
<form action="#" method="post">
    <label for="rect">
        <input type="radio" name="shape" value="rect" id="rect">
        Print the rectangle
    </label><br>
    <label for="sqr-tri">
        <input type="radio" name="shape" value="sqr-tri" id="sqr-tri">
        Print the square triangle
    </label><br>
    <label for="iso-tri">
        <input type="radio" name="shape" value="iso-tri" id="iso-tri">
        Print isosceles triangle
    </label><br>
    <button type="submit">Print</button>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $shape = $_POST['shape'];
    switch ($shape) {
        case 'rect':
            for ($i=0; $i<=3; $i++){
                for ($j=0; $j<=15; $j++){
                    echo "*";
                }
                echo "<br>";
            }
            break;
        case 'sqr-tri':
            for ($i=0; $i<=10; $i++){
                for ($j=0; $j<$i; $j++){
                    echo "*";
                }
                echo "<br>";
            }
            break;
        case 'iso-tri':
            for ($i=10; $i>=0; $i--){
                for ($j=0; $j<$i; $j++){
                    echo "*";
                }
                echo "<br>";
            }
            break;
    }
}
