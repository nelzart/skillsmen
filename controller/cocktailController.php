<?php
//echo "controlleur";
var_dump($_GET);
//print_r($_GET);
//print_r($_POST);
var_dump($_POST);
//var_dump($_SESSION['Uti_Id']);
require('models/Cocktail.php');

function addCocktail($Coc_Nom, $Coc_Recette, $Uti_Id, $tabIng){
  echo "controller";

  $Coc_Nom = $_POST['title'];
  $Coc_Recette = $_POST['stepByStep'];
  $Uti_Id = 2;
  createCocktail ($Coc_Nom, $Coc_Recette, $Uti_Id);
  $result = getLastCocktail($Uti_Id);
  echo "yop1";
  var_dump($result);
  echo "yop2";
  echo ($result[0]);
  echo "yop3";
  var_dump($tabIng);
  echo "yop4";
  echo $result;
  echo "yop5";
  foreach ($tabIng as $value){

    createIngregientCocktail ($value['Ing_Id'], $result[0], $value['comp_quantite'], $value['comp_Unite']);
      
  }
}