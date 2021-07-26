<?php

require("./dbConnect.php");
require("../controller/users/createUsers.php");

function getUsers_ByPseudo($pseudo){
    $db = dbConnect();

    $findPseudo = $db->prepare("SELECT * FROM utilisateurs WHERE Uti_Pseudo = ?");

    $findPseudo->execute();
    
    if(isset($findPseudo)){
        echo "Désolé, ce pseudo existe déjà ;)";
        return;
    } 
}

function getUsers_ByMail($mailUser){
    $db = dbConnect();

    $findMail = $db->prepare("SELECT * FROM utilisateurs WHERE Uti_Login = ?");

    $findMail->execute();
    
    if(isset($findMail)){
        echo "Désolé, ce mail existe déjà ;)";
        return;
    } 
}


function createUser()
{
    $db = dbConnect();

    /*$UtiPseudo = 'Uti_Pseudo';
    $UtiLogin = 'Uti_Login';
    $UtiMdp = 'Uti_Mdp';
    $UtiDroit = 'Uti_Droit';*/

    $user = $db->prepare("INSERT INTO utilisateurs `Uti_Pseudo`, `Uti_Login`, `Uti_Mdp`, `Uti_Droit` VALUES (?, ?, ?, ?)");

    $user->execute(array($UtiPseudo, $UtiLogin, $UtiMdp, $UtiDroit));

    return $user;
    
}

