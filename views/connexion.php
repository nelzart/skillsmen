<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/myGlobalStyle.css">
    <body>
        
        <?php

// On fait appelle au controller de creation d'utilisateur et le manager d'utilisateur

require_once('../components/UsersComponents/connexion.php');
require_once('../components/UsersComponents/creation.php');


// $mdp = $lycos['Uti_Mdp'];

/* $test = 0; 
if ($test == 0){
    createUser($userMail, $userName, $mdp, $utiDroit);
}
else {
    die("Recommencez le formulaire !");
} */
?>


<script>


let closeIt = document.getElementById('closeIt');
let modalBox = document.getElementById('wrapper-login');
let modalBox2 = document.getElementById('wrapper-signup');
closeIt.addEventListener( 'click', (e) => {
    closeIt.style.display = 'none';
    modalBox2.style.display = 'none';
    modalBox.style.display = 'none';
});


</script>
</body>