<?php

use App\Repeater;
use App\SayHello;
use Symfony\Component\Console\Application;

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$app = new Application('learn app');

$app->add(new SayHello());
$app->add(new Repeater());

$app->run();
