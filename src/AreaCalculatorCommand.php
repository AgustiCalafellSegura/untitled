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
        $validator = Validation::createValidator();

        $base = $input->getArgument('number1');
        $altura = $input->getArgument('number2');

        $errors = $validator->validate($base, array(
            new Type('integer')
        ));

        if(count($errors) > 0){
            $output->writeln('La base te que ser un nombre enter');
        }

        $errors2 = $validator->validate($altura, array(
            new Type('integer')
        ));

        if(count($errors2) > 0){
            $output->writeln('La altura te que ser un nombre enter');
        }

        if((count($errors) == 0) || (count($errors2) == 0)){
            $rectangle = new Rectangle();

            $rectangle->setBase($base);
            $rectangle->setAltura($altura);

            $output->writeln('L\'area es: '.$rectangle->calcularArea());
        }
    }
}
