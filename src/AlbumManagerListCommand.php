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
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

// bootstrap.php
require_once "vendor/autoload.php";

class AlbumManagerListCommand extends Command
{
    /**
     * @var EntityManager
     */
    private $entityManager;

    protected function configure()
    {
        $this
            ->setName('app:album:list')
            ->setDescription('List all albums')
            ->setHelp('This command is only for learning purposes.')
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
        $albums = $this->entityManager->getRepository("AppBundle\Command\Album")->findAll();

        /** @var Album $album */
        foreach ($albums as $album){
            $output->writeln($album->toString());
        }

        /*
        $this->entityManager->persist($sinatraMix);
        $this->entityManager->flush();
        */
    }
}