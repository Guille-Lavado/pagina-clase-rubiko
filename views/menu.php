<?php
echo <<<END
    <nav class="mi-menu">
        <ul>
            <li><a href='./'>inicio</a></li>
            <li><a href='#'>productos</a></li>
            <li id="servicios">
                <a href=''>Sercicios</a>
                <ul class="sub-menu">
                    <li><a href=''>Sercicio 1</a></li>
                    <li><a href=''>Sercicio 1</a></li>
                    <li><a href=''>Sercicio 3</a></li>
                </ul>
            </li>
            <li><a href='quienesSomos.php'>accerca de</a></li>
            <li><a href=''>contacto</a></li>
        </ul>
    </nav>
    END;
?>