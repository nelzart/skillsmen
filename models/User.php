<?php

require_once('dbConnect.php');

function getUsers_ByPseudo($userName)
{
    $db = dbConnect();
    $search = $db->prepare("SELECT * FROM utilisateurs WHERE Uti_Pseudo = :Uti_Pseudo");
    $search->execute(array(
        ':Uti_Pseudo' => $userName
    ));

    $lycos = $search->fetch();   
    return $lycos; 
}


function getUsers_ByMail($userMail)
{
    $db = dbConnect();
    $search = $db->prepare("SELECT * FROM utilisateurs WHERE Uti_Login = :Uti_Login");
    $search->execute(array(
        ':Uti_Login' => $userMail
    ));

    $lycos = $search->fetch();    
    return $lycos;
}

function createUser($userMail, $userName, $mdp, $utiDroit){
    $db = dbConnect();    
    $sth = $db->prepare('INSERT INTO utilisateurs (`Uti_Login`, `Uti_Pseudo`,  `Uti_Mdp`, `Uti_Droit`) VALUES (:Uti_Login, :Uti_Pseudo, :Uti_Mdp, :Uti_Droit)');
    $sth->execute(
        [
            ':Uti_Login' => htmlspecialchars(trim($userMail)),
            ':Uti_Pseudo' => htmlspecialchars(trim($userName)),
            ':Uti_Mdp' => $mdp,
            ':Uti_Droit'=> $utiDroit
        ]
    );
    $lycos = $sth->fetch();
    return $lycos;
}
/* function Likes_ByUserName($userName)
{

}

function Favoris_ByUsername($userName)
{

}

function Commentaires_ByUserName($userName)
{
    
}*/