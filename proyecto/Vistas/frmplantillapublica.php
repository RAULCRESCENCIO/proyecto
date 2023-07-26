<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/imgprincipal2.png" type="image/x-icon">
    <title>Los Dos Pequeños</title>
    <script src="js/Filtrar.js"></script>
    <script src="js/validacion.js"></script>
    <link rel="stylesheet" href="Estilo/estilomenu.css">
    <link rel="stylesheet" href="Estilo/estilos_regis3.css">
    <link rel="stylesheet" href="Estilo/estiloCatalogo2.css">
    <link rel="stylesheet" href="Estilo/estiloRedes.css">
</head>
<body>

<header>
<center> 
    <div id="main-menu">
    <center> 
        <nav id="menu-area">
        <center> 
            <ul>
            <div class="logo">
                <img src="img/imgprincipal2.png" alt="Logo">
            </div>  
                <li><a href="/proyecto/?C=controladorlogin&M=inicioPublico">Inicio</a></li>
                <li><a href="/proyecto/?C=controladorlogin&M=registrar">Registrar</a></li>
                <li><a href="/proyecto/?C=controladorCatalogo&M=Filtrar">Productos</a></li>
                <li><a href="/proyecto/?C=controladorlogin&M=ingresar">Inicio Session</a></li>
            </ul>
            </center>
        </nav>
        </center>
    </div>

    </center>

</header> 
<center>
    <div class="centro">
        <!-- aqui vamos a llamar a los elementos que vamos a mostrar posteriormente-->
        <?php include_once($vista); ?>
    </div>
    </center>
    <footer class="footer">
        <div class="imagenes">
            <h2>Redes sociales</h2>
            <hr><br>
            <a href="https://wa.me/qr/5NA4QR7PO7MPO1"><img src="img/WhastApp.png" alt="" whidth="10px" ></a>
            <a href="https://www.facebook.com/profile.php?id=100051608321006&mibextid=ZbWKwL"><img src="img/facebook.png" alt="" width="10px" ></a>
            <a href="https://instagram.com/nico_gh07?igshid=ZDc4ODBmNjlmNQ=="><img src="img/instagram.png" alt="" width="10px" ></a>
        </div>
        <div class="Horario">
            <h2>Horarios</h2>
            <hr>
            <h3>Domingo - Viernes</h3>
        </div>
        <div class="Ubicacion">
            <img src="img/ubicacion1.jpeg" alt="" >
            <h2>Huejutla de Reyes Hgo</h2>
            <p>Solo zona centro</p>
        </div>
        <div class="Info">
            <h2>Información de la empresa</h2>
            <hr><br>
            <h4>
            El objetivo de la empresa es elaborar y comercializar productos variados de panadería, 
            evitando el uso del gluten en los panes, ya que se planea sustituirlo por harina integral, de 
            soya y trigo, con el fin de que aquellas personas que presenten problemas de salud, obtengan beneficios adicionales en su dieta alimenticia
            </h4>
        </div>
        <div class="Autor">
            <hr>
            <h3>Derechos reservados</h3>
        </div>
    </footer>
    
</body>
</html>