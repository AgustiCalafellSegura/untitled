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

    private $name;
    private $duration;
    private $stars;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    /**
     * @return mixed
     */
    public function getStars()
    {
        return $this->stars;
    }

    /**
     * @param $stars
     */
    public function setStars($stars)
    {
        $this->stars = $stars;
    }
}