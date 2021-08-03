<?php
    require('../../controller/users/createUser.php'); 
?>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/myGlobalStyle.css">

        <title>Document</title>
    </head>

    <body>
        <form action="<?= addUser()?>" method="POST">
            <h1>Création d'un compte Utilisateur</h1>
            
            <label for='Uti_Login'><b>Votre e-mail</b></label>
            <input type="email" name='Uti_Login' placeholder="E-mail" required >
            
            <label for='Uti_Pseudo'><b>Choix de votre nom d'utilisateur</b></label>
            <input type="text" name='Uti_Pseudo' placeholder="Votre nom d'utilisateur" required>
            
            <label for="Uti_Mdp"><b>Choisissez votre mot de passe (8 caracteres minimum)</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="Uti_Mdp" required value="12345678">
            
            <label for='Uti_Mdp2'><b>Vérification de votre mot de passe</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="Uti_Mdp2" required value="12345678">

            <input type="submit" id='submit' value="s'enregistrer">            
        </form>        
    </body>
</html>
