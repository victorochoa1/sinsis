<?php
include('conexion.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/ico" href="ico.ico" />
    <title>SinSis</title>
</head>

<body id="">
    <center></center>
    <div id="div_formu"> </div>

    <header class="encabezado">
<nav>
    <nav class="menuCSS3">
        <ul> 
            <li><a href="#">Opciones</a>
				<ul>
					<li><a href="#">Formulario 1</a></li>
					<li><a href="#">Formulario 2</a></li>
					<li><a href="#">Formulario 3</a></li>
				</ul>
			</li>
        </ul>
    </nav>

</nav>    
        <img src="logo.png" id="logo">
        <nav class="encabezado-nav">
            <ul>
                <a href="index.html">  <button id="btn_sesion" href="index.html" >Cerrar Sesion</button></a>
            </ul>
        </nav>
    </header>
    <center>
        <div id="div_formu"> </div>
        <div id="formu"> <br>        
        <!-- aqui enpieza tu formulario franco -->
        <!-- FRANCO -->     
            <form action="operaciones.php?ac=2" method="POST" id="formulario_entrevista" name="formulario_entrevista" class="formulario">
                       
            </form>
        </div>
        

    </center>
</body>
</html>