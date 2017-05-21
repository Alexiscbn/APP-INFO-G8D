<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "utf-8" />
    <link rel = "stylesheet" href="style2.css"/>
    <title>Plateforme utilisateur ConnectUs</title>
</head>
<<header>
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
<div class="volet">
    <label><u><b>VOLETS</b></u></label></div>
</br></br></br>
<p>
<div class="volet1">
    <label>volet electrique1 </label>:
<p class="etat">Ouvert</p>
<form method="post" action="mode.php">
    <select name="Volet" id="Volet">
        <option value="Ouvrir">Ouvrir</option>
        <option value="Fermer">Fermer</option></select></p>
 </div>   </br></br></br></br></br></br></br></br></br></br></br>
    <div class="volet2">
    <label>volet electrique2 </label>
        <p class="etat">Ouvert</p>
        <form method="post" action="mode.php">
            <select name="Volet" id="Volet">
                <option value="Ouvrir">Ouvrir</option>
                <option value="Fermer">Fermer</option></select></p>
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