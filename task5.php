<?php

function lengthOfArray($array)
{
    $i = 0;
    while (isset($array[$i])) {
        $i++;
    }
    return $i;
}

function taskArray5($array)
{
    $length = lengthOfArray($array);
    $array0 = [];
    $array1 = [];
    $array2 = [];
    $lengthArray1 = 0;
    $lengthArray2 = 0;
    for ($i = 0; $i < $length; $i++) {
        if ($array[$i] == 0) {
            $array0[] = $array[$i];
        } elseif ($array[$i] == 1) {
            $array1[] = $array[$i];
            $lengthArray1++;
        } else {
            $array2[] = $array[$i];
            $lengthArray2++;
        }
    }
    $result = $array0;
    for ($i = 0; $i < $lengthArray2; $i++) {
        $result[] = $array2[$i];
    }
    for ($i = 0; $i < $lengthArray1; $i++) {
        $result[] = $array1[$i];
    }
    return $result;
}

var_dump(taskArray5([1, 1, 1, 2, 2, 0, 0, 1, 2, 0]));