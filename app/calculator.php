<?php

/**
 * Application entry-point.
 */

if (php_sapi_name() !== 'cli') exit;

require __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Console\Application;
use Calculator\AddCommand;
use Calculator\SubtractCommand;
use Calculator\MultiplyCommand;

$application = new Application();
$application->setName('Calculator');
$application->setVersion('1.0.0');
$application->add(new AddCommand());
$application->add(new SubtractCommand());
$application->add(new MultiplyCommand());
$application->run();
