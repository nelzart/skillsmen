<?php
//require('controller/users/createUser.php');
//require('controller/users/manageUser.php');
echo "index";
require('controller/cocktailController.php');
$tabIng = array();

$tabIng[0] = array('Ing_Id' => 1, 
                'comp_quantite' => 12, 
                'comp_Unite' => 'cl');

$tabIng[1] = array('Ing_Id' => 2, 
                'comp_quantite' => 2, 
                'comp_Unite' => 'morceau');

$tabIng[2] = array('Ing_Id' => 3, 
                'comp_quantite' => 1, 
                'comp_Unite' => 'goutte');

//addCocktail ('Le keke', 'une bouteille de vodka et du jus de carotte', 2, $tab);

try { // On essaie de faire des choses
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'addCocktail') {
            //if(isset($_SESSION['Uti_Id'] ) && $_SESSION['Uti_Id']  > 0){
                if(!empty($_POST['title']) && !empty($_POST['stepByStep'])){
                    addCocktail($_POST['title'], $_POST['stepByStep'], 2, $tabIng);
                }
                else {
                    // Autre exception
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
           // }
        }
        elseif ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                post();
            }
            else {
                // Erreur ! On arrête tout, on envoie une exception, donc au saute directement au catch
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'addComment') {
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
        }
    }
    else {
        //addCocktail($_POST['title'], $_POST['stepByStep'], 2, $tabIng);
    }
}
catch(Exception $e) { // S'il y a eu une erreur, alors...
    echo 'Erreur : ' . $e->getMessage();
}