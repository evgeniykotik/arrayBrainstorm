<?php

function lengthOfArray($array)
{
    $i = 0;
    while (isset($array[$i])) {
        $i++;
    }
    return $i;
}


function intoArray($char, $array)
{
    for ($i = 0; $i < lengthOfArray($array); $i++) {
        if ($array[$i] === $char) {
            return true;
        }
    }
    return false;
}

function task3($array)
{
    $count = 0;
    $uniqueChar = [];
    for ($i = 0; $i < lengthOfArray($array); $i++) {
        if (!intoArray($array[$i], $uniqueChar)) {
            $uniqueChar[] = $array[$i];
            $count++;
        }
    }
    return $count;
}

var_dump(task3([1,1,2,2,3,4,3]));