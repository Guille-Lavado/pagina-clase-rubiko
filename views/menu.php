<?php
echo <<<END
    <nav class="mi-menu">
        <h1>Rubiko</h1>
        <ul>
            <li><a href='./'>Inicio</a></li>
            <li><a href='sitemap.php'>Mapa del Sitio</a></li>
            <li id="servicios">
                <a href=''>Sercicios</a>
                <ul class="sub-menu">
                    <li><a href=''>Sercicio 1</a></li>
                    <li><a href=''>Sercicio 1</a></li>
                    <li><a href=''>Sercicio 3</a></li>
                </ul>
            </li>
            <li><a href='quienesSomos.php'>Accerca De</a></li>
            <li><a href='contacto.php'>Contacto</a></li>
        </ul>
    </nav>
    END;
?>