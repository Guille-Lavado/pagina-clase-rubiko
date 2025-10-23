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
    <link rel="stylesheet" href="public/css/index.css">
    <link rel="stylesheet" href="public/css/menu.css">
    <link rel="stylesheet" href="public/css/footer.css">
    <title>Home</title>
</head>
<body>
    <?php include("views/menu.php"); ?>
    <main>    
        <aside class="menu-lateral">
            <h2>Whats New?</h2>
        </aside>
        <section class="seccion">
            <div>
                <h1>Lorem ipsum dolor</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, possimus necessitatibus. Magnam, amet? Earum rerum harum quidem placeat possimus explicabo doloribus nisi, voluptatem autem magni at voluptate aliquam, esse culpa.</p>
            </div>
            <img src="public/img/cubo-img.png" alt="">
        </section>
        <section class="seccion">
            <div>
                <h1>Lorem ipsum dolor</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, possimus necessitatibus. Magnam, amet? Earum rerum harum quidem placeat possimus explicabo doloribus nisi, voluptatem autem magni at voluptate aliquam, esse culpa.</p>
            </div>
        </section>
        <section class="seccion">
            <div class="cubo">
                <?php foreach(range(1,6) as $i): ?>
                    <?= "<div class='pagina' id='l{$i}'></div>" ?>
                <?php endforeach; ?>
            </dvi>
        </section>
        <section class="seccion">
            <div>
                <h1>Lorem ipsum dolor</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, possimus necessitatibus. Magnam, amet? Earum rerum harum quidem placeat possimus explicabo doloribus nisi, voluptatem autem magni at voluptate aliquam, esse culpa.</p>
            </div>
        </section>
    </main>
    <?php include("views/footer.php") ?>
</body>
</html>