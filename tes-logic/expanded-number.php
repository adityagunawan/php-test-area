<?php

function expanded_form($n) {
    $rtn = [];
    $count = strlen($n);
    foreach(str_split($n) as $x) {
      if ($x != 0) {
          $rtn[] = str_pad($x, $count, 0);
      }
      $count--;
    }
    return implode($rtn, " + ");
  }

  print_r(expanded_form(2020)); // result 2000 + 20
  print_r(expanded_form(1994)); // result 1000 + 900 + 90 + 4
  