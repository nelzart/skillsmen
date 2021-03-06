
<?php
$title =  $coc[1]  ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/myGlobalStyle.css">

    <title><?= $title ?></title>
</head>
<body>

<?php require('./components/menu.php'); ?>
	
	<div id="#html-template" class="container">

		<div class="myCover" style="background-image:url('<?php if(empty($img)){ echo '../skillsmen/public/images/cocktails.jpg';} else{ echo $img[0]["Img_Adresse"]. '/' .$img[0]['Img_Nom'];} ?>')">
			<div class="gradient"> 
                
            
				<h2>• <?= $coc['Coc_Nom'] ?> •</h2>
              
				<?php 
                //var_dump($coc["Uti_Id"], $_SESSION['Uti_Id']);
                
                if(isset($_SESSION['Uti_Id'])){ 
                    if($coc['Uti_Id'] === $_SESSION['Uti_Id']){
                        echo '
                                <a href="?action=editCocktail&id='.$coc['Coc_Id'].' " class="iconCover" height="15%" width="15%">
                                    <svg id="edit" xmlns="http://www.w3.org/2000/svg" class="iconCoverSVG"  height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/></svg>	  
                                </a> 
                            ';
                    } else {
                        echo '<label name="favorite" class="iconCover">
                    <input type="checkbox" name="favorite" value="favorite" style="display:none;">
                        <div class="favorite-checkbox">
                            <svg id="favorite" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                        </div> 
                    </label>';
                     }
                }   
                    
                    ?>
                    
                
                
				<div class="iconCover print" style="margin-left:20px;" onclick="convertHTMLToPDF()" id="printPDF" height="15%" width="15%">
                    <svg id="print" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M19 8H5c-1.66 0-3 1.34-3 3v6h4v4h12v-4h4v-6c0-1.66-1.34-3-3-3zm-3 11H8v-5h8v5zm3-7c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm-1-9H6v4h12V3z"/></svg>	  
				</div>
                			  
			</div>
		</div>
        


        <div id="thoseIngredients" class="thoseIngredients">
            <div class="iconCircle slideIn slideToggle" type="button" value="ajouter">
                <svg id="slideIn" class="slideToggle" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="20px" viewBox="0 0 24 24" width="20px" fill="#000000"><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
            </div>

            <h3>• Ingrédients •</h3> 
            
            <?php 
                foreach ($ing as $composition){
                echo '<span>'
                            .$composition['comp_Quantite'].' 
                            '.$composition['comp_Unite'].' 
                            '.$composition['Ing_Nom']. 
                        '</span>';
                }
            ?> 
            
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
            <h3 class="unvariable">Une recette proposée par <a href = "?action=getProfil&id=<?= $coc['Uti_Id'] ?>" class="author"><?= $coc[7];  ?> </a></h3> <br>
            <p><?= $coc[2] ?></p><br>
        </div>
        
        <div class="thoseComments" >

            <button class="addInput" id="addInput" type="button" onclick="addRow()" value="ajouter">
                <svg class="iconCircle" id="addItem" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g>
                <rect fill="none" height="24" width="24"/></g><g><g><path d="M19,13h-6v6h-2v-6H5v-2h6V5h2v6h6V13z"/></g></g></svg>
            </button>
<script>
    function addRow() {
        let myBtn = document.querySelector('#addInput');
        let mySection = document.querySelector('#newSection');
        myBtn.style.display = 'none';
        mySection.style.padding = '40px 0px 0px 0px';
        document.querySelector('#comments').insertAdjacentHTML(
            'afterbegin',
            `<form class="commentThis" action="?action=addComment&id=<?=$coc['Coc_Id']?>" method="post">
                <textarea class="sendComment"  name="sendComment" charswidth="23" name="title" type="textarea" placeholder="Entrez votre commentaire. Soyez respectueux pour les autres comme pour vous." value=""></textarea>
                <button style="box-shadow: 0px 0px 0px; width: 50px"  type="submit" id='send' value=""><svg id="sendIt" xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 0 24 24" width="30px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/></svg></button>
            </form>
            `      
        )                                                
    }
</script>
            <div id="newSection" class="newSection">
                <div class="sectionTitle"></div>
                <h2>Commentaires</h2>
            </div>

            <div id="comments" class="comments">
            <?php 
            if(!empty($com)){
                foreach($com as $comment){ 
                    echo '
                        <a href="?action=getProfil&id=' . $comment['Uti_Id']. '" class="author" >' . $comment[6] .' <span class="unvariable"> Le ' 
                        . date("d-m-Y ",strtotime($comment['Com_dateCreation'])) 
                        . ' à ' 
                        . date("H:i",strtotime($comment['Com_dateCreation'])) . '
                        </span></a>
                        <div class="thisComments">
                        “ ' . $comment[1] .' ”
                        </div> 
                        <div class="splitComments"></div>
                
                    ';
                    
                
                }
            } else {
                echo "<div class='thisComments'> Aucun commentaire n'a été posté </div> ";
            }

                //var_dump($cocs);
                //var_dump($comment);
                // var_dump($coc['Coc_Id']);
                // var_dump($_POST['sendComment']);
                // var_dump($_SESSION['Uti_Id']);
            ?>

    
    
</div>
        </div>
    </div>

<?php 
//var_dump($coc['Coc_Id']);
    include('./components/footer.php');

?>


<script>

        function convertHTMLToPDF() {
            const { jsPDF } = window.jspdf;

            let doc = new jsPDF();
            let pdfjs = document.getElementById('html-template');

            doc.addImage("./public/images/logo_typo.png", "JPEG", 55, 5, 100, 20);
            doc.setFont("Ogg");
            doc.text(" • <?=$coc['Coc_Nom']?> •", 100, 35, null, null, "center");
            doc.text(" Une recette proposée par <?=$coc[7];?>", 100, 45, null, null, "center");
            doc.text("Liste des Ingredients", 20, 65);
            doc.text("<?php foreach ($ing as $composition){?>
                        <?= $composition['comp_Quantite'] . $composition['comp_Unite'] ?> de <?php echo $composition['Ing_Nom']; }?>\n", 20, 75);
            doc.text(" <?= $coc[2] ?>", 20, 165, null, null, "center");
            doc.html(pdfjs, {
                callback: function(doc) {
                    doc.save("output.pdf");
                },
                x: 10,
                y: 10
            });
            doc.output('dataurlnewwindow');
        }


    </script>

</body>
</html>