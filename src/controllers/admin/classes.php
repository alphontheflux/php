<?php
require_once 'models/classe.php';


if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    
    if (addClasse($name, $description)) {
        $message = "Classe ajoutée !";
    }
}


if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    deleteClasse($id);
    $message = "Classe supprimée !";
}

$classes = getAllClasses();

require_once 'views/layout.php';
?>