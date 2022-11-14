<?php

function lengthOfArray($array)
{
    $i = 0;
    while (isset($array[$i])) {
        $i++;
    }
    return $i;
}

function task6($arrayA, $arrayB)
{
    $i = 0;
    $j = 0;
    $k = 0;
    $result = [];
    $lengthA = lengthOfArray($arrayA);
    $lengthB = lengthOfArray($arrayB);
    while ($i < $lengthA && $j < $lengthB) {
        if ($arrayA[$i] < $arrayB[$j])
            $result[$k++] = $arrayA[$i++];
        else
            $result[$k++] = $arrayB[$j++];
    }
    while ($i < $lengthA) {
        $result[$k++] = $arrayA[$i++];
    }
    while ($j < $lengthB) {
        $result[$k++] = $arrayB[$j++];
    }
    return $result;
}

var_dump(task6([1, 2, 3, 12, 15], [1, 3, 5, 8]));

