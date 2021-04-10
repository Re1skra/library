<?php

use PHPUnit\Framework\TestCase;
use ozhigin\LineEq;
use ozhigin\OzhiginException;

class LineEqTest extends TestCase {

    public function testSolveLineEq() {
        $lineEq = new LineEq();
        $this->assertEquals(array(-7), $lineEq->solveLineEq(6, 42));
        $this->assertEquals(array(-3), $lineEq->solveLineEq(3, 9));
    }

    public function testOzhiginException() {
        $lineEq = new LineEq();
        $this->expectException(OzhiginException::class);
        $this->expectExceptionMessage('No roots');
        $this->assertEquals(0, $lineEq->solveLineEq(0, 5));
        $this->assertEquals(0, $lineEq->solveLineEq(0, 8));
    }
}