<?PHP
require 'dbConnect.php';

//fonctions cocktail//
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
function getCocktailByName($what, $etat='publie'){
    $db = dbConnect();
     
    $sth = $db -> prepare(" SELECT co.Coc_Id, Coc_Nom, Coc_Recette, Coc_DateCreation, Uti_Pseudo, i.Img_Nom, tc.Typ_Libelle, tc.Typ_Id from cocktail co inner join utilisateurs uti on co.Uti_Id = uti.Uti_Id left join images i on i.Coc_Id = co.Coc_Id left join categoriecocktail  ca on Ca.Coc_Id = co.Coc_Id
    left join typecocktail tc on tc.Typ_Id = ca.Typ_Id where Coc_Nom like :Coc_Nom and Coc_Etat = :Coc_Etat order by Coc_DateCreation Desc");
    // $sth = $db -> prepare(" SELECT * from cocktail co inner join utilisateurs uti on co.Uti_Id = uti.Uti_Id where Coc_Nom like :Coc_Nom and Coc_Etat ='publie' order by Coc_DateCreation Desc");
    if($sth -> execute (
        [
            ':Coc_Nom' => '%' . $what . '%',
            ':Coc_Etat' => $etat
        ]
    )
    ){$ups = $sth->fetchAll();
        
        //echo "ok";
        return $ups; 
    }
    else{
        echo "pas ok";
    }
}

function getCocktailByNameSansCat($what, $etat='publie'){
    $db = dbConnect();
     
    $sth = $db -> prepare(" SELECT co.Coc_Id, Coc_Nom, Coc_Recette, Coc_DateCreation, Uti_Pseudo, i.Img_Nom from cocktail co inner join utilisateurs uti on co.Uti_Id = uti.Uti_Id left join images i on i.Coc_Id = co.Coc_Id where Coc_Nom like :Coc_Nom and Coc_Etat = :Coc_Etat order by Coc_DateCreation Desc");
    // $sth = $db -> prepare(" SELECT * from cocktail co inner join utilisateurs uti on co.Uti_Id = uti.Uti_Id where Coc_Nom like :Coc_Nom and Coc_Etat ='publie' order by Coc_DateCreation Desc");
    if($sth -> execute (
        [
            ':Coc_Nom' => '%' . $what . '%',
            ':Coc_Etat' => $etat
        ]
    )
    ){$ups = $sth->fetchAll();
        
        //echo "ok";
        return $ups; 
    }
    else{
        echo "pas ok";
    }
}
function getCocktailByIdCoc($cocId){
    $db = dbConnect();   
    $sth = $db -> prepare(" SELECT * from cocktail co inner join utilisateurs  uti on co.Uti_Id = uti.Uti_Id where Coc_Id = :Coc_Id");

    if($sth -> execute (
        [
            ':Coc_Id' => $cocId
        ]
    )
    ){$ups = $sth->fetch();
        
        echo "ok";
        return $ups; 
    }
    else{
        echo "pas ok";
    }
}

function getCocAll($eta = 'publie'){ //sauf ceux en controle
    $db = dbConnect();   
    $sth = $db -> prepare("SELECT * FROM cocktail co 
                                    left join categoriecocktail  ca on Ca.Coc_Id = co.Coc_Id
                                    left join typecocktail tc on tc.Typ_Id = ca.Typ_Id
                                    left join images im on im.Coc_id = co.Coc_Id
                                    inner join utilisateurs uti on uti.Uti_Id = co.Uti_Id
                                   
                           where Coc_Etat=:Coc_Etat ORDER BY Coc_DateCreation DESC, Typ_Libelle");

    if($sth -> execute (
        [
        ':Coc_Etat' => $eta
        ]
    )
    ){
        $ups = $sth->fetchAll();
        //var_dump($ups);
        
        //echo $resultat[0];
        return $ups; 
    }
    else{
      
        throw new Exception('pb');
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

function getCocktailByIdUti($Uti_Id){
    $db = dbConnect();   
    $sth = $db -> prepare(" SELECT * from cocktail where Uti_Id = :Uti_Id");

    if($sth -> execute (
        [
            ':Uti_Id' => $Uti_Id
        ]
    )
    ){$ups = $sth->fetchAll();
        
        //echo "ok";
        return $ups; 
    }
    else{
        //echo "pas ok";
    }
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
    date_default_timezone_set('Europe/Amsterdam');
    $date= date('Y-m-d H:i:s', time());
    if($sth -> execute (
        [
            ':Coc_Nom' => $Coc_Nom,
            ':Coc_Recette' => $Coc_Recette,
            ':Coc_Id'=> $cocId,
            ':Coc_DateCreation' => $date
        ]
    ))
    {
        echo "cocktail Mis à jour: ".$Coc_Nom;
    }
    else{
        throw new Exception('echec Mise à jour du cocktail');
    }
}

function getCompositionCocktailByIdIng($ing){
    $db = dbConnect();   
    $sth = $db -> prepare("SELECT * from compositioncocktail  where Ing_Id = :Ing_Id");

    if($sth -> execute (
        [
            ':Ing_Id' => $ing
        ]
    )
    ){$ups = $sth->fetchAll();
        
        return $ups; 
    }
    /*else{
    
        throw new Exception('pb');
    }*/
}

//fonctions ingredient//
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

function getAllIngredients(){
    $db = dbConnect();   
    $sth = $db -> prepare("SELECT * from ingredients order by Ing_Nom ");

    if($sth -> execute ()){
        $results = $sth->fetchAll();
        //var_dump($results);
        
        //echo $resultat[0];
        return $results; 
    }
    else{
      
        throw new Exception('pb');
    }
}

function getIngredientByName($name,$eta = 'controle'){
    $db = dbConnect();   
    $sth = $db -> prepare("SELECT * from ingredients where Ing_Nom like :Ing_Nom and Ing_Categorie != :Ing_Categorie");

    if($sth -> execute (
        [
            ':Ing_Nom' => $name . '%',
            ':Ing_Categorie' => $eta
        ]
    )

    
    ){$resultat = $sth->fetchAll();
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
function getIngredientByNameExact($name,$eta = 'controle'){
    $db = dbConnect();   
    $sth = $db -> prepare("SELECT * from ingredients where Ing_Nom = :Ing_Nom and Ing_Categorie != :Ing_Categorie");

    if($sth -> execute (
        [
            ':Ing_Nom' => $name,
            ':Ing_Categorie' => $eta
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
function getIngByIdcoc($cocId){ //sauf ceux en controle
    $db = dbConnect();   
    $sth = $db -> prepare("SELECT * FROM compositioncocktail cc inner join ingredients ing on cc.Ing_Id = ing.Ing_Id where Coc_Id = :Coc_Id");

    if($sth -> execute (        [   
        ':Coc_Id' => $cocId
    ])){
        $ups = $sth->fetchAll();
        // var_dump($ups);
        
        //echo $resultat[0];
        return $ups; 
    }
    else{
      
        throw new Exception('pb');
    }

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

function deleteIngredientsCoc($cocId){
    $db = dbConnect();   
    $sth = $db -> prepare("DELETE FROM compositioncocktail where Coc_Id = :cocId");

    $sth -> execute (
        [
            ':cocId' => $cocId
        ]
        );
}
function deleteIngredientById($ingId){
    $db = dbConnect();   
    $sth = $db -> prepare("DELETE FROM ingredients where Ing_Id = :ingId");

    $sth -> execute (
        [
            ':ingId' => $ingId
        ]
        );
}

//fonctions categorie//
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

function deleteCategorieCoc($cocId){
    $db = dbConnect();   
    $sth = $db -> prepare("DELETE FROM categoriecocktail where Coc_Id = :cocId");

    $sth -> execute (
        [
            ':cocId' => $cocId
        ]
        );
}

function getTypeCocktailByName($Type_Libelle){
    $db = dbConnect();   
    $sth = $db -> prepare("SELECT * from typecocktail where Typ_Libelle = :Typ_Libelle");

    if($sth -> execute (
        [
            ':Typ_Libelle' => $Type_Libelle
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


function getCatCocByIdCoc($cocid){
    $db = dbConnect();   
    $sth = $db -> prepare("SELECT * from categoriecocktail ty inner join typecocktail co on ty.Typ_Id = co.Typ_Id where ty.Coc_Id = :Coc_Id");

    if($sth -> execute (
        [
            ':Coc_Id' => $cocid
        ]
    )
    ){
        //echo "categorie ok";
        $ups = $sth->fetchAll();
    
        return $ups; 
    }
    else{
        echo " pb";

    }
}

function getCatCocAll(){
    $db = dbConnect();   
    $sth = $db -> prepare("SELECT * from typecocktail");

    if($sth -> execute ()
    ){
        //echo "categorie ok";
        $ups = $sth->fetchAll();
    
        return $ups; 
    }
    else{
        echo " pb";

    }
}


function getUtiCocByIdCoc($utiId){
    $db = dbConnect();   
    $sth = $db -> prepare("SELECT * from utilisateur where Uti_Id = :Uti_Id");

    if($sth -> execute (
        [
            ':Uti_Id' => $utiId
        ]
    )
    ){
        //echo "categorie ok";
        $ups = $sth->fetch();
    
        return $ups; 
    }
    else{
        echo " pb";

    }
}
//fonction images//
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

function deleteImageCoc($cocId){
    $db = dbConnect();   
    $sth = $db -> prepare("DELETE FROM images where Coc_Id = :cocId");

    $sth -> execute (
        [
            ':cocId' => $cocId
        ]
        );
}

function getimgCocByIdCoc($cocid){
    $db = dbConnect();   
    $sth = $db -> prepare("SELECT * from images where Coc_Id = :Coc_Id");

    if($sth -> execute (
        [
            ':Coc_Id' => $cocid
        ]
    )
    ){
        //echo "categorie ok";
        $ups = $sth->fetchAll();
    
        return $ups; 
    }
    else{
        echo " pb";

    }
}
//fonctions commentaire//
function createComment ($content, $cocId, $uti){
    $db = dbConnect();   
    $sth = $db -> prepare("INSERT INTO commentaires (Com_Contenu, Coc_Id, Uti_Id) VALUES (:Com_Contenu, :Coc_Id, :Uti_Id)");

    $sth -> execute (
        [
            ':Com_Contenu' => $content,
            ':Coc_Id' => $cocId,
            ':Uti_Id' => $uti
        ]
        );   
    
}

function deleteComment($cocId){
    $db = dbConnect();   
    $sth = $db -> prepare("DELETE FROM commentaires where Coc_Id = :cocId");

    $sth -> execute (
        [
            ':cocId' => $cocId
        ]
        );
}

function getCommentbyIdCoc($cocId){
    $db = dbConnect();   
    $sth = $db -> prepare("SELECT * from commentaires com inner join utilisateurs uti on com.Uti_Id = uti.Uti_Id 
                            where Coc_Id = :Coc_Id order by Com_dateCreation desc");

    if($sth -> execute (
        [
            ':Coc_Id' => $cocId
        ]
    )
    ){
        //echo "com ok";
        $ups = $sth->fetchAll();
    
        return $ups; 
    }
    else{
        echo " pb";

    }
}

//fonctions likes//
function createLike ($cocId, $uti){
    $db = dbConnect();   
    $sth = $db -> prepare("INSERT INTO likes (Coc_Id, Uti_Id) VALUES (:Coc_Id, :Uti_Id)");

    if($sth -> execute (
        [
            ':Coc_Id' => $cocId,
            ':Uti_Id' => $uti
        ]
        )){
            echo "cocktail liké";
            $ups = 1;
        }
        else{
            echo "echec like";
            $ups = 0;
        }
        
    return $ups;
}

function deleteLike($cocId){
    $db = dbConnect();   
    $sth = $db -> prepare("DELETE FROM likes where Coc_Id = :cocId");

    $sth -> execute (
        [
            ':cocId' => $cocId
        ]
        );
}
//fonctions favoris//
function createFavori ($cocId, $uti){
    $db = dbConnect();   
    $sth = $db -> prepare("INSERT INTO favoris (Coc_Id, Uti_Id) VALUES (:Coc_Id, :Uti_Id)");

    if($sth -> execute (
        [
            ':Coc_Id' => $cocId,
            ':Uti_Id' => $uti
        ]
        )){
            echo "cocktail mis en favori";
            $ups = 1;
        }
        else{
            echo "echec mise en favori";
            $ups = 0;
        }
        
    return $ups;
}

function deleteFavoriAll($cocId){
    $db = dbConnect();   
    $sth = $db -> prepare("DELETE FROM favoris where Coc_Id = :cocId");

    $sth -> execute (
        [
            ':cocId' => $cocId
        ]
        );
}

function deleteFavoriOne($cocId,$UtiId){
    $db = dbConnect();   
    $sth = $db -> prepare("DELETE FROM favoris where Coc_Id = :cocId and Uti_Id = :UtiId");

    $sth -> execute (
        [
            ':cocId' => $cocId,
            ':UtiId' => $UtiId
        ]
        );
}