<?php
/**
 * Created by PhpStorm.
 * User: agusti
 * Date: 26/11/17
 * Time: 16:15
 */

namespace AppBundle\Command;

use Symfony\Component\Console\Output\Output as Output;

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

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $genere;

    /**
     * @var string
     */
    private $year;

    /**
     * @var array
     */
    private $songs;

    public function __construct()
    {
        $this->songs = array();
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Album
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getGenere()
    {
        return $this->genere;
    }

    /**
     * @param string $genere
     * @return Album
     */
    public function setGenere($genere)
    {
        $this->genere = $genere;
        return $this;
    }

    /**
     * @return string
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param string $year
     * @return Album
     */
    public function setYear($year)
    {
        $this->year = $year;
        return $this;
    }

    /**
     * @return array
     */
    public function getSongs()
    {
        return $this->songs;
    }

    /**
     * @param array $songs
     * @return Album
     */
    public function setSongs($songs)
    {
        $this->songs = $songs;
        return $this;
    }

    /**
     * @return mixed
     */


    /**
     * @param $song
     * @return $this
     */
    public function addSong($song)
    {
        $this->songs[] = $song;
        return $this;
    }

    /**
     * @param $song
     */
    public function removeSong($song)
    {
        $this->songs = array_diff($song);
    }

    /**
     * @return string
     */
    public function toString()
    {
        return 'Album: '.$this->getTitle().' '.$this->getGenere().' '.$this->getYear();
    }

    public function printSongs(Output $output)
    {
        if(count($this->songs) != 0){
            /** @var Song $song */
            foreach ($this->songs as $song)
            {
                $output->writeln($song->toString());
            }
        } else {
            $output->writeln('Not songs');
        }
    }
}