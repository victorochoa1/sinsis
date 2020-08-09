<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_barra_navegacion.css">
    <title>Document</title>
</head>
<body>
<?php
   //include("valida.php");
?> 


    <header class="encabezado">
    <a href="gerente.php"><img src="logo.png" id="logo"></a>
    <nav class="encabezado-nav">
        <ul>
            <li><a href="alta_user.php">Alta de consultor</a></li>
            <li><a href="proyecto_nuevo.php">Proyecto nuevo</a></li>
            <li><a href="proyectos_iniciados.php">Proyectos iniciados</a></li>
            <li><a href="proyectos_cerrados.php">Proyectos cerrados</a></li>
            <li><a href="diagnostico.php">Diagnosticos</a></li> <!-- este enlace manda a una pestaña nueva -->
            
        </ul>
    </nav>
    <a href="cerrarsesion.php">  <button id="btn_sesion" >Cerrar Sesion</button></a>
</header>


</body>
</html>