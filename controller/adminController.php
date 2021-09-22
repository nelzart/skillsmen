<?php
require('./models/Admin.php');
function getDashboard(){
    
    $ings = getIngControle();
    $utis = getUtiAll();

    require('./views/dashboard.php');
  
 
}

