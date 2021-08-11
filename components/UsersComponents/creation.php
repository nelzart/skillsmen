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


        <form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
            <h1>Création d'un compte Utilisateur</h1>
            <div> 
            <label for='Uti_Login'><b>Votre e-mail</b></label>
            <input type="email" name='Uti_Login' placeholder="E-mail" required value="<?php if(!empty($_POST['Uti_Login']) && $testMail == FALSE) { echo htmlspecialchars($_POST['Uti_Login'], ENT_QUOTES); } ?>">
            <p style="color: red"><?php if(!empty($message1)) { echo htmlspecialchars($message1, ENT_QUOTES); } ?></p>
            </div> 

            <div> 
            <label for='Uti_Pseudo'><b>Choix de votre nom d'utilisateur</b></label>
            <input type="text" name='Uti_Pseudo' placeholder="Votre nom d'utilisateur" required value="<?php if(!empty($_POST['Uti_Pseudo']) && $testName == FALSE) { echo htmlspecialchars($_POST['Uti_Pseudo'], ENT_QUOTES); } ?>">
            <p style="color: red"><?php if(!empty($message2)) { echo htmlspecialchars($message2, ENT_QUOTES); } ?></p>
            </div> 

            <div> 
            <label for="Uti_Mdp"><b>Choisissez votre mot de passe (8 caracteres minimum)</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="Uti_Mdp" required value="<?php if(!empty($_POST['Uti_Mdp']) && ($_POST['Uti_Mdp'] == $_POST['Uti_Mdp2'])) { echo htmlspecialchars($_POST['Uti_Mdp'], ENT_QUOTES); } ?>">
            <p style="color: red"><?php if(!empty($message3)) { echo htmlspecialchars($message3, ENT_QUOTES); } ?></p>
            </div> 

            <div> 
            <label for='Uti_Mdp2'><b>Vérification de votre mot de passe</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="Uti_Mdp2" required value="<?php if(!empty($_POST['Uti_Mdp2']) && ($_POST['Uti_Mdp'] == $_POST['Uti_Mdp2'])) { echo htmlspecialchars($_POST['Uti_Mdp2'], ENT_QUOTES); } ?>">
            <p style="color: red"><?php if(!empty($message3)) { echo htmlspecialchars($message3, ENT_QUOTES); } ?></p>
            </div> 

            <input type="submit" id='submit' value="s'enregistrer">        
            <p style="color: red"><?php if(!empty($message4)) { echo htmlspecialchars($message4, ENT_QUOTES); } ?></p>
           
        </form>        

            

    </body>
</html>
