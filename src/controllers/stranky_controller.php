<?php

class Stranky
{
    public function domu()
    {
        require_once "views/stranky/domu.php";
    }

    public function chyba()
    {
        require_once "views/stranky/chyba.php";
    }

    public function profil()
    {
        require_once "views/stranky/profil.php";
    }

    public function clanek() {
        require_once "views/stranky/novyClanek.php";
    }
}
