<?php
// $dir -- путь до файла
// $file -- файл в полном названии, вместе с расширение 
$dir = "/";
$file = 'logfile2.log';

//Конфиг подключения к БД
define("db_host","localhost");
define("db_user","root");
define("db_passwd","");
define("db_name","logs");


// Логгируемое сообщение
/*
$way -- выбор метода логгиррования
1 -- stdout
2 -- filesystem
3 -- database
*/
$outputway = 2;
$logmsg = "LOG HERE!!!";
