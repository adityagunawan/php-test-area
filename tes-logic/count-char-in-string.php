<?php

function countCharInString($string) {
    $arr = str_split($string);
    sort($arr);
    $char = "";
    $lng = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if ($char == "") {
            $char = $arr[$i];
            $lng++;
        } else {
            if ($char == $arr[$i]) {
                $lng++;
                if($i+1 == count($arr)){
                    echo $char . " = " . $lng;
                }
            } else {
                echo $char . " = " . $lng . "<br/>";
                $lng = 1;
                $char = $arr[$i];
            }
        }
    }
}

countCharInString("adityagunawan");