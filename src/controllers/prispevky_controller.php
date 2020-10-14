<?php

class Prispevky {
    public function novyClanek()
    {
        if (isset($_POST["nadpis"]) && isset($_POST["obsah"])) {
            $nadpis = trim($_POST["nadpis"]);
            $obsah = trim($_POST["obsah"]);
            if($nadpis != "" && $obsah != "")
            {
                $nadpis = $_POST["nadpis"];
                $obsah = $_POST["obsah"];
                $clanek = new Prispevek($nadpis, $obsah);
                $clanek->pridatPrispevek();

                return spustit("prispevky", "vypis");
            } else {
                require_once "views/prispevky/novyClanek.php";
            }
        } else {
            require_once "views/prispevky/novyClanek.php";
        }
    }

    public function vypis() {
        $spojeni = DB::pripojit();
        $dotaz = "SELECT * FROM `4ep_sk2_mvc_clanky`";

        $data = mysqli_query($spojeni, $dotaz);

        require_once "views/prispevky/vypis.php";
    }
}