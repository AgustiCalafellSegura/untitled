<?php

namespace AppBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

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
            ->setName('app:test-command')
            ->setDescription('Test command.')
            ->setHelp('This command is only for testing purposes.')
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
       $output->writeln('Hello World!');
    }
}
