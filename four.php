<?php

/**
 * функция которая будет выводить элементы последовательности Фибоначчи до переданного на вход значения.
 * @param int $value
 */
function printFibaNumbers(int $value)
{
    $previous = 0;
    $current = 1;
    $fibaNumber = 0;
    $fibaNumbers = [0];
    
    while ($fibaNumber < $value) {

        $previous = $current;
        $current = $fibaNumber;
        $fibaNumber = $previous + $current;
        $fibaNumbers[] = $fibaNumber;
    }
    
    //нам надо последний элемент выкинуть из массива.
    $fibaNumbers = array_slice($fibaNumbers, 0, -1);
    echo implode(', ', $fibaNumbers);
}

printFibaNumbers(15);
