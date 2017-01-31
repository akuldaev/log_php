<?php


class SetWay {
    private static $way;
    public static function SetWayFunc ($printlog) {
        self::$way = $printlog;
    }
    public static function toPrint($msg, $file, $dir) {
        switch (self::$way) {
            case 1:
                Stdout::StdoutFunc($msg);
                echo "\n";
                break;
            case 2:
                FileSystem::FileSystemFunc($msg, $file, $dir);
                echo "\n";
                break;
            case 3:
                DataBase::putinDB($msg);
                break;
            default:
                echo "Please, check out Config.php\n";
        }
    }
}
