<?php

require_once __DIR__ . '/CalculateAverage.php';

use PHPUnit\Framework\TestCase;

class CalculateAverageTest extends TestCase
{
    /**
     * @param $expected
     * @param $actual
     *
     * @dataProvider providerAver
     */
    public function testAver(float $expected, array $actual):void
    {
        $testFunc = calculateAverage($actual);

        $this->assertSame($expected, $testFunc);
    }

    // провайдер значений
    public function providerAver():array
    {
        return array(
            array(3, [1, 2, 6]),
            array(2, [1, 2, 3]),
            array(4, [1, 2, 9]),
            array(5, [1, 2, 12])
        );
    }
}