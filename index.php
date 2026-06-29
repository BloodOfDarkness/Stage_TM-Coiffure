<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="css/bootstrap.bundle.min.js"></script>
    <title>TM-Coiffure</title>
    <?php
    // Récupère tous les fichiers image du dossier img/
    $images = glob('img/*.{jpg,jpeg,png,webp,gif}', GLOB_BRACE);
    ?>
</head>

<body class="bg-khakibeige" id="top">
    <?php include 'views/header.php'; ?>
    <?php include 'views/hero.php'; ?>
    <?php include 'views/prestation.php'; ?>
    <?php include 'views/aPropos.php'; ?>
    <?php include 'views/footer.php'; ?>
</body>
</html>