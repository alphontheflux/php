<?php
require_once 'models/_db_connect.php';

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'home';
}

if ($page == 'home') {
    require 'controllers/home.php';
} elseif ($page == 'classe') {
    require 'controllers/classe.php';
} elseif ($page == 'admin-classes') {
    require 'controllers/admin/classes.php';
} elseif ($page == 'admin-personnages') {
    require 'controllers/admin/personnages.php';
} else {
    require 'controllers/home.php';
}
?>