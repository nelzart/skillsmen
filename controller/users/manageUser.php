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

    $password = $_POST['Uti_Mdp'];
    $test = 0;

    if($lycos1 === FALSE){
        // echo "Ce pseudo n'existe pas";
    }
    else{
        $test = 1;
    }
    if($lycos === FALSE){
        // echo "Ce mail n'existe pas";
    }
    else{
        $test = 1;
    }
    if($lycos == TRUE){
        $lycospassword1 = VerifMdp_ByUserMail($userMail);
        if(password_verify($password, $lycospassword1['Uti_Mdp']) == TRUE){
            $test = 2;
        }
        else{
            echo "Le mot de passe est incorrect";
        }
    }
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
    else{
        echo "Aucun compte correspond au login ou pseudo que vous avez entré !";
    }
    if($test === 2){
        session_start();
        $_SESSION['Uti_Id'] = $lycos['Uti_Id'];
        $_SESSION['Uti_Pseudo'] = $lycos['Uti_Pseudo'];
        $_SESSION['Uti_Droit'] = $lycos['Uti_Droit']; 
        echo "Vous êtes connecté ! Bonjour ". $_SESSION['Uti_Pseudo'];
    }
}