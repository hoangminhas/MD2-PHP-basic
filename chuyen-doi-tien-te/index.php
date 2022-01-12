<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chuyen doi tien te</title>
</head>
<body>
<h1>Exchange VND to USD</h1>
<form action="#" method="get">
    <label>
        USD:
        <input type="text" name="usd">
    </label>
    <button type="submit">Exchange</button>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET"){
    $rate = 23000;
    $usd = $_GET['usd'];
    echo "<pre>";
    echo "VND: " . number_format((int)$usd*$rate, 0, '', ',');
}