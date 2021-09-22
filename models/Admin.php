<?php
function getIngControle(){
    $db = dbConnect();
    $sth = $db -> prepare("SELECT * from ingredients where Ing_Categorie = 'controle'");
    if($sth -> execute ()
    ){
        //echo "ok";
        $dhl = $sth -> fetchAll();
        return $dhl;
    }
    /*else{
        throw new Exception('pas ok');
    }*/
}

function getUtiAll(){
    $db = dbConnect();
    $sth = $db -> prepare("SELECT * from utilisateurs uti left join images img on  uti.Uti_Id = img.Uti_Id and img.Coc_Id IS NULL order by Uti_DateInscription desc");
    if($sth -> execute ()
    ){
        //echo "ok";
        $dhl = $sth -> fetchAll();
        return $dhl;
    }
    /*else{
        throw new Exception('pas ok');
    }*/
}
