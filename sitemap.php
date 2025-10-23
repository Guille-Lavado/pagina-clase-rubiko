<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/menu.css">
    <link rel="stylesheet" href="public/css/footer.css">
    <title>Mapa del Sitio</title>
</head>
<body>
    <?php include("views/menu.php"); ?>
    <ul>
        <?php foreach(scandir("./") as $file): ?>
            <?php if (is_file($file) && $file != "README.md"): ?>
                <li><a href=<?= $file ?>><?= $file ?></a></li>
            <?php endif ?>
        <?php endforeach ?>
    </ul>
    <?php include("views/footer.php") ?>
</body>
</html>