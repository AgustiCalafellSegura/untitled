<?php
/**
 * Created by PhpStorm.
 * User: agusti
 * Date: 28/11/17
 * Time: 16:07
 */

namespace AppBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class MusicPlayerCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('app:music:player')
            ->setDescription('This command can play one time to Rock, Paper & Scissors')
            ->setHelp('This command is only for learning purposes.')
        ;
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $song1 = new Song();
        $song1
            ->setName('Yellow submarine')
            ->setDuration(120)
            ->setStars(5)
        ;

        $song2 = new Song();
        $song2
            ->setName('Cocaine')
            ->setDuration(65)
            ->setStars(4)
           ;

        $album1 = new Album();
        $album1
            ->setGenere('Folk')
            ->setTitle('Great Hits')
            ->setYear(2017)
            ->addSong($song1)
            ->addSong($song2)
        ;


        $album2 = new Album();
        $album2
            ->setGenere('Rock')
            ->setTitle('Great Hits 2')
            ->setYear(2016)
        ;


        $sinatraMix = new Artist();
        $sinatraMix
            ->setName('Sinatra')
            ->addAlbum($album1)
            ->addAlbum($album2);
        ;

        $output->writeln($sinatraMix->toString());
        $sinatraMix->printArtist($output);
    }
}