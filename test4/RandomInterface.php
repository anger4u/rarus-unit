<?php
/**
 * Interface RandomInterface
 */
interface RandomInterface
{
    /**
     * Возврат нового случайного числа
     *
     * @return int
     */
    public function getNext():int;

    /**
     * Сброс генератора на начальное значение
     *
     * @return void
     */
    public function reset():void;
}