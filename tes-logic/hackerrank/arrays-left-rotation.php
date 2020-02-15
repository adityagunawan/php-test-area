<?php
function rotLeft($a, $d) {
    for ($j = 0; $j < $d; $j++) {
       $b = $a[$j];
       unset($a[$j]);
       array_push($a, $b);
    }
    return $a;
}

print_r(rotLeft([1,2,3,4,5], 4));