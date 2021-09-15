<?php

$title = "recherche de Cocktail";

?>


    <?php include('./components/menu.php'); ?>

    <div class="container">

        <div class="thisBase">
            <?php 
                include('./components/witchBases.php');
            ?>
        </div>

        
        
            <div class="allGalerie">

                <?php 
                    foreach($cats as $cat){            
                        echo '
                        <div class="galerie">

                            <div id="newSection" class="newSection">
                                <div class="sectionTitle"></div>
                                <h2>base '.$cat.'</h2>
                            </div>

                            <div class="result">';                          
                                foreach($cocs as $coc){ 
                                    if($cat == $coc[9]){
                                        echo '  
                                        <a href="?action=getcocktail&id='.$coc[7].'">
                                            <div class="tuiles myCover" style="background-image:url(\'./public/images/'.$coc[11].'\')">
                                                <div class="gradient"> 
                                                    <h2>• '.$coc[1].' •</h2>
                                                </div>
                                            </div>
                                        </a>';
                                    }
                                }
                            echo'
                            </div>                                
                        </div>';
                    }        
                ?> 
                    
                </div>
            </div>

 
<?php 
    include('./components/footer.php');
?>