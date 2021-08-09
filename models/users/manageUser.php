<?php
require '../models/dbConnect.php';

function controleUser($user, $password){  
        $dbh = dbConnect();
    
        $sth = $dbh->prepare('SELECT Uti_Pseudo, Uti_Mdp FROM utilisateurs WHERE Uti_Pseudo = :Uti_Pseudo AND Uti_Mdp = :Uti_Mdp');
        $sth->execute(array(
            ':Uti_Pseudo' => $user,
            ':Uti_Mdp' => $password
        ));
        //si on trouve un utilisateur, on stocke son mdp haché dans $data
        $lycos = $sth->fetch();

        return $lycos;
    }