<?php
function findMin($arr){
    $min = $arr[0];
    for ($i=1; $i<count($arr); $i++){
        if ($min > $arr[$i]) {
            $min = $arr[$i];
        }
    }
    return $min;
}

echo findMin([1,3,5,7,24,56,23,2,45,0,56,-1,21]);
