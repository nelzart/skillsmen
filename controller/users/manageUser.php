<?php
require('../models/connexionUser.php');


if (isset($_POST['Uti_Login']) &&
    isset($_POST['Uti_Mdp']) &&
    !empty($_POST['Uti_Login']) &&
    !empty($_POST['Uti_Mdp'])) 
{
    //Les variables à déclarer
    $userName = $_POST['Uti_Login'];
    $lycos1 = getUser_ByPseudo($userName);
    $userMail = $_POST['Uti_Login'];
    $lycos = getUser_ByMail($userMail);
    $lycosId_ByMail = getId_ByMail($userMail);
    $lycosId_ByPseudo = getId_ByPseudo($userName);
    $lycosDroit_ByInformations = getDroit_ByInformations($userName, $userMail);
    $lycosUserName_ByInformations = getUserName_ByInformations($userName, $userMail);
    $password = $_POST['Uti_Mdp'];
    $test = 0;

    //Nous testons le résultat d'un pseudo existant, sinon on ajoute à la variable test -> 1
    if($lycos1 === FALSE){
    }
    else{
        $test = 1;
    }
    //Nous testons le résultat d'un e-mail existant, sinon on ajoute à la variable test -> 1
    if($lycos === FALSE){
    }
    else{
        $test = 1;
    }
    //Nous testons la vérification du mot de passe via l'adresse e-mail
    if($lycos == TRUE){
        $lycospassword1 = VerifMdp_ByUserMail($userMail);
        if(password_verify($password, $lycospassword1['Uti_Mdp']) == TRUE){
            $test = 2;
        }
        else{
            echo "Le mot de passe est incorrect";
        }
    }
    //Nous testons le vérification du mot de passe via le pseudo
    else if ($lycos1 == TRUE){
        echo "Coucou mais avec UserName";
        $lycospassword = VerifMdp_ByUserName($userName);
        if(password_verify($password, $lycospassword['Uti_Mdp']) == TRUE){
            $test = 2;
        }
        else{
            echo "Le mot de passe est incorrect";
        }
    }
    //Sinon nous affichons une erreur comme quoi aucun pseudo et adresse e-mail est trouvé selon la saisie
    else{
        echo "Aucun compte correspond au login ou pseudo que vous avez entré !";
    }
    //Si tous nos tests sont bons, alors nous réinitialisons les valeurs de session et nous recréeons une nouvelle session 
    if($test === 2){
        session_start();
        if(!empty($lycosId_ByMail)){
            $_SESSION['Uti_Id'] = $lycosId_ByMail['Uti_Id'];
        }
        else{
            $_SESSION['Uti_Id'] = $lycosId_ByPseudo['Uti_Id'];
        }
        $_SESSION['Uti_Pseudo'] = $lycosUserName_ByInformations['Uti_Pseudo'];
        $_SESSION['Uti_Droit'] = $lycosDroit_ByInformations['Uti_Droit'];
        echo "Vous êtes connecté ! Bonjour ". $_SESSION['Uti_Pseudo'];
    }
}