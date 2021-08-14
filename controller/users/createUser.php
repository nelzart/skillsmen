<?php
require('../../models/users/createUser.php');

if(
    isset($_POST['Uti_Login']) &&
    isset($_POST['Uti_Pseudo']) &&
    isset($_POST['Uti_Mdp']) &&
    isset($_POST['Uti_Mdp2']) &&
    !empty($_POST['Uti_Login']) &&
    !empty($_POST['Uti_Pseudo']) &&
    !empty($_POST['Uti_Mdp']) &&
    !empty($_POST['Uti_Mdp2'])){   
        
        $userName = $_POST['Uti_Pseudo'];
        $userMail = $_POST['Uti_Login'];
        $utiDroit = 1;

        

        $test = 0;
        $message1 ="";   $message2 ="";   $message3 ="";   $message4 ="";
        
        //on test l'existence du mail
        $testMail = getUsers_ByMail($userMail);
        if($testMail !== FALSE){
            $test ++;
            $message1 = "Ce mail éxiste déjà !";

        } 
        
        //on test l'existence du pseudo
        $testName = getUsers_ByPseudo($userName);
        if($testName !== FALSE){
            $test++;
            $message2 = "Ce nom éxiste déjà !";

        }

        // on verifie que les deux mdp sont identiques
        if (($_POST['Uti_Mdp'] != $_POST['Uti_Mdp2']) ){
            $test++;
            $message3 = "Les mots de passe doivent etre identiques";
        }

        //si aucun pb on insere en base
        if($test==0){
            // on hache le mot de passe avant de le stocker en bdd
            $mdp = password_hash($_POST['Uti_Mdp'], PASSWORD_DEFAULT);
            createUser($userMail, $userName, $mdp, $utiDroit);
            $message4 = "Vous etes enregistré";
        }
    }
