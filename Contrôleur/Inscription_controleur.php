<?php

$bdd = new  PDO('mysql:host=127.0.0.1; dbname=connect_us', 'root', '');

	if(isset($_POST['submit'])){

        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mail = htmlspecialchars($_POST['mail']);
        $mot_de_passe = sha1($_POST['mot de passe']);
        $mot_de_passe2 = sha1($_POST['mot_de_passe2']);
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $date_de_naissance = htmlspecialchars($_POST['dat_de_naissance']);
        $adresse = htmlspecialchars($_POST['adresse']);
        $ville = htmlspecialchars($_POST['ville']);
        $code_postal = htmlspecialchars($_POST['code_postal']);
        $telephone = htmlspecialchars($_POST['telephone']);

        if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mot_de_passe']) AND !empty($_POST['mot_de_passe2']) ) {

            if(filter_var($mail, FILTER_VALIDATE_EMAIL))
            {
                $reqmail = $bdd->prepare("SELECT * FROM utilisateur WHERE mail = ? ");
                $reqmail->execute(array($mail));
                $mailexist = $reqmail->rowCount();

                if($mailexist == 0)
                {

                    if ($mot_de_passe==$mot_de_passe2) {
                        # code...
                        $insertmbr = $bdd->prepare("INSERT INTO utilisateur(pseudo, mail, password) VALUES(?, ?, ?)");
                        $insertmbr->execute (array($pseudo, $mail, $mot_de_passe));
                        $erreur = "Votre compte a bien été crée. ";
                    }
                    else{
                        $erreur = "Vos mots de passe ne correspondent pas ! ";
                    }
                }
                else
                {
                    $erreur = "L'adresse mail est déja utilisée.";
                }
            }
            else{
                $erreur = "Votre adresse mail n'est pas valide !" ;
            }

        }
        else{
            $erreur = "Tous les champs ne sont pas remplis !";
        }

    }
?>


}
