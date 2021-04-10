<?php

use PHPUnit\Framework\TestCase;
use ozhigin\SquareEq;
use ozhigin\OzhiginException;

class SquareEqTest extends TestCase {

    public function testSolve() {
        $squareEq = new SquareEq();
        $this->assertEquals(array(-0.5, -2), $squareEq->solve(10, 25, 10));
        $this->assertEquals(array(-3), $squareEq->solve(0, 3, 9));
        $this->assertEquals(array(-1), $squareEq->solve(1, 2, 1));
    }

    public function testOzhiginException() {
        $squareEq = new SquareEq();
        $this->expectException(OzhiginException::class);
        $this->expectExceptionMessage('No roots');
        $this->assertEquals(array(-16), $squareEq->solve(5, 2, 1));
        $this->assertEquals(array(-48), $squareEq->solve(8, 4, 2));
    }
}