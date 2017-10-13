<?php

namespace AppBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestCommand extends Command
{
    protected function configure()
    {
        $this
            // the name of the command (the part after "app/console")
            ->setName('app:test-command')

            // the short description shown while running "php app/console list"
            ->setDescription('Test command.')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command is only for testing pourposes.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
       $output->writeln('Hello World!');
    }
}
