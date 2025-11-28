<h1><?= $classe["name"] ?></h1>
<p><?= $classe["description"] ?></p>

<a href="index.php">← Retour</a>

<h2>Personnages de cette classe</h2>

<?php if (empty($personnages)) { ?>
    <p>Aucun personnage pour cette classe.</p>
<?php } else { ?>
    <table>
        <tr>
            <th>Nom</th>
            <th>PV</th>
            <th>ATK</th>
            <th>XP</th>
        </tr>
        <?php foreach ($personnages as $personnage) { ?>
            <tr>
                <td><?= $personnage["name"] ?></td>
                <td><?= $personnage["pv"] ?></td>
                <td><?= $personnage["atk"] ?></td>
                <td><?= $personnage["xp"] ?></td>
            </tr>
        <?php } ?>
    </table>
<?php } ?>