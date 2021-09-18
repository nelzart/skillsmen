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
        
        // connectUser();
        $message = "Bonjour " .$userName;
            echo '<div id="message" >'.$message.'</div>
                <script> 
                    let thisMessage = document.getElementById("message")
                    setTimeout(function(){thisMessage.style.display="none"}, 3000);
                </script>';
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
function redirect(){
    $here = header('Location: ' . $_SERVER['HTTP_REFERER']);
    return $here;
}

// function connectUser(){
    
//         //Les variables à déclarer
//         $userName = $_POST['Uti_Login'];
//         $lycos1 = getUser_ByPseudo($userName);
//         $userMail = $_POST['Uti_Login'];
//         $lycos = getUser_ByMail($userMail);
//         $lycosId_ByMail = getId_ByMail($userMail);
//         $lycosId_ByPseudo = getId_ByPseudo($userName);
//         $lycosDroit_ByInformations = getDroit_ByInformations($userName, $userMail);
//         $lycosUserName_ByInformations = getUserName_ByInformations($userName, $userMail);
//         $password = $_POST['Uti_Mdp'];
//         $test = 0;

//         //Nous testons le résultat d'un pseudo existant, sinon on ajoute à la variable test -> 1
//         if($lycos1 === FALSE){
//         }
//         else{
//             $test = 1;
//         }
//         //Nous testons le résultat d'un e-mail existant, sinon on ajoute à la variable test -> 1
//         if($lycos === FALSE){
//         }
//         else{
//             $test = 1;
//         }

//         //Nous testons la vérification du mot de passe via l'adresse e-mail
//         if($lycos == TRUE){
//             $lycospassword1 = VerifMdp_ByUserMail($userMail);
//             if(password_verify($password, $lycospassword1['Uti_Mdp']) == TRUE){
//                 $test = 2;
//             }
//             else{
//                 echo "Le mot de passe est incorrect";
//             }
//         }
//         //Nous testons le vérification du mot de passe via le pseudo
//         else if ($lycos1 == TRUE){
//             echo "Coucou mais avec UserName";
//             $lycospassword = VerifMdp_ByUserName($userName);
//             if(password_verify($password, $lycospassword['Uti_Mdp']) == TRUE){
//                 $test = 2;
//             }
//             else{
//                 echo "Le mot de passe est incorrect";
//             }
//         }
//         //Sinon nous affichons une erreur comme quoi aucun pseudo et adresse e-mail est pas trouvé selon la saisie
//         else{
//             echo "Aucun compte correspond au login ou pseudo que vous avez entré !";
//         }
//         //Si tous nos tests sont bons, alors nous réinitialisons les valeurs de session et nous recréeons une nouvelle session 
//         if($test === 2){
//             //session_start();
//             if(!empty($lycosId_ByMail)){
//                 $_SESSION['Uti_Id'] = $lycosId_ByMail['Uti_Id'];
//                 echo "<script>alert(\"aucuns resultats numero 1 \")</script>" ;

//                 redirect();
//             }
//             else{
//                 $_SESSION['Uti_Id'] = $lycosId_ByPseudo['Uti_Id'];
//                 echo "<script>alert(\"aucuns resultats \")</script>" ;

//                 redirect();
//             }
//             // $_SESSION['Uti_Pseudo'] = $lycosUserName_ByInformations['Uti_Pseudo'];
//             // $_SESSION['Uti_Droit'] = $lycosDroit_ByInformations['Uti_Droit'];

//         }
//     }

////////////////////////
function connectUser($userMail, $mdp){
    $userMail = $_POST['Uti_Login'];
    $mdp = $_POST['Uti_Mdp'];

    $data = getUsers_ByMail($userMail);
    if ($data && password_verify($mdp, $data['Uti_Mdp'])) {
        //une fois la vérification de mot de passe validée
        //on stocke l'id de l'user dans la session
        $_SESSION['Uti_Login'] = $data['Uti_Login'];
        $_SESSION['Uti_Id'] = $data['Uti_Id'];
        $_SESSION['Uti_Pseudo'] = $data['Uti_Pseudo'];
        $_SESSION['Uti_Droit'] = $data['Uti_Droit'];
        var_dump($_SESSION);
        redirect();

    } else {
        echo "pas du tout" .$data['Uti_Id'];
        $message = 'pas ok';
        redirect();
    }
}

function getUserProfil($userId){
    if ($_GET['action'] == 'getMyProfil'){
        $userId = $_SESSION['Uti_Id'];
    } else {
        $userId = "Donne moi User";
    }
    $datas = getUsers_ById($userId);

        require('./views/profil.php');
}