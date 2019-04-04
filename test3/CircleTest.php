<?php

require_once __DIR__ . '/Circle.php';

use PHPUnit\Framework\TestCase;

class CircleTest extends TestCase
{
    /**
     * Проверка выброса исключения в конструкторе
     *
     * @throws Exception
     */
    public function test__constructException()
    {
        $this -> expectException(InvalidArgumentException::class);

        new Circle(-1);
    }

    /**
     * Тест для площади окружности метода getArea класса Circle
     *
     * @param $expected
     * @param $actual
     *
     * @throws Exception
     *
     * @dataProvider providerArea
     */
    public function testGetArea($expArea, $actArea)
    {
        $testCircle = new Circle($actArea);

        $testArea = $testCircle -> getArea();

        $this -> assertSame($expArea, $testArea);
    }

    // провайдер значений для площади
    public function providerArea()
    {
        return array(
            array(113.09733552923255, 6),
            array(254.46900494077323, 9),
        );
    }

    /**
     * Тест для длинны окружности метода getCircumference класса  Circle
     * @param $expCircum
     * @param $actCircum
     *
     * @throws Exception
     *
     * @dataProvider providerCircumference
     */
    public function testGetCircumference($expCircum, $actCircum)
    {
        $testCircle = new Circle($actCircum);

        $testCircum = $testCircle -> getCircumference();

        $this -> assertSame($expCircum, $testCircum);
    }

    // провайдер значений для длинны
    public function providerCircumference()
    {
        return array(
            array(37.699111843078, 6),
            array(56.548667764616, 9)
        );
    }
}
