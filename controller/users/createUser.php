<?php

echo '<br> couco zeaf u';

require('../../models/users/createUser.php');

echo '<br> coucou';

function addUser(){
    echo 'coucou conrad';
    if (
        isset($_POST['Uti_Login']) &&
        isset($_POST['Uti_Pseudo']) &&
        isset($_POST['Uti_Mdp']) &&
        isset($_POST['Uti_Mdp2']) &&
        !empty($_POST['Uti_Login']) &&
        !empty($_POST['Uti_Pseudo']) &&
        !empty($_POST['Uti_Mdp']) &&
        !empty($_POST['Uti_Mdp2'])   
    ){
        $userName = $_POST['Uti_Pseudo'];
        // $userMail = $_POST['Uti_Login'];
        
        $testName = getUsers_ByPseudo($userName);
        var_dump($testName);
        var_dump($userName);
        // echo 'ok';
        
        // // on vérifie que le mot de passe répété soit correct
        // if ($_POST['Uti_Mdp'] == $_POST['Uti_Mdp2'])
        // {
        //     var_dump($testName);
        //     $utiDroit = 1;
        //     // on hache le mot de passe avant de le stocker en bdd
        //     $mdp = password_hash($_POST['Uti_Mdp'], PASSWORD_DEFAULT);
            
        //     // Ajouter a la DB
        //     createUser($userMail, $userName, $mdp, $utiDroit);

        // }
    }
}