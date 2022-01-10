<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $listPrice = $_POST["price"];
    $discountPercent = $_POST["discount"];
    $description = $_POST["description"];
    $discountAmount = $listPrice * $discountPercent * 0.1;
    echo "Mo ta: $description<br>";
    echo "Gia niem yet: $listPrice<br>";
    echo "Ty le chiet khau: $listPrice<br>";
    echo "Luong chiet khau: $discountAmount<br>";
    echo "Gia sau khi chiet khau: $listPrice - $discountAmount";
}
?>
