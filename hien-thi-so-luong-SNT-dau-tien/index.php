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
<h1>Hien thi so luong so nguyen to dau tien</h1>
<form action="#" method="post">
    <label>
        So luong so nguyen to:
        <input type="number" name="number">
    </label>
    <button type="submit">Display</button>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = (int)$_POST["number"];
    $count = 0;
    $n = 2;
    while ($count < $num) {
        $flag = true;
        if ($n == 2) {
            $flag == true;
        }

        for ($i = 2; $i <= $n - 1; $i++) {
            if ($n % $i == 0) {
                $flag = false;
            }
        }

        if ($flag == true) {
            echo "<pre>";
            echo $n . "<br>";
            $count++;
        }
        $n++;
    }
}