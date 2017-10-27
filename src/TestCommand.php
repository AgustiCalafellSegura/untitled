<?php

namespace AppBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

/**
 * Class TestCommand
 */
class TestCommand extends Command
{
    /**
     * Command initialization
     */

    protected function configure()
    {
        $this
            ->setName('app:test')
            ->setDescription('Test command.')
            ->setHelp('This command is only for testing purposes.')
	    ->addArgument('number', InputArgument::REQUIRED,'How many times the message will be printed')
        ;

	/*echo "Indica quants cops vols executar el Hola Mon!: ";

	$execucions = trim(fgets(STDIN));

	echo "\n";

	return $execucions;
	//execute($execucions);*/
    }

    /**
     * Command execution
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     *
     * @return int|null|void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
	/**echo "Indica quants cops vols executar el Hola Mon!: ";

	$execucions = trim(fgets(STDIN));

	echo "\n";
	*/
	$times = $input->getArgument('number');

	for ($x = 1; $x <= $times; $x++) {
		if($x % 2 === 0){
			$output->writeln('Hello World '.$x.'!');
		}
	}
      /** for ($x = 1; $x <= 10; $x++) {
	   if($x % 2 === 0){
              $output->writeln('Hello World '.$x.'!');
	   }
       }
	*/
    }
}
