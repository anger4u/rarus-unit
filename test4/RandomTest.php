<?php

require_once __DIR__ . '/Random.php';

use PHPUnit\Framework\TestCase;

class RandomTest extends TestCase
{
    /**
     * @param $expNums
     * @param $actNum
     *
     * @dataProvider providerNext
     */
    public function testGetNext($expNums, $actNum)
    {
        $testRandom = new Random($actNum);
        $actNums = [];

        for($i = 0; $i < 6; $i++) {
            $actNums[] = $testRandom -> getNext();
        }

        $this -> assertSame($expNums, $actNums);
    }

    // провайдер значений для следую
    public function providerNext()
    {
        return array(
            array([6,9,0,7,6,9], 7)
        );
    }

    /**
     * @param $expNum
     * @param $actNum
     *
     * @dataProvider providerRes
     */
    public function testReset($expNum, $actNum)
    {
        $testRandom = new Random($actNum);

        for($i = 0; $i < $actNum; $i++) {
            $testRandom -> getNext();
        }

        $testRandom -> reset();

        $testRes = $testRandom -> getNext();

        $this -> assertSame($expNum, $testRes);
    }

    // провайдер значений для площади
    public function providerRes()
    {
        return array(
            array(6, 7)
        );
    }
}
