#!/usr/bin/env php

<?php

require __DIR__.'/vendor/autoload.php';
require __DIR__.'/src/TestCommand.php';
require __DIR__.'/src/CalculatorCommand.php';
require __DIR__.'/src/Analyzer.php';
require __DIR__.'/src/AreaCalculatorCommand.php';
require __DIR__.'/src/Rectangle.php';
require __DIR__.'/src/Game.php';


use Symfony\Component\Console\Application;
use AppBundle\Command\TestCommand;
use AppBundle\Command\CalculatorCommand;
use AppBundle\Command\Analyzer;
use AppBundle\Command\AreaCalculatorCommand;
use AppBundle\Command\Game;

// init app
$application = new Application();

// register commands
$application->add(new TestCommand());
$application->add(new CalculatorCommand());
$application->add(new Analyzer());
$application->add(new AreaCalculatorCommand());
$application->add(new Game());

$application->run();
