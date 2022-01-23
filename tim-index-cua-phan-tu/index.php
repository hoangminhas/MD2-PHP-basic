<?php
function randomArr() {
    $arr = range(0, 100);
    shuffle($arr);
    return $arr;
}

function getIndexOfNum($arr, $num) {
    echo "<pre>";
    print_r($arr);
    foreach ($arr as $value) {
        if ($value == $num) {
            return array_search($value, $arr);
        }
    }
}

echo getIndexOfNum(randomArr(), 9);