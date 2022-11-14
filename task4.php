<?php

function lengthOfArray($array)
{
    $i = 0;
    while (isset($array[$i])) {
        $i++;
    }
    return $i;
}

function task4($array, ...$k)
{
    $changedArray = $array;
    $length = lengthOfArray($k);
    for ($i = 0; $i < $length; $i++) {
        $changedArray[] = $k[$i];
    }
    $legthChangedArray = lengthOfArray($changedArray);
    for ($i = 0; $i < $legthChangedArray - 1; $i++) {
        for ($j = $i + 1; $j < $legthChangedArray; $j++) {
            if ($changedArray[$i] > $changedArray[$j]) {
                $temp = $changedArray[$i];
                $changedArray[$i] = $changedArray[$j];
                $changedArray[$j] = $temp;
            }
        }
    }
    return $changedArray;
}

var_dump(task4([1,2,3,4], 3,2,3,5,6,9 ));
