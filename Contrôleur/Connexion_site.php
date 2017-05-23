<?php
function edit($attribut,$value){
    global $bdd, $_SESSION;

    $new = htmlspecialchars($value);
    $new= "'" . $new . "'";
    $query = ' UPDATE utilisateur 
			SET ' . $attribut . ' = ' . $new .
        ' WHERE id = ' . $_SESSION['id'];

    $donnees = $bdd->prepare($query);
    return $donnees->execute();
}
function verif_mdp($mot_de_passe) {
    global $bdd, $_SESSION;

    $mot_de_passe = md5($mot_de_passe);
    $requser = $bdd->prepare("SELECT * FROM utilisateur WHERE  id = :id AND mot_de_passe = :mot_de_passe");
    $requser->execute(array('id'=>$_SESSION['id'], 'password'=>$mot_de_passe));
    $userexist = $requser->rowCount();
    if ($userexist == 1){
        $verif = 'ok';
    } else {
        $verif = 'Le mot de passe est incorrecte';
    }
    return $verif ;}
