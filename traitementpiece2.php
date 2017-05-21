<html>
<head>
    <meta charset="utf-8"/>
</head>
<body>
<?php
if (
    isset($_POST['cap1'])
    AND isset($_POST['cap2'])
    AND isset($_POST['cap3'])
    AND isset($_POST['cap4'])
    AND isset($_POST['cap5'])
    AND ( isset($_POST['num_piece']) AND $_POST['num_piece'] != null AND is_numeric($_POST['num_piece']) == 'true')
) {
    $dsn = 'mysql:host=localhost';
    $user = 'root';
    $password = '';

    try {
        $bdd = new PDO('mysql:host=localhost;dbname=manipulation;charset=utf8', 'root', '');
        $dbh = new PDO($dsn, $user, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    $requete = $bdd->prepare('
            INSERT INTO piece ( capteur1, capteur2, capteur3, capteur4, capteur5, numpiece )
            VALUES ( :capteur1, :capteur2, :capteur3, :capteur4, :capteur5, :numpiece )
            ON DUPLICATE KEY UPDATE
                capteur1 = :capteur1,
                capteur2 = :capteur2,
                capteur3 = :capteur3,
                capteur4 = :capteur4,
                capteur5 = :capteur5;');
    $requete->execute( array(
        'capteur1' => $_POST['cap1'],
        'capteur2' => $_POST['cap2'],
        'capteur3' => $_POST['cap3'],
        'capteur4' => $_POST['cap4'],
        'capteur5' => $_POST['cap5'],
        'numpiece' => $_POST['num_piece'],
    ));
    echo 'Vos informations ont bien été pris en compte !';
    $requete->closeCursor();
} else {
    echo 'Veuillez préciser le numéro de la pièce.';
}
?>
</body>
</html>