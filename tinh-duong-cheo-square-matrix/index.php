<?php
$arr = [
    [1, 3, 5, 7],
    [2, 4, 6, 8],
    [7, 8, 9, 11]
];

function crossCal($arr) {
    $sum = 0;
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = $i; $j< count($arr[$i]); $j++) {
            $sum += $arr[$i][$j];
            break;
        }
    }
    return $sum;
}

echo crossCal($arr);
