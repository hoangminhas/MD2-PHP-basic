<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doc so thanh chu</title>
</head>
<body>
<h1>Doc so thanh chu</h1>
<form action="#" method="post">
    <input type="text" name="number" placeholder="Dien vao 1 so">
    <button type="submit">Check</button>
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];
}
function checkNum($number) {
    echo $number
}

?>
</body>
</html>

