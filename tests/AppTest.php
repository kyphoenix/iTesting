<?php
use PHPUnit\Framework\TestCase;
use Test\NumberAdder\NumberAdder;

class ExampleTest extends TestCase
{
    /**
     * @dataProvider additionProvider
    */
    public function testTwoNumbersAreAdded($a, $b, $expected)
    {
        $adder = new NumberAdder($a, $b);
        $result = $adder->add();

        $this->assertSame($expected, $result);
    }

    public function additionProvider()
    {
        return [
            'adding zeros'  => [0, 0, 0],
            'zero plus one' => [0, 1, 1],
            'one plus zero' => [1, 0, 1],
            'one plus one'  => [1, 1, 2]
        ];
    }
}
