<?php

function getCount($str) {
  $vowelsCount = 0;
  
  $vowels = ["a", "i", "u","e", "o"];
  $arr = str_split($str);
  for ($i=0; $i<count($arr); $i++) {
    if (in_array($arr[$i], $vowels)) {
      $vowelsCount++;
    }
  }
  
  return $vowelsCount;

  // and this is magic way 
    //return preg_match_all("/[aeiou]/", $str);
}

print_r(getCount("adityagunawan"));