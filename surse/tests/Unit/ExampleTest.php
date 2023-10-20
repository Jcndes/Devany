<?php

namespace Tests\Unit\Pather;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }
}

class PatherTest extends TestCase
{
    public function testGetShortestPath()
    {
        // Inclua aqui o código para testar a função getShortestPath da classe Pather
        // Por exemplo:
        $pather = new Pather();
        $result = $pather->getShortestPath('/path/to/destination', '/starting/path');

        // Assuma que a função getShortestPath deve retornar o resultado esperado
        $expectedResult = '/path/to/destination';
        $this->assertEquals($expectedResult, $result);
    }
}
