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
            ->addArgument('shape', InputArgument::REQUIRED, 'What is your hand?')
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
        $shape = $input->getArgument('shape');

        if($shape!=Hand::ROCK && $shape!=Hand::PAPER && $shape!=Hand::SCISSOR){
            $output->writeln('Error! You only can chose rock, paper or scissor');
            return null;
        }

        $factory = new HandFactory();
        $judge = new Judge();

        $humanhand = $factory->buildHumanHand($shape);
        $computerHand = $factory->buildComputerHand();

        $output->writeln('Tens la ma en posició '.$humanhand->getShape());
        $output->writeln('Computer la ma en posició '.$computerHand->getShape());

        $winner = $judge->decideWhoWins($humanhand,$computerHand);

        $output->writeln($winner);
        if($winner == 0){
            $output->writeln('Withdraw');
        } elseif ($winner == 1){
            $output->writeln('The winner is 1 player');
        } else {
            $output->writeln('The winner is 2 player');
        }
    }
}