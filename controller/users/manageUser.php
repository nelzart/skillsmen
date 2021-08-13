<?php
require '../../models/User.php';

echo "Coucou";

if (isset($_POST['Uti_Login']) &&
    isset($_POST['Uti_Mdp']) &&
    !empty($_POST['Uti_Login']) &&
    !empty($_POST['Uti_Mdp'])) 
{
    //Les variables à déclarer
    $userName = $_POST['Uti_Login'];
    $lycos1 = getUsers_ByPseudo($userName);
    $userMail = $_POST['Uti_Login'];
    $lycos = getUsers_ByMail($userMail);

    $password = $_POST['Uti_Mdp'];

    if($lycos1 === FALSE){
        echo "Ce pseudo n'existe pas";
    }
    else{
        echo "Ce pseudo existe";
    }
    if($lycos === FALSE){
        echo "Ce mail n'existe pas";
    }
    else{
        echo "Ce mail existe";
    }
    if($lycos == TRUE){
        echo "Coucou";
        $lycospassword1 = VerifMdp_ByUserMail($userMail);
        if(password_verify($password, $lycospassword1['Uti_Mdp']) == TRUE){
            echo "Vous êtes connecté";
        }
        else{
            echo "Le mot de passe est incorrect";
        }
    }
    else if ($lycos1 == TRUE){
        echo "Coucou mais avec UserName";
        $lycospassword = VerifMdp_ByUserName($userName);
        if(password_verify($password, $lycospassword['Uti_Mdp']) == TRUE){
            echo "Vous êtes connecté";
        }
        else{
            echo "Le mot de passe est incorrect";
        }
    }
    else{
        echo "Aucun compte correspond au login ou pseudo que vous avez entré !";
    }
}