<?php
function get_extension($nom) {
$nom = explode(".", $nom);
$nb = count($nom);
return strtolower($nom[$nb-1]);
}
$sortie=false;
$extensions_ok = array('jpg','jpeg','png');
$typeimages_ok = array(2,3);
$taille_ko = 3072;
$taille_max = $taille_ko*3072;
$dest_dossier = 'public/images/'; //dossier de stockage
$dest_fichier = $resultLastCoc[0] . "_coc." . get_extension($_FILES['photo']['name']);

//**************************************
if(!$getimagesize = getimagesize($_FILES['photo']['tmp_name'])) {
$erreurs[] = "Le fichier n'est pas une image valide.";
}
//*******************************
else {
if( (!in_array( get_extension($_FILES['photo']['name']), $extensions_ok ))or (!in_array($getimagesize[2], $typeimages_ok )))
{
$erreurs[] = 'Veuillez sélectionner un fichier de type Jpeg ou Png !';
}
else{
//******************************
// on vérifie le poids de l'image
if( file_exists($_FILES['photo']['tmp_name']) and filesize($_FILES['photo']['tmp_name']) > $taille_max)
{
$erreurs[] = "Votre fichier doit faire moins de $taille_ko Ko !";
}
else{

$dossier=$dest_dossier;
}
//********************************
if(move_uploaded_file($_FILES['photo']['tmp_name'], $dossier . $dest_fichier)) {
$valid[] = "Image uploadé avec succés (<a href='".$dossier . $dest_fichier."'>Voir</a>)";
}
else {
$erreurs[] = "Impossible d'uploader le fichier.<br />Veuillez vérifier que le dossier ".$dossier ;
}
}
}


if(@$erreurs[0]!=""){
/*print("<div class="erreurFormulaire">
<div class="erreurEntete"> un probleme est survenu lors de l'upload de l'image</div><div class="erreurMessage">");*/

for($i=0;$i<5;$i++){
if($erreurs[$i]=="")
break;
else echo "<li>".$erreurs[$i]."</li>"; $sortie=true;}
print(" </div></div>");
}

