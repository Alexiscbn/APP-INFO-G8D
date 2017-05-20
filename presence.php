<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "utf-8" />
    <link rel = "stylesheet" href="style2.css"/>
    <title>Capteurs de présence</title>
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

<div class="presence">
    <label>Capteurs de présence</label></div>
<p>
<div class="capteur_de_presences">
    <label>Détection d'un individu : caméra chambre </label>:<button class="onoff" onclick="onoff(this)"><div>off</div></button>
    </br></br></br></br></br></br>
    </br><label>Détection d'un individu : caméra cuisine</label>:<button class="onoff" onclick="onoff(this)"><div>off</div></button>
    </br></br></br></br></br></br>
    </br><label>Détection d'un individu : caméra pièce principale</label>:<button class="onoff" onclick="onoff(this)"><div>off</div></button>
    </br></br></br></br></br></br>
    </br><label>Détection d'un individu : caméra entrée</label>:<button class="onoff" onclick="onoff(this)"><div>off</div></button>
</div>
</p>
<form>
    </br></br></br></br>
    <input type="button" value="Retour" onclick="history.go(-1)">
</form>
<div class="logo">
    <img src="ConnectUs.png" width="200" alt="Logo" />
</div>
</form>

<body>

</body>
</html>