<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="public/css/contacto.css">
    <link rel="stylesheet" href="public/css/menu.css">
    <link rel="stylesheet" href="public/css/footer.css">
</head>
<body>
    <?php include("views/menu.php"); ?>
    <div class="formulario">
        <h1>Contacto</h1>
        <form>
            <div>
                <label>Nombre</label>
                <input type="text" placeholder="Tu nombre">
            </div>
            <div>
                <label>Email</label>
                <input type="email" placeholder="tu@email.com">
            </div>
            <div>
                <label>Mensaje</label>
                <textarea placeholder="¿En qué puedo ayudarte?"></textarea>
            </div>
            <input type="submit" value="Enviar mensaje">
        </form>
    </div>
    <?php include("views/footer.php"); ?>
</body>
</html>