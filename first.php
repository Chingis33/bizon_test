<?php

/**
 * Функция бинарного поиска по упорядоченному массиву
 * @param array $sourceArray Упорядоченный по возрастанию массив целых чисел
 * @param int $searchValue Искомая величина
 * @return int
 */
function binarySearch(array $sourceArray, int $searchValue) :int
{
    $start = 0;
    $end = count($sourceArray) - 1;

    while($start <= $end)
    {
        $index = floor(($start+ $end) / 2);

        if($sourceArray[$index] == $searchValue)
        {
            return (int) $index;
        }
        elseif($sourceArray[$index] > $searchValue)
        {
            $end = $index - 1;
        }
        else
        {
            $start = $index + 1;
        }
    }

    return -1;
}

// $sortedArray - массив в котором ищем элемент, $value - искомое число.
$sortedArray = [-100, -50, -10, -6];
$value = 50;
var_dump(binarySearch($sortedArray, $value));
