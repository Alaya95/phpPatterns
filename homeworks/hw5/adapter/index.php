<?php

namespace Adapter;

use Adapter\Lib\CircleAreaLib;
use Adapter\Lib\SquareAreaLib;
use Adapter\Service\AdapterCircle;
use Adapter\Service\SquareAdapter;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^Adapter/', '', $className);
    require_once __DIR__ . $className . '.php';
});

$circle = new AdapterCircle(new CircleAreaLib());
$square = new SquareAdapter(new SquareAreaLib());

echo $circle->circleArea(15) . PHP_EOL;
echo $square->squareArea(20) . PHP_EOL;