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
class Analyzer extends Command
{
    /**
     * Command initialization
     */
    protected function configure()
    {
        $this
            ->setName('app:string:analyzer')
            ->setDescription('This command can count the letters that are repeated.')
            ->setHelp('This command is only for learning purposes.')
            ->addArgument('word', InputArgument::REQUIRED, 'What is your phrase?')
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

        $phrase = $input->getArgument('word');
        $words = count(explode(" ", $phrase));
        $length = strlen($phrase);

        $errors = $validator->validate($words, array(
            new Type('string')
        ));

        if(count($errors) < 3){
            $output->writeln('The input string has more than 3 characters.');
        }


        $output->writeln('The string ´'.$phrase.'´ has:');
        $output->writeln('· '.$words.' words');
        $output->writeln('· '.$length.' characters');

        foreach (count_chars($phrase, 1) as $i => $val) {
            if ($val == 1) {
                $output->writeln('· character ´'.chr($i).'´ '.$val.' time');
            } else {
                $output->writeln('· character ´'.chr($i).'´ '.$val.' times');
            }
        }
    }
}
