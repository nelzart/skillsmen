<?php

require '../../models/dbConnect.php';

function getUsers_ByPseudo($pseudo){
    $db = dbConnect();

    $findPseudo = $db->prepare("SELECT * FROM utilisateurs WHERE Uti_Pseudo = ?");

    $findPseudo->execute($pseudo);
    
    if(isset($findPseudo)){
        echo "Désolé, ce pseudo existe déjà ;)";
    } 
}

function getUsers_ByMail($mailUser){
    $db = dbConnect();

    $findMail = $db->prepare("SELECT * FROM utilisateurs WHERE Uti_Login = ?");

    $findMail->execute($mailUser);
    
    if(isset($findMail)){
        echo "Désolé, ce mail existe déjà ;)";
        return;
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