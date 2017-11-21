<?php
/**
 * Created by PhpStorm.
 * User: agusti
 * Date: 21/11/17
 * Time: 16:02
 */

namespace AppBundle\Command;


class Hand
{
    const ROCK = "rock";
    const PAPER = "paper";
    const SCISSOR = "scissor";

    /**
     * @var string
     */
    private $shape;

    /**
     * @return string
     */
    public function getShape()
    {
        return $this->shape;
    }

    /**
     * @return $this
     */
    public function makeRock()
    {
        $this->shape = self::ROCK;

        return $this;
    }

    /**
     * @return $this
     */
    public function makePaper()
    {
        $this->shape = self::PAPER;

        return $this;
    }

    /**
     * @return $this
     */
    public function makeScissor()
    {
        $this->shape = self::SCISSOR;

        return $this;
    }
}