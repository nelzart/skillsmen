<?php
    require('../controller/users/createUser.php'); 
?>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <form action=".../controller/users/createUser.php" method="POST">
            <h1>Se connecter</h1>
            
            <label for='Uti_Login'><b>Votre e-mail</b></label>
            <input type="email" name='Uti_Login' placeholder="E-mail" required>
            
            <label for="Uti_Mdp"><b>Choisissez votre mot de passe (8 caracteres minimum)</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="Uti_Mdp" required>
            <a href="#">Mot de passe oublié</a>

            <input type="submit" id='submit' value='se connecter'>
            
        </form>        
    </body>
</html>