<?PHP
require 'dbConnect.php';
function createCocktail ($Coc_Nom, $Coc_Recette, $Uti_Id){


    $db = dbConnect();   

    $sth = $db -> prepare("INSERT INTO cocktail(Coc_Nom, Coc_Recette, Uti_Id, Coc_Etat) VALUES (:Coc_Nom, :Coc_Recette, :Uti_Id, :Coc_Etat)");
    if($sth -> execute (
        [
            ':Coc_Nom' => $Coc_Nom,
            ':Coc_Recette' => $Coc_Recette,
            ':Uti_Id'=> $Uti_Id,
            ':Coc_Etat' => 'publie'
        ]
    ))
    {
        echo "cocktail créé: ".$Coc_Nom;
    }
    else{
        throw new Exception('echec création cocktail');
    }
 
}

function createIngregientCocktail ($Ing_Id, $Coc_Id, $Comp_Quantite, $Comp_Unite){
    $db = dbConnect();   
    $sth = $db -> prepare("INSERT INTO compositioncocktail (Ing_Id, Coc_Id, Comp_Quantite, Comp_Unite) VALUES (:Ing_Id, :Coc_Id, :Comp_Quantite, :Comp_Unite)");
    if($sth -> execute (
        [
            ':Ing_Id' => intval($Ing_Id),
            ':Coc_Id' => intval($Coc_Id),
            ':Comp_Quantite'=> floatval($Comp_Quantite),
            ':Comp_Unite' => $Comp_Unite
        ]
    )
    ){
        //echo "ok";
    }
    else{
        //echo "pas ok";
    }
}

function createCatCocktail($idCat, $idCoc){
    $db = dbConnect();
    $sth = $db -> prepare("INSERT INTO categoriecocktail (Typ_Id, Coc_Id) VALUES (:Typ_Id, :Coc_Id)");
    if($sth -> execute (
        [
            ':Typ_Id' => intval($idCat),
            ':Coc_Id' => intval($idCoc)
        ]
    )
    ){
        //echo "Cocktail categorisé: ".$idCat;
    }
    else{
        //echo "categorisation cocktail : echec";
    }
}

function getLastCocktail($Uti_Id){
    $db = dbConnect();   
    $sth = $db -> prepare(" SELECT * from cocktail c left join compositioncocktail cc on cc.Coc_Id= c.Coc_Id 
    where Uti_Id = :Uti_Id  and c.Coc_Id = ( select MAX(Coc_Id) from cocktail  where Uti_Id = :Uti_Id )");

    if($sth -> execute (
        [
            ':Uti_Id' => $Uti_Id
        ]
    )
    ){$resultat = $sth->fetch();
        
        //echo "ok";
        return $resultat; 
    }
    else{
        //echo "pas ok";
    }
}

function getAllIngredients(){
    $db = dbConnect();   
    $sth = $db -> prepare("SELECT * from ingredients order by Ing_Nom ");

    if($sth -> execute ()){
        $results = $sth->fetchAll();
        var_dump($results);
        
        //echo $resultat[0];
        $results; 
    }
    else{
      
        throw new Exception('pb');
    }
}

function getIngredientByName($name){
    $db = dbConnect();   
    $sth = $db -> prepare("SELECT * from ingredients where Ing_Nom = :Ing_Nom");

    if($sth -> execute (
        [
            ':Ing_Nom' => $name
        ]
    )
    ){$resultat = $sth->fetch();
        //$Ing_Id = $resultat[0];
        //echo "ok";
        //var_dump($resultat);
        //echo "yop9";
        //var_dump($Ing_Id);
        return $resultat; 
    }
    /*else{
        //deleteCoktail($Coc_Id);
        throw new Exception('ingredient inexistant');
    }*/
}

function getTypeCocktailByName($Type_Libelle){
    $db = dbConnect();   
    $sth = $db -> prepare("SELECT * from typecocktail where Type_Libelle = :Type_Libelle");

    if($sth -> execute (
        [
            ':Type_Libelle' => $Type_Libelle
        ]
    )
    ){
        //echo "categorie ok";
        $resultat = $sth->fetch();
    
        return $resultat; 
    }
    else{
        echo " ce n'est pas une categorie";
        //deleteCoktail($Coc_Id);
        //throw new Exception('echec creation ingredient');
    }
}
function createCocImage($nom,$adresse,$cocId,$utiId){
    $db = dbConnect();
    $sth = $db -> prepare("INSERT INTO images (Img_Nom, Img_Adresse, Coc_Id, Uti_Id) VALUES (:Img_Nom,:Img_Adresse,:Coc_Id,:Uti_Id)");
    if($sth -> execute (
        [
            ':Img_Nom' => $nom,
            ':Img_Adresse' => $adresse,
            ':Coc_Id' => $cocId,
            ':Uti_Id' => $utiId
        ]
    )
    ){
        echo "image insérée";
    }
    else{
        throw new Exception('echec creation image');
    }
}

function deleteCategorieCoc($cocId){
    $db = dbConnect();   
    $sth = $db -> prepare("DELETE FROM categoriecocktail where Coc_Id = :cocId");

    $sth -> execute (
        [
            ':cocId' => $cocId
        ]
        );
}

function deleteIngredientsCoc($cocId){
    $db = dbConnect();   
    $sth = $db -> prepare("DELETE FROM compositioncocktail where Coc_Id = :cocId");

    $sth -> execute (
        [
            ':cocId' => $cocId
        ]
        );
}

function insertIngredient($nom){
    $db = dbConnect();   
    $sth = $db -> prepare("INSERT INTO ingredients (Ing_Nom,Ing_Categorie) VALUES(:Ing_Nom,:Ing_Categorie)");

    $sth -> execute (
        [
            ':Ing_Nom' => $nom,
            ':Ing_Categorie' => 'controle'
        ]
        );
}

function UpdateEtatCocktail($cocId,$cocEtat){
    $db = dbConnect();   
    $sth = $db -> prepare("UPDATE cocktail SET Coc_Etat = :Coc_Etat where Coc_Id = :Coc_Id");

    $sth -> execute (
        [
            ':Coc_Id' => $cocId,
            ':Coc_Etat' => $cocEtat
        ]
        );
}

function deleteImageCoc($cocId){
    $db = dbConnect();   
    $sth = $db -> prepare("DELETE FROM images where Coc_Id = :cocId");

    $sth -> execute (
        [
            ':cocId' => $cocId
        ]
        );
}

function deleteCocktail($cocId){
    $db = dbConnect();   
    $sth = $db -> prepare("DELETE FROM cocktail where Coc_Id = :cocId");

    $sth -> execute (
        [
            ':cocId' => $cocId
        ]
        );
}

function updateTblCocktail($cocId,$Coc_Nom, $Coc_Recette){
    $db = dbConnect();   
    $sth = $db -> prepare("UPDATE cocktail SET Coc_Nom = :Coc_Nom, Coc_Recette = :Coc_Recette, Coc_DateCreation = :Coc_DateCreation where Coc_Id=:Coc_Id");
    if($sth -> execute (
        [
            ':Coc_Nom' => $Coc_Nom,
            ':Coc_Recette' => $Coc_Recette,
            ':Coc_Id'=> $cocId,
            ':Coc_DateCreation' => getdate()
        ]
    ))
    {
        echo "cocktail Mis à jour: ".$Coc_Nom;
    }
    else{
        throw new Exception('echec Mise à jour du cocktail');
    }
}