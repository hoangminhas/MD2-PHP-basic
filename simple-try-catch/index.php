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
<form action="#" method="get">
    <input type="text" name="num1" placeholder="x">
    <select name="select" id="select">
        <option value="#" selected disabled></option>
        <option value="add">+</option>
        <option value="sub">-</option>
        <option value="mul">x</option>
        <option value="div">/</option>
    </select>
    <input type="text" name="num2" placeholder="y">
    <button type="submit">Calculate</button>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $x = $_REQUEST['num1'];
    $y = $_REQUEST['num2'];
    $select = $_REQUEST['select'];

    try {
        if ($y == 0 || $x == $y && $y == 0 ) {
            throw new Exception("Cannot divide by zero");
        } else {
            switch ($select) {
                case 'add':
                    echo $x + $y;
                    break;
                case 'sub':
                    echo $x - $y;
                    break;
                case 'mul':
                    echo $x * $y;
                    break;
                case 'div':
                    echo $x / $y;
                    break;
            }
        }
    }

    catch (Exception $exception) {
        echo $exception->getMessage();
        echo "<pre>";
        echo $exception->getFile();
        echo "<br>";
        echo $exception->getTrace();
    }
}
