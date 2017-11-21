<?php
/**
 * Created by PhpStorm.
 * User: agusti
 * Date: 21/11/17
 * Time: 17:42
 */

namespace AppBundle\Command;


class HandFactory
{

    /**
     * @return Hand
     */
    public function buildComputerHand()
    {
        $handnumber = rand(1,3);
        $computerHand = new Hand();

        if($handnumber == 1){
            $computerHand->makeRock();
        } elseif ($handnumber == 2){
            $computerHand->makePaper();
        } else {
            $computerHand->makeScissor();
        }

        return $computerHand;
    }

    /**
     * @param $shape
     * @return Hand
     */
    public function buildHumanHand($shape)
    {
        $hand = new Hand();

        if($shape == Hand::ROCK){
            $hand->makeRock();
        } elseif ($shape == Hand::PAPER){
            $hand->makePaper();
        } else {
            $hand->makeScissor();
        }

        return $hand;
    }
}