<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "utf-8" />
    <link rel = "stylesheet" href="style2.css"/>
    <title>Plateforme utilisateur ConnectUs</title>
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
</br></br></br></br>

<div class="presence">
    <label><u><b>CAPTEURS DE PRESENCE</b></u></label></div>
<p>
    </br></br>
<div class="capteur_de_presences">
    <label>Detection d un individu: camera chambre </label>:<button class="onoff" onclick="onoff(this)"><div>off</div></button>
    </br></br></br></br></br></br>
    </br><label>Detection d un individu: camera cuisine</label>:<button class="onoff" onclick="onoff(this)"><div>off</div></button>
    </br></br></br></br></br></br>
    </br><label>Detection d un individu: camera piece principale</label>:<button class="onoff" onclick="onoff(this)"><div>off</div></button>
    </br></br></br></br></br></br>
    </br><label>Detection d un individu: camera entree</label>:<button class="onoff" onclick="onoff(this)"><div>off</div></button>
</div>
</p>
<form>
    </br></br>
    <input type="button" value="Retour" onclick="history.go(-1)">
</form>
<div class="logo">
    <img src="ConnectUs.png" width="200" alt="Logo" />
</div>
</form>

<body>

</body>
</html>