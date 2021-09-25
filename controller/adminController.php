<?php
require('./models/Admin.php');
function getDashboard(){
    
    $cocs = getCocAll($eta = 'controle');
    $ings = getIngControle();
    $utis = getUtiAll();

    require('./views/dashboard.php');
  
 
}

function suppUti($id){
    $cocsUti = getCocktailByIdUti($id);  //on recup les id coc de l'utilisateur
    foreach($cocsUti as $cocUti){    // on supprime ses cocktails complets
        deleteCocktailComplet($cocUti['Coc_Id']);        
    }
    $imgNom = getimgUti_ByIdUti($id);  // on recup le nom de l'image
    unlink("public/images/$imgNom[0]['Img_Nom']"); //on supp l'image ds le dossier
    deleteImageUti($id);  // on supprime l'image de l'uti dans la table image
    deleteUti($id);  // on supprime l'utilisateur

}

function modifDroitUti($id){
    $uti = getUsers_ById($id);
    var_dump($uti);
    $utiDroit = $_POST['Uti_Droit'];
    updateProfil($id,$uti['Uti_Pseudo'], $utiDroit);

}