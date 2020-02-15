<?php

function hourglassSum($arr) {

for($i = 0; $i <= count($arr) - 3; $i++) {
      for($j = 0; $j <= count($arr[$i]) - 3; $j++) {
          $result[] = intval($arr[$i][$j] + $arr[$i][$j+1] + $arr[$i][$j+2]
              + $arr[$i+1][$j+1]
              + $arr[$i+2][$j] + $arr[$i+2][$j+1] + $arr[$i+2][$j+2]);
      }
  }

  return max($result);
}

$arr = [
    [1, 1, 1, 0, 0, 0],
    [0, 1, 0, 0, 0, 0],
    [1, 1, 1, 0, 0, 0],
    [0, 0, 2, 4, 4, 0],
    [0, 0, 0, 2, 0, 0],
    [0, 0, 1, 2, 4, 0]
];
print_r(hourglassSum($arr));