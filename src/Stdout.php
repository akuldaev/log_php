<?php

class Stdout extends Logger
{
    static function StdoutFunc ($msg) {
        echo "STDOUT:\n";
        fwrite(STDOUT, self::logFunc($msg));
    }
}
