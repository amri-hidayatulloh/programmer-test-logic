<?php
function positivePairs($arr = []) {
    $freq = [];
    $newarr = [];

    foreach($arr as $val) {
        $val = abs($val);
        if(isset($freq[$val])) {
            $newarr[] = $val;
        } else {
            $freq[$val] = 1;
        }
    }

    asort($newarr);
    return $newarr;
}

$datatest = positivePairs([1, -1, 3, -4, 5, -2, 7, 4, 2]);
print_r($datatest); //[1,2,4]

$datatest = positivePairs([5, -2, -6, -1, 5, 1, 7, 4, 7]);
print_r($datatest); //[1,5,7]

$datatest = positivePairs([100, 30, -20, -5, -30, 20, 10, 50, -70, 80, 2, -2, -50]);
print_r($datatest); //[2,20,30,50]