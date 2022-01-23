<?php
$arr = [1,3,5,7,9];
function removeItem($arr, $x) {
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] == $x) {
            array_splice($arr, $i, 1);
        }
    }
    return $arr;
}

print_r(removeItem($arr, 2));