<?php

$arrayTimeFirst = [];
$arrayTimeSecond = [];
$timeArrayThird = [];

function sumTime(string $timeFirst, string $timeSecond): string
{
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
    return $timeArrayThird[0].':'.$timeArrayThird[1].':'.$timeArrayThird[2];
}
echo SumTime('40:90:60', '10:60:30');
