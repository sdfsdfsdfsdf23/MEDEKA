<?php

function calculator(string $primer)
{
    $arrayznak = array("?", ")");

    foreach ($arrayznak as $znak) {
        $pos = strpos($primer, $znak);
        if ($pos === false) {
            $result = eval("return (float)$primer;");
        } else {
            echo "Error";
        }
    }
    echo $result;
}
calculator('1+2*3-4/5'); //answer 6.2
?>