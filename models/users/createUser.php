<?php

require '../../models/dbConnect.php';
echo 'coucou';

function getUsers_ByPseudo($userName){
    $db = dbConnect();
    $lycos = $userName;

    $search = $db->prepare("SELECT Uti_Pseudo FROM utilisateurs WHERE Uti_Pseudo = ?");
    $search->execute(array(
        'Uti_Pseudo' => $userName,
    ));
    var_dump($lycos);
    var_dump($userName);
    
    return $lycos;
}

getUsers_ByPseudo('nelzart');

function getUsers_ByMail($userMail){
    $db = dbConnect();
    $lycos = $userMail;

    $search = $db->prepare("SELECT Uti_Login FROM utilisateurs WHERE Uti_Login = ?");
    $search->execute(array(
        'Uti_Login' => $lycos,
    ));
    
    if($lycos === $userMail){
        echo 'désolé, cet e-mail d\'utilisateur existe déjà'; 
    } else{
        return $userMail;
    }
}

function createUser($userMail, $userName, $mdp, $utiDroit)
{
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
}