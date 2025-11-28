<?php
require_once 'models/personnage.php';
require_once 'models/classe.php';


if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $classeId = $_POST['classe_id'];
    
    if (addPersonnage($name, $classeId)) {
        $message = "Personnage créé avec des stats aléatoires !";
    }
}


if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    deletePersonnage($id);
    $message = "Personnage supprimé !";
}

$personnages = getAllPersonnages();
$classes = getAllClasses();

require_once 'views/layout.php';
?>