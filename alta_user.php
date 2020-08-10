<?php
include('conexion.php');
include("valida.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="jquery-3.5.1.min.js"></script>
   <script src="op_alta_user.js"></script>
   <link rel="icon" type="image/ico" href="ico.ico" />
    <title>SinSis</title>
</head>

<body id="">
    <center></center>
    <div id="div_formu"> </div>

    <header class="encabezado">
             
        <nav class="encabezado-nav">
            <ul>
            <?php include 'barra_navegacion.php' ?> 
                
            </ul>
        </nav>
    </header>
    <center>
        <div id="div_formu"> </div>
        <div id="formu"> <br>        
        <!-- aqui enpieza tu formulario franco -->
        <!-- FRANCO -->     
            <form action="operaciones.php?ac=12" method="POST" id="formulario_empleado" name="formulario_empleado" class="formulario"><br>
                <label for="nombre_empleado"> Nombre empleado <input type="text" name="nombre_empleado" id="nombre_empleado" placeholder="Nombre"></label><br>
                <label for="apellido_empleado">Apellidos <input type="text" name="apellido_empleado" id="apellido_empleado" placeholder="Apellidos"></label><br>
                <label for="contraseña">Contraseña <input type="password" name="contraseña" id="contra" placeholder="Contraseña"></label><br>
                <label for="correo">Correo <input type="email" name="correo" id="correo" placeholder="Correo electronico"></label><br>
                <label for="gerente">Gerente <br> Si<input type="radio" name="gerente" id="gerente1" value="1" > No<input type="radio" name="gerente" id="gerente0" value="0" checked="checked"> </label><br>
                <input type="submit" value="Registrar empleado" id="reg_emp">
            </form>

            <!-- <form action="alta.php?ac=6" method="POST" id="formulario_empleado" name="formulario_empleado" class="formulario"><br>
                <label for="nombre_empleado"> Nombre empleado <input type="text" name="nombre_empleado" id="nombre_empleado" placeholder="Nombre"></label><br>
                <label for="apellido_empleado">Apellidos <input type="text" name="apellido_empleado" id="apellido_empleado" placeholder="Apellidos"></label><br>
                <label for="correo">Correo <input type="email" name="correo" id="correo" placeholder="Correo electronico"></label><br>
                <br><br>
                <input type="submit" value="Registrar empleado">
            </form>--> 
        </div>
        

    </center>
</body>
</html>