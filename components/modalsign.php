<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> -->
    <link rel="stylesheet" href="../public/myGlobalStyle.css">

   

<!--     
        <main class="js-document">
            <button  type="button" aria-haspopup="dialog" aria-controls="dialog">X </button>
        </main>  -->
    
        <div id="dialog" role="dialog" aria-labelledby="dialog-title" aria-describedby="dialog-desc" aria-modal="true" aria-hidden="true" tabindex="-1" class="c-dialog">
            <div role="document" class="c-dialog__box">
                <button class="closeIt" type="button" aria-label="Fermer" title="Fermer cette fenêtre modale" data-dismiss="dialog">
                    <svg id="closeIt" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#000000"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg>
                </button>
        
                <form id="login" action="" method="post">
                    <h2 id="dialog-title" style="text-align: center;">Se Connecter</h2>
    
                    <label for='Uti_Login' style="margin: 10px 150px;">Votre e-mail ou pseudo <br>
                    <input type="text" name='Uti_Login' placeholder="Votre mail" required class="input-password" value=""></label>
                
                    <label for="Uti_Mdp" style="margin: 10px 150px; ">Votre mot de passe <br>
                    <input type="password" placeholder="Entrer le mot de passe" name="Uti_Mdp" required class="input-password" value=""></label>
                
                    <div class="myFormBtn" style="margin: -10px;">
                        <button id="change2" type="button">Créer un compte</button>                        
                        <button type="submit" class="active">Se connecter</button>
                    </div>
                </form>
    
                <form id="signup" action="" method="post">
                    <h2 id="dialog-title2" style="text-align: center;">Créer un compte</h2>
                    
                    <label for='Uti_Login' style="margin: 10px 150px;">Votre e-mail <br>
                        <input type="email" name='Uti_Login' placeholder="E-mail"value="" required >
                    </label>
    
                    <label for='Uti_Pseudo' style="margin: 10px 150px;">Choix de votre nom d'utilisateur <br>
                        <input type="text" name='Uti_Pseudo' placeholder="Votre nom d'utilisateur" value="" required>
                    </label>
    
                    <label for="Uti_Mdp" style="margin: 10px 150px;">Choisissez votre mot de passe <br>
                        <input type="password" placeholder="Entrer le mot de passe" name="Uti_Mdp" value="" required >
                    </label>
    
                    <label for='Uti_Mdp2' style="margin: 10px 150px;">Vérification de votre mot de passe <br>
                        <input type="password" placeholder="Entrer le mot de passe" name="Uti_Mdp2" required value="">
                    </label>
    
                    <div class="myFormBtn"> 
                        <button id="change1" type="button">J'ai déjà un compte</button>
                        <button type="submit" class="active">Enregistrer</button>
                    </div>
                </form>
    
            </div>
        </div>

    
    <script src="../public/ModalApp.js"></script>
<!-- 
</body>
</html> -->