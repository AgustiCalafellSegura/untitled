<?php
/**
 * Created by PhpStorm.
 * User: agusti
 * Date: 26/11/17
 * Time: 16:15
 */

namespace AppBundle\Command;

use Symfony\Component\Console\Output\Output as Output;

/**
 * @Entity
 * @Table(name="album")
 */
class Album
{
    /**
     * @var integer
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private $id;

    /**
     * @var string
     * @Column(type="string")
     */
    private $title;

    /**
     * @var string
     * @Column(type="string")
     */
    private $genere;

    /**
     * @var integer
     * @Column(type="integer")
     */
    private $year;

    /**
     * @var array
     */
    private $songs;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

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
        return 'Album: '.$this->getTitle().' Genere:'.$this->getGenere().' Year:'.$this->getYear().' ID: '.$this->getId();
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