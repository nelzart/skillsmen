<?php

$db = require("./dbConnect.php");

function createUser()
{
    $db = dbConnect();

    $UtiPseudo = 'Uti_Pseudo';
    $UtiLogin = 'Uti_Login';
    $UtiMdp = 'Uti_Mdp';
    $UtiDroit = 'Uti_Droit';

    $user = $db->prepare("INSERT INTO utilisateurs `Uti_Pseudo`, `Uti_Login`, `Uti_Mdp`, `Uti_Droit` VALUES (?, ?, ?, ?)");

    $lignes_a_affecter = $user->execute(array($UtiPseudo, $UtiLogin, $UtiMdp, $UtiDroit));

    return $lignes_a_affecter;
    
}

