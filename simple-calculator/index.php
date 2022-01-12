<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>
<h1>Simple Calculator</h1>
<form action="#" method="post">
    <fieldset>
        <legend>Calculator</legend>
        <label>
            Fisrt operand:
            <input type="text" name="operand1">
        </label><br>
        <label>
            Operator:
            <select name="select" id="select">
                <option disabled selected>Choose operators</option>
                <option value="add">Addition</option>
                <option value="sub">Subtraction</option>
                <option value="mul">Multiplication</option>
                <option value="div">Division</option>
            </select>
        </label><br>
        <label>
            Second operand:
            <input type="text" name="operand2">
        </label><br>
        <button type="submit">Calculate</button>
    </fieldset>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstOper = $_POST["operand1"];
    $secondOper = $_POST["operand2"];
    $select = $_POST['select'];

    try{
        switch ($select) {
            case 'add':
                echo "Result: " .($firstOper + $secondOper);
                break;
            case 'sub':
                echo "Result: " .($firstOper-$secondOper);
                break;
            case 'mul':
                echo "Result: " .($firstOper*$secondOper);
                break;
            case 'div':
                if ($secondOper == 0) {
                    throw new Exception("Khong chia duoc cho 0.");
                }
                echo "Result: " .($firstOper/$secondOper);
                break;
        }
    }

    catch (Exception $exception) {
        echo $exception->getMessage();
        echo "<pre>";
        echo $exception->getFile();
        echo "<br>";
        echo $exception->getLine();
    }
}
?>