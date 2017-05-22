<!DOCTYPE HTML>
<head>
    <meta charset = "utf-8" />
    <link rel = "stylesheet" href="style.css"/>
    <title>Plateforme utilisateur ConnectUs</title>
</head>

<body>
<h1><u>Parametrez votre habitation</u></h1>

</p><div class="Paramètres">
    Afin de pouvoir acceder à toutes les fonctionnatlités que ConnectUs met à votre disposition, nous avons besoin que vous définissiez clairement l'organisation de votre habitation :
<form action="traitementappart.php" method="post">
    <p>
        <br><label>La superficie de votre appartement est de </label> : <input type="text" name="metre" id="metre" value=""   /> mètres carrés<br/>
        <br><label>Votre appartement est contitué de </label> : <input type="text" name="pieces" id="pieces" value="" /> pièces <br />
        <br> <input type="submit" value="Valider" />
    </p>
</form>
</div>
</br></br></br>

    <div class="MiseEnPlaceCapteurs">
        <p><h5>Ajoutez vos capteurs :</h5></p>
    <form action="traitementpiece.php" method="post">
        <p>

            <label>Veuillez précisez le type de pièce</label> : <input type="text" name="type_piece" id="num_piece" value="" /> <br />

            <br><label for="cap1">Quel capteur voulez-vous ajouter ?</label><br />

            <br><select name="cap1" id="cap1">
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
            <br><a href="Piece.php"><input type="submit" value="Valider" /></a>
        </p>
    </form>
    </div>
    </html>


<div class="logo">
    <img src="ConnectUs.png" width="200" alt="Logo" />
</div>
</body>

