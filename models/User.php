<?php

require_once('dbConnect.php');

function getUsers_ByPseudo($userName){
    $db = dbConnect();
    $search = $db->prepare("SELECT * FROM utilisateurs WHERE Uti_Pseudo = :Uti_Pseudo");
    $search->execute(array(
        ':Uti_Pseudo' => $userName
    ));

    $lycos = $search->fetch();   
    return $lycos; 
}


function getUsers_ByMail($userMail){
    $db = dbConnect();
    $search = $db->prepare("SELECT * FROM utilisateurs WHERE Uti_Login = :Uti_Login");

    $search->execute(array(
        ':Uti_Login' => $userMail
    ));

    $lycos = $search->fetch();    
    return $lycos;
}
function getimgUti_ByIdUti($userId){
    $db = dbConnect();   
    $sth = $db -> prepare("SELECT * from images where Uti_Id = :Uti_Id");

    if($sth -> execute (
        [
            ':Uti_Id' => $userId
        ]
    )
    ){
        //echo "categorie ok";
        $ups = $sth->fetchAll();
    
        return $ups; 
    }
    else{
        echo " pb";

    }
}

function getUsers_ById($userId){
    $db = dbConnect();
    $search = $db->prepare("SELECT * FROM utilisateurs  
                            
                            WHERE Uti_Id = :Uti_Id");

    $search->execute(array(
        ':Uti_Id' => $userId
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

function getCcocktail_ByUserId($userId){
    $db = dbConnect();
    $search = $db->prepare("SELECT * FROM cocktail WHERE Uti_Id = :Uti_Id");

    $search->execute(array(
        ':Uti_Id' => $userId
    ));

    $dhl = $search->fetchAll();    
    return $dhl;
}
function getCcocktail_ByUserId2($userId,$eta='publie'){
    $db = dbConnect();
    $search = $db->prepare("SELECT distinct * FROM cocktail co left join images img on co.Coc_Id = img.Coc_Id  
                            WHERE co.Uti_Id = :Uti_Id and co.Coc_Etat= :Coc_Etat");

    $search->execute(array(
        ':Uti_Id' => $userId,
        ':Coc_Etat' => $eta

    ));

    $dhl = $search->fetchAll();    
    return $dhl;
}

function VerifMdp_ByUserMail($userMail){
    $db = dbConnect();
    $search = $db->prepare("SELECT Uti_Mdp FROM utilisateurs WHERE Uti_Login = :Uti_Login");
    $search->execute(array(
        ':Uti_Login' => htmlspecialchars(trim($userMail))
    ));

    $lycos = $search->fetch();
    return $lycos;
}

function VerifMdp_ByUserName($userName){
    $db = dbConnect();
    $search = $db->prepare("SELECT Uti_Mdp FROM utilisateurs WHERE Uti_Pseudo = :Uti_Login");
    $search->execute(array(
        ':Uti_Login' => htmlspecialchars(trim($userName))
    ));

    $lycos = $search->fetch();    
    return $lycos;
}

function getUser_ByPseudo($userName){
    $db = dbConnect();
    $search = $db->prepare("SELECT * FROM utilisateurs WHERE Uti_Pseudo = :Uti_Pseudo");
    $search->execute(array(
        ':Uti_Pseudo' => $userName
    ));

    $lycos = $search->fetch();   
    return $lycos; 
}

function getUser_ByMail($userMail){
    $db = dbConnect();
    $search = $db->prepare("SELECT * FROM utilisateurs WHERE Uti_Login = :Uti_Login");
    $search->execute(array(
        ':Uti_Login' => $userMail
    ));

    $lycos = $search->fetch();    
    return $lycos;
}

function getId_ByMail($userMail){
    $db = dbConnect();
    $search = $db->prepare("SELECT Uti_Id FROM utilisateurs WHERE Uti_Login = :Uti_Login");
    $search->execute(array(
        ':Uti_Login' => $userMail
    ));

    $lycos = $search->fetch();    
    return $lycos;
}

function getId_ByPseudo($userName){
    $db = dbConnect();
    $search = $db->prepare("SELECT Uti_Id FROM utilisateurs WHERE Uti_Pseudo = :Uti_Pseudo");
    $search->execute(array(
        ':Uti_Pseudo' => $userName
    ));

    $lycos = $search->fetch();   
    return $lycos; 
}

function getDroit_ByInformations($userName, $userMail){
    $db = dbConnect();
    $search = $db->prepare("SELECT Uti_Droit FROM utilisateurs WHERE Uti_Pseudo = :Uti_Pseudo OR Uti_Login = :Uti_Login");
    $search->execute(array(
        ':Uti_Pseudo' => $userName,
        ':Uti_Login' => $userMail));
    $lycos = $search->fetch();   
    return $lycos;
}

function getUserName_ByInformations($userName, $userMail){
    $db = dbConnect();
    $search = $db->prepare("SELECT Uti_Pseudo FROM utilisateurs WHERE Uti_Pseudo = :Uti_Pseudo OR Uti_Login = :Uti_Login");
    $search->execute(array(
        ':Uti_Pseudo' => $userName,
        ':Uti_Login' => $userMail));
    $lycos = $search->fetch();   
    return $lycos;
}

function getCommentByIdUti($uti){
    $db = dbConnect();   
    $sth = $db -> prepare("SELECT * from commentaires com inner join utilisateurs uti on com.Uti_Id = uti.Uti_Id where uti.Uti_Id = :Uti_Id order by Com_dateCreation desc");

    if($sth -> execute (
        [
            ':Uti_Id' => $uti
        ]
    )
    ){
        echo "com ok";
        $dhl = $sth->fetchAll();
    
        return $dhl; 
    }
   
    else{
        echo " pb";

    }
}

function getFavorisByUti($uti){
    $db = dbConnect();   
    $sth = $db -> prepare("SELECT * from favoris fav inner join utilisateurs uti on fav.Uti_Id = uti.Uti_Id where uti.Uti_Id = :Uti_Id order by Coc_dateCreation desc");

    if($sth -> execute (
        [
            ':Uti_Id' => $uti
        ]
    )
    ){
        echo "com ok";
        $dhl = $sth->fetchAll();
    
        return $dhl; 
    }
   
    else{
        echo " pb";

    }
}