<?php

require('../models/dbConnect.php');
require('../models/users/createUser.php');

function addUser(){
    // Vérification du formulaire bien remplie
    if (isset($pseudo) 
    && isset($mailUser) 
    && isset($mdp) 
    && isset($verif_mdp)){
        
        $mailUser = $_POST['Uti_Login'];
        $pseudo = $_POST['Uti_Pseudo'];
        $mdp = $_POST['Uti_Mdp'];
        $verif_mdp = $_POST['Uti_Verif_Mdp'];
        htmlspecialchars($mailUser, $pseudo,$mdp, $verif_mdp);
        
        if (strlen($mdp) >= 8){
            if($mdp !== $verif_mdp){
                echo 'les mots de passes doivent être identiques';
                return;
            }                        
        }else{ 
            echo 'le mots de passe doit faire minimum 8 caractères';
            return;
        }
        // Pseudo et login déjà pris ou non ?
        getUsers_ByPseudo($pseudo);
        getUsers_ByMail($mailUser);
    }
}