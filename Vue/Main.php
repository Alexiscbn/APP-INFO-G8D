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

<h2>Vue globale de votre habitation</h2>
    <body>
    <section1>
        <div class="cadre">
            <div class="haut"> <p class="affichage"><u>Détecteur de fumée</u></p></div>
            <div class="centre">
                <p class="imagecentre">
                    <img src="Capteur_fumée.png" alt="detecteur"/>
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
            <div class="haut"> <p class="affichage"><u>Température globale dans la maison</u></p></div>
            <div class="centre">
                <div class="imagecentre">
                    <img src="Capteur_température.png" alt="Température"/>
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
            <div class="haut"> <p class="affichage"><u>Capteur d'ouverture de volet</u></p></div>
            <div class="centre">
                <p class="imagecentre">
                    <img src="Capteur_volet.png" alt="Volet"/>
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

    <section4>
        <div class="meteo">
            <div id="cont_NzUwNTZ8NHwyfDR8MnxGRkZGRkZ8MXw2NjY2NjZ8Y3wx">
                <div id="spa_NzUwNTZ8NHwyfDR8MnxGRkZGRkZ8MXw2NjY2NjZ8Y3wx">
                    <a id="a_NzUwNTZ8NHwyfDR8MnxGRkZGRkZ8MXw2NjY2NjZ8Y3wx"
                       href="http://www.meteocity.com/france/paris_v75056/" target="_blank"
                       style="color:#333;text-decoration:none;">
                        Météo Paris</a> ©
                    <a href="http://www.meteocity.com">meteocity.com</a>
                </div>
                <script type="text/javascript"
                        src="http://widget.meteocity.com/js/NzUwNTZ8NHwyfDR8MnxGRkZGRkZ8MXw2NjY2NjZ8Y3wx">
                </script>
            </div>
        </div>
    </section4>

    <footer>

    </footer>
    </body>


</html>