<?php
/**
 * Created by PhpStorm.
 * User: agusti
 * Date: 8/11/17
 * Time: 16:57
 */

namespace AppBundle\Command;


class Rectangle
{
    /**
     * @var integer
     */
    private $base;

    /**
     * @var integer
     */
    private $altura;

    //Metode

    /**
     * @return int
     */
    public function calcularArea(){
        return $this->base * $this->altura;
    }

    /**
     * @return int
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * @param int $base
     */
    public function setBase($base)
    {
        $this->base = $base;
    }

    /**
     * @return int
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * @param int $altura
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }




}