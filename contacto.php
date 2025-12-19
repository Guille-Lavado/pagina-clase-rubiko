<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="public/scss/footer.css">
    <link rel="stylesheet" href="public/scss/footer.css.map">
    <link rel="stylesheet" href="public/scss/menu.css">
    <link rel="stylesheet" href="public/scss/menu.css.map">
    <link rel="stylesheet" href="public/scss/contacto.css">
    <link rel="stylesheet" href="public/scss/contacto.css.map">
</head>
<body>
    <?php include("views/menu.php"); ?>
    <div class="container">
        <div class="formulario">
            <h1>Contacto</h1>
            <form>
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" placeholder="Tu nombre">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" placeholder="tu@email.com">
                </div>
                <div class="form-group">
                    <label>Mensaje</label>
                    <textarea placeholder="¿En qué puedo ayudarte?"></textarea>
                </div>
                <input type="submit" class="btn btn-primary text-white" value="Enviar mensaje">
            </form>
        </div>
    </div>
    <?php include("views/footer.php"); ?>
</body>
</html>