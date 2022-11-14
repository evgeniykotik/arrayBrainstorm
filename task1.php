<?php

function lengthOfArray($array)
{
    $i = 0;
    while (isset($array[$i])) {
        $i++;
    }
    return $i;
}

function task1($array)
{
    $length = lengthOfArray($array);
    $counter = $length - 1;
    $countFirst = 0;
    while ($countFirst < $length && $array[$countFirst] >= 0) {///
        $countFirst++;
    }
    if ($countFirst == $length) {////
        return "В массиве нет отрицательных чисел";
    }
    $sum = 0;
    while ($array[$counter] > 0) {
        if ($array[$counter] % 2 != 0) {
            $sum += $array[$counter];
        }
        $counter--;

    }
    return "Кол-во элементов до первого отр.числа: $countFirst \n
    Cумма нечетных элементов, следующих за последним отр.числа: $sum";
}

var_dump(task1([ 1, 2, 4, 7]));