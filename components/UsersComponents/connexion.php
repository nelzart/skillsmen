<?php
require('././controller/users/manageUser.php');
?>
<link rel="stylesheet" href="../../public/myGlobalStyle.css">


        
    <div class="form-wrapper" id="wrapper-login">
        <svg id="closeIt" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#000000"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg>
            <div class="content-wrapper" id="content-signin">               
                <h2>Se connecter</h2>
                <form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post" class="form-login">
                    
                    <label for='Uti_Login'><b>Votre e-mail ou pseudo</b></label>
                    <input type="text" name='Uti_Login' placeholder="Votre mail" required class="input-password" value="">

                    <label for="Uti_Mdp"><b>Votre mot de passe (8 caracteres minimum)</b></label>
                    <input type="password" placeholder="Entrer le mot de passe" name="Uti_Mdp" required class="input-password" value="">
                    
                    <div class="myFormBtn">
                        <a href="#wrapper-signup">Créer un compte</a>
                        <button type="submit" class="btn-login active">Se connecter</button>
                    </div>
                </form>
                
            </div>
        </div>
    <script>
        let modalBox = document.getElementById('wrapper-login');
        let closeIt = document.getElementById('closeIt');
        let closeIt = document.getElementById('closeIt');
        closeIt.addEventListener( 'click', (e) => {
            closeIt.style.display = 'none';
            modalBox.style.display = 'none';
        });
        closeIt.addEventListener( 'click', (e) => {
            closeIt.style.display = 'none';
            modalBox.style.display = 'none';
        });
    </script>