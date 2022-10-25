<?php

$arrayTimeFirst = [];
$arrayTimeSecond = [];
$timeArrayThird = [];

function sumTime(string $timeFirst, string $timeSecond): string
{
    $arrayZnaki = ['!', '@', '#', '%', '^', '&', '?', '-', '_'];

    $arrFirst = str_split($timeFirst);
    $arrSecond = str_split($timeSecond);
    $arrLength = count(array_merge($arrFirst, $arrSecond));
    for ($i = 0; $i < $arrLength; $i++) {
        while (ctype_alpha($arrFirst[$i])) {
            unset($arrFirst[$i]);
        }
        while (ctype_alpha($arrSecond[$i])) {
            unset($arrSecond[$i]);
        }
        if (in_array($arrFirst[$i], $arrayZnaki)) {
            unset($arrFirst[$i]);
        }
        if (in_array($arrSecond[$i], $arrayZnaki)) {
            unset($arrSecond[$i]);
        }
    }
    $timeFirst = implode($arrFirst);
    $timeSecond = implode($arrSecond);
    $arrayTimeFirst = explode(':', $timeFirst);
    $arrayTimeSecond = explode(':', $timeSecond);
    $timeArrayThird[0] = $arrayTimeFirst[0] + $arrayTimeSecond[0];
    $timeArrayThird[1] = $arrayTimeFirst[1] + $arrayTimeSecond[1];
    $timeArrayThird[2] = $arrayTimeFirst[2] + $arrayTimeSecond[2];
    while ($timeArrayThird[2] > 59) {

        $timeArrayThird[1] = $timeArrayThird[1] + 1;
        $timeArrayThird[2] = $timeArrayThird[2] - 60;
    }
    while ($timeArrayThird[1] > 59) {
        $timeArrayThird[0] = $timeArrayThird[0] + 1;
        $timeArrayThird[1] = $timeArrayThird[1] - 60;
    }

    while ($timeArrayThird[0] > 23) {
        $timeArrayThird[0] = $timeArrayThird[0] - 24;
    }
    return $timeArrayThird[0] . ':' . $timeArrayThird[1] . ':' . $timeArrayThird[2];
}
echo SumTime('40?asd?:9?0:as6@#0', '10:asd6!0a#sd:3?0ddasd'); //4:31:30
