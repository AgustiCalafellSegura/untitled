#!/usr/bin/env php

<?php

require __DIR__.'/vendor/autoload.php';
require __DIR__.'/src/TestCommand.php';

use Symfony\Component\Console\Application;
use AppBundle\Command\TestCommand;

// init app
$application = new Application();

// register commands
$application->add(new TestCommand());

$application->run();
