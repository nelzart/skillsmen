<?php
<<<<<<< HEAD
    
    function dbConnect()
    {
            $hostname = 'localhost:3306';
            $dbname = 'skillsmen';
            $dbuser = 'root';
            $password = 'YanisPRAYTED54!';
    
            $db = new PDO('mysql:host='.$hostname.';dbname='.$dbname.';charset=utf8', $dbuser, $password);
            return $db;
    }
?>
=======

function dbConnect()
{
    $hostname = 'localhost';
    $dbname = 'skillsman';
    $dbuser = 'root';
    $password = '';

    $db = new PDO('mysql:host='.$hostname.';dbname='.$dbname.';charset=utf8', $dbuser, $password);
    return $db;
}   
>>>>>>> 89824c41b4c0083e1b32cee9d0b5f00d32f14477
