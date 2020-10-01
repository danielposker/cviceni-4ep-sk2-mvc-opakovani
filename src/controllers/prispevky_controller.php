<?php

class Prispevky {
    private function mamDostatekDatKClanku()
    {
        if(!isset($_POST["nadpis"]))
            return false;
        if(!isset($_POST["obsah"]))
            return false;
        
        return true;
    }

    public function novyClanek()
    {
        if($this->mamDostatekDatKClanku())
        {
            $nadpis = trim($_POST["nadpis"]);
            $obsah = trim($_POST["obsah"]);
            $clanek = new Prispevek($nadpis, $obsah)
            $clanek->pridatPrispevek();
        }
        else
        {
            require_once "views/stranky/novyClanek.php";
        }
    }
}