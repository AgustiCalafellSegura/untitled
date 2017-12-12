#!/usr/bin/env php

<?php

require __DIR__.'/vendor/autoload.php';
require __DIR__.'/src/TestCommand.php';
require __DIR__.'/src/CalculatorCommand.php';
require __DIR__.'/src/Analyzer.php';
require __DIR__.'/src/AreaCalculatorCommand.php';
require __DIR__.'/src/Rectangle.php';
require __DIR__.'/src/Game.php';
require __DIR__.'/src/Hand.php';
require __DIR__.'/src/Judge.php';
require __DIR__.'/src/HandFactory.php';
require __DIR__.'/src/Song.php';
require __DIR__.'/src/Album.php';
require __DIR__.'/src/Artist.php';
require __DIR__.'/src/MusicPlayerCommand.php';
require __DIR__.'/src/ArtistManagerListCommand.php';
require __DIR__.'/src/ArtistManagerCreateCommand.php';
require __DIR__.'/src/ArtistManagerRemoveCommand.php';
require __DIR__.'/src/ArtistManagerUpdateCommand.php';
require __DIR__.'/src/AlbumManagerListCommand.php';
require __DIR__.'/src/AlbumManagerCreateCommand.php';
require __DIR__.'/src/AlbumManagerRemoveCommand.php';
require __DIR__.'/src/AlbumManagerUpdateCommand.php';
require __DIR__.'/src/ArtistManagerShowCommand.php';

use Symfony\Component\Console\Application;
use AppBundle\Command\TestCommand;
use AppBundle\Command\CalculatorCommand;
use AppBundle\Command\Analyzer;
use AppBundle\Command\AreaCalculatorCommand;
use AppBundle\Command\Game;
use AppBundle\Command\MusicPlayerCommand;
use AppBundle\Command\ArtistManagerListCommand;
use AppBundle\Command\ArtistManagerCreateCommand;
use AppBundle\Command\ArtistManagerRemoveCommand;
use AppBundle\Command\ArtistManagerUpdateCommand;
use AppBundle\Command\AlbumManagerListCommand;
use AppBundle\Command\AlbumManagerCreateCommand;
use AppBundle\Command\AlbumManagerRemoveCommand;
use AppBundle\Command\AlbumManagerUpdateCommand;
use AppBundle\Command\ArtistManagerShowCommand;

// init app
$application = new Application();

// register commands
$application->add(new TestCommand());
$application->add(new CalculatorCommand());
$application->add(new Analyzer());
$application->add(new AreaCalculatorCommand());
$application->add(new Game());
$application->add(new MusicPlayerCommand());
$application->add(new ArtistManagerListCommand());
$application->add(new ArtistManagerCreateCommand());
$application->add(new ArtistManagerRemoveCommand());
$application->add(new ArtistManagerUpdateCommand());
$application->add(new AlbumManagerListCommand());
$application->add(new AlbumManagerCreateCommand());
$application->add(new AlbumManagerRemoveCommand());
$application->add(new AlbumManagerUpdateCommand());
$application->add(new ArtistManagerShowCommand());

$application->run();
