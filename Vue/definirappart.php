<!DOCTYPE html>
<html>
<meta charset="utf-8"/>
<link rel = "stylesheet" href="style.css"/>
<title>Définition appartement</title>
<p>
    Définissez votre appartement :

</p>
<form action="../traitementappart.php" method="post">
    <p>
        <label>La superficie</label> : <input type="text" name="metre" id="metre" value=""   /> <br />
        <label>Le nombre de pièces</label> : <input type="text" name="pieces" id="pieces" value="" /> <br />
        <input type="submit" value="Valider" />
    </p>
</form>
</html>