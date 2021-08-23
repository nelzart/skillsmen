<?php
$Ing = $_POST['tabIng'];
var_dump($_POST);
$Uti_Id = 1;  //SESSION_Uti_Id;
require('models/Cocktail.php');

function addCocktail($Coc_Nom, $Coc_Recette, $Uti_Id, $Ing){ //creation d'un cocktail complet

  $Coc_Nom = $_POST['title'];
  $Coc_Recette = $_POST['stepByStep'];

  createCocktail ($Coc_Nom, $Coc_Recette, $Uti_Id); //on alimente la table cocktail
  $resultLastCoc = getLastCocktail($Uti_Id); // on recupere l'id du cocktail qu'on vient de créer

  Var_dump($resultLastCoc);

  $Ing = explode(",", $_POST['tabIng'][0]);//on met $Ing en tab
  
  for($i=0;$i<sizeof($Ing);$i++){

    for($i=2;$i<sizeof($Ing);$i+=3){
      echo $i;
      $resultName = getIngredientByName($Ing[$i]); //on recup l'id de l'ingredient
      
      if($resultName == TRUE){
        createIngregientCocktail ($resultName, $resultLastCoc[0], $Ing[$i-2], $Ing[$i-1]);  // on alimente la table composition Cocktail
        echo "Ingredient integré";
       // require('/views/editCocktail.php');
      }
      else{   
        throw new Exception('ingredient inconnu !');
      }

    }
  }


  //categorisation du cocktail
  /*$cat = getAllIngredients();
  var_dump($cat);*/
}


  