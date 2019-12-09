<?php

/**
 * Функция подсчитывающая сколько эелментов в массиве делиться на 3 и на 5.
 * @param array $sourceArray массив целых чисел
 * @return int
 */
function countOf(array $sourceArray) :int
{
    $count = 0;
    foreach ($sourceArray as $element)
    {
        if ($element % 15 == 0 )
        {
            $count++;
        }
    }
    return $count;
}

// $sourceArray - наш массив в котором ищем.
$sourceArray = [-100, -50, -10, -15, 30, 45];
var_dump(countOf($sourceArray));

// Можно через анонимную функцию сделать.
$countOfnumbers = 0;
array_walk($sourceArray, function ($element) use (&$countOfnumbers) {
    if ($element % 15 == 0 )
    {
        $countOfnumbers++;
    }
});
var_dump($countOfnumbers);
