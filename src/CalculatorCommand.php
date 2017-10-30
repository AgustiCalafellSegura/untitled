<?php

namespace AppBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

/**
 * Class TestCommand
 */
class CalculatorCommand extends Command
{
    /**
     * Command initialization
     */
    protected function configure()
    {
        $this
            ->setName('app:calculator')
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
        $first = $input->getArgument('number1');
        $second = $input->getArgument('number2');

        if ($first > $second) {
            $output->writeln('The greather number is: '.$first);
        } else {
            $output->writeln('The greather number is: '.$second);
        }

        $output->writeln($first.' + '.$second.' = '.($first + $second));
        $output->writeln($first.' - '.$second.' = '.($first - $second));
        $output->writeln($first.' * '.$second.' = '.($first * $second));
        $output->writeln($first.' / '.$second.' = '.(round(($first / $second), 2)));
        $output->writeln($first.' ^ '.$second.' = '.(pow($first, $second)));
    }
}
