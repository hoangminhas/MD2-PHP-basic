<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dang ky nguoi dung</title>
</head>
<body>
<h1>Register</h1>
<form action="#" method="post">
    <label>
        Ten nguoi dung:
        <input type="text" name="name">
    </label><br>
    <label>
        Email:
        <input type="email" name="email">
    </label><br>
    <label>
        Dien thoai:
        <input type="tel" name="number">
    </label><br>
    <button type="submit">Register</button>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_SERVER["name"];
    $email = $_SERVER["email"];
    $phone = $_SERVER["number"];
    if (empty($name) || empty($phone)) {
        echo "Ghi thieu username hoac so dien thoai.";
    } else {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}

function loadData($fileName) {
    $jasonData = file_get_contents($fileName);
    return json_decode($jasonData, true);
}

function saveDataJSON($fileName, $name, $email, $phone){

}
