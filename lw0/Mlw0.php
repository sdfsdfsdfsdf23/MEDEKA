<?php

function calculator(string $primer): float
{
    $arrayZnaki = ['!', '@', '#', '%', '^', '&', '?', '_'];

    $arrFirst = str_split($primer);
    $length = count($arrFirst);
    for ($i = 0; $i < $length; $i++) {
        while (ctype_alpha($arrFirst[$i])) {
            unset($arrFirst[$i]);
        }
        if (in_array($arrFirst[$i], $arrayZnaki)) {
            unset($arrFirst[$i]);
        }
        $primer =  implode($arrFirst);
    }
    return eval("return $primer;");
}
echo calculator('!1+2@*3^-&4?/#asd5'); //answer 6.2
