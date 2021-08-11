<?PHP
require 'dbConnect.php';
function createCocktail ($Coc_Nom, $Coc_Recette, $Uti_Id){


    $db = dbConnect();   

    $sth = $db -> prepare("INSERT INTO cocktail (Coc_Nom, Coc_Recette, Uti_Id) VALUES (:Coc_Nom, :Coc_Recette, :Uti_Id)");
    if($sth -> execute (
        [
            ':Coc_Nom' => $Coc_Nom,
            ':Coc_Recette' => $Coc_Recette,
            ':Uti_Id'=> $Uti_Id
        ]
    )
    ){
        echo "ok";
    }
    else{
        echo "pas ok";
    }
 
}

function createIngregientCocktail ($Ing_Id, $Coc_Id, $Comp_Quantite, $Comp_Unite){
    $db = dbConnect();   
    $sth = $db -> prepare("INSERT INTO compositioncocktail (Ing_Id, Coc_Id, Comp_Quantite, Comp_Unite) VALUES (:Ing_Id, :Coc_Id, :Comp_Quantite, :Comp_Unite)");
    if($sth -> execute (
        [
            ':Ing_Id' => $Ing_Id,
            ':Coc_Id' => $Coc_Id,
            ':Comp_Quantite'=> $Comp_Quantite,
            ':Comp_Unite' => $Comp_Unite
        ]
    )
    ){
        echo "ok";
    }
    else{
        echo "pas ok";
    }
}

function getLastCocktail($Uti_Id){
    $db = dbConnect();   
    $sth = $db -> prepare("SELECT * from cocktail c left join compositioncocktail cc on cc.Coc_Id= c.Coc_Id 
    where Uti_Id = :Uti_Id  and c.Coc_Id = ( select MAX(Coc_Id) from cocktail  where Uti_Id = :Uti_Id )");

    if($sth -> execute (
        [
            ':Uti_Id' => $Uti_Id
        ]
    )
    ){$resultat = $sth->fetch();
        
        echo "ok";
        return $resultat; 
    }
    else{
        echo "pas ok";
    }
}

