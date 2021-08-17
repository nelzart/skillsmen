<?php
require('../controller/users/manageUser.php');
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
        <form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="POST">
            <h1>Se connecter</h1>
            
            <label for='Uti_Login'><b>Votre e-mail ou pseudo</b></label>
            <input name='Uti_Login' required>
            
            <label for="Uti_Mdp"><b>Choisissez votre mot de passe (8 caracteres minimum)</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="Uti_Mdp" required value="">
            <a href="#">Mot de passe oublié</a>

            <input type="submit" id='submit' value='se connecter'>
            
        </form>        
    </body>
</html>