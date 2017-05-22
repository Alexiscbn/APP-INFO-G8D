<!DOCTYPE html>
<html>
<meta charset="utf-8"/>
<p>
    Ajoutez/modifiez vos capteurs :

</p>
<form action="../traitementpiece2.php" method="post">
    <p>

        <label>Veuillez précisez le numéro de la pièce</label> : <input type="text" name="num_piece" id="num_piece" /> <br />

        <label for="cap1">Quel capteur voulez-vous ajouter ?</label><br />
        <select name="cap1" id="cap1">
            <option value="temperature">Temperature</option>
            <option value="lumiere">Lumiere</option>
            <option value="presence">Presence</option>
            <option value="fumee">Fumee</option>
            <option value="porte">Porte</option>
        </select>
        <br />
        <select name="cap2" id="cap2">
            <option value="temperature">Temperature</option>
            <option value="lumiere">Lumiere</option>
            <option value="presence">Presence</option>
            <option value="fumee">Fumee</option>
            <option value="porte">Porte</option>
        </select>
        <br />
        <select name="cap3" id="cap3">
            <option value="temperature">Temperature</option>
            <option value="lumiere">Lumiere</option>
            <option value="presence">Presence</option>
            <option value="fumee">Fumee</option>
            <option value="porte">Porte</option>
        </select>
        <br />
        <select name="cap4" id="cap4">
            <option value="temperature">Temperature</option>
            <option value="lumiere">Lumiere</option>
            <option value="presence">Presence</option>
            <option value="fumee">Fumee</option>
            <option value="porte">Porte</option>
        </select>
        <br />
        <select name="cap5" id="cap5">
            <option value="temperature">Temperature</option>
            <option value="lumiere">Lumiere</option>
            <option value="presence">Presence</option>
            <option value="fumee">Fumee</option>
            <option value="porte">Porte</option>
        </select>
        <br />
        <input type="submit" value="Valider" />
    </p>
</form>
</html>