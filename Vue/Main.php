<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" </meta>
    <title> Connect Us Accueil</title>
    <link rel="stylesheet" type="text/css" href="accueil.css">
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

    <body>
    <section1>
        <div class="cadre">
            <div class="haut"> <p class="affichage">Détecteur de fumée</p></div>
            <div class="centre">
                <p class="imagecentre">
                    <img src="../Capteur_fumée.png" alt="detecteur"/>
                </p>
                <p class="etat">0%</p>
            </div>
            <div class="bas">
                <p class="affichage">Capteur fonctionnel</p>
            </div>
        </div>
    </section1>
    <section2>
        <div class="cadre">
            <div class="haut"> <p class="affichage">Température globale dans la maison</p></div>
            <div class="centre">
                <div class="imagecentre">
                    <img src="../Capteur_température.png" alt="Température"/>
                </div>
                <p class="etat">19 degrés</p>
                <div class="température">
                    <form method="post" action="mode.php">
                        <select name="température" id="température">
                            <option value="15">15°C</option>
                            <option value="16">16°C</option>
                            <option value="17">17°C</option>
                            <option value="18">18°C</option>
                            <option value="19">19°C</option>
                            <option value="20">20°C</option>
                            <option value="21">21°C</option>
                            <option value="22">22°C</option>
                            <option value="23">23°C</option>
                            <option value="24">24°C</option>
                            <option value="25">25°C</option>
                        </select>
                    </form>
                </div>
            </div>
            <div class="bas">
                <p class="affichage">Capteur fonctionnel</p>
            </div>
        </div>
    </section2>
    <section3>
        <div class="cadre">
            <div class="haut"> <p class="affichage">Capteur d'ouverture de volet</p></div>
            <div class="centre">
                <p class="imagecentre">
                    <img src="../Capteur_volet.png" alt="Volet"/>
                </p>
                <p class="etat">Ouvert</p>
                <form method="post" action="mode.php">
                    <select name="Volet" id="Volet">
                        <option value="Ouvrir">Ouvrir</option>
                        <option value="Fermer">Fermer</option>
            </div>
            <div class="bas">
                <p class="affichage">Capteur fonctionnel</p>
            </div>
        </div>
    </section3>
    </body>


</html>