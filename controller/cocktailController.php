<?php
//$Ing = $_POST['tabIng'];
// var_dump($_POST);
//$Uti_Id = 2;  //SESSION_Uti_Id;
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
      else{ // on créé l'ingredient, on alimente la table composition Cocktail et le cocktail passe en controle
        $etat='controle';
        insertIngredient($Ing[$i]);
        UpdateEtatCocktail($resultLastCoc[0],$etat);
        $resultName = getIngredientByName($Ing[$i]); //on recup l'id de l'ingredient
        createIngregientCocktail ($resultName[0], $resultLastCoc[0], $Ing[$i-2], $Ing[$i-1]);  
        echo "Ingredient inconnu: ".$Ing[$i]." cocktail soumis à validation- ";
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
      $nomCoc = uploadImages($resultLastCoc[0]);
      if ( $nomCoc ) {
      
        //$logo = $dest_dossier . $dest_fichier;
        var_dump($logo);
        //$dest_fichier = '403_coc_.jpg';
        //$dest_dossier = 'ssssss';
        createCocImage($nomCoc,'public/images',$resultLastCoc[0],2);
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

function deleteCocktailComplet($cocId){
  $cocNom = $_POST['title'];
  $cocId = $_POST['Coc_Id'];
  deleteCategorieCoc($cocId);
  deleteIngredientsCoc($cocId);
  deleteImageCoc($cocId);
  unlink ("public/images/$cocNom");
  deleteComment($cocId);
  deleteFavoriAll($cocId);
  deleteLike($cocId);
  deleteCocktail($cocId);
}

function updateCocktail($cocId){
  deleteCategorieCoc($cocId);
  deleteIngredientsCoc($cocId);
  deleteImageCoc($cocId);
  $cocNom = $_POST['title'];
  $CocRecette = $_POST['stepByStep'];
  unlink ("public/images/$cocNom");
  updateTblCocktail($cocId,$cocNom, $CocRecette);
  UpdateEtatCocktail($cocId,'publie');
  $Ing = explode(",", $_POST['tabIng'][0]);//on met $Ing en tab
  
  for($i=0;$i<sizeof($Ing);$i++){

    for($i=2;$i<sizeof($Ing);$i+=3){
      //echo $i;
      $resultName = getIngredientByName($Ing[$i]); //on recup l'id de l'ingredient
      
      if($resultName == TRUE){// on alimente la table composition Cocktail
        createIngregientCocktail ($resultName[0], $cocId, $Ing[$i-2], $Ing[$i-1]);  
        echo "Ingredient integré: ".$resultName[1]." - ";
       // require('/views/editCocktail.php');
      }
      else{ // on créé l'ingredient, on alimente la table composition Cocktail et le cocktail passe en controle
        $etat='controle';
        insertIngredient($Ing[$i]);
        UpdateEtatCocktail($cocId,$etat);
        $resultName = getIngredientByName($Ing[$i]); //on recup l'id de l'ingredient
        createIngregientCocktail ($resultName[0], $cocId, $Ing[$i-2], $Ing[$i-1]);  
        echo "Ingredient inconnu: ".$Ing[$i]." cocktail soumis à validation- ";
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
          $ligneAinserer = array($test[0],$cocId,$value);
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
    //echo "<script>alert(\"there is an image...\")</script>";
    $logo=$_FILES['photo']['name'];
    var_dump($logo);
    var_dump(date('Y-m-d H:i:s', time()));
    if ($logo != "") {

      require "uploadImage.php";
      $nomCoc = uploadImages($cocId);
      if ( $nomCoc ) {
      
        //$logo = $dest_dossier . $dest_fichier;
        var_dump($logo);
        //$dest_fichier = '403_coc_.jpg';
        //$dest_dossier = 'ssssss';
        createCocImage($nomCoc,'public/images',$cocId,2);
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

function addComment($content,$cocId,$uti){

  /*$content = $_POST['title'];
  $cocId = $_GET['Coc_Id'];*/
  //$uti = $_SESSION['Uti_Id'];
  $ups = createComment($content,$cocId,$uti);
  var_dump($ups);
  if($ups === 0 ){
    die('Impossible d\'ajouter le commentaire !');
  }
  else {
      //header('Location: index.php?action=post&id=' . $postId);
  }
}

function addLike($cocId,$uti){

  /*$content = $_POST['title'];
  $cocId = $_GET['Coc_Id'];*/
  //$uti = $_SESSION['Uti_Id'];
  $ups = createLike($cocId,$uti);
  var_dump($ups);
  if($ups === 0 ){
    die('Impossible d\'ajouter le like !');
  }
  else {
      //header('Location: index.php?action=post&id=' . $postId);
  }
}

function addFavori($cocId,$uti){

  /*$content = $_POST['title'];
  $cocId = $_GET['Coc_Id'];*/
  //$uti = $_SESSION['Uti_Id'];
  $ups = createFavori($cocId,$uti);
  var_dump($ups);
  if($ups === 0 ){
    die('Impossible d\'ajouter le favori !');
  }
  else {
      //header('Location: index.php?action=post&id=' . $postId);
  }
}

function suppFavori($cocId,$uti=NULL){

  /*$content = $_POST['title'];
  $cocId = $_GET['Coc_Id'];*/
  //$uti = $_SESSION['Uti_Id'];
  if ($uti != NULL){
    deleteFavoriOne($cocId,$uti);
  }
  else{
    deleteFavoriAll($cocId);
  }
 
  //var_dump($ups);
  /*if($ups === 0 ){
    die('Impossible d\'ajouter le favori !');
  }
  else {
      //header('Location: index.php?action=post&id=' . $postId);
  }*/
}

function listCocktailsAccueil(){ //uniquement les publiés par defaut
  $cocs = getCocAll();
  $cats = [];
  foreach($cocs as $coc){
    if (!in_array($coc[9], $cats) && ($coc[9]!== NULL)) {
        array_push($cats,$coc[9]);
    }
  }

  // var_dump($coc);
  // var_dump($coc[0]);
  // var_dump($coc[1][9]);
  
  require('./views/template.php');
}

function getCocktail(){
  $coc = getCocktailByIdCoc($_GET['id']);
  $ing = getIngByIdcoc($_GET['id']);

  $img = getimgCocByIdCoc($_GET['id']);
  $com = getCommentbyIdCoc($_GET['id']);
  require('./views/cocktailView.php');
}

function RechercheCoc($what){
  $cocs = getCocktailByName($what); //on recup les cocktails publiés

  $cats = [];  //variable qui contiendra la liste des categories concernées par les cocktails trouvés
  foreach($cocs as $coc){
    
    if (!in_array($coc['Typ_Libelle'], $cats) && ($coc['Typ_Libelle'] !== NULL)) {//pour chaque cocktail on recup la categorie
        array_push($cats, $coc['Typ_Libelle']);
    }
  }
  $cs = [];
  $ings = getIngredientByName($what); //on recup les ingredients qui commencent par l'input
  foreach($ings as $ing){     //pour chaque ingredient trouvé on recup l'id cocktail 
    $ccs = getCompositionCocktailByIdIng($ing['Ing_Id']);
    if (!in_array($ccs, $cs) && $ccs != FALSE) {//
      array_push($cs, $ccs);
  }
  }
 // var_dump($cocs);
 // var_dump($cats);
  //var_dump($ings);
  ////var_dump($cs);

  foreach($cs as $c){   //
    $result = getCocktailByIdCoc($c[0]['Coc_Id']);   //var qui recup les id coc concernés
    $result2 = getCocktailByName($result[1]);    //on relance la recherche par nom pour alimenter cocs
    foreach($result2 as $res2)
    if (!in_array($res2['Typ_Libelle'], $cats) && (!empty($res2['Typ_Libelle'])) && $result2 !=NULL) {//pour chaque cocktail on recup la categorie
      array_push($cats, $res2['Typ_Libelle']);
      if (!in_array($res2['Coc_Id'], $cocs)) {//pour chaque cocktail on pousse ds coc
        array_push($cocs, $res2);
    }
    
    }
  }
//var_dump($result);
//var_dump($result2);
////var_dump($cats);
//var_dump($cocs);
 
if(!empty($cocs)){
    require('./views/recherche.php');
}
else{
  echo "<script>alert(\"aucuns resultats \")</script>" ;
  //require('./views/template.php');
  listCocktailsAccueil();
}
  // var_dump($cocs);
  // var_dump($cats);
}

