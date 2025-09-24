<h1>Gestion des Classes</h1>

<?php if (isset($message)) { ?>
    <div class="success"><?= $message ?></div>
<?php } ?>

<h2>Ajouter une classe</h2>
<form method="post">
    <div>
        <label>Nom :</label>
        <input type="text" name="name" required>
    </div>
    
    <div>
        <label>Description :</label>
        <textarea name="description" required></textarea>
    </div>
    
    <button type="submit" name="add">Ajouter</button>
</form>

<h2>Liste des classes</h2>
<?php if (empty($classes)) { ?>
    <p>Aucune classe créée.</p>
<?php } else { ?>
    <table>
        <tr>
            <th>Nom</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        <?php foreach ($classes as $classe) { ?>
            <tr>
                <td><?= $classe["name"] ?></td>
                <td><?= $classe["description"] ?></td>
                <td>
                    <form method="post" style="display: inline;">
                        <input type="hidden" name="id" value="<?= $classe["id"] ?>">
                        <button type="submit" name="delete" onclick="return confirm('Supprimer ?')">Supprimer</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>
<?php } ?>