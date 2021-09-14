<?php
    require('../controller/users/createUser.php');
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

            <label for='Uti_Login'>Votre e-mail
            <input type="email" name='Uti_Login' placeholder="E-mail" required value="<?php if(!empty($_POST['Uti_Login']) && empty($testMail1['Uti_Login'])) { echo htmlspecialchars($_POST['Uti_Login'], ENT_QUOTES); } ?>"></label>
            
            <p style="color: red"><?php if(!empty($message1)) { echo htmlentities($message1, ENT_QUOTES); } ?></p>
            </div> 

            <div> 
                <label for='Uti_Pseudo'>Choix de votre nom d'utilisateur
                <input type="text" name='Uti_Pseudo' placeholder="Votre nom d'utilisateur" required value="<?php if(!empty($_POST['Uti_Pseudo']) && empty($testName['Uti_Pseudo'])) { echo htmlspecialchars($_POST['Uti_Pseudo'], ENT_QUOTES); } ?>"></label>

                <p style="color: red"><?php if(!empty($message2)) { echo htmlentities($message2, ENT_QUOTES); } ?></p>
            </div> 

            <div> 
            <label for="Uti_Mdp"><b>Choisissez votre mot de passe (8 caracteres minimum)</b>
            <input type="password" placeholder="Entrer le mot de passe" name="Uti_Mdp" required value="<?php if(!empty($_POST['Uti_Mdp']) && $_POST['Uti_Mdp'] == $_POST[htmlspecialchars('Uti_Mdp2')]) { echo htmlspecialchars($_POST['Uti_Mdp'], ENT_QUOTES); } ?>"></label>

            <p style="color: red"><?php if(!empty($message3)) { echo htmlentities($message3, ENT_QUOTES); } ?></p>
            </div> 

            <div> 
            <label for='Uti_Mdp2'><b>Vérification de votre mot de passe</b>
            <input type="password" placeholder="Entrer le mot de passe" name="Uti_Mdp2" required value="<?php if(!empty($_POST['Uti_Mdp2']) && $_POST['Uti_Mdp'] == $_POST[htmlspecialchars('Uti_Mdp2')]) { echo htmlspecialchars($_POST['Uti_Mdp2'], ENT_QUOTES); } ?>"></label>
            
            <p style="color: red"><?php if(!empty($message3)) { echo htmlentities($message3, ENT_QUOTES); } ?></p>
            </div> 

            <input type="submit" id='submit' value="s'enregistrer">        
            <p style="color: red"><?php if(!empty($message4)) { echo htmlentities($message4, ENT_QUOTES); } ?></p>
           
        </form>        

        <div class="form-wrapper wrap2" id="wrapper-signup">
        <svg id="closeIt" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#000000"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg>
            <div class="content-wrapper" id="content-signin">
                <h2>Création de compte</h2>                
                <form class="form-login">

                    <label for='Uti_Login'><b>Votre adresse e-mail</b></label>
                    <input type="email" name='Uti_Login' class="input-email" placeholder="Votre mail" class="input-email"  
                    value="<?php if(!empty($_POST['Uti_Login']) && empty($testMail1['Uti_Login'])) { echo htmlspecialchars($_POST['Uti_Login'], ENT_QUOTES); } ?>" required>

                    <label for='Uti_Pseudo'><b>Choix de votre nom d'utilisateur</b></label>
                    <input type="text" class="input-username" name='Uti_Pseudo' placeholder="Votre nom d'utilisateur" required value="<?php if(!empty($_POST['Uti_Pseudo']) && empty($testName['Uti_Pseudo'])) { echo htmlspecialchars($_POST['Uti_Pseudo'], ENT_QUOTES); } ?>">
                    <p style="color: red"><?php if(!empty($message2)) { echo htmlentities($message2, ENT_QUOTES); } ?></p>
         
                    <label for="Uti_Mdp"><b>Choisissez votre mot de passe (8 caracteres minimum)</b></label>
                    <input type="password" class="input-password" placeholder="Entrer le mot de passe" name="Uti_Mdp" required value="<?php if(!empty($_POST['Uti_Mdp']) && $_POST['Uti_Mdp'] == $_POST[htmlspecialchars('Uti_Mdp2')]) { echo htmlspecialchars($_POST['Uti_Mdp'], ENT_QUOTES); } ?>">
                    <p style="color: red"><?php if(!empty($message3)) { echo htmlentities($message3, ENT_QUOTES); } ?></p>            

                    <label for='Uti_Mdp2'><b>Vérification de votre mot de passe</b></label>
                    <input type="password" class="input-password" placeholder="Entrer le mot de passe" name="Uti_Mdp2" required value="<?php if(!empty($_POST['Uti_Mdp2']) && $_POST['Uti_Mdp'] == $_POST[htmlspecialchars('Uti_Mdp2')]) { echo htmlspecialchars($_POST['Uti_Mdp2'], ENT_QUOTES); } ?>">
                    <p style="color: red"><?php if(!empty($message3)) { echo htmlentities($message3, ENT_QUOTES); } ?></p>                    

                    <div class="myFormBtn">
                        <a href="#wrapper-login">J'ai déjà un compte</a>
                        <button type="submit" class="btn-login active" id='submit' value="s'enregistrer">Enregistrer</button>
                    </div>
                </form>                
            </div>
        </div>


    </body>
</html>
