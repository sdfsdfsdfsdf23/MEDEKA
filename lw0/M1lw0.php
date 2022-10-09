<?php

$arrayTimeFirst = [];
$arrayTimeSecond = [];

function sumTime($timeFirst, $timeSecond)
{
    $arrayTimeFirst = explode(':', $timeFirst);
    $arrayTimeSecond = explode(':', $timeSecond);
    $timeArrayThird0 = $arrayTimeFirst[0] + $arrayTimeSecond[0];
    $timeArrayThird1 = $arrayTimeFirst[1] + $arrayTimeSecond[1];
    $timeArrayThird2 = $arrayTimeFirst[2] + $arrayTimeSecond[2];
    if ($timeArrayThird2 >= 60) {
        $timeArrayThird1 = $timeArrayThird1 + 1;
        $timeArrayThird2 = $timeArrayThird2 - 60;
    }
    if ($timeArrayThird1 >= 60) {
        $timeArrayThird0 = $timeArrayThird0 + 1;
        $timeArrayThird1 = $timeArrayThird1 - 60;
    }

    if ($timeArrayThird0 >= 24) {
        $timeArrayThird0 = $timeArrayThird0 - 24;
    }
    echo $timeArrayThird0 . ":", $timeArrayThird1 . ":", $timeArrayThird2;
}
sumTime('10:30:90', '10:60:12');
