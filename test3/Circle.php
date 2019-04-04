<?php

declare(strict_types=1);

/**
 * class Circle - вычисление площади и длинны неизменяемой окружности
 * Включает в себя два метода соответственно
 *
 * Формула площади окружности: πr2
 * Формула длинны окружности: 2*πR
 */
class Circle
{
    private $radius;
    private $area;
    private $circumference;

    /**
     * Circle constructor.
     *
     * @param float $radius
     *
     * @throws Exception
     */
    function __construct(float $radius)
    {
        if ($radius > 0) {
            $this->radius = $radius;
        } else {
            throw new InvalidArgumentException('Неверное значение радиуса - радиус меньше либо равен нулю');
        }
    }

    /**
     * Рассчёт площади окружности
     *
     * @return float
     */
    public function getArea(): float
    {
        if (empty($this->area)) {
            $this->area = M_PI * $this->radius * $this->radius;
        }
        return $this->area;
    }

    /**
     * Рассчёт длинны окружности
     *
     * @return float
     */
    public function getCircumference(): float
    {
        if (empty($this->circumference)) {
            $this->circumference = 2 * M_PI * $this->radius;
        }
        return $this->circumference;
    }
}