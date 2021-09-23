<?php
$title = "créer recette";

if ($_GET['action'] == 'editCocktail') {
    if($_SESSION["Uti_Id"] === $coc["Uti_Id"]){

        $_GET['id'];
    }
}
// var_Dump($coc) ; 
// echo '///////////////////////';
// var_Dump($ing) ;
// var_Dump($cat[1]) ;
// echo '///////////////////////';
// echo '///////////////////////';
// var_Dump( $img) ;
// echo '///////////////////////';
// var_Dump($com) ;
 




require('./components/menu.php'); 
?>
	

<form class="container" id="insertCocktail" name="insertCocktail"  enctype="multipart/form-data" action="?action=createCocktail
<?php if ($_GET['action'] == 'editCocktail'){ echo '&id='.$_GET['id'].'';}?> method="post">

    <div class="myCover" id="preview" style="background-image:url('<?php if(empty($img)){ echo '../skillsmen/public/images/cocktails.jpg';} else{ echo $img[0]['Img_Adresse']. '/' .$img[0]['Img_Nom'];} ?>')">
        <div class="gradient">    
            <h2>• <span id="thisTitle"><?php if ($_GET['action'] == 'editCocktail') { echo $coc['Coc_Nom'];} else {echo 'noTitle' ;} ?></span> •</h2>            
            <div class="iconCover" height="15%" width="15%">
                <svg id="edit" xmlns="http://www.w3.org/2000/svg" class="iconCoverSVG"  height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/></svg>	  
                <input type="file" class="photoUpload" id="myCover" name="photo"accept="image/png, image/jpg, image/jpeg"/>
            </div>			  
        </div>
    </div>
		<script>
            let w = window, d = document,
                file = d.getElementById('myCover');
                ctn = d.getElementById('preview');

            file.addEventListener('change', function() {
                let cURL = w.URL || w.webkitURL;
                let imgURL = cURL.createObjectURL(this.files[0]);
                ctn.setAttribute("style", "background-image:url('" +imgURL + "')");
            })();

        </script>

    <div class="writeIn">

        <div class="title" >
            <label for="title"><h3>Choisir un nom</h3></label>
            <input name="title" type="text" id="inputTitle" placeholder="nom du cocktail" style="width: 400px;" value="<?php if ($_GET['action'] == 'editCocktail') { echo $coc['Coc_Nom'];}?>" ></input>
        </div>

        <script>            
            inputTitle.oninput = function() {
                thisTitle.innerHTML = inputTitle.value;
            };
        </script>   

        <div id="addIngredient">
		    <h3>Liste des ingrédients</h3>
            <?php 
                if ($_GET['action'] == 'editCocktail') {
                    $thoseIng = sizeof($ing);
                    // var_dump($thoseIng);
                    for ($i = 0; $i < $thoseIng  ; $i++ ){
                        
                        echo '<div class="row">
                        <input type="text" class= "ing" name="quantity" style="width:40px; margin-right:-10px; padding:10px;" value="'.$ing[$i]["comp_Quantite"].'" required/>
                        
                        <select name="unite" class= "ing" style="width:40px; margin-right:-10px; padding:10px;">
                            <option selected value="'.$ing[$i]["comp_Unite"].'"> '.$ing[$i]["comp_Unite"].'</option>
                            <option value="cl">cl</option>
                            <option value="g">g</option>
                            <option value="tranche">tranche(s)</option>
                            <option value="rondelle">rondelle(s)</option>
                            <option value="trait">trait(s)</option>
                            <option value="zeste">zeste(s)</option>
                            <option value="morceau">morceau(x)</option>
                            <option value="goutte">goutte(s)</option>
                            <option value="feuille">feuille(s)</option>
                            <option value="baton">baton(s)</option>
                            <option value="cuillère">cuillère(s)</option>
                        </select>
                        
                        <input type="text" class= "ing" name="value" value="'.$ing[$i]["Ing_Nom"].'" style="width:279px;" required/>
        
                        <button class="remove" value="enlever" onclick="removeRow(this)"><svg id="remove" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" "><path fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg></button>
                    </div>';
                    }
                } else {
                    echo '
                    <div class="row">
                    <input type="text" class= "ing" name="quantity" style="width:40px; margin-right:-10px; padding:10px;" value="" required/>
                    
                    <select name="unite" class= "ing" style="width:40px; margin-right:-10px; padding:10px;">
                        <option selected value="cl">cl</option>
                        <option value="g">g</option>
                        <option value="tranche">tranche(s)</option>
                        <option value="rondelle">rondelle(s)</option>
                        <option value="trait">trait(s)</option>
                        <option value="zeste">zeste(s)</option>
                        <option value="morceau">morceau(x)</option>
                        <option value="goutte">goutte(s)</option>
                        <option value="feuille">feuille(s)</option>
                        <option value="baton">baton(s)</option>
                        <option value="cuillère">cuillère(s)</option>
                    </select>
                    
                    <input type="text" class= "ing" name="value" value="" style="width:279px;" required/>
    
                    <button class="remove" value="enlever" onclick="removeRow(this)"><svg id="remove" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" "><path fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg></button>
                </div>
    
                <div class="row">
                    <input type="text" class= "ing" name="quantity" style="width:40px; margin-right:-10px; padding:10px;" value="" required/>
                    
                    <select name="unite" class= "ing" style="width:40px; margin-right:-10px; padding:10px;">
                        <option selected value="cl">cl</option>
                        <option value="g">g</option>
                        <option value="tranche">tranche(s)</option>
                        <option value="rondelle">rondelle(s)</option>
                        <option value="trait">trait(s)</option>
                        <option value="zeste">zeste(s)</option>
                        <option value="morceau">morceau(x)</option>
                        <option value="goutte">goutte(s)</option>
                        <option value="feuille">feuille(s)</option>
                        <option value="baton">baton(s)</option>
                        <option value="cuillère">cuillère(s)</option>
                    </select>
                    
                    <input type="text" class= "ing" name="value" value="" style="width:279px;" required/>
    
                    <button class="remove" value="enlever" onclick="removeRow(this)"><svg id="remove" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" "><path fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg></button>
                </div>
    
                <div class="row">
                    <input type="text" class= "ing" name="quantity" style="width:40px; margin-right:-10px; padding:10px;" value="" required/>
                        
                    <select name="unite" class= "ing" style="width:40px; margin-right:-10px; padding:10px;">
                        <option selected value="cl">cl</option>
                        <option value="g">g</option>
                        <option value="tranche">tranche(s)</option>
                        <option value="rondelle">rondelle(s)</option>
                        <option value="trait">trait(s)</option>
                        <option value="zeste">zeste(s)</option>
                        <option value="morceau">morceau(x)</option>
                        <option value="goutte">goutte(s)</option>
                        <option value="feuille">feuille(s)</option>
                        <option value="baton">baton(s)</option>
                        <option value="cuillère">cuillère(s)</option>
                    </select>
                        
                    <input type="text" class= "ing" name="value" value="" style="width:279px;" required/>
    
                    <button class="remove" value="enlever" onclick="removeRow(this)"><svg id="remove" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" "><path fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg></button>
                </div>
    
            ';
                }
            ?>
            </div>

        <button class="addInput" type="button" value="ajouter" onclick="addRow()"><svg class="iconCircle" id="addItem" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g>
        <rect fill="none" height="24" width="24"/></g><g><g><path d="M19,13h-6v6h-2v-6H5v-2h6V5h2v6h6V13z"/></g></g></svg><h3>Ajouter un ingrédient</h3></button>

    </div>

    <script>
        
        function addRow() {
            let i=1;
            document.querySelector('#addIngredient').insertAdjacentHTML(
                'beforeend',
                `<div class="row">
                    <input type="text" class= "ing" name="quantity" style="width:40px; margin-right:-10px; padding:10px;" value="" required/>
                    
                    <select name="unite" class= "ing" style="width:40px; margin-right:-10px; padding:10px;">
                        <option selected value="cl">cl</option>
                        <option value="g">g</option>
                        <option value="tranche">tranche(s)</option>
                        <option value="rondelle">rondelle(s)</option>
                        <option value="trait">trait(s)</option>
                        <option value="zeste">zeste(s)</option>
                        <option value="morceau">morceau(x)</option>
                        <option value="goutte">goutte(s)</option>
                        <option value="feuille">feuille(s)</option>
                        <option value="baton">baton(s)</option>
                        <option value="cuillère">cuillère(s)</option>
                    </select>
                    
                    <input type="text" class= "ing" name="value" value="" style="width:279px;" required/>

                    <button class="remove" value="enlever" onclick="removeRow(this)"><svg id="remove" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" "><path fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg></button>
                </div>`      
            )                                                
        }

        function removeRow(input) {
            input.parentNode.remove()
        }        
     
    </script>

    <div class="writeIn">

        <h3>Choisir une ou plusieurs bases</h3>
        <div class="whichBase">
            <?php 

                require('./components/witchBases.php'); 
            ?>
        </div>
    </div>

    <div class="textarea" width="100%">
        <h3>Décrire les étapes</h3>
        <textarea name="stepByStep" charswidth="23" name="title" type="textarea" placeholder="Décrire les étapes. Sautez des lignes. Soyez respectueux pour les autres comme pour vous." value=""><?php if ($_GET['action'] == 'editCocktail') { echo $coc['Coc_Recette']; }?></textarea>
    </div>


    <input type="hidden" name="tabIng[]" id="tabIng" value = "" ><!--champs non affiché qui permet de poster les ingredients en tableau-->
    
    <input type="hidden" name="catCoc[]" id="catCoc" value = ""><!--champs non affiché qui permet de poster les categories selectionnées en tableau-->
    <div class="veryAll">
        <div class="allButtons">
            
            <button class="remove"><svg id="close" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" fill="#000000"><path fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg></button>
            
            <button class="iconCircleSend" height="60px" width="60px" type="submit" id='send' onclick="ing()" value=""><svg id="sendIt" xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/></svg></button>    
        </div>
        <?php
        // var_dump($coc['Coc_Id']);
            if ($_GET['action'] == 'editCocktail') { 
                echo '<button class="deleteComplet"> <a href="?action=deleteCoc&id='.$coc['Coc_Id'].'" >Supprimer le cocktail</a></button>';} 
        ?>
    </div>
    <script>
        
    function ing(){//permet de regrouper les ingredients dans un tableau pour le poster qd on clic sur envoyer

        let tabIng  = [];
        let input = document.querySelectorAll("div.row > .ing");

        //alert(input.length);
        for(let i=0;i<input.length;i+=3){//selectionne la premiere ligne de chaque div            
            let tab = [];
            for(let y=i;y<i+3;y++){
                /*if(input[y].value === "" && input[y+1].value === "" && input[y+2].value === ""){
                    alert ("ingredient(s) vides, non intégré");
                    break;

                }
                else if ((input[y].value === "" || input[y+1].value === "" || input[y+2].value === "")){
                    alert ("ingredient(s) imcomplet(s)");
                    throw new Exception('ingredient(s) imcomplet(s)');
                    break;

                }
                else{
                    tab.push(input[y].value);
                    alert(tab.length);
                    alert('ingredient integré');
                }*/
                    tab.push(input[y].value);
                    //alert(tab.length);
                    //alert('ingredient integré');
            }
            tabIng.push(tab);
            //alert(tabIng.length);
        }

        for(let element of tabIng){//affecte la valeur à la variable qui sera postée
            var tt = document.getElementById('tabIng');
            tt.setAttribute('value', tabIng);
            //alert(tt.length);
        }
    }
    </script>  
</form>

<?php 
    include('./components/footer.php');
?>

