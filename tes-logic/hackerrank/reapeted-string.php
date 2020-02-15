<?php
function countString($s, $n) {
    $a = (int)($n / strlen($s));
    $sisa = $n % strlen($s);
    $sisa_string = substr($s, 0, $sisa);
    $b = 0;
    $c = 0;
    for ($i = 0; $i<strlen($s); $i++) {
        if($s[$i] == 'a') {
            $b++;
        }
    }

    for ($i = 0; $i<strlen($sisa_string); $i++) {
        if($sisa_string[$i] == 'a') {
            $c++;
        }
    }

    print_r($b * $a + $c);
}

countString("aba", 10);