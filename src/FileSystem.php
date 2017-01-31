<?php

class FileSystem extends Logger
{
    static function FileSystemFunc($msg, $file = 'logfile.log', $dir = "/")
    {
        $putogs = self::logFunc($msg);
        if (!is_dir($dir)) {
            mkdir($dir);
        }
        file_put_contents($file, $putogs, FILE_APPEND | LOCK_EX);
        echo $putogs . "was put in " . $dir. $file . "\n";
    }
}
