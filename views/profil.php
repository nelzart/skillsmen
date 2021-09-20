
<?php include('./components/menu.php'); ?>

<div class="container">
		
		<div class="myCover profilCover" style="background-image:url('<?php if(!empty($img[0][2])){ echo $img[0][2]. '/' .$img[0][1];} ?>')">
			<div class="gradient">    
                <div class="profilImg myCover" style="background-image:url('../public/images/userman.jpg')">
                    <div class="gradient"></div>
                    <?php echo '<h2>• ' .  $_SESSION['Uti_Pseudo']. ' •</h2>' 
                    ?>
                </div>
                <button id="editThisProfil" class="iconCover" style="margin-left:20px;" height="15%" width="15%">
                    <svg id="edit" xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000">
                        <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/>
                    </svg> 
                </button>			  
            </div>
        </div>
		

        <div class = "galerie">
            <div id="newSection" class="newSection">
                <div class="sectionTitle"></div>
                <h2>ses cocktails publiés</h2>
            </div>

            <div class="result">

            <?php                 
                    foreach($cocPub as $cp){
                        echo '
                        <a href="?action=getcocktail&id='.$cp['Coc_Id'].'"><div class="tuiles myCover" style="background-image:url(./public/images/' . $cp['Img_Nom'] .')">
                        <div class="gradient"> <h2>•'. $cp['Coc_Nom'] .' •</h2></div></div></a>';
                    }
                            var_dump($datas);
                        //     foreach($cocs as $res){            
                        //         var_dump($res);

                        //     echo '
                        //     <a href="?action=getcocktail&id='.$res['Coc_Id'].'"><div class="tuiles myCover" style="background-image:url(./public/images/' . $res['Img_Nom'] .')">
                        //     <div class="gradient"> <h2>•'. $res['Coc_Nom'] .' •</h2></div></div></a>';
                        // }
                        // var_dump($cocs);
                   // var_dump($cocPub);
                //var_dump($resultCoc);
                //var_dump($resultImg);
                //var_dump($result[0]);
               // var_dump($result);
                //var_dump($mess);
                //var_dump($imgs);

                ?>
            </div>
        </div>
        <div class="galerie">
            <div id="newSection" class="newSection">
                <div class="sectionTitle"></div>
                <h2>ses cocktails préférés</h2>
            </div>
            
            <div class="result">

                <a href=""><div class="tuiles myCover" style="background-image:url('../public/images/cocktails.jpg')">
                <div class="gradient"> <h2>• tuile •</h2></div></div></a>
                <a href=""><div class="tuiles myCover" style="background-image:url('../public/images/cocktails.jpg')">
                <div class="gradient"> <h2>• tuile •</h2></div></div></a>
                <a href=""><div class="tuiles myCover" style="background-image:url('../public/images/cocktails.jpg')">
                <div class="gradient"> <h2>• tuile •</h2></div></div></a>
                <a href=""><div class="tuiles myCover" style="background-image:url('../public/images/cocktails.jpg')">
                <div class="gradient"> <h2>• tuile •</h2></div></div></a>
                <a href=""><div class="tuiles myCover" style="background-image:url('../public/images/cocktails.jpg')">
                <div class="gradient"> <h2>• tuile •</h2></div></div></a>

            </div>
        </div>

        

        <div class="thoseComments" >

            <div id="newSection" class="newSection"  style="margin-top: 30px">
                <div class="sectionTitle"></div>
                <h2>Ses Commentaires publiés</h2>
            </div>


            <div id="comments" class="comments">
                <div class="author" >$author <span class="unvariable">le 09/07/21 à 21h06</span></div>
                <div class="thisComments">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla lobortis tortor quis vulputate faucibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla lobortis tortor quis vulputate faucibus.
                </div> <br>
            </div>
            <div class="showReciepe"><a href="">• voir la recette •</a></div>    

            <div class="splitComments"></div>

            <div id="comments" class="comments">
                <div class="author" >$author <span class="unvariable">le 09/07/21 à 21h06</span></div>
                <div class="thisComments">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla lobortis tortor quis vulputate faucibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla lobortis tortor quis vulputate faucibus.
                </div> <br>
            </div>
            <div class="showReciepe"><a href="">• voir la recette •</a></div>    

            <div class="splitComments"></div>
    
        </div>
    </div>



    <div class="form-wrapper" id="wrapper-Edit">
        <form class="form-login" style="align-items:center ">

            <div id='preview' class="profilImg myCover thisProfilImg" style="background-image:url('../skillsmen/public/images/userman.jpg')">
                <div class="gradient"></div>
            </div>

            <div class="iconCover Profil" height="15%" width="15%">
                <svg id="edit" xmlns="http://www.w3.org/2000/svg" class="iconCoverSVG"  height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/></svg>	  
                <input type="file" class="photoUpload" id="profilImg" name="photo" accept="image/png, image/jpg, image/jpeg"/>
            </div>	

            <label for='Uti_Pseudo'>Changer votre nom d'utilisateur <br>
            <input type="text" class="input-username" name='Uti_Pseudo' placeholder="Votre nom d'utilisateur"  value=""></label>
            
    
            <label for="Uti_Mdp">Votre mot de passe actuel<br>
            <input type="password" class="input-password" placeholder="Entrer le mot de passe" name="Uti_Mdp"  value=""></label>

            <label for="new_Uti_Mdp">Définir votre nouveau mot de passe <br>
            <input type="password" class="input-password" placeholder="Entrer le mot de passe" name="Uti_Mdp"  value=""></label>
                        

            <label for='new_Uti_Mdp2'>Vérification de votre nouveau mot de passe <br>
            <input type="password" class="input-password" placeholder="Entrer le mot de passe" name="Uti_Mdp2"  value=""></label>
            
            <div class="allButtons">
                <button id="closeThis" class="remove">
                    <svg id="close" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" fill="#000000"><path fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
                    </svg>
                </button>
                        
                <button class="iconCircleSend" height="60px" width="60px" type="submit" id='send'  value="">
                    <svg id="sendIt" xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/>
                    </svg>
                </button>    
            </div>
        </form>                
    </div>

        <script>
            let w = window, d = document,
                file = document.getElementById('profilImg');
                ctn = document.getElementById('preview');
            file.addEventListener('change', function() {
                let cURL = window.URL || window.webkitURL;
                let imgURL = cURL.createObjectURL(this.files[0]);
                ctn.setAttribute("style", "background-image:url('" +imgURL + "')");
            })();

        </script>  
        <script>
            let modalBox = document.getElementById('wrapper-Edit');
            let openModal = document.getElementById('editThisProfil');
            let closeModal = document.getElementById('closeThis');
            
            openModal.addEventListener('click', function() {
                modalBox.style.display= 'flex';
            });
            closeModal.addEventListener('click', function() {
                modalBox.style.display= 'none';
            });
            
        </script>
    
<?php 
    include('./components/footer.php');
?>
