<?php

$title = "recherche de Cocktail";

?>


    <?php include('./components/menu.php'); ?>


    <div class="container">

        <form class="search mobileSearch" action="?action=lycos" method="post" >
            <input style="height: 50px; width: 300px" type="text" name ="search" class="searchTerm" placeholder="Un ingrédient, un alcool, un cocktail ? ">
            
            <button type="submit" class="searchButton"style="margin-left: 0px; width: 40px; height: 50px; box-shadow: 0px 0px 0px" >
                <svg id="filter"  class="Icon Icon-lens" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 18h4v-2h-4v2zM3 6v2h18V6H3zm3 7h12v-2H6v2z"/></svg>
            </button>            
        </form>

        <h3 class="titleSearch">Cliquez pour masquer les résultats</h3>

        <div id="myBtnContainer" class="thisBase">
            <?php 
                include('./components/witchBases.php');
            ?>
        </div>


        
            <div class="allGalerie">

                <?php 
                if (isset($cats)){
                    foreach($cats as $cat){            
                        if(!empty($cat) && $cat < 1){
                            echo '
                            <div class="galerie show '.$cat.'" value="'.$cat.'">

                                <div id="newSection" class="newSection">
                                    <div class="sectionTitle"></div>
                                    <h2>base '.$cat.'</h2>
                                </div>

                                <div class="result">';                          
                                    foreach($cocs as $coc){ 
                                        if(($cat == $coc['Typ_Libelle']) && !empty($coc['Typ_Libelle'])){
                                            echo '  
                                            <a href="?action=getcocktail&id='.$coc['Coc_Id'].'">
                                                <div class="tuiles myCover" style="background-image:url(\'./public/images/'.$coc['Img_Nom'].'\')">
                                                    <div class="gradient"> 
                                                        <h2>• '.$coc['Coc_Nom'].' •</h2>
                                                    </div>
                                                </div>
                                            </a>';
                                        }
                                    }
                                echo'
                                </div>                                
                            </div>';
                        } 
                    }       
                }?> 
                    
                </div>
            </div>

            <script src="./public/filterApp.js"></script>
<?php 
    include('./components/footer.php');
?>