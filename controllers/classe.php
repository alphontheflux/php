<?php
require 'models/classe.php';
require 'models/personnage.php';

if (isset($_GET['classeId'])) {
    $classeId = $_GET['classeId'];
} else {
    $classeId = null;
}

if (!$classeId) {
    header('Location: index.php');   
    exit;
}

$classe = getClasse($classeId);
$personnages = getPersonnagesByClasse($classeId);

require 'views/layout.php';
?>         