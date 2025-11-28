<h1>RPG Manager</h1>
<p>Gérez vos classes et personnages RPG</p>

<div class="buttons">
    <a href="index.php?page=admin-classes">Gérer les Classes</a>
    <a href="index.php?page=admin-personnages">Gérer les Personnages</a>
</div>

<h2>Les Classes</h2>
<div class="grid">
    <?php foreach ($classes as $classe) { ?>
        <div class="card">
            <a href="index.php?page=classe&classeId=<?= $classe["id"] ?>">
                <h3><?= $classe["name"] ?></h3>
                <p><?= $classe["description"] ?></p>
            </a>
        </div>
    <?php } ?>
</div>