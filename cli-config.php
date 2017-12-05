<?php
/**
 * Created by PhpStorm.
 * User: agusti
 * Date: 5/12/17
 * Time: 16:16
 */
require_once "bootstrap.php";

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);