<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chuc nang dang nhap</title>
    <style>
        div{
            border: black 1px solid;
            width: 70%;
            margin: auto;
            border-bottom: none;
            height: 230px;
        }

        h1 {
            text-align: center;
        }

        form {
            padding-left: 170px;
        }

    </style>
</head>
<body>
<div>
    <h1>PHP's Death Gate Register</h1>
    <form action="#" method="post">
        <label for="username">Username: <br><input id="username" type="text" name="username"
                                                   placeholder="username"></label><br><br>
        <label for="password">Password: <br><input id="password" type="password" name="password"
                                                   placeholder="password"></label><br><br>
        <button type="submit">Sign in</button>
        <br>
    </form>
</div>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === "admin" && $password === "admin") {
        echo "<h3 style='padding-left: 240px'>Welcome " . $username . " to the dead end.</h3>";
    } else {
        echo "<h3 style='padding-left: 240px'>Login error my fellow.</h3>";
    }
}
?>