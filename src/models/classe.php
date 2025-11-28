<?php

function getAllClasses()
{
    $db = dbConnect();
    $sql = "SELECT * FROM classes ORDER BY name";
    $query = $db->prepare($sql);
    $query->execute();
    return $query->fetchAll();
}

function getClasse($id)
{
    $db = dbConnect();
    $sql = "SELECT * FROM classes WHERE id = :id";
    $query = $db->prepare($sql);
    $query->execute(['id' => $id]);
    return $query->fetch();
}

function addClasse($name, $description)
{
    $db = dbConnect();
    $sql = "INSERT INTO classes (name, description) VALUES (:name, :description)";
    $query = $db->prepare($sql);
    return $query->execute([
        'name' => $name,
        'description' => $description
    ]);
}

function deleteClasse($id)
{
    $db = dbConnect();
    $sql = "DELETE FROM classes WHERE id = :id";
    $query = $db->prepare($sql);
    return $query->execute(['id' => $id]);
}
?>