<h2>Přehled příspěvků</h2>
<ul>
    <?php
        while ($clanky = mysqli_fetch_array($data)) {
            echo "<hr><div><h3>".$clanky['nadpis']."</h3><p style='text-align:left;'>".$clanky['obsah']."</p></div>";
        }
        echo "<hr>"
    ?>
</ul>