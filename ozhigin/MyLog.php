<?php

namespace ozhigin;

use core\LogAbstract;
use core\LogInterface;

class MyLog extends LogAbstract implements LogInterface {
    public function _write() {
        $dateLog = date('d.m.Y_H.i.s.v');
        foreach($this->log as $e) {
            echo $e . "\n\r";
            file_put_contents("log\\$dateLog.log", $e . PHP_EOL, FILE_APPEND);
        }
    }

    public static function log(string $str):void {
        MyLog::Instance()->log[] = $str;
    }

    public static function write():void {
        MyLog::Instance()->_write();
    }
}