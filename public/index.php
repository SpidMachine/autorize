<?php

use TexLab\MyDB\DB;
use TexLab\MyDB\DbEntity;
use TexLab\MyDB\Runner;

include "../vendor/autoload.php";

$h = new Runner(DB::Link([
    'host' => 'localhost',
    'username' => 'root',
    'password' => '',
    'dbname' => 'logbd'
]));

$result = $h->runSQL("SELECT * FROM `group`,`users` WHERE `group`.`id` = `users`.`ID`");

print_r($result);