<?php
    $nadpis = (isset($_POST["nadpis"])) ? $_POST["nadpis"] : "";
    $obsah = (isset($_POST["obsah"])) ? $_POST["obsah"] : "";
?>

<h2>Vytvořit článek</h2>
<form action="?" method="post">
    <input type="text" name="nadpis" placeholder="Nadpis..." minlength="5" maxlength="16" value="<?php echo $nadpis; ?>" /><br>
    <textarea placeholder="Obsah..." name="obsah" minlength="5" maxlength="255" value="<?php echo $obsah; ?>" ></textarea><br>
    <input type="submit" value='Přidat'>
</form>
