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
            ->addArgument('number', InputArgument::REQUIRED, 'How many times the message will be printed')
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
        $times = $input->getArgument('number');

        for ($x = 1; $x <= $times; $x++) {
            if ($x % 2 === 0) {
                $output->writeln('Hello World '.$x.'!');
            }
        }
    }
}
