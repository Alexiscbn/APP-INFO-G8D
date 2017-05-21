<!DOCTYPE html>
<html>
<meta charset="utf-8"/>

<?php



if (
    isset($_POST['metre']) AND $_POST['metre'] != null AND is_numeric($_POST['metre']) == 'true'
    AND ( isset($_POST['pieces']) AND $_POST['pieces'] != null AND is_numeric($_POST['pieces']) == 'true')
)
{
    $dsn = 'mysql:host=localhost';
    $user = 'root';
    $password = '';

    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=manipulation;charset=utf8', 'root', '');
        $dbh = new PDO($dsn, $user, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }

    $req = $bdd->exec('INSERT INTO appartement(superficie,nb_pieces) VALUES('.$_POST['metre'].', '.$_POST['pieces'].')');

    echo 'Votre appartement a bien été ajouté !';
}
else
{
    echo 'Veuillez saisir une valeur pour chaque champ.';
}

?>


</html>

