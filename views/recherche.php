<?php

$title = "recherche de Cocktail";

?>


    <?php include('./components/menu.php'); ?>
<!-- <input type="checkbox" onchange="handleChange()" name="Job" rel="teacher" value="teacher" id="teacher" checked>Teacher
<input type="checkbox" onchange="handleChange()" name="Job" rel="lawyer" value="lawyer" id="lawyer" checked>Lawyer
<input type="checkbox" onchange="handleChange()" name="Job" rel="doctor" value="doctor" id="doctor" checked>Doctor -->

<!-- <div id="result">
    </div> -->

    <div class="container">

        <h3 style="margin-top:40px; margin-bottom:-40px">Cliquez pour masquer les résultats</h3>

        <div id="myBtnContainer" class="thisBase">
            <?php 
                include('./components/witchBases.php');
            ?>
        </div>

        <div id="result">
    </div>
        
            <div class="allGalerie">

                <?php 
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
                ?> 
                    
                </div>
            </div>

            <script src="./public/filterApp.js"></script>
<?php 
    include('./components/footer.php');
?>