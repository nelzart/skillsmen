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
    
<div class="container">
    <div class="writeIn">

    <div class="title">
        <label for="title">Changer titre</label>
        <input name="title" type="text" placeholder="Old Fashioned" value=""></input>
    </div>

<br>

    <div id="addIngredient">
        <div class="row">
            <input type="text" name="quantity" style="width:40px; margin-right:-15px; padding:10px;" value="" />
            <input type="text" name="value" value="" />
            <button class="iconCircle" value="enlever" onclick="removeRow(this)">X</button>
        </div>

    </div>
    <button class="iconCircle" type="button" value="ajouter" onclick="addRow()">+</button>
</div>

    <script>
        function addRow () {
            document.querySelector('#addIngredient').insertAdjacentHTML(
                'beforeend',
                `<div class="row">
                    <input type="text" name="quantity" style="width:10px; margin-right:-15px;" value="" />
                    <input type="text" name="value" value="" />
                    <button class="iconCircle" value="enlever" onclick="removeRow(this)">X</button>
                </div>`      
            )
        }

        function removeRow (input) {
            input.parentNode.remove()
        }
        
    </script>


    <div>
        <div class="whichBase">
        <div class="selectBase">•  tequila • </div>
        <div class="selectBase">•  whiskey • </div>
        <div class="selectBase active">• gin • </div>
        <div class="selectBase">•  vodka • </div>
        <div class="selectBase">•  cognac • </div>
        <div class="selectBase">•  liqueur • </div>
        <div class="selectBase">•  rhum • </div>
        <div class="selectBase">•  champagne • </div>
        <div class="selectBase">• sans alcool • </div>
    </div>
    </div>

        <div class="textarea">
            <h2>Zone de texte</h2>
            <textarea cols="10" rows="13" charswidth="23" name="title" type="textarea" placeholder="Old Fashioned" value=""></textarea>
        </div>

</div>


<script></script>

</body>
</html>