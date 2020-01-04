<?php
for ($x=1; $x < 6; $x++) {
    $b = 0;
    for ($i=1; $i <= 50 ; $i++) {     // for 1, adalah bilangan yang akan di cek
    
        $t = 0; 
    
            for ($j=1; $j <= $i ; $j++) {  // for 2, bilangan pembagi
    
                if ($i % $j == 0) {
                    $t++;
                }
              
            }
    
        if ($t == 2) {   // syarat atau kondisi bilangan prima
            $b++;
            echo "".$i." ";
            if($b == $x) {
                break;
            }
        }
    }
    echo "<br/>";

}