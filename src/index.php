<?php

require __DIR__ . '/../vendor/autoload.php';

use User\PackageTest\ExampleClass;

$class = new ExampleClass();
echo $class->info();