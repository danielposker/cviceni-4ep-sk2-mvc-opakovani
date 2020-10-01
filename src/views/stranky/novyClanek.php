<?php
    $nadpis = (isset($_POST["nadpis"])) ? $_POST["nadpis"] : "";
    $obsah = (isset($_POST["obsah"])) ? $_POST["obsah"] : "";
?>

<h2>Vytvořit článek</h2>
<form action="?" method="post">
    <input type="text" name="nadpis" placeholder="Nadpis..." minlength="5"><br>
    <textarea placeholder="Obsah..." name="obsah" minlength="5"></textarea><br>
    <input type="submit" value='Přidat'>
</form>