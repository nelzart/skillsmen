<?php
    
    function dbConnect()
    {
            $hostname = 'localhost';
            $dbname = 'test';
            $dbuser = 'dbuser';
            $password = '';
    
            $db = new PDO('mysql:host='.$hostname.';dbname='.$dbname.';charset=utf8', $dbuser, $password);
            return $db;
    }

