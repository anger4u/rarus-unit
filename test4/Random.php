<?php

declare(strict_types=1);

require_once __DIR__ . '/RandomInterface.php';

/**
 * class Random - генератор рандомных чисел
 *
 * В основе генератора использован Линейный конгруэнтный метод
 */
class Random implements RandomInterface
{
    private $seed;
    private $nextNum;
    const m = 10;
    const a = 7;
    const c = 7;
    /**
     * Random constructor.
     *
     * @param int $seed - начальное число генератора псевдослучайных чисел
     */
    public function __construct(int $seed)
    {
        $this->nextNum = $this->seed = $seed;
    }
    /**
     * Возврат нового случайного числа
     *
     * @return int
     */
    public function getNext():int
    {
        $this->nextNum = (self::a * $this->nextNum + self::c) % self::m;
        return $this->nextNum;
    }
    /**
     * Сброс генератора на начальное значение
     *
     * @return void
     */
    public function reset():void
    {
        $this->nextNum = $this->seed;
    }
}

$Random = new Random(7);

var_dump($Random -> getNext());
var_dump($Random -> getNext());
var_dump($Random -> getNext());
var_dump($Random -> getNext());
var_dump($Random -> getNext());
var_dump($Random -> getNext());