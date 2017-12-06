<?php
/**
 * Created by PhpStorm.
 * User: agusti
 * Date: 28/11/17
 * Time: 16:07
 */

namespace AppBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

// bootstrap.php
require_once "vendor/autoload.php";

class AlbumManagerCreateCommand extends Command
{
    /**
     * @var EntityManager
     */
    private $entityManager;

    protected function configure()
    {
        $this
            ->setName('app:album:create')
            ->setDescription('Create album')
            ->setHelp('This command is only for learning purposes.')
            ->addArgument('title', InputArgument::REQUIRED, 'New title')
            ->addArgument('genere', InputArgument::REQUIRED, 'New genere')
            ->addArgument('year', InputArgument::REQUIRED, 'New year')
        ;

        $paths = array(__DIR__);
        $isDevMode = false;

        $conn = array(
            'driver' => 'pdo_sqlite',
            'path' => __DIR__ . '/../db.sqlite',
        );

        $config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
        $this->entityManager = EntityManager::create($conn, $config);
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|null|void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $title = $input->getArgument('title');
        $genere = $input->getArgument('genere');
        $year = $input->getArgument('year');

        $album = new Album();
        $album
            ->setTitle($title)
            ->setGenere($genere)
            ->setYear($year)
        ;

        $this->entityManager->persist($album);
        $this->entityManager->flush();
    }
}