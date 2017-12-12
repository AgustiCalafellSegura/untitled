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

class ArtistManagerShowCommand extends Command
{
    /**
     * @var EntityManager
     */
    private $entityManager;

    protected function configure()
    {
        $this
            ->setName('app:artist:show')
            ->setDescription('List all artist')
            ->setHelp('This command is only for learning purposes.')
            ->addArgument('id', InputArgument::REQUIRED, 'Search id')
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

        $artist = $this->entityManager->getRepository('Artist')->find($input->getArgument('id'));

        if($artist != null){
            $output->writeln("L'artiste amb el id ".$artist->getId()." és ".$artist->getName());
        } else {
            $output->writeln("No s'ha trobat");
        }
    }
}