<?php

require('../models/dbConnect.php');
require('../models/users/createUser.php');

function addUser(){
    $login = $_POST['Uti_Login'];
    $pseudo = $_POST['Uti_Pseudo'];
    $mdp = $_POST['Uti_Mdp'];
    $verif_mdp = $_POST['Uti_Verif_Mdp'];
    // Vérification du formulaire bien remplie
    if (isset($pseudo) && isset($login) && isset($mdp) && isset($verif_mdp)){
        // Pseudo et login déjà pris ou non ?
        getUser_ByPseudo($pseudo);
        getUser_ByLogin($login);

            // Mot de passe correcte
                // Mot de passe correspondant à la confirmation du mot de passe
    else{
        echo "Erreur ! Tous les champs doivent être remplis"
    }
}