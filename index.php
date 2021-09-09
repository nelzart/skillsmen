<?php
//require('controller/users/createUser.php');
//require('controller/users/manageUser.php');
echo "index";
require('controller/cocktailController.php');


try { // On essaie de faire des choses
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'connexion') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                
            }
            else {
                // Erreur ! On arrête tout, on envoie une exception, donc au saute directement au catch
                throw new Exception('Aucun identifiant envoyé');
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
           // }
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
                    addComment($_POST['sendComment'],404,2);
                }
                else {
                    // Autre exception
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            /*}
            else {
                // Autre exception
                throw new Exception('Aucun identifiant de billet envoyé');
            }*/
        }
       /* elseif ($_GET['action'] == 'connexion') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                post();
            }
            else {
                // Erreur ! On arrête tout, on envoie une exception, donc au saute directement au catch
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }*/
        
        /*elseif ($_GET['action'] == 'addComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                    addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                }
                else {
                    // Autre exception
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            }
            else {
                // Autre exception
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }*/
    }
    else {

        //page d'accueil;
        header("Location: views/template.php");
        //require('views/template.php');

    }
}
catch(Exception $e) { // S'il y a eu une erreur, alors...
    echo 'Erreur : ' . $e->getMessage();
}   