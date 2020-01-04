<?php
function digPow($n, $p) {
    // your code
    $z=0;
    $arr_n = str_split(strval($n));
    for ($i = 0; $i < count($arr_n); $i++) {
      $z += pow((int)$arr_n[$i], $p);
      $p++;
    }
    $z=0;
    $arr_n = str_split(strval($n));
    for ($i = 0; $i < count($arr_n); $i++) {
      $z += pow((int)$arr_n[$i], $p);
      $p++;
    }
    return is_integer($a = $z/$n) ? $a : -1;
}

print_r(digpow(89, 1));
print_r("<br>");
print_r(digpow(92, 1));
print_r("<br>");
print_r(digpow(46288, 3));
print_r("<br>");
print_r(digpow(695, 2));