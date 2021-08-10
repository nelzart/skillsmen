<?PHP
require 'dbConnect.php';
function createCocktail ($Coc_Nom, $Coc_Recette, $Uti_Id){
echo "model";
var_dump($Coc_Nom,$Coc_Recette,$Uti_Id);
    $db = dbConnect();   
    var_dump($db); 
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
    var_dump($sth);
}
