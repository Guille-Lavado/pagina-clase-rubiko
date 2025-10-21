<?php
    /*
    require_once("lib/Router.php");

    $router = new Router();

    // Definimos rutas
    $router->add($_SERVER['REQUEST_URI'], 'Controlador@index');

    $router->dispatch($_SERVER['REQUEST_URI']);
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/menu.css">
    <link rel="stylesheet" href="public/index.css">
    <title>Document</title>
</head>
<body>
    <?php include("views/menu.php"); ?>
    <h1>Hola mundo</h1>
    <main>
        <?php foreach(range(1,9) as $i): ?>
            <?= "<div class='pagina' id='{$i}'></div>" ?>
        <?php endforeach; ?>
    </main>
</body>
</html>