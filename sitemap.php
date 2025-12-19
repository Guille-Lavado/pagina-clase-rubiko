<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/scss/footer.css">
    <link rel="stylesheet" href="public/scss/footer.css.map">
    <link rel="stylesheet" href="public/scss/menu.css">
    <link rel="stylesheet" href="public/scss/menu.css.map">
    <title>Mapa del Sitio</title>
</head>
<body>
    <?php include("views/menu.php"); ?>
    <ul>
        <?php foreach(scandir("./") as $file): ?>
            <?php if (is_file($file) && explode(".", $file)[1] == "php"): ?>
                <li><a href=<?= $file ?>><?= $file ?></a></li>
            <?php endif ?>
        <?php endforeach ?>
    </ul>
    <?php include("views/footer.php") ?>
</body>
</html>