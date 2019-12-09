<?php

/**
 * Функция по поиску количества субот и воскресений между датами
 * @param string $startDate Упорядоченный по возрастанию массив целых чисел
 * @param string $endDate Искомая величина
 * @return string
 */
function countWeekendDays(string $startDate, string $endDate) :string
{
    $startDate = strtotime($startDate);
    $endDate = strtotime($endDate);
    $iter = 24 * 60 * 60; // day in seconds
    $countOfSaturday = 0;
    $countOfSundays = 0;
    for ($i = $startDate; $i <= $endDate; $i = $i + $iter)
    {
        if (Date('D', $i) == 'Sat')
        {
            $countOfSaturday++;
        }
        if (Date('D', $i) == 'Sun')
        {
            $countOfSundays;
        }
    }
    return 'Между этими датами субот: ' . $countOfSaturday . ' и воскресений: ' . $countOfSundays;
}

$startDate = "25-12-2019";
$endDate = "28-12-2019";
var_dump(countWeekendDays($startDate, $endDate));