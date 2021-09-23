<?php
require('./models/Admin.php');
function getDashboard(){
    
    $cocs = getCocAll($eta = 'controle');
    $ings = getIngControle();
    $utis = getUtiAll();

    require('./views/dashboard.php');
  
 
}

//function