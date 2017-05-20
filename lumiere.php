<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset = "utf-8" />
    <link rel = "stylesheet" href="style2.css"/>
    <title>Capteur de luminosite</title>
</head>

<header>
    <D>
        <section>
            <div class="logo">
                <img class="logo" src="ConnectUs.png" alt="Logo">
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

<body>
<div class="devices">
    <label>Devices</label> </div>
<div class="stat">
    <label>Statistiques</label>
</div>
<div class="dt">
    <label>Donnee en temps reel</label>
</div>
<div class="donnee_temps_reel">
    </br></br>
    <p><label>Donnee en temps reel</label> </p>
</div>


<div method="post" action="traitement.php">
    </br></br></br></br></br></br></br></br></br></br></br></br></br>

    <p>
    <div class="capteur_luminosite">

        <label>luminosite:</label>:<input type="number" name="valeur"/>

    </div>
</div>
<form>
    </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
    <input type="button" value="Retour" onclick="history.go(-1)">
</form>
<div class="logo">
    <img src="ConnectUs.png" width="200" alt="Logo" />
</div>
</form>





</form>
</body>
