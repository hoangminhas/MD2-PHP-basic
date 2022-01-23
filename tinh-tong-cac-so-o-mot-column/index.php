<?php

$arr = [
    [1,3,5,7],
    [2,4,6,8],
    [0,0,0,0],
];

function sumOfCol($arr, $column) {
    $sum = 0;
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = $column-1; ;){
            $sum += $arr[$i][$j];
            break;
        }
    }
    return $sum;
}
echo sumOfCol($arr, 1);


