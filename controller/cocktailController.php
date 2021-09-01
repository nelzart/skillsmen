<?php
$Ing = $_POST['tabIng'];
var_dump($_POST);
$Uti_Id = 2;  //SESSION_Uti_Id;
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
      //echo $i;
      $resultName = getIngredientByName($Ing[$i]); //on recup l'id de l'ingredient
      
      if($resultName == TRUE){
        createIngregientCocktail ($resultName[0], $resultLastCoc[0], $Ing[$i-2], $Ing[$i-1]);  // on alimente la table composition Cocktail
        echo "Ingredient integré: ".$resultName[1]." - ";
       // require('/views/editCocktail.php');
      }
      else{   
        echo "Ingredient inconnu: ".$Ing[$i]." non integré - ";
      }

    }
  }


  //categorisation du cocktail
  $cat = []; //tableau qui contiendra les valeurs à ajouter dans la table categorieCocktail

  var_dump($_POST);
  echo sizeof($_POST);

  foreach($_POST as $key => $value){ //on tourne sur toutes les valeurs postées
    $test = getTypeCocktailByName($key);
    if($test !== FALSE){//si le resultat existe c'est donc une categorie
      //var_dump($test);
      $compteur = 0; 
      foreach($Ing as $value){ // on tourne sur les ingredients postés
        if($key == $value){ // si la cat identifié correspond à un ingredient on alimente $cat
          $compteur +=1;        
          $ligneAinserer = array($test[0],$resultLastCoc[0],$value);
          array_push($cat,$ligneAinserer);
          continue;
        }
        else{
          
          //echo $key;
          //echo $value;
         //break;
          $message =  "categorie ".$key." non retenue car il n' y pas d'ingredient correspondant - ";
        }

      }
      if($compteur == 0){
        echo $message;
      }
    
    
      //$test2 = getTypeCocktailByName($_POST[$value]);
    }

    

  }
  
  var_dump($cat);
  for($i=0;$i<sizeof($cat);$i++){

    createCatCocktail($cat[$i][0], $cat[$i][1]);
    echo "cocktail categorisé: ".$cat[$i][2].", ";
  }


  // insertion de l'image
  if(isset($_FILES)){
    echo "<script>alert(\"there is an image...\")</script>";
    $logo=$_FILES['photo']['name'];
    var_dump($logo);
    if ($logo != "") {

      require "uploadImage.php";
      
      if ( $sortie == false ) {
      
        $logo = $dest_dossier . $dest_fichier;
        var_dump($logo);
        createCocImage($dest_fichier,$dest_dossier,($resultLastCoc[0]),2);
        //createCocImage('nom','public/images',395,2);
      }
      else { $logo="pas ok"; }
      
      if($logo != "notdid" ) {
      echo "upload reussi!!!";
      
      }
      else{
      echo "Echec. On recommence!!!";
      }
    }
  }
}