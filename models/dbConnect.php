<?php
function dbConnect()
{
    $hostname = 'localhost';
    $dbname = 'skillsman';
    $dbuser = 'root';
    $password = 'YanisPRAYTED54!';

    $db = new PDO('mysql:host='.$hostname.';dbname='.$dbname.';charset=utf8', $dbuser, $password);
    return $db;
}