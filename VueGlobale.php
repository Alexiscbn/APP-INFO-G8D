<!DOCTYPE HTML>
<head>
    <meta charset = "utf-8" />
    <link rel = "stylesheet" href="style.css"/>
    <title>Plateforme utilisateur ConnectUs</title>
</head>

<body>

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

<section>
    <HD>
        <section1>
            <div class="information">
                <div class="alarme">
                    <p>Alarme</p>
                    <label class="switch">
                        <input type="checkbox">
                        <div class="slider round"></div>
                    </label>
                </div>
                <div class="mode">
                    <p>Mode</p>
                    <form method="post" action="mode.php">
                        <select name="mode" id="mode">
                            <option value="nuit">Nuit</option>
                            <option value="jour">Jour</option>
                            <option value="vacances">Vacances</option>
                        </select>
                    </form>
                </div>
                <div class="température">
                    <p>Température</p>
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
        </section1>

        <section2>
            <div class="information">
                <div class="volets">
                    <p>Volets</p>
                    <script type="text/javascript">
                        function Ouverture() {
                            currentvalue = document.getElementById('Ouverture').value;
                            if (currentvalue == "Ouvrir") {
                                document.getElementById("Ouverture").value = "Fermer";
                            }
                            else {
                                document.getElementById("Ouverture").value = "Ouvrir";
                            }
                        }
                    </script>
                    <input type="button" value="Ouvrir" id="Ouverture" onclick="Ouverture();">
                </div>

                <div class="lumiere">
                    <p>Lumières</p>
                    <script type="text/javascript">
                        function Allumage() {
                            currentvalue = document.getElementById('Allumage').value;
                            if (currentvalue == "Allumer") {
                                document.getElementById("Allumage").value = "Eteindre";
                            }
                            else {
                                document.getElementById("Allumage").value = "Allumer";
                            }
                        }
                    </script>
                    <input type="button" value="Allumer" id="Allumage" onclick="Allumage();">
                </div>
            </div>

        </section2>

        <section3>
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
        </section3>


    </HD>

    <BD>
        <section5>
            <div class="information">
                <div class="date_heure">
                    <div class="heure">
                        <?php
                        $heure = date("H:i");
                        Print("$heure");
                        echo '<br>';
                        ?>
                    </div>
                    <div class="date">
                        <?php
                        $date = date("D-d-M Y");
                        Print("$date");
                        ?>
                    </div>
                </div>
            </div>
        </section5>
    </BD>

</section>

</body>

<footer>
    <p>
        <span class="centre">ConnectUs</span>
        <span class="droite">Mentions Légales</span>
        <span class="gauche">ConnectUs est une start-up révolutionnaire permettant à chacun de ses utilisateurs
        d'avoir une vision globale de tous les instants de son habitation connectée grâce aux systèmes DomIsep </span>
    </p>

</footer>

</html>