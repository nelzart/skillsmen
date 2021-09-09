
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
		
		<div class="myCover" style="background-image:url('../public/images/cocktails.jpg')">
			<div class="gradient">    
				<h2>• noTitle •</h2>
				
				
                <label name="favorite" class="iconCover">
                <input type="checkbox" name="favorite" value="favorite" style="display:none;">
                    <div class="favorite-checkbox">
                        <svg id="favorite" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                    </div> 
                </label>
                
				<div class="iconCover print" style="margin-left:20px;" height="15%" width="15%">
                    <svg id="print" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M19 8H5c-1.66 0-3 1.34-3 3v6h4v4h12v-4h4v-6c0-1.66-1.34-3-3-3zm-3 11H8v-5h8v5zm3-7c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm-1-9H6v4h12V3z"/></svg>	  
				</div>			  
			</div>
		</div>
		

        <div id="thoseIngredients" class="thoseIngredients">
            <div class="iconCircle slideIn slideToggle" type="button" value="ajouter">
                <svg id="slideIn" class="slideToggle" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="20px" viewBox="0 0 24 24" width="20px" fill="#000000"><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
            </div>

            <h3>• Ingrédients •</h3> 

            <span>2 traits d'angostura bites</span> 
            <span>2 zestes d'orange</span> 
            <span>2 morceaux de sucre</span> 
            <span>10cl de whiskey</span> 
            <span>eau gazeuse</span> 
            
        </div>

        <script>
            var toggleBtn = document.querySelector('.slideToggle');
            var ingredients = document.querySelector('.thoseIngredients');

            toggleBtn.addEventListener('click', function() {
                toggleBtn.classList.toggle('is-closed');
                ingredients.classList.toggle('is-closed');
            })

        </script>

        <div class="thoseSteps">
            <h3 class="unvariable">Une recette proposée par <span class="author">Userman </span></h3> <br>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla lobortis tortor quis vulputate faucibus. </p><br>
                
            <p>Phasellus eu nisl vel arcu efficitur blandit vitae sed dui. Donec feugiat velit risus, ut lobortis urna euismod at. </p><br>
            
            <p>Mauris dictum ut tortor vel rhoncus. Sed molestie purus eu diam finibus, et luctus ex molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eget pulvinar enim. Phasellus euismod, lacus sed scelerisque ultrices, arcu risus suscipit orci, vitae consectetur nulla elit id lorem. Aenean vehicula risus non lobortis dapibus. Phasellus vel posuere diam. Etiam hendrerit semper dignissim.</p>
        </div>

        <div class="thoseComments" >

            <button class="addInput" id="addInput" type="button" onclick="addRow()" value="ajouter">
                <svg class="iconCircle" id="addItem" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g>
                <rect fill="none" height="24" width="24"/></g><g><g><path d="M19,13h-6v6h-2v-6H5v-2h6V5h2v6h6V13z"/></g></g></svg>
            </button>

            <div id="newSection" class="newSection">
                <div class="sectionTitle"></div>
                <h2>Commentaires</h2>
            </div>


    
            <div id="comments" class="comments">
                <div class="author" >$author <span class="unvariable">le 09/07/21 à 21h06</span></div>
                <div class="thisComments">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla lobortis tortor quis vulputate faucibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla lobortis tortor quis vulputate faucibus.
                </div>    
            </div>

            <div class="splitComments"></div>
    
    
        </div>
    </div>

<?php 
    include('../components/footer.php');
?>

<script>
    function addRow() {
        let myBtn = document.querySelector('#addInput');
        let mySection = document.querySelector('#newSection');
        myBtn.style.display = 'none';
        mySection.style.padding = '40px 0px 0px 0px';
        document.querySelector('#comments').insertAdjacentHTML(
            'afterbegin',
            `<form class="commentThis" action="../index.php?action=addComment" method="post">
                <textarea class="sendComment"  name="sendComment" charswidth="23" name="title" type="textarea" placeholder="Entrez votre commentaire. Soyez respectueux pour les autres comme pour vous." value=""></textarea>
                <button style="box-shadow: 0px 0px 0px; width: 50px"  type="submit" id='send' value=""><svg id="sendIt" xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 0 24 24" width="30px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/></svg></button>
            </form>
            `      
        )                                                
    }


    </script>

</body>
</html>