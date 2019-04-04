<?php

/**
 * @param $arr
 *
 * @return int|mixed|null
 *
 * Задача 9
 *
 * Реализуйте функцию calculateAverage, которая высчитывает среднее арифметическое элементов массива.
 *
 * <?php
 *
 * $temperatures = [37.5, 34, 39.3, 40, 38.7, 41.5];
 *
 * calculateAverage($temperatures); // => 38.5
 *
 * В случае пустого массива функция должна вернуть значение null (используйте в коде для этого guard expression):
 *
 * <?php
 *
 * $temperatures = [];
 *
 * calculateAverage($temperatures); // => null
 *
 */
function calculateAverage(array $arr):float
{
    if (empty($arr)) {
        print_r('массив пуст ');
        return null;
    }

    $count = count($arr);
    $sum = 0;

    foreach ($arr as $item) {
        $sum += $item;
    }

    $sum /= $count;

    return $sum;
}