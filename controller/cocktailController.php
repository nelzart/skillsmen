<?php
require('models/Cocktail.php');
function addCocktail ($Coc_Nom, $Coc_Recette, $Uti_Id,$tab){
echo "controller";
  /* if(isset($_POST['Coc_Nom']) &&
    isset($_POST['Coc_Recette']) &&
    isset($_POST['Uti_Id'])){
        $Coc_Nom = $_POST['Coc_Nom'];
        $Coc_Recette = $_POST['Coc_Recette'];
        $Uti_Id = $_POST['Coc_Recette'];
        createCocktail ($Coc_Nom, $Coc_Recette, $Uti_Id);
    }*/

    createCocktail ($Coc_Nom, $Coc_Recette, $Uti_Id);
    $result = getLastCocktail($Uti_Id);
    var_dump($result);
    echo ($result[0]);
    var_dump($tab);
    //echo $result;
    echo "yop";
    foreach ($tab as $value){

         createIngregientCocktail ($value['Ing_Id'], $result[0], $value['comp_quantite'], $value['comp_Unite']);
      
    }
}

