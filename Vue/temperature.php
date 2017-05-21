<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset = "utf-8" />
    <link rel = "stylesheet" href="style2.css"/>
    <title>Plateforme utilisateur ConnectUs</title>
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

</br></br></br></br>
<div class="temp">
    <label><u><b>TEMPERATURE</b></u></label></div>

</div>
</br></br></br>
<div class="temp_int">
    <label>Température interieure</label> : <input type="number" name="valeur" /></div>



<div method="post" action="traitement.php">
    </br></br></br>

    <p>
    <div class="temperatures">

        <form action="site" method="post">

        </form><label>Radiateur 1 </label>:<input type="number" name="valeur1"/>°C<INPUT TYPE="submit"name="valeur1" VALUE="valider">
        </br></br></br></br></br></br>
        </br><label>Radiateur 2 </label>:<input type="number" name="valeur2"/>°C<INPUT TYPE="submit"name="valeur1" VALUE="valider">
        </br></br></br></br></br></br>
        </br><label>Radiateur 3 </label>:<input type="number" name="valeur3"/>°C<INPUT TYPE="submit"name="valeur1" VALUE="valider">
    </div>
</div>
</form>
<form>
    </br></br></br></br>
    <input type="button" value="Retour" onclick="history.go(-1)">
</form>
<div class="logo">
    <img src="../ConnectUs.png" width="200" alt="Logo" />
</div>
</form>





</form>
</body>