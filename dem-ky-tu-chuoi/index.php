<?php

$str = "Hello, is there anybody in there?";

function countChar($str, $char) {
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++){
        if (strtolower($str[$i]) == $char) {
            $count++;
        }
    }
    return "So lan xuat hien: $count";
}
echo countChar($str, 'h');