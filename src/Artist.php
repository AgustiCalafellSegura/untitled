<?php
/**
 * Created by PhpStorm.
 * User: agusti
 * Date: 26/11/17
 * Time: 16:16
 */

namespace AppBundle\Command;


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

    private $name;
    private $albums = array(name);

    /**
     * @param $name
     * @return mixed
     */
    public function getName($name)
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
    public function getAlbums()
    {
        return $this->$albums;
    }

    /**
     * @param $albums
     */
    public function setAlbums($albums)
    {
        $this->albums = $albums;
    }

    /**
     * @param $album
     */
    public function addAlbum($album)
    {
        $this->albums = array_push($album);
    }

    /**
     * @param $album
     */
    public function removeAlbum($album){
        $this->albums = array_diff($album);
    }
}