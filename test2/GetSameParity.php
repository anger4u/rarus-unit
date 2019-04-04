<?php

/**
 * @param $arr
 *
 * @return array
 *
 * Реализуйте функцию getSameParity, которая принимает на вход массив чисел и возвращает новый,
 * состоящий из элементов, у которых такая же чётность, как и у первого элемента входного массива.
 *
 * Примеры
 *
 * <?php
 *
 * getSameParity([]);        // => []
 * getSameParity([1, 2, 3]); // => [1, 3]
 * getSameParity([1, 2, 8]); // => [1]
 * getSameParity([2, 2, 8]); // => [2, 2, 8]
 *
 * Подсказки Проверка чётности - остаток от деления: $item % 2 == 0 — чётное число Если на вход функции передан пустой
 * массив, то она должна вернуть пустой массив. Проверить массив на пустоту можно с помощью функции empty
 */
function getSameParity(array $arr):array
{
    if (empty($arr)) {
        return [];
    }
    $result = [];
    $typeOne = $arr[0] % 2;

    foreach ($arr as $item) {
        if ($item % 2 == $typeOne) {
            $result[] = $item;
        }
    }

    return $result;
}