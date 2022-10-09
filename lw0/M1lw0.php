<?php

$arrayTimeFirst = [];
$arrayTimeSecond = [];

function sumTime(string $timeFirst, string $timeSecond)
{
    $arrayTimeFirst = explode(':', $timeFirst);
    $arrayTimeSecond = explode(':', $timeSecond);
    $timeArrayThird0 = $arrayTimeFirst[0] + $arrayTimeSecond[0];
    $timeArrayThird1 = $arrayTimeFirst[1] + $arrayTimeSecond[1];
    $timeArrayThird2 = $arrayTimeFirst[2] + $arrayTimeSecond[2];
    while ($timeArrayThird2 >= 60) {
        $timeArrayThird1 = $timeArrayThird1 + 1;
        $timeArrayThird2 = $timeArrayThird2 - 60;
    }
    while ($timeArrayThird1 >= 60) {
        $timeArrayThird0 = $timeArrayThird0 + 1;
        $timeArrayThird1 = $timeArrayThird1 - 60;
    }

    while ($timeArrayThird0 >= 24) {
        $timeArrayThird0 = $timeArrayThird0 - 24;
    }
    echo (int)$timeArrayThird0 . ":", (int)$timeArrayThird1 . ":", (int)$timeArrayThird2;
}
sumTime('40:30:90', '10:60:12');
