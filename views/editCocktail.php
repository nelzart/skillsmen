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
    
<div class="writeIn">

    <div class="title">
        <label for="title">Changer titre</label>
        <input name="title" type="text" placeholder="Old Fashioned" value=""></input>
    </div>

<br>

    <div id="addIngredient">

        <label for="title">Ingrédient</label>
        <input name="title" type="text" placeholder="Old Fashioned" value=""></input>
        
        <label for="title">Ingrédient</label>
        <input name="title" type="text" placeholder="Old Fashioned" value=""></input>
        

    </div>
    <button onclick="delIngredient()" >Supprimer ingrédient</button>
    <button onclick="addIngredient()" class="active">Ajouter ingrédient</button>

</div>

    <script>
        function addIngredient() {
            document.getElementById("addIngredient").innerHTML += 
                  "<label for='ingredient'>Ingrédient</label><input style='width: 40px; margin-right: -15px'></input><input name='ingredient' type='text' placeholder='ingredient ' value=''></input>"
        }

        function delIngredient() {
            document.getElementById("addIngredient").innerHTML -= 
                  "<label for='ingredient'>Ingrédient</label><input name='ingredient' type='text' placeholder='ingredient ' value=''></input>"
        }
    </script>


    <div class="whichBase">
        <div class="selectBase"> test</div>
        <div class="selectBase"> test</div>
        <div class="selectBase active"> test actif</div>
        <div class="selectBase"> test</div>
        <div class="selectBase"> test</div>
        <div class="selectBase"> test</div>
        <div class="selectBase"> test</div>
        <div class="selectBase"> test</div>
        <div class="selectBase"> test</div>
    </div>
<br>
    <div class='textarea'>
        <label for="title">Zone de texte</label>
        <textarea name="title" type="textarea" placeholder="Old Fashioned" value=""></textarea>
    </div>

</body>
</html>