<?php

namespace DivineOmega\ArrayUndot\Tests;

use PHPUnit\Framework\TestCase;

final class BasicUsageTest extends TestCase
{
    public function testFunctionExists()
    {
        $this->assertTrue(function_exists('array_undot'));
    }

    public function testSingleItemArray()
    {
        $dotNotationArray = ['products.desk.price' => 100];

        $expected = ['products' => ['desk' => ['price' => 100]]];

        $this->assertEquals($expected, array_undot($dotNotationArray));
    }

    public function testMultiItemArray()
    {
        $dotNotationArray = ['products.desk.price' => 100,
            'products.desk.name'                   => 'Oak Desk',
            'products.lamp.price'                  => 15,
            'products.lamp.name'                   => 'Red Lamp', ];

        $expected = [
            'products' => [
                'desk' => [
                    'price' => 100,
                    'name'  => 'Oak Desk',
                ],
                'lamp' => [
                    'price' => 15,
                    'name'  => 'Red Lamp',
                ],
            ],
        ];

        $this->assertEquals($expected, array_undot($dotNotationArray));
    }
}
