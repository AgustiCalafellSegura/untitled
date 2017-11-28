<?php
/**
 * Created by PhpStorm.
 * User: agusti
 * Date: 26/11/17
 * Time: 16:16
 */

namespace AppBundle\Command;

use Symfony\Component\Console\Output\OutputInterface as Output;

class Artist
{
    /*
    - name : string
    - albums : Album[]
    --------------------
    + getName()
    + setName(name)
    + getAlbums()
    + setAlbums(albums)
    + addAlbum(album)
    + removeAlbum(album)
    */

    /**
     * @var string
     */
    private $name;

    /**
     * @var array
     */
    private $albums;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Artist
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return array
     */
    public function getAlbums()
    {
        return $this->albums;
    }

    /**
     * @param array $albums
     * @return Artist
     */
    public function setAlbums($albums)
    {
        $this->albums = $albums;
        return $this;
    }

    /**
     * @param $name
     * @return mixed
     */


    /**
     * @param $album
     * @return $this
     */
    public function addAlbum($album)
    {
        $this->albums[] = $album;
        return $this;
    }

    /**
     * @param $album
     */
    public function removeAlbum($album){
        $this->albums = array_diff($album);
    }

    /**
     * @return string
     */
    public function toString()
    {
        return 'Artist: '.$this->getName();
    }

    public function printArtist(Output $output)
    {
        /** @var Album $album */
        foreach ($this->albums as $album)
        {
            $output->writeln($album->toString());
            $album->printSongs($output);
        }
    }
}