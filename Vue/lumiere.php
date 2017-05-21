<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset = "utf-8" />
    <link rel = "stylesheet" href="style2.css"/>
    <title>Capteur de luminosité</title>
</head>

<header>
    <D>
        <section>
            <div class="logo">
                <img class="logo" src="../ConnectUs.png" alt="Logo">
            </div>
            <div class="onglets">
                <nav>
                    <ul class="menu">
                        <li class="enCours"><a href="../Vue/Dashboard.php">Données en temps réel</a></li>
                        <li><a href="Inscription.php">Mes informations</a></li>
                        <li><a href="">Actionneurs</a></li>
                        <li><a href="">Statistiques</a></li>
                    </ul>
                </nav>
            </div>
        </section>
    </D>
</header>

</br></br></br></br>
<div class="luminosite">
<label><u><b>CAPTEUR DE LUMINOSITE</b></u></label></div>


<div method="post" action="traitement.php">
    </br></br></br></br></br></br></br></br></br></br></br></br></br>

    <p>
    <div class="capteur_luminosite">

        <label>Niveau de luminosité </label>:<input type="number" name="valeur" placeholder="Ex : 78%"/>

    </div>
</div>
<form>
    </br></br></br></br></br></br></br></br></br></br></br></br>
    <input type="button" value="Retour" onclick="history.go(-1)">
</form>
<div class="logo">
    <img src="../ConnectUs.png" width="200" alt="Logo" />
</div>
</form>



<body>

</form>
</body>
</html>