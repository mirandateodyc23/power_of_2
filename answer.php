<?php
$arr = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16];

$result = isPower($arr);
print_r($result);

function isPower($arr) {
    // Write your code here
    $num=0;
    $pow = 0;
    $pow_arr = [];
    $new_arr = [];
    $max = max($arr);

    while($pow < $max) {
        $pow = 2 ** $num++;
        $pow_arr[] = $pow;
    }
    
    foreach ($arr as $key=>$number) {
        if (in_array($number, $pow_arr)) {
            $new_arr[$key] = 1;
        } else {
            $new_arr[$key] = 0;
        }
    }
    return $new_arr;
    
}


?>