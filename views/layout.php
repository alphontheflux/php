<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPG Simple</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <nav>
        <a href="index.php">Accueil</a>
        <a href="index.php?page=admin-classes">Admin Classes</a>
        <a href="index.php?page=admin-personnages">Admin Personnages</a>
    </nav>
    
    <main>
        <?php
        if ($page == 'home') {
            include 'views/pages/home.php';
        } elseif ($page == 'classe') {
            include 'views/pages/classe.php';
        } elseif ($page == 'admin-classes') {
            include 'views/pages/admin/classes.php';
        } elseif ($page == 'admin-personnages') {
            include 'views/pages/admin/personnages.php';
        } else {
            include 'views/pages/home.php';
        }
        ?>
    </main>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
