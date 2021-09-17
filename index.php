
<?php
//var_dump($_POST);
// var_dump($_GET);
//var_dump($search);
// var_dump($_SESSION);

//require('controller/users/createUser.php');
//require('controller/users/manageUser.php');
// echo "index";
require'controller/cocktailController.php';
require'controller/manageUser.php';

try { // On essaie de faire des choses
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'connexion') {
            if (isset($_POST['Uti_Login']) && !empty($_POST['Uti_Login']) 
            && isset($_POST['Uti_Mdp']) && !empty($_POST['Uti_Mdp'])) {
                connectUser();
                // echo '<div id"message"> Coucou </div>';
                var_dump($_SESSION['Uti_Pseudo']);
                
            }
            else {
                // Erreur ! On arrête tout, on envoie une exception, donc au saute directement au catch
                throw new Exception('Aucun identifiant envoyé Sale CON');
            }
        }
        elseif($_GET['action'] == 'createuser'){
            if(isset($_POST['Uti_Login']) && !empty($_POST['Uti_Login']) &&
                isset($_POST['Uti_Pseudo']) && !empty($_POST['Uti_Pseudo']) &&
                isset($_POST['Uti_Mdp']) && !empty($_POST['Uti_Mdp']) &&
                isset($_POST['Uti_Mdp2']) && !empty($_POST['Uti_Mdp2'])){
                
                    addUser(
                            $_POST['Uti_Login'], 
                            $_POST['Uti_Pseudo'], 
                            $_POST['Uti_Mdp'], 
                            $_POST['Uti_Mdp2']
                        );
            }    
        }
        elseif($_GET['action'] == 'backhome'){
            listCocktailsAccueil();
            
        }
        elseif($_GET['action'] == 'lycos'){
            if(isset($_POST["search"]) && !empty($_POST["search"])){
                $search = htmlspecialchars($_POST['search']);
                RechercheCoc($search);
                //var_dump($search);
                //var_dump($_POST);
            } else {
                // $message = "Une erreur est survenue";
                // echo '<div id="message" >'.$message.'</div>
                // <script> 
                //     let thisMessage = document.getElementById("message")
                //     setTimeout(function(){thisMessage.style.display="none"}, 3000);
                // </script>';
                
                listCocktailsAccueil();
            }
            
        }
        elseif($_GET['action'] == 'getcocktail'){
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                getCocktail();
                
            }
            else {
                // Erreur ! On arrête tout, on envoie une exception, donc au saute directement au catch
                throw new Exception('Aucun identifiant de cocktail envoyé');
            }         
        }

        elseif ($_GET['action'] == 'addCocktail') {
            header("Location: views/editCocktail.php");
            //if(isset($_SESSION['Uti_Id'] ) && $_SESSION['Uti_Id']  > 0){
                if(!empty($_POST['title']) && !empty($_POST['stepByStep']) ){
                    if(empty($_POST['Coc_Id'])){
                        addCocktail($_POST['title'], $_POST['stepByStep'], 2, $_POST['tabIng']); //creation d'un cocktail
                    }
                    else{
                        updateCocktail($_POST['Coc_Id']);   //maj du cocktail
                    }
                }
                else {
                    // Autre exception
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            //}
            //updateCocktail(451);   //maj du cocktail
        }
        elseif ($_GET['action'] == 'deleteCoc') {
            if (isset($_POST['Coc_Id'])) {
                deleteCocktailComplet($_POST['Coc_Id']);  //suppression complete d'un cocktail
            }
            else {
                // Erreur ! On arrête tout, on envoie une exception, donc au saute directement au catch
                throw new Exception('Aucun identifiant de cocktail envoyé');
            }
        }

        elseif ($_GET['action'] == 'addComment') {
            //if (isset($_GET['idCoc']) && $_GET['idCoc'] > 0) {
                if (!empty($_POST['sendComment'])) {
                    addComment($_POST['sendComment'],452,2);
                }
                else {
                    // Autre exception
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            //}
            
        }

        elseif ($_GET['action'] == 'Favori') {
            //if (isset($_GET['idCoc']) && $_GET['idCoc'] > 0) {
                if (isset($_POST['favorite'])) {
                    addFavori($_POST['favorite'],452,2);
                }
                else {
                    // Autre exception
                    suppFavori(452,2);
                }
            //}
            
        }

    }
    else {

        //page d'accueil;
        // header("Location: views/template.php");
        //require('views/template.php');
        listCocktailsAccueil();

    }
}
catch(Exception $e) { // S'il y a eu une erreur, alors...
    echo 'Erreur : ' . $e->getMessage();
}  