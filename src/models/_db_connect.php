<?php
function dbConnect()
{
    $db = new PDO('mysql:host=mysql;dbname=mydb;charset=utf8', 'root', 'root');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}
?>