<?php
/**
 * Created by PhpStorm.
 * User: agusti
 * Date: 26/11/17
 * Time: 16:15
 */

namespace AppBundle\Command;


class Album
{
    /*
    - title : string
    - genere : string
    - year : integer
    - songs : Song[]
    --------------------
    + getTitle()
    + setTitle(title)
    + getGenere()
    + setGenere(genere)
    + getYear()
    + setYear(year)
    + getSongs()
    + setSongs(songs)
    + addSong(song)
    + removeSong(song)
    */

    private $title;
    private $genere;
    private $year;
    private $songs = array(title, genere, year);

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getGenere()
    {
        return $this->genere;
    }

    /**
     * @param $genere
     */
    public function setGenere($genere)
    {
        $this->genere = $genere;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * @return array
     */
    public function getSongs()
    {
        return $this->songs;
    }

    /**
     * @param $songs
     */
    public function setSongs($songs)
    {
        $this->songs = $songs;
    }

    /**
     * @param $song
     */
    public function addSong($song)
    {
        $this->songs = array_push($song);
    }

    /**
     * @param $song
     */
    public function removeSong($song)
    {
        $this->songs = array_diff($song);
    }
}