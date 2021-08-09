<?php
require('../models/users/manageUser.php');

function connexionUser($user, $password){

    if (isset($_POST['Uti_Login']) &&
        isset($_POST['Uti_Mdp']) &&
        !empty($_POST['Uti_Login']) &&
        !empty($_POST['Uti_Mdp'])) 
    {
        //on vérifie que le mot de passe répété soit correct
        $user = $_POST['Uti_Login'];
        $password = $_POST['Uti_Mdp'];

        $lycos = controleUser($user, $password);

        if ($lycos && password_verify($password, $lycos['mdp'])) {

            //une fois la vérification de mot de passe validée
            //on stocke l'id de l'user dans la session
            $_SESSION['user_id'] = $lycos['id'];
            var_dump($lycos);
            // header('location: ./index.php');
        } else {
            echo "<p><strong>une erreur de saisie est survenue !</strong></p>";
        }
    }
}