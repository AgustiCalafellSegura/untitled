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

        if ($second != 0) {
            if ($first > $second) {
                $output->writeln('The greatest number is: '.$first);
            } elseif ($first == $second) {
                $output->writeln('Both numbers are equals');
            } else {
                $output->writeln('The greatest number is: '.$second);
            }
            $output->writeln($first.' + '.$second.' = '.($first + $second));
            $output->writeln($first.' - '.$second.' = '.($first - $second));
            $output->writeln($first.' * '.$second.' = '.($first * $second));
            $output->writeln($first.' / '.$second.' = '.(round(($first / $second), 2)));
            $output->writeln($first.' ^ '.$second.' = '.(pow($first, $second)));
        } else {
            $output->writeln('The greatest number is: '.$first);
            $output->writeln($first.' + '.$second.' = '.($first + $second));
            $output->writeln($first.' - '.$second.' = '.($first - $second));
            $output->writeln($first.' * '.$second.' = 0');
            $output->writeln($first.' / '.$second.' = impossible to divide');
            $output->writeln($first.' ^ '.$second.' = 1');
        }
    }
}
