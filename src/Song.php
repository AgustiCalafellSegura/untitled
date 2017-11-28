<?php
/**
 * Created by PhpStorm.
 * User: agusti
 * Date: 26/11/17
 * Time: 16:15
 */

namespace AppBundle\Command;


class Song
{
    /*
    - name : string
    - duration : integer
    - stars : integer
    --------------------
    + getName()
    + setName(name)
    + getDuration()
    + setDuration(duration)
    + getStars()
    + setStars(stars)
    */

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $duration;

    /**
     * @var integer
     */
    private $stars;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Song
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param int $duration
     * @return Song
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @return int
     */
    public function getStars()
    {
        return $this->stars;
    }

    /**
     * @param int $stars
     * @return Song
     */
    public function setStars($stars)
    {
        $this->stars = $stars;
        return $this;
    }


    /**
     * @return string
     */
    public function toString()
    {
        return 'Song: '.$this->getName().' '.$this->getDuration().' '.$this->getStars();
    }
}