<?php

namespace AppBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Constraints\Type;

/**
 * Class TestCommand
 */
class Game extends Command
{
    /**
     * Command initialization
     */
    protected function configure()
    {
        $this
            ->setName('app:game:rps')
            ->setDescription('This command can play one time to Rock, Paper & Scissors')
            ->setHelp('This command is only for learning purposes.')
            ->addArgument('word', InputArgument::REQUIRED, 'What is your hand?')
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
        $validator = Validation::createValidator();

        $hand = $input->getArgument('word');

        $errors = $validator->validate($hand, array(
            new Type('string')
        ));

        if (count($errors) > 0) {
            $output->writeln('That was not a word.');
        }

        $a=array("rock","paper","scissors");
        $num = rand(0, 2);
        $paraula_aleatoria = ($a[$num]);

        if (strcmp($hand, $paraula_aleatoria) === 0){
            $output->writeln('Computer have choosen: \''.$paraula_aleatoria.'\'');
            $output->writeln('Withdraw, nobody wins.');

        } else {

            if (($hand === "rock") && ($paraula_aleatoria === "paper")){
                $output->writeln('Computer have choosen: \''. $paraula_aleatoria.'\'');
                $output->writeln('Computer wins!');

            } elseif (($hand === "rock") && ($paraula_aleatoria === "scissors")){
                $output->writeln('Computer have choosen: \''.$paraula_aleatoria.'\'');
                $output->writeln('You win!');

            } elseif (($hand === "paper") && ($paraula_aleatoria === "rock")){
                $output->writeln('Computer have choosen: \''.$paraula_aleatoria.'\'');
                $output->writeln('You win!');

            } elseif (($hand === "paper") && ($paraula_aleatoria === "scissors")){
                $output->writeln('Computer have choosen: \''. $paraula_aleatoria.'\'');
                $output->writeln('Computer wins!');

            } elseif (($hand === "scissors") && ($paraula_aleatoria === "rock")){
                $output->writeln('Computer have choosen: \''.$paraula_aleatoria.'\'');
                $output->writeln('Computer wins!');

            } elseif (($hand === "scissors") && ($paraula_aleatoria === "paper")){
                $output->writeln('Computer have choosen: \''.$paraula_aleatoria.'\'');
                $output->writeln('You win!');
            } else {
                $output->writeln('Error! You can only choose "rock", "paper" or "scissors" to play.');
            }
        }
    }
}