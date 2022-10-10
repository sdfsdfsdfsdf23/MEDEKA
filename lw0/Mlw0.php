<?php

function calculator(string $primer): float
{
    $arrayznak = array("?", ")");

    foreach ($arrayznak as $znak) {
        $pos = strpos($primer, $znak);
        if ($pos === false) {
            $result = eval("return $primer;");
        } else {
            echo "Error";
        }
    }
    return $result;
}
echo calculator('1+2*3-4/5'); //answer 6.2
