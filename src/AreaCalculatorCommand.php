<?php

namespace AppBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

/**
 * Class TestCommand
 */
class AreaCalculatorCommand extends Command
{
    /**
     * Command initialization
     */
    protected function configure()
    {
        $this
            ->setName('app:area:calculator')
            ->setDescription('This command make a calculation between two numbers and says which one is the greatest.')
            ->setHelp('This command is only for learning purposes.')
            ->addArgument('number1', InputArgument::REQUIRED, 'That is the first number')
            ->addArgument('number2', InputArgument::REQUIRED, 'That is the second number')
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
        $base = $input->getArgument('number1');
        $altura = $input->getArgument('number2');

        $rectangle = new Rectangle();

        $rectangle->setBase($base);
        $rectangle->setAltura($altura);

        $output->writeln('L\'area es: '.$rectangle->calcularArea());

    }
}
