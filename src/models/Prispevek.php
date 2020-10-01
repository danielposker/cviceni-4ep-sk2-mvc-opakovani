<?php

class Prispevek {
    public function __construct($nadpis, $obsah)
    {
        $this->nadpis = $nadpis;
        $this->obsah = $obsah;
    }

    public function pridatPrispevek()
    {
        $spojeni = DB::pripojit();
        $dotaz = "INSERT INTO 4ep_sk2_mvc_clanky (nadpis, obsah) VALUES ('$this->nadpis', '$this->obsah')";

        mysqli_query($spojeni, $dotaz);
    }
}