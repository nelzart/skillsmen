<?php
    require('../../controller/users/createUser.php'); 
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
        <form action="../../controller/users/createUser.php" method="POST">
            <h1>Modification de votre compte utilisateur</h1>
            
            <label for="avatar">Choisir une image de profil</label>
            <input type="file"
                    id="avatar" name="avatar"
                    accept="image/png, image/jpeg">

            <label for='Uti_Login'><b>Votre e-mail</b></label>
            <input type="email" name='Uti_Login' placeholder="E-mail" required>
            
            <label for='Uti_Pseudo'><b>Choix de votre nom d'utilisateur</b></label>
            <input type="text" name='Uti_Pseudo' placeholder="Votre nom d'utilisateur" required>
            
            <label for="Uti_Mdp"><b>Choisissez votre mot de passe (8 caracteres minimum)</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="Uti_Mdp" required>
            
            <label for='Uti_Mdp2'><b>Vérification de votre mot de passe</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="Uti_Mdp2" required>

            <input type="submit" id='cancel' value="Annuler">
            <input type="submit" id='submit' value="Enregistrer">
            
        </form>        
    </body>
</html>