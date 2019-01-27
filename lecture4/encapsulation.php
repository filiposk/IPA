<?php

include_once "function.php";

class Game
{
    //public, private and protected parameters and methods

    const PLAYSTATION = "ps4";

    private $name;

    //public functions get, set

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}

$p = new Game();

$p->setName("liga legendi");

ipalog($p);

echo Game::PLAYSTATION;