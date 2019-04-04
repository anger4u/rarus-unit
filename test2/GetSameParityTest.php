<?php

require_once __DIR__ . '/GetSameParity.php';

use PHPUnit\Framework\TestCase;

class GetSameParityTest extends TestCase
{
    /**
     * @param $expected
     * @param $actual
     *
     * @dataProvider providerParity
     */
    public function testParity(array $expected, array $actual):void
    {

        $testFunc = getSameParity($actual);

        $this->assertSame($expected, $testFunc);
    }

    // провайдер значений
    public function providerParity():array
    {
        return array(
            array([1, 3, 5], [1, 2, 3, 5, 6]),
            array([2, 6], [2, 1, 3, 5, 6]),
        );
    }
}
