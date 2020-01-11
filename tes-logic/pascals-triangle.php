<?php

/** CARA PERTAMA */
// for details of this function 
function binomialCoeff($n, $k) 
{ 
	$res = 1; 
	if ($k > $n - $k) 
	$k = $n - $k; 
	for ($i = 0; $i < $k; ++$i) 
	{ 
		$res *= ($n - $i); 
		$res /= ($i + 1); 
	} 
return $res; 
} 

// Function to print first 
// n lines of Pascal's 
// Triangle 
function printPascal($n) 
{ 
	// Iterate through every line and 
	// print entries in it 
	for ($line = 0; $line < $n; $line++) 
	{ 
		// Every line has number of 
		// integers equal to line 
		// number 
		for ($i = 0; $i <= $line; $i++) 
				echo "".binomialCoeff($line, $i)." "; 
				
		echo "\n"; 
	} 
} 

//===================================================================

/**  CARA KEDUA */
function pascals_triangle1($n) {
    $pascal = [];
    for ($i = 0; $i < $n; $i++) {
      $num = 1;
      for ($j = 0; $j <= $i; $j++) {
        array_push($pascal, $num);
        $num = $num * ($i - $j) / ($j + 1);
      }
    }
    return $pascal;
  }
//===================================================================

/** CARA KETIGA */
  function pascals_triangle2($n) {
    $arr[][] = 0;
    $result = [];
    $count = 0;
    for($x = 0 ; $n > $x ; $x++){
      for($y = 0 ; $x >= $y ; $y++){
        if($y == 0 || $y == $x){
         $arr[$x][$y] = 1;    
        }else{
          $arr[$x][$y] = $arr[$x-1][$y] + $arr[$x-1][$y-1];        
        }
        $result[$count] = $arr[$x][$y];
        $count++;
      }
    }
    return $result;
  }

  //===================================================================

// Driver Code 
$n=4; 
print_r(printPascal($n)); 

// 1 
// 1 1 
// 1 2 1 
// 1 3 3 1 
// 1 4 6 4 1 
// 1 5 10 10 5 1 
// 1 6 15 20 15 6 1 
 
?> 
