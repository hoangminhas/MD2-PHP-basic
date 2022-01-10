<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tu dien anh-viet</title>
</head>
<body>
<h1>TU DIEN ANH-VIET</h1>
<form action="#" method="post">
    <input type="text" name="search" placeholder="Nhap tu can tim">
    <button type="submit">Check</button>
</form>
<?php
$dictionary = [
    "matrix" => "ma trận",
    "century" => "thế kỷ",
    "boy" => "con trai",
    "computer" => "máy tính"
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchWord = $_POST['search'];
    $flag = 0;
    foreach ($dictionary as $word => $description) {
        if ($word == $searchWord) {
            echo "Nghia cua tu: " .$description;
            $flag = 1;
        }
    }

    if ($flag ==0) {
        echo "Khong tim thay tu.";
    }
}
?>
</body>
</html>

