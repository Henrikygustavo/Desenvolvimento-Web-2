<?php

require __DIR__. '/vendor/autoload.php';

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('name');
$log->pushHandler(new StreamHandler('you.log', Level::Warning));

$log->Warning('Foo');
$log->error('Bar');