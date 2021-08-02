<?php
require('../../models/users/createUser.php');

function addUser(){
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
        $userMail = $_POST['Uti_Login'];
        $utiDroit = 1;

        $testName = getUsers_ByPseudo($userName);
        $testMail = getUsers_ByMail($userMail);
        $test = 0;

        if($testMail !== FALSE){
            $test += 1;
            echo 'Ce mail éxiste déjà <br>';
        } 
        
        if($testName !== FALSE){
            $test += 1;
            echo 'Ce pseudo éxiste déjà <br>';
        } 

        // on vérifie que le mot de passe répété soit correct
        if (($_POST['Uti_Mdp'] == $_POST['Uti_Mdp2']) && ($test == 0) )
        {
            // on hache le mot de passe avant de le stocker en bdd
            $mdp = password_hash($_POST['Uti_Mdp'], PASSWORD_DEFAULT);
            
            // Ajouter a la DB
            createUser($userMail, $userName, $mdp, $utiDroit);

            // header('skillsmen/components/UsersComponents/creation.php');
        }
    }
}