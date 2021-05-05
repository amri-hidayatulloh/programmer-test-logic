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
print_r($datatest);