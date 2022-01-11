<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $description = $_POST["description"];
    $price = $_POST["price"];
    $discount = $_POST["discount"];
    $disAmount = $price / 100 * $discount;

    echo "<pre>";
    echo "Mo ta: " .$description."<br>";
    echo "Gia: " .number_format($price, 0, '', ',')."<br>";
    echo "Chiet khau: " .$discount."% <br>";
    echo "<hr>";
    echo "Luong chiet khau: " . number_format($disAmount, 0, '', ',') ."<br>";
    echo "Gia sau cung: " . number_format($price - $disAmount, 0, '', ",");
}
