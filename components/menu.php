

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="./public/myGlobalStyle.css">

</head>
<body>


    <div class="navbar">

        <a href="?action=backhome">
            <div class="myLogo"><?php require('./public/icons/SVG/logo_typo.svg'); ?></div>
        </a>
               <?php  
                if(!empty($_SESSION)){
                    if($_SESSION['Uti_Droit']==='admin' || $_SESSION['Uti_Droit']==='boss'){
                    echo '<a href="?action=admin" class="iconCircle" style="position: absolute; top:-3px; right:1%">
                    <svg id="dashboard" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#000000"><path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"/>
                    </svg>
                </a>';
                }}
                ?>
        <div class="userAction">
                
                
            <div class="nav">

                <a href="?action=backhome">
                    <svg id="home" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>
                    </svg>
                </a>

                <svg id="listCocktail" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M21 5V3H3v2l8 9v5H6v2h12v-2h-5v-5l8-9zM7.43 7L5.66 5h12.69l-1.78 2H7.43z"/></svg>

                <a href="?action=searchbar">
                    <svg id="getCocktail"  xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
                </a>
                <!-- <a type="button" aria-haspopup="dialog" aria-controls="dialog" style="height:30px; width:24px; background-color:transparent; box-shadow: 0px 0px 0px transparent">
                    <svg id="connexion" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                </a>  -->
                
                <?php  
                if($_SESSION){
                    echo ' 
                    <a href="?action=getProfil&id='.$_SESSION['Uti_Id'].'">
                        <svg id="connexion" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                    </a> 
                    <a href="?action=addCocktail">
                        <svg class="iconCircle addInput addCocktail" class="" id="addCocktail" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><g><path d="M19,13h-6v6h-2v-6H5v-2h6V5h2v6h6V13z"/></g></g></svg>
                    </a>' ;
                } else {
                        echo '<a type="button" aria-haspopup="dialog" aria-controls="dialog" style="height:30px; width:24px; background-color:transparent; box-shadow: 0px 0px 0px transparent">
                            <svg id="connexion" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                            </svg>
                        </a> ';
                        
                        require('modalsign.php');
                    } ?>                   

                
            </div>
        

                <form class="search" action="?action=lycos" method="post">
                    <input type="text" name ="search" class="searchTerm" placeholder="Un ingrédient, un alcool, un cocktail ? ">
                    <a>
                        <button type="submit" class="searchButton" >
                        <svg id="filter"  class="Icon Icon-lens" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 18h4v-2h-4v2zM3 6v2h18V6H3zm3 7h12v-2H6v2z"/></svg>
                        </button>
                    </a>
                </form>

        </div>

    </div>
    
    <div class="logoTypoMobil">
        <svg id="logoTypoMobil" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 439.44 75.97"><defs><style>.cls-1{font-size:72px;}.cls-1,.cls-2{fill:#bf8f53;}.cls-1,.cls-3{font-family:Ogg-Roman, Ogg;}.cls-3{font-size:12px;}.cls-3,.cls-4{fill:#ca9e67;}</style></defs><g id="Calque_2" data-name="Calque 2"><g id="Calque_1-2" data-name="Calque 1"><text class="cls-1" transform="translate(18.28 50.63)">SKILLSMAN</text><circle class="cls-2" cx="3.89" cy="26.27" r="3.89"/><circle class="cls-2" cx="435.56" cy="26.27" r="3.89"/><text class="cls-3" transform="translate(159.61 64.52)">the art of being a man</text><rect class="cls-4" x="21.3" y="61.33" width="104.11" height="1"/><rect class="cls-4" x="312.09" y="61.35" width="104.11" height="1"/></g></g>
        </svg>
    </div>




           
                

    
    <script src="./public/ModalApp.js"></script>