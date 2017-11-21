<?php

namespace AppBundle\Command;
//use AppBundle\Command\Hand;

class Judge
{
    public function decideWhoWins(Hand $player1, Hand $player2)
    {
        if($player1->getShape() == $player2->getShape()){
            return 0;

        } elseif ($player1->getShape() == Hand::ROCK && $player2->getShape() == Hand::SCISSOR) {

            return 1;

        } elseif ($player1->getShape() == Hand::PAPER && $player2->getShape() == Hand::ROCK) {

           return 1;

        } elseif ($player1->getShape() == Hand::SCISSOR && $player2->getShape() == Hand::PAPER) {

            return 1;
        } else {

            return 2;
        }
    }
}