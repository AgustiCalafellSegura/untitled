#!/usr/bin/env php

<?php

require __DIR__.'/vendor/autoload.php';
require __DIR__.'/src/TestCommand.php';
require __DIR__.'/src/CalculatorCommand.php';
require __DIR__.'/src/Analyzer.php';

use Symfony\Component\Console\Application;
use AppBundle\Command\TestCommand;
use AppBundle\Command\CalculatorCommand;
use AppBundle\Command\Analyzer;

// init app
$application = new Application();

// register commands
$application->add(new TestCommand());
$application->add(new CalculatorCommand());
$application->add(new Analyzer());

$application->run();
