<?php

require_once __DIR__ . '/Random.php';

use PHPUnit\Framework\TestCase;

class RandomTest extends TestCase
{
    /**
     * Тест метода getNext класса Random
     * @param $expNums
     * @param $actNum
     *
     * @dataProvider providerNext
     */
    public function testGetNext(array $expNums, int $actNum):void
    {
        $testRandom = new Random($actNum);
        $actNums = [];

        for($i = 0; $i < 6; $i++) {
            $actNums[] = $testRandom -> getNext();
        }

        $this -> assertSame($expNums, $actNums);
    }

    // провайдер значений для теста метода getNext
    public function providerNext()
    {
        return array(
            array([6,9,0,7,6,9], 7)
        );
    }

    /**
     * Тест метода reset класса Random
     *
     * @param $expNum
     * @param $actNum
     *
     * @dataProvider providerRes
     */
    public function testReset(int $expNum, int $actNum):void
    {
        $testRandom = new Random($actNum);

        for($i = 0; $i < $actNum; $i++) {
            $testRandom -> getNext();
        }

        $testRandom -> reset();

        $testRes = $testRandom -> getNext();

        $this -> assertSame($expNum, $testRes);
    }

    // провайдер значений для теста метода reset
    public function providerRes():array
    {
        return array(
            array(6, 7)
        );
    }
}
