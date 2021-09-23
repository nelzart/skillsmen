<?php
    // if (!isset($_SESSION['uti_Droit']) === 2 || empty($_SESSION['user_id'])) {
    //     header('location: ./accueil.php');
    //     die;
    // }
    

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./public/dashboard.css">

    <title>Document</title>
</head>
<body>
    <div class="sidenav">
        <svg id="myLogo" 
        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 439.44 75.97"><defs><style>.cls-1{font-size:72px;}.cls-1,.cls-1,.cls-3{font-family:Ogg-Roman, Ogg;}.cls-3{font-size:12px;}</style></defs><g id="Calque_2" data-name="Calque 2"><g id="Calque_1-2" data-name="Calque 1"><text class="cls-1" transform="translate(18.28 50.63)">SKILLSMAN</text><circle class="cls-2" cx="3.89" cy="26.27" r="3.89"/><circle class="cls-2" cx="435.56" cy="26.27" r="3.89"/><text class="cls-3" transform="translate(159.61 64.52)">the art of being a man</text><rect class="cls-4" x="21.3" y="61.33" width="104.11" height="1"/><rect class="cls-4" x="312.09" y="61.35" width="104.11" height="1"/></g></g></svg>
            
        <h6>• tableau de bord •</h6>
            <h3><?php echo 'Bonjour '. $_SESSION['Uti_Pseudo']?></h3>
        
        <div id="myBtnContainer">

            <!-- <button id="accueil" class="btn">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
                Accueil
            </button> -->
            <button id="cocktails" class="btn"> 
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M21 5V3H3v2l8 9v5H6v2h12v-2h-5v-5l8-9zM7.43 7L5.66 5h12.69l-1.78 2H7.43z"/></svg>
                Les Cocktails
            </button>
            <button id="ingredients" class="btn">
                <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" height="24px" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                    <g>
                        <g>
                            <path d="M508.88,219.58c-0.416-2.278-1.609-4.342-3.378-5.838c-16.56-14.009-19.356-29.456-21.603-41.867l-0.294-1.617
                                c-0.776-4.236-4.178-7.5-8.442-8.1c-1.472-0.207-3.03-0.313-4.631-0.313c-9.517,0-22.925,4.01-31.426,12.967
                                c-1.45,1.529-2.381,3.477-2.659,5.566c-0.715,5.374-1.083,10.292-1.407,14.631c-1.225,16.351-2.308,18.085-7.289,19.661
                                c-3.122,0.988-5.562,3.441-6.533,6.567c-4.691,15.102-10.916,29.554-18.45,43.189c-3.721-7.104-7.833-13.494-11.66-19.44
                                c-9.36-14.542-16.754-26.03-14.228-40.267c8.186-46.144,4.031-80.904-12.353-103.316c-9.124-12.481-22.122-20.99-37.918-24.965
                                c3.144-24.532,20.192-35.654,29.629-38.183c5.335-1.429,8.501-6.913,7.071-12.248c-1.43-5.334-6.914-8.503-12.247-7.071
                                c-19.485,5.221-40.298,24.388-44.273,55.002c-15.96-0.045-30.455,4.829-42.383,14.359c-21.796,17.415-34.965,49.777-39.142,96.185
                                c-1.257,13.965-10.291,22.113-22.796,33.388c-10.207,9.204-21.577,19.48-30.685,35.015c-11.345-4.62-23.515-7.617-36.223-8.702
                                c3.602-23.552,20.167-34.306,29.421-36.785c5.335-1.429,8.501-6.913,7.071-12.247c-1.43-5.335-6.914-8.503-12.247-7.071
                                c-5.025,1.346-10.136,3.631-15.027,6.789c-2.275-11.229-7.779-21.761-16.113-30.094c-11.166-11.166-26.013-17.315-41.805-17.315
                                c-5.169,0-10.317,0.675-15.302,2.005c-3.457,0.923-6.158,3.624-7.081,7.081c-5.433,20.346,0.433,42.228,15.309,57.107
                                c10.351,10.351,23.87,16.381,38.37,17.208c-1.264,4.138-2.204,8.542-2.75,13.212C50.957,248.915,0,302.899,0,368.563
                                c0,68.839,56.005,124.844,124.843,124.844c25.584,0,49.954-7.604,70.817-22.028c3.286,1.442,6.583,2.83,9.895,4.136
                                c30.096,11.871,60.512,17.891,90.401,17.891c48.076,0,92.696-15.708,129.036-45.427c37.983-31.063,65.977-77.026,80.953-132.92
                                C510.832,296.829,515.143,253.875,508.88,219.58z M215.863,232.724c13.451-12.13,27.36-24.673,29.321-46.448
                                c3.669-40.765,14.336-68.473,31.707-82.352c10.312-8.239,23.058-11.416,37.888-9.434c14.646,1.955,25.952,8.252,33.603,18.718
                                c13.04,17.838,16.003,47.452,8.805,88.018c-3.897,21.961,6.779,38.546,17.103,54.586c5.786,8.989,11.742,18.258,15.792,29.046
                                c-33.703,48.67-84.844,84.163-141.117,97.16c0.48-4.462,0.724-8.957,0.724-13.455c0-45.109-24.051-84.706-60.001-106.647
                                C197.17,249.602,206.644,241.038,215.863,232.724z M93.926,199.51c-8.401-8.402-12.459-20.183-11.233-31.831
                                c1.382-0.146,2.771-0.221,4.165-0.221c10.449,0,20.274,4.069,27.662,11.457c8.402,8.402,12.461,20.184,11.234,31.831
                                c-1.381,0.146-2.771,0.22-4.162,0.22h-0.002C111.138,210.967,101.314,206.898,93.926,199.51z M124.843,473.407
                                c-57.811,0-104.843-47.032-104.843-104.844s47.032-104.844,104.843-104.844c57.812,0,104.845,47.032,104.845,104.844
                                c0,5.764-0.471,11.518-1.402,17.179c-6.433,0.83-12.91,1.357-19.417,1.579c1.37-6.133,2.086-12.4,2.086-18.758
                                c0-11.262-2.167-22.256-6.44-32.675c-2.095-5.108-7.934-7.554-13.047-5.457c-5.109,2.096-7.553,7.937-5.457,13.047
                                c3.281,7.999,4.944,16.438,4.944,25.085c0,6.288-0.891,12.465-2.633,18.446c-14.312-0.921-28.645-3.286-42.767-7.07
                                c-2.876-0.771-5.948-0.219-8.377,1.505c-8.888,6.31-17.846,14.247-23.158,29.465c-1.369,3.922-0.171,8.282,3.01,10.954
                                c18.37,15.431,37.563,28.512,57.333,39.131C159.23,469.145,142.38,473.407,124.843,473.407z M486.627,309.884
                                c-27.437,102.393-98.715,163.523-190.67,163.523c-53.682,0-110.347-22.009-160.292-62.119c2.647-4.752,5.92-8.023,9.437-10.815
                                c18.778,4.633,37.874,6.979,56.837,6.979c53.669,0,105.418-18.289,149.652-52.89c22.489-17.591,41.98-38.788,57.593-62.292
                                c0.186-0.252,0.361-0.512,0.522-0.78c12.325-18.699,22.197-38.846,29.159-59.796c14.015-7.052,15.084-21.336,16.121-35.192
                                c0.237-3.167,0.48-6.415,0.851-9.842c2.66-1.926,6.185-3.451,9.719-4.235c2.665,12.715,7.847,29.036,24.222,44.107
                                C494.411,255.994,491.047,293.387,486.627,309.884z"/>
                        </g>
                    </g>
                    <g>
                        <g>
                            <path d="M322.502,115.069c-5.09-2.132-10.953,0.263-13.089,5.356s0.261,10.953,5.355,13.089
                                c7.275,3.05,11.292,25.001,4.894,61.054c-0.965,5.438,2.661,10.629,8.1,11.594c0.591,0.105,1.179,0.156,1.759,0.156
                                c4.757,0,8.975-3.408,9.835-8.254C345.078,165.824,346.798,125.255,322.502,115.069z"/>
                        </g>
                    </g>
                    <g>
                        <g>
                            <path d="M388.602,401.291c-3.313-4.419-9.592-5.306-14.01-1.991c-0.004,0.002-0.047,0.034-0.05,0.036
                                c-4.454,3.261-5.403,9.501-2.146,13.957c1.955,2.674,4.997,4.089,8.08,4.089c2.054,0,4.127-0.628,5.909-1.93l0.229-0.169
                                C391.032,411.969,391.916,405.71,388.602,401.291z"/>
                        </g>
                    </g>
                    <g>
                        <g>
                            <path d="M365.653,417.462c-2.517-4.916-8.541-6.863-13.458-4.348c-34.227,17.508-63.104,16.815-63.53,16.796
                                c-5.497-0.191-10.141,4.093-10.357,9.603c-0.216,5.518,4.082,10.167,9.601,10.383c0.153,0.006,0.691,0.024,1.584,0.024
                                c7.147,0,36.934-1.161,71.81-19.002C366.22,428.405,368.167,422.379,365.653,417.462z"/>
                        </g>
                    </g>
                    <g>
                        <g>
                            <path d="M186.042,307.983l-0.329-0.33c-3.915-3.893-10.246-3.878-14.142,0.038c-3.895,3.916-3.878,10.248,0.038,14.143
                                l0.215,0.215c1.956,1.978,4.532,2.967,7.109,2.967c2.541,0,5.084-0.963,7.033-2.891
                                C189.892,318.242,189.926,311.909,186.042,307.983z"/>
                        </g>
                    </g>
                </svg>
                Les Ingrédients
            </button>
            <button id="utilisateur" class="btn"> 
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
            </svg>
                Les Utilisateurs
            </button>
        </div>

            <a class="backSite" href="?action=backhome">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4V5z"/></svg>
                retour au site
            </a>            
    </div>

    <section class="view cocktails">
        <div class="card list">
            <div class="title">
                
                <h2>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M21 5V3H3v2l8 9v5H6v2h12v-2h-5v-5l8-9zM7.43 7L5.66 5h12.69l-1.78 2H7.43z"/>
                    </svg>
                    LES COCKTAILS
                </h2>
            </div>


            <div class="wrapper">
                <div class="buttonWrapper">
                <?php var_dump($cocs);
                foreach($cocs as $coc){
                    echo '
                        <button class="tab-button"  data-id="'.$coc['Coc_Nom'].'">
                        '.$coc['Coc_Nom'].' - publié le ' .date('d-m-Y ',strtotime($coc['Coc_DateCreation'])).' par '.$coc['Uti_Pseudo'].'
                        </button>
                        </div>'; 
                        }
                ?>
            
                <div class="contentWrapper">
                
                <div class="content" id="Titre du cocktail">
                    <img src="./public/images/cocktails.jpg"  alt="">
                    <div class="title">
                        <h2>TITRE DU COCKTAIL</h2>
                    <h4>une recette proposé par $utilisateur</h4>

                    <div class="text">

                        <div class="ingredient">


                        <h2>Ingredients</h2>
                        <ul>
                            <li>1 cl de rhum</li>
                            <li>1 cl de rhum</li>
                            <li>1 cl de rhum</li>
                            <li>ipsum</li>
                            <li>dolor</li>
                        </ul>
                    </div>

                    <div class="stepByStep">
                        
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum porro natus doloremque dolorem, reiciendis harum cupiditate fugit unde laboriosam incidunt aut cumque! Cumque, dignissimos! Nobis, dolore natus. Obcaecati, blanditiis vero? 
                        </p>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum porro natus doloremque dolorem.
                        </p>

                    </div> 

                </div>
                <div class="administrer">
                    <button class="delete">
                        <svg id="deleteThis" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"  fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/></svg>
                    </button>

                    <button class="editer">
                        <svg id="edit" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"  fill="#000000"><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/></svg>
                    </button>
                    
                    <button class="valider"><svg id="send" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"  fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/></svg>
                    </button>
                </div>
            
            </div>
        
            

    </p>


        


</section>




    <section class="view ingredients hide">
        <div class="card list">
            <div class="title">
                <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" height="24px" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                    <g>
                        <g>
                            <path d="M508.88,219.58c-0.416-2.278-1.609-4.342-3.378-5.838c-16.56-14.009-19.356-29.456-21.603-41.867l-0.294-1.617
                                c-0.776-4.236-4.178-7.5-8.442-8.1c-1.472-0.207-3.03-0.313-4.631-0.313c-9.517,0-22.925,4.01-31.426,12.967
                                c-1.45,1.529-2.381,3.477-2.659,5.566c-0.715,5.374-1.083,10.292-1.407,14.631c-1.225,16.351-2.308,18.085-7.289,19.661
                                c-3.122,0.988-5.562,3.441-6.533,6.567c-4.691,15.102-10.916,29.554-18.45,43.189c-3.721-7.104-7.833-13.494-11.66-19.44
                                c-9.36-14.542-16.754-26.03-14.228-40.267c8.186-46.144,4.031-80.904-12.353-103.316c-9.124-12.481-22.122-20.99-37.918-24.965
                                c3.144-24.532,20.192-35.654,29.629-38.183c5.335-1.429,8.501-6.913,7.071-12.248c-1.43-5.334-6.914-8.503-12.247-7.071
                                c-19.485,5.221-40.298,24.388-44.273,55.002c-15.96-0.045-30.455,4.829-42.383,14.359c-21.796,17.415-34.965,49.777-39.142,96.185
                                c-1.257,13.965-10.291,22.113-22.796,33.388c-10.207,9.204-21.577,19.48-30.685,35.015c-11.345-4.62-23.515-7.617-36.223-8.702
                                c3.602-23.552,20.167-34.306,29.421-36.785c5.335-1.429,8.501-6.913,7.071-12.247c-1.43-5.335-6.914-8.503-12.247-7.071
                                c-5.025,1.346-10.136,3.631-15.027,6.789c-2.275-11.229-7.779-21.761-16.113-30.094c-11.166-11.166-26.013-17.315-41.805-17.315
                                c-5.169,0-10.317,0.675-15.302,2.005c-3.457,0.923-6.158,3.624-7.081,7.081c-5.433,20.346,0.433,42.228,15.309,57.107
                                c10.351,10.351,23.87,16.381,38.37,17.208c-1.264,4.138-2.204,8.542-2.75,13.212C50.957,248.915,0,302.899,0,368.563
                                c0,68.839,56.005,124.844,124.843,124.844c25.584,0,49.954-7.604,70.817-22.028c3.286,1.442,6.583,2.83,9.895,4.136
                                c30.096,11.871,60.512,17.891,90.401,17.891c48.076,0,92.696-15.708,129.036-45.427c37.983-31.063,65.977-77.026,80.953-132.92
                                C510.832,296.829,515.143,253.875,508.88,219.58z M215.863,232.724c13.451-12.13,27.36-24.673,29.321-46.448
                                c3.669-40.765,14.336-68.473,31.707-82.352c10.312-8.239,23.058-11.416,37.888-9.434c14.646,1.955,25.952,8.252,33.603,18.718
                                c13.04,17.838,16.003,47.452,8.805,88.018c-3.897,21.961,6.779,38.546,17.103,54.586c5.786,8.989,11.742,18.258,15.792,29.046
                                c-33.703,48.67-84.844,84.163-141.117,97.16c0.48-4.462,0.724-8.957,0.724-13.455c0-45.109-24.051-84.706-60.001-106.647
                                C197.17,249.602,206.644,241.038,215.863,232.724z M93.926,199.51c-8.401-8.402-12.459-20.183-11.233-31.831
                                c1.382-0.146,2.771-0.221,4.165-0.221c10.449,0,20.274,4.069,27.662,11.457c8.402,8.402,12.461,20.184,11.234,31.831
                                c-1.381,0.146-2.771,0.22-4.162,0.22h-0.002C111.138,210.967,101.314,206.898,93.926,199.51z M124.843,473.407
                                c-57.811,0-104.843-47.032-104.843-104.844s47.032-104.844,104.843-104.844c57.812,0,104.845,47.032,104.845,104.844
                                c0,5.764-0.471,11.518-1.402,17.179c-6.433,0.83-12.91,1.357-19.417,1.579c1.37-6.133,2.086-12.4,2.086-18.758
                                c0-11.262-2.167-22.256-6.44-32.675c-2.095-5.108-7.934-7.554-13.047-5.457c-5.109,2.096-7.553,7.937-5.457,13.047
                                c3.281,7.999,4.944,16.438,4.944,25.085c0,6.288-0.891,12.465-2.633,18.446c-14.312-0.921-28.645-3.286-42.767-7.07
                                c-2.876-0.771-5.948-0.219-8.377,1.505c-8.888,6.31-17.846,14.247-23.158,29.465c-1.369,3.922-0.171,8.282,3.01,10.954
                                c18.37,15.431,37.563,28.512,57.333,39.131C159.23,469.145,142.38,473.407,124.843,473.407z M486.627,309.884
                                c-27.437,102.393-98.715,163.523-190.67,163.523c-53.682,0-110.347-22.009-160.292-62.119c2.647-4.752,5.92-8.023,9.437-10.815
                                c18.778,4.633,37.874,6.979,56.837,6.979c53.669,0,105.418-18.289,149.652-52.89c22.489-17.591,41.98-38.788,57.593-62.292
                                c0.186-0.252,0.361-0.512,0.522-0.78c12.325-18.699,22.197-38.846,29.159-59.796c14.015-7.052,15.084-21.336,16.121-35.192
                                c0.237-3.167,0.48-6.415,0.851-9.842c2.66-1.926,6.185-3.451,9.719-4.235c2.665,12.715,7.847,29.036,24.222,44.107
                                C494.411,255.994,491.047,293.387,486.627,309.884z"/>
                        </g>
                    </g>
                    <g>
                        <g>
                            <path d="M322.502,115.069c-5.09-2.132-10.953,0.263-13.089,5.356s0.261,10.953,5.355,13.089
                                c7.275,3.05,11.292,25.001,4.894,61.054c-0.965,5.438,2.661,10.629,8.1,11.594c0.591,0.105,1.179,0.156,1.759,0.156
                                c4.757,0,8.975-3.408,9.835-8.254C345.078,165.824,346.798,125.255,322.502,115.069z"/>
                        </g>
                    </g>
                    <g>
                        <g>
                            <path d="M388.602,401.291c-3.313-4.419-9.592-5.306-14.01-1.991c-0.004,0.002-0.047,0.034-0.05,0.036
                                c-4.454,3.261-5.403,9.501-2.146,13.957c1.955,2.674,4.997,4.089,8.08,4.089c2.054,0,4.127-0.628,5.909-1.93l0.229-0.169
                                C391.032,411.969,391.916,405.71,388.602,401.291z"/>
                        </g>
                    </g>
                    <g>
                        <g>
                            <path d="M365.653,417.462c-2.517-4.916-8.541-6.863-13.458-4.348c-34.227,17.508-63.104,16.815-63.53,16.796
                                c-5.497-0.191-10.141,4.093-10.357,9.603c-0.216,5.518,4.082,10.167,9.601,10.383c0.153,0.006,0.691,0.024,1.584,0.024
                                c7.147,0,36.934-1.161,71.81-19.002C366.22,428.405,368.167,422.379,365.653,417.462z"/>
                        </g>
                    </g>
                    <g>
                        <g>
                            <path d="M186.042,307.983l-0.329-0.33c-3.915-3.893-10.246-3.878-14.142,0.038c-3.895,3.916-3.878,10.248,0.038,14.143
                                l0.215,0.215c1.956,1.978,4.532,2.967,7.109,2.967c2.541,0,5.084-0.963,7.033-2.891
                                C189.892,318.242,189.926,311.909,186.042,307.983z"/>
                        </g>
                    </g>
                </svg>
                
                <h2>LES INGREDIENTS</h2>
            </div>
            <div class="split"></div>
            <?php
            foreach($ings as $ing){
                echo '

                <div class="figure">
                    <div class="myFile '.$ing['Ing_Nom'].'">
                        <div>'.$ing['Ing_Nom'].'</div>
                    </div>
                    
                    
                    <div class="administrer">
                        <button class="delete">
                            <svg id="deleteThis" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"  fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/></svg>
                        </button>
                        <button class="editer">
                            <svg id="edit" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"  fill="#000000"><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/></svg>
                        </button>
                        <button class="valider"><svg id="send" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"  fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/></svg></button>
                    </div>
                </div>
            ';}?>
                <a href="" class="addIngredient"> + ajouter un ingrédient</a>
            </div>
        
        
        <div class="card view">
            <div class="title">
                <h2>L'INGREDIENT</h2>
            </div>   

            <div class="split">
                </div>

                <form action="">
                    <label for="">
                        <input type="text" value="nom de l'ingredient">
                    </label>
                </form>


            <div class="administrer">

                <button class="editer">
                    <svg id="edit" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"  fill="#000000"><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/></svg>
                </button>
                
                <button class="valider"><svg id="send" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"  fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/></svg>
                </button>
            </div>
        </div>
        </section>





    
    
        <section class="view utilisateur hide">
        <div class="card list">
            <div class="title">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
            </svg>
                <h2>LES UTILISATEURS</h2>
            </div>
            <div class="split"></div>
            <?php
            foreach($utis as $uti){
                echo '
            <div class="figure">
                <div class="myFile">
                    <div>'.$uti['Uti_Pseudo'].'</div>
                    <div>inscrit le : '.date("d-m-Y ",strtotime($uti['Uti_DateInscription'])) 
                    . ' à ' 
                    . date("H:i",strtotime($uti['Uti_DateInscription'])) . '</div>
                    <div></div>
                </div>
                

                <div class="administrer">
                    <button class="delete">
                        <svg id="deleteThis" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"  fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/></svg>
                    </button>
                    <button class="editer">
                        <svg id="edit" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"  fill="#000000"><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/></svg>
                    </button>
                    <button class="valider"><svg id="send" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"  fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/></svg></button>
                </div>
            </div>
            ';}?>
        </div>
        

        <div class="card view">
            <div class="title">
                <h2>CET UTILISATEUR</h2>
            </div>   

            <div class="split">
            </div>

            <img src="../public/images/userman.jpg"  alt="">


            <div class="text">

                <div class="ingredient">

                    <h2>Son pseudo</h2>
                    <ul>
                        <li>sa date d'inscription</li>
                        <li>son mail</li>
                    </ul>
                </div>


            <div class="administrer">
                <button class="delete">
                    <svg id="deleteThis" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"  fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/></svg>
                </button>

                <button class="editer">
                    <svg id="edit" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"  fill="#000000"><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/></svg>
                </button>
                
                <button class="valider"><svg id="send" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"  fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/></svg>
                </button>
            </div>
        </div>
        </section>


<?php   // var_dump($ings); ?>





<script src="./public/dashboardApp.js"></script>
    </body>
</html>