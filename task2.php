<?php

function lengthOfArray($array)
{
    $i = 0;
    while (isset($array[$i])) {
        $i++;
    }
    return $i;
}

function task2($array)
{
    $bArray = [];
    $sum = 0;
    for ($i = 0; $i < lengthOfArray($array); $i++) {
        $sum += $array[$i];
        $bArray[] = $sum / ($i + 1);
    }
    return $bArray;
}

print_r(task2([1,3,5,7]));