<?php
function dbConnect()
{
    $hostname = 'localhost';
    $dbname = 'skillsman';
    $dbuser = 'root';
    $password = '';

    $db = new PDO('mysql:host='.$hostname.';dbname='.$dbname.';charset=utf8', $dbuser, $password);
    return $db;
}