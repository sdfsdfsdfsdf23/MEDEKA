<?php

function calculator($calc)
{
    $result = eval("return $calc;");
    if (is_string($result)) {
        echo "ERORCHIK";
    } else {
        echo $result;
    }
}
calculator('1+2*3-4/5'); //answer 6.2
