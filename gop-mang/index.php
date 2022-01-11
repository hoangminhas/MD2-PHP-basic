<?php
$arr1 = [1,3,5,7];
$arr2 = [2,4,6,8];
function mergeArr($arr1, $arr2){
    $arr3 = [];
    for ($i=0; $i<count($arr1); $i++){
        array_push($arr3, $arr1[$i]);
    }
    for ($j=0; $j<count($arr2); $j++){
        array_push($arr3, $arr2[$j]);
    }
    return $arr3;
}
echo "<pre>";
print_r(mergeArr($arr1,$arr2));

