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
            ->setDescription('A test command that prints a list of "Hello World" messages.')
            ->setHelp('This command is only for testing purposes.')
            ->addArgument('number1', InputArgument::REQUIRED, 'First number')
	    ->addArgument('number2', InputArgument::REQUIRED, 'Second number') 
        ;
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
        $first = $input->getArgument('number1');
	$second = $input->getArgument('number2');

	$output->writeln('The greather number is: '.$second);

	$output->writeln($first.' + '.$second.' = '.($first+$second));
	$output->writeln($first.' - '.$second.' = '.($first-$second));
	$output->writeln($first.' * '.$second.' = '.($first*$second));
	$output->writeln($first.' / '.$second.' = '.(round(($first/$second),2)));
	$output->writeln($first.' ^ '.$second.' = '.(pow($first, $second)));

    }
}
