<?php

function getAllPersonnages()
{
    $db = dbConnect();
    $sql = "SELECT p.*, c.name as classe_name FROM personnages p 
            JOIN classes c ON p.classe_id = c.id 
            ORDER BY p.name";
    $query = $db->prepare($sql);
    $query->execute();
    return $query->fetchAll();
}

function getPersonnagesByClasse($classeId)
{
    $db = dbConnect();
    $sql = "SELECT * FROM personnages WHERE classe_id = :classe_id ORDER BY name";
    $query = $db->prepare($sql);
    $query->execute(['classe_id' => $classeId]);
    return $query->fetchAll();
}

function addPersonnage($name, $classeId)
{
    $db = dbConnect();
    
    
    $pv = rand(50, 100);
    $atk = rand(1, 10);
    $xp = 0;
    
    $sql = "INSERT INTO personnages (name, classe_id, pv, atk, xp) VALUES (:name, :classe_id, :pv, :atk, :xp)";
    $query = $db->prepare($sql);
    return $query->execute([
        'name' => $name,
        'classe_id' => $classeId,
        'pv' => $pv,
        'atk' => $atk,
        'xp' => $xp
    ]);
}

function deletePersonnage($id)
{
    $db = dbConnect();
    $sql = "DELETE FROM personnages WHERE id = :id";
    $query = $db->prepare($sql);
    return $query->execute(['id' => $id]);
}
?>