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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/myGlobalStyle.css">

    <title>Document</title>
</head>

<body>
    <div class="form-wrapper" id="wrapper-login">
        <img src='https://i.imgur.com/iqskGqe.jpg' alt='bg1' />
        <div class="content-wrapper" id="content-signin">
            <h1>Hello!</h1>
            <form class="form-login">
                <input type="text" name="username" placeholder="Username" class="input-username" />
                <input type="password" name="password" placeholder="Password" class="input-password" />
                <button type="submit" class="btn-login">LOGIN</button>
            </form>
            <p>No account? <a href="#wrapper-signup">Sign up</a></p>
        </div>
    </div>
    <div class="form-wrapper" id="wrapper-signup">
        <img src='https://i.imgur.com/iqskGqe.jpg ' alt='bg2' />
        <div class="content-wrapper" id="content-signin">
            <h1>Join us!</h1>
            <form class="form-login">
                <input type="email" name="email" placeholder="Email address" class="input-email" />
                <input type="text" name="username" placeholder="Username" class="input-username" />
                <input type="password" name="password" placeholder="Password" class="input-password" />
                <button type="submit" class="btn-login">SIGN UP</button>
            </form>
            <p>Got account? <a href="#wrapper-login">Sign in</a></p>
        </div>
    </div>
</body>