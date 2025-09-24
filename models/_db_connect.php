<?php
function dbConnect()
{
    $db = new PDO('mysql:host=localhost;dbname=rpg_simple;charset=utf8', 'root', 'root');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}
?>