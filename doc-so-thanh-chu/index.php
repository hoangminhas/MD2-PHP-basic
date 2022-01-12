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
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['number'])) {
        $number = $_POST["number"];
        readNumber($number);
    } else {
        echo "Vui long nhap so vao.";
    }
}
//xay dung ham dem hang don vi
function oneDigit($number)
{
    $oneDigit = ['zero', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine'];
    return $oneDigit[$number];
}
//xay dung ham dem hang tram
function twoDigit($number)
{
    $teen = [10 => 'ten', 11 => 'eleven', 12 => 'twelve', 13 => 'thirteen', 14 => 'fourteen',
        15 => 'fifteen', 16 => 'sixteen', 17 => 'seventeen', 18 => 'eighteen', 19 => 'nineteen'];
    $ty = [2 => 'twenty', 3 => 'thirty', 4 => 'forty', 5 => 'fifty', 6 => 'sixty', 7 => 'seventy', 8 => 'eighty', 9 => 'ninety'];
    if ($number < 20) {
        return $teen[$number];
    } elseif ($number % 10 == 0) {
        return $ty[$number[0]];
    } else {
        return $ty[$number[0]] ." ". oneDigit($number[1]);
    }
}
//xay dung ham dem hang nghin
function threeDigit($number) {
    $hunred = [1=>'one hunred', 2=>'two hundred', 3=>'three hundred', 4=>'four hundred', 5=>'five hundred',
        6=>'six hundred', 7=>'seven hundred', 8=>'eight hundred', 9=>'nine hundred'];
    if ($number % 100 == 0) {
        return $hunred[$number[0]];
    } elseif ($number[1] == 0) {
        return $hunred[$number[0]] . " and " . oneDigit($number[2]);
    } else {
        return $hunred[$number[0]] . " and " . twoDigit($number[1] . $number[2]);
    }
}
//xay dung ham doc so tong hop
function readNumber($number)
{
    if ($number >= 0 && $number <= 9) {
        echo oneDigit($number);
    } elseif ($number < 100) {
        echo twoDigit($number);
    } elseif ($number <1000) {
        echo threeDigit($number);
    }
}

?>

