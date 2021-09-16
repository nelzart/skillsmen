<?php
require('./models/User.php');

function addUser() {
    //Les variables à déclarer
    $userName = $_POST['Uti_Pseudo'];
    $userMail = $_POST['Uti_Login'];
    $utiDroit = 1;
        $test = 0;
    $message1 ="";   $message2 ="";   $message3 ="";   $message4 ="";
    
    //Nous testons l'existence du mail
    $testMail1 = getUsers_ByMail($userMail);
    if($testMail1 !== FALSE){
        $test ++;
        $message1 = "Ce mail existe déjà !";
    } 
    
    //Nous testons l'existence du pseudo
    $testName = getUsers_ByPseudo($userName);
    if($testName !== FALSE){
        $test++;
        $message2 = "Ce nom existe déjà !";

    }

    //Nous vérifions que les deux mots de passe sont identiques
    $testPassword = $_POST['Uti_Mdp2'];
    $password = $_POST['Uti_Mdp'];
    if (($password != $testPassword) ){
        $test++;
        $message3 = "Les mots de passe doivent être identiques";
    }

    //Si aucune erreur, nous insèrons en base
    if($test==0){
        //Nous hacheons le mot de passe avant de le stocker en bdd
        $mdp = password_hash($_POST['Uti_Mdp'], PASSWORD_DEFAULT);
        createUser($userMail, $userName, $mdp, $utiDroit);
        $message4 = "Vous êtes enregistré";
        
        connectUser();
    
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}


function connectUser(){
    
        //Les variables à déclarer
        $userName = $_POST['Uti_Login'];
        $lycos1 = getUser_ByPseudo($userName);
        $userMail = $_POST['Uti_Login'];
        $lycos = getUser_ByMail($userMail);
        $lycosId_ByMail = getId_ByMail($userMail);
        $lycosId_ByPseudo = getId_ByPseudo($userName);
        $lycosDroit_ByInformations = getDroit_ByInformations($userName, $userMail);
        $lycosUserName_ByInformations = getUserName_ByInformations($userName, $userMail);
        $password = $_POST['Uti_Mdp'];
        $test = 0;
/*
        //Nous testons le résultat d'un pseudo existant, sinon on ajoute à la variable test -> 1
        if($lycos1 === FALSE){
        }
        else{
            $test = 1;
        }
        //Nous testons le résultat d'un e-mail existant, sinon on ajoute à la variable test -> 1
        if($lycos === FALSE){
        }
        else{
            $test = 1;
        }
        //Nous testons la vérification du mot de passe via l'adresse e-mail
        if($lycos == TRUE){
            $lycospassword1 = VerifMdp_ByUserMail($userMail);
            if(password_verify($password, $lycospassword1['Uti_Mdp']) == TRUE){
                $test = 2;
            }
            else{
                echo "Le mot de passe est incorrect";
            }
        }
        //Nous testons le vérification du mot de passe via le pseudo
        else if ($lycos1 == TRUE){
            echo "Coucou mais avec UserName";
            $lycospassword = VerifMdp_ByUserName($userName);
            if(password_verify($password, $lycospassword['Uti_Mdp']) == TRUE){
                $test = 2;
            }
            else{
                echo "Le mot de passe est incorrect";
            }
        }
        //Sinon nous affichons une erreur comme quoi aucun pseudo et adresse e-mail est pas trouvé selon la saisie
        else{
            echo "Aucun compte correspond au login ou pseudo que vous avez entré !";
        }
        //Si tous nos tests sont bons, alors nous réinitialisons les valeurs de session et nous recréeons une nouvelle session 
        if($test === 2){
            //session_start();
            if(!empty($lycosId_ByMail)){
                $_SESSION['Uti_Id'] = $lycosId_ByMail['Uti_Id'];
            }
            else{
                $_SESSION['Uti_Id'] = $lycosId_ByPseudo['Uti_Id'];
            }
            $_SESSION['Uti_Pseudo'] = $lycosUserName_ByInformations['Uti_Pseudo'];
            $_SESSION['Uti_Droit'] = $lycosDroit_ByInformations['Uti_Droit'];
            echo "Vous êtes connecté ! Bonjour ". $_SESSION['Uti_Pseudo'];
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }*/



////////////////////////

    if (
        isset($_POST['Uti_Login']) &&
        isset($_POST['Uti_Mdp']) &&
        !empty($_POST['Uti_Login']) &&
        !empty($_POST['Uti_Mdp'])
    ) {
        //on vérifie que le mot de passe répété soit correct
        $user = $_POST['Uti_Login'];
        $mdp = $_POST['Uti_Mdp'];
        
        //$dbh = dbConnect();
        $user = getUsers_ByMail($userMail);
        $mdp = $user[4];
        var_dump($user);
        //on tente de récupérer l'utilisateur assigné à cet username
    //  $sth = $dbh->prepare('SELECT id, mdp FROM admin WHERE user = :user');
    // $sth->execute(
    //      [
    //          ':user' => $user
    //      ]
    //   );
        //si on trouve un utilisateur, on stocke son mdp haché dans $data
    // $data = $sth->fetch();
    
    
    /* if ($data && password_verify($mdp, $data['mdp'])) {
            //une fois la vérification de mot de passe validée
            //on stocke l'id de l'user dans la session
            $_SESSION['user_id'] = $data['id'];
            header('location: ./admin.php');
        } else {
            echo "
                    
                            <p<strong>une erreur de saisie est survenue !</strong></p>
                        ";
        }*/
    }
}