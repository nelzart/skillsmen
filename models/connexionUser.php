<?php

require_once('dbConnect.php');

function VerifMdp_ByUserMail($userMail)
{
    $db = dbConnect();
    $search = $db->prepare("SELECT Uti_Mdp FROM utilisateurs WHERE Uti_Login = :Uti_Login");
    $search->execute(array(
        ':Uti_Login' => htmlspecialchars(trim($userMail))
    ));

    $lycos = $search->fetch();
    return $lycos;
}

function VerifMdp_ByUserName($userName)
{
    $db = dbConnect();
    $search = $db->prepare("SELECT Uti_Mdp FROM utilisateurs WHERE Uti_Pseudo = :Uti_Login");
    $search->execute(array(
        ':Uti_Login' => htmlspecialchars(trim($userName))
    ));

    $lycos = $search->fetch();    
    return $lycos;
}

function getUser_ByPseudo($userName)
{
    $db = dbConnect();
    $search = $db->prepare("SELECT * FROM utilisateurs WHERE Uti_Pseudo = :Uti_Pseudo");
    $search->execute(array(
        ':Uti_Pseudo' => $userName
    ));

    $lycos = $search->fetch();   
    return $lycos; 
}


function getUser_ByMail($userMail)
{
    $db = dbConnect();
    $search = $db->prepare("SELECT * FROM utilisateurs WHERE Uti_Login = :Uti_Login");
    $search->execute(array(
        ':Uti_Login' => $userMail
    ));

    $lycos = $search->fetch();    
    return $lycos;
}