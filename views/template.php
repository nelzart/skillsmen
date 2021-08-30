<?php

$title = "Accueil";

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
    <?php include('../components/menu.php'); ?>

    <div class="container">

        <div class="entete">
            <svg id="embleme" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 206.11 158.44"><defs><style>.cls-1{fill:#bf8f53;}.cls-2{fill:none;stroke:#bf8f53;stroke-width:4px;}</style></defs><g id="Calque_2" data-name="Calque 2"><g id="Calque_3" data-name="Calque 3"><circle class="cls-1" cx="3.89" cy="79.22" r="3.89"/><circle class="cls-1" cx="202.22" cy="79.22" r="3.89"/><circle class="cls-2" cx="103.4" cy="79.22" r="77.22"/><path class="cls-1" d="M148.84,130.21v-53h-7.4v0l-17.62,24.19L120,96.6l18.8-19.4h-5l-16,16.68-12.16-15.3a16.39,16.39,0,0,0,7.89-3.24A11.56,11.56,0,0,0,118,65.79a13.44,13.44,0,0,0-.25-2.69h0a14.71,14.71,0,0,0,.17-2.23,11.31,11.31,0,0,0-1.3-5.62,12.09,12.09,0,0,0-4.13-4.15,37.27,37.27,0,0,0-6.84-3.19V32.4a30.48,30.48,0,0,1,9.84,2.45L116.7,32a31.51,31.51,0,0,0-11.06-2.53V27.48a30.49,30.49,0,0,1,9.77,2.43L116.63,27a31.7,31.7,0,0,0-12.74-2.57q-6.65,0-10.88,3.4a10.81,10.81,0,0,0-4.23,8.81A14.21,14.21,0,0,0,89,39.42h0a11.65,11.65,0,0,0-.19,2.16,10.87,10.87,0,0,0,2.82,7.85q2.81,3,10.17,5.48v15.9h-.39a34.23,34.23,0,0,1-13.26-2.21V72q4.71,2,13.53,1.94h.12v1.84h-.31a34.27,34.27,0,0,1-13.27-2.2v3.36q4.51,1.86,12.79,1.93L83.16,101.37h0L72.66,87l-7.07-9.72,0,0V77.2H57.94V134h4.28l16.11-20.27h9L102,133.82l.13.18h46.73v-3.79ZM68.56,119.88l-6.83,8.59V81h1.83l17.11,23.51,0,.07Zm12.78-10L83,107.76l1.56,2.13Zm20.38,17-9.61-13.18h9.61Zm0-17H89.35l-3.83-5.26,0-.06h0l10-12.66,6.19-7.78Zm.12-58.46A34.63,34.63,0,0,1,96.52,49a8.91,8.91,0,0,1-3.07-2.91A33.76,33.76,0,0,0,101.78,50l.06,0Zm0-4.9a34.68,34.68,0,0,1-5.39-2.48A9,9,0,0,1,93.27,41a7.2,7.2,0,0,1-.65-1.63h0a7.8,7.8,0,0,1,2.92-4.52,12,12,0,0,1,6.3-2.34Zm0-17.06a15.86,15.86,0,0,0-8.74,3.31,7.87,7.87,0,0,1,2.36-2.9,12.16,12.16,0,0,1,6.38-2.36Zm20.55,80.42,0,0,1.53-2.1.08.1,1.61,2h-3.2Zm-5.12-10.48,4.18,5.26.08.11-1.43,2-.08-.11-4.19-5.75Zm.37,10.48H106l7.07-6.24Zm-12-58.48a33,33,0,0,1,3.78,1.77,10.5,10.5,0,0,1,3.73,3.25c-.19-.13-.38-.27-.59-.4a36.55,36.55,0,0,0-6.92-3.23Zm0,4.91a30.39,30.39,0,0,1,3.85,1.8,10.58,10.58,0,0,1,3.76,3.27,7,7,0,0,1,.82,1.87h0a8.59,8.59,0,0,1-3.22,4.84,12.5,12.5,0,0,1-5.21,2.32Zm0,17.32a16.5,16.5,0,0,0,7.44-2.93,9.46,9.46,0,0,1-2.15,2.34,12.6,12.6,0,0,1-5.29,2.33Zm0,11L111.44,92l-.06,0,3.74,4.71-3.28,3.42-6.21,6.21Zm0,29.05h9.42l-5.65,7.74-3.77,5.18Zm2.06,16.53,12-16.53h.66l12,16.53Zm29.5,0-12-16.53h3.45l13.14,16.53Zm7.86-1.93-6.63-8.35.06-.05-12.13-15.27-.08-.1,11.21-15.39L143.41,81h1.64Z"/></g></g></svg>
            
            <p style="text-align:center; padding: 0px 40px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum quidem aliquid vel tenetur perspiciatis quis labore quasi ea officia ipsam? Eaque libero non commodi quae hic tenetur, sint beatae animi?</p>
        </div>

    <div class="galerie">
        <div id="newSection" class="newSection">
            <div class="sectionTitle"></div>
            <h2>base $maVariable</h2>
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

    <div class="galerie">
        <div id="newSection" class="newSection">
            <div class="sectionTitle"></div>
            <h2> $maVariable </h2>
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

    </div>

    <?php 
    include('../components/footer.php');
?>
</body>
</html>

