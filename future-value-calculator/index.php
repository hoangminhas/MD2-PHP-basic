<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Future Value Calculator</title>
</head>
<body>
<h1>Happy Investment</h1>
<form action="#" method="post">
    <label for="">
        Investment Amount:
        <input type="text" name="investment-amount">
    </label><br>
    <label for="">
        Yearly Interest Rate:
        <input type="text" name="interest-rate">
    </label><br>
    <label for="">
        Number of Years:
        <input type="text" name="years">
    </label><br>
    <button type="submit">Calculate</button>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $investment = $_POST["investment-amount"];
    $rate = $_POST["interest-rate"];
    $years = $_POST["years"];
    $futureVal = 0;
    for ($i = 0; $i<$years; $i++) {
        $futureVal += $investment + ($investment * $rate);
    }
    echo "Future value: $futureVal";
}
?>
