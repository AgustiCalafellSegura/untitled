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

class AlbumManagerRemoveCommand extends Command
{
    /**
     * @var EntityManager
     */
    private $entityManager;

    protected function configure()
    {
        $this
            ->setName('app:album:remove')
            ->setDescription('Remove album')
            ->setHelp('This command is only for learning purposes.')
            ->addArgument('id', InputArgument::REQUIRED, 'ID to delete')
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
        $id = $input->getArgument('id');

        $output->writeln($this->entityManager->getRepository("AppBundle\Command\Album")->find($id));
        $album = $this->entityManager->getRepository("AppBundle\Command\Album")->find($id);

        if ($album == null){
            $output->writeln('With that ID '.$id.' does not exist any album');
        } else{
            $this->entityManager->remove($album);
            $this->entityManager->flush();
        }

    }
}