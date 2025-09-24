<h1>Gestion des Personnages</h1>

<?php if (isset($message)) { ?>
    <div class="success"><?= $message ?></div>
<?php } ?>

<h2>Créer un personnage</h2>
<form method="post">
    <div>
        <label>Nom :</label>
        <input type="text" name="name" required>
    </div>
    
    <div>
        <label>Classe :</label>
        <select name="classe_id" required>
            <option value="">Choisir une classe</option>
            <?php foreach ($classes as $classe) { ?>
                <option value="<?= $classe['id'] ?>"><?= $classe['name'] ?></option>
            <?php } ?>
        </select>
    </div>
    
    <p><strong>Les stats seront générées automatiquement :</strong><br>
    PV : 50-100 | ATK : 1-10 | XP : 0</p>
    
    <button type="submit" name="add">Créer</button>
</form>

<h2>Liste des personnages</h2>
<?php if (empty($personnages)) { ?>
    <p>Aucun personnage créé.</p>
<?php } else { ?>
    <div class="personnages-admin">
        <?php foreach ($personnages as $personnage) { ?>
            <div class="personnage-admin-card">
                <?php if (!empty($personnage["photo"])) { ?>
                    <img src="assets/images/personnages/<?= $personnage["photo"] ?>" alt="<?= $personnage["name"] ?>" class="admin-personnage-photo">
                <?php } ?>
                <div class="personnage-info">
                    <h3><?= $personnage["name"] ?></h3>
                    <p><strong>Classe:</strong> <?= $personnage["classe_name"] ?></p>
                    <p><strong>Stats:</strong> PV: <?= $personnage["pv"] ?> | ATK: <?= $personnage["atk"] ?> | XP: <?= $personnage["xp"] ?></p>
                    <form method="post" style="display: inline;">
                        <input type="hidden" name="id" value="<?= $personnage["id"] ?>">
                        <button type="submit" name="delete" onclick="return confirm('Supprimer ?')">Supprimer</button>
                    </form>
                </div>
            </div>
        <?php } ?>
    </div>
<?php } ?>