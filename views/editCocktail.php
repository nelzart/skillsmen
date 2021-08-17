<?php
$title = "créer recette";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/myGlobalStyle.css">

    <title><?= $title ?></title>
</head>
<body>

<?php require('../components/menu.php'); ?>

	
	<div class="container">
		<form id="insertCocktail" name="insertCocktail" action="POST" enctype="multipart/form-data">
		
		<div class="myCover" style="background-image:url('../public/images/cocktails.jpg')">
			<div class="gradient">    
				<h2>• noTitle •</h2>
				
				<div class="iconCover" height="15%" width="15%">
					<svg id="edit" xmlns="http://www.w3.org/2000/svg" class="iconCoverSVG"  height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/></svg>	  
					<input type="file" class="photoUpload" accept="image/png, image/jpg, image/jpeg"/>
				</div>			  
			</div>
		</div>
		

    <div class="writeIn">

    <div class="title">
        <label for="title"><h3>Choisir un nom</h3></label>
        <input name="title" type="text" placeholder="nom du cocktail" value=""></input>
    </div>


    <div id="addIngredient">
		<h3>Liste des ingrédients</h3>
        <div class="row">
            <input type="text" name="quantity" style="width:40px; margin-right:-15px; padding:10px;" value="" />
            <input type="text" name="value" value="" style="width:279px;"/>
            <button class="remove" value="enlever" onclick="removeRow(this)"><svg id="remove" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" "><path fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg></button>
        </div>
        <div class="row">
            <input type="text" name="quantity" style="width:40px; margin-right:-15px; padding:10px;" value="" />
            <input type="text" name="value" value="" style="width:279px;"/>
            <button class="remove" value="enlever" onclick="removeRow(this)"><svg id="remove" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"  fill="#000000"><path fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg></button>
        </div>
        <div class="row">
            <input type="text" name="quantity" style="width:40px; margin-right:-15px; padding:10px;" value="" />
            <input type="text" name="value" value="" style="width:279px;"/>
            <button class="remove" value="enlever" onclick="removeRow(this)"><svg id="remove" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" fill="#000000"><path fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg></button>
        </div>

    </div>
    <button class="addInput" type="button" value="ajouter" onclick="addRow()"><svg class="iconCircle" id="addItem" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g>
<rect fill="none" height="24" width="24"/></g><g><g><path d="M19,13h-6v6h-2v-6H5v-2h6V5h2v6h6V13z"/></g></g></svg><h3>Ajouter un ingrédient</h3></button>
</div>

<script>
    
    function addRow() {
        document.querySelector('#addIngredient').insertAdjacentHTML(
            'beforeend',
            `<div class="row">
                <input type="text" name="quantity" style="width:10px; margin-right:-15px;" value="" />
                <input type="text" name="value" value="" style="width:279px; "/>
                <button class="remove" value="enlever" onclick="removeRow(this)"><svg id="remove" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#000000"><path fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg></button>
            </div>`      
        )                                                
    }

    function removeRow(input) {
        input.parentNode.remove()
    }        
</script>


<div class="writeIn">

	<h3>Choisir une ou plusieurs bases</h3>
	<?php require('../components/witchBases.php'); ?>
</div>

<div class="textarea">
	<h3>Décrire les étapes</h3>
	<textarea name="stepByStep" charswidth="23" name="title" type="textarea" placeholder="Décrire les étapes. Sautez des lignes. Soyez respectueux pour les autres comme pour vous." value=""></textarea>
</div>
<div class="allButtons">
	<button class="remove"><svg id="close" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" fill="#000000"><path fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg></button>
			
			<button class="iconCircleSend" height="60px" width="60px" type="submit" id='send' value=""><svg id="sendIt" xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/></svg></button>    
		</div>
</div>


</form>
<script></script>

</body>
</html>