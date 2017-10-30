#!/usr/bin/env php

<?php

require __DIR__.'/vendor/autoload.php';
require __DIR__.'/src/TestCommand.php';
require __DIR__.'/src/CalculatorCommand.php';

use Symfony\Component\Console\Application;
use AppBundle\Command\TestCommand;
use AppBundle\Command\CalculatorCommand;

// init app
$application = new Application();

// register commands
$application->add(new TestCommand());
$application->add(new CalculatorCommand());

$application->run();
