<?php


require "Config.php";
spl_autoload_register(function($className){require 'src/'.$className.'.php';});

class Logger
{
    public static function logFunc($msg) {
        $logtime ='['.date('Y-m-d h:i:s',time()).'] ';
        if (!is_string($msg))
            $msg = var_export($msg, true);
        return $logtime . $msg . "\n";
    }
}

SetWay::SetWayFunc($outputway);//stdout, filesystem, database)
SetWay::toPrint($logmsg, $file, $dir);//выбираем сообщение после даты