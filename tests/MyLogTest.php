<?php

use PHPUnit\Framework\TestCase;
use ozhigin\MyLog;

class MyLogTest extends TestCase {

    public static function setUpBeforeClass(): void {
        MyLog::clearArray();
    }

    public function testLog() {
        $this->expectOutputString("Recording check!");
        MyLog::log("Recording check!");
        MyLog::write();
    }

    public function testInstance() {
        $this->assertInstanceOf(MyLog::class, MyLog::Instance());
    }
}