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
            <table>
                <tr>
                    <td> <label for="nombre_empleado"> Nombre empleado </label></td>
                    <td><input type="text" name="nombre_empleado" id="nombre_empleado" placeholder="Nombre"></td>
                </tr>
                <tr>
                    <td><label for="apellido_empleado">Apellidos </label></td>
                    <td><input type="text" name="apellido_empleado" id="apellido_empleado" placeholder="Apellidos"></td>
                </tr>
                <tr>
                    <td><label for="contraseña">Contraseña </label></td>
                    <td><input type="password" name="contraseña" id="contra" placeholder="Contraseña"></td>
                </tr>
                <tr>
                    <td><label for="correo">Correo</label></td>
                    <td> <input type="email" name="correo" id="correo" placeholder="Correo electronico"></td>
                </tr>
               
            </table> <br>
               
                <label for="gerente">Gerente <br> Si<input type="radio" name="gerente" id="gerente1" value="1" > No<input type="radio" name="gerente" id="gerente0" value="0" checked="checked"> </label><br>
                <input type="submit" value="Registrar empleado" id="reg_emp">
            </form>
            <br>

            <p>Editar empleado</p>
            <form action="editarempleado.php" method="POST" id="formulario_editar_empleado" name="formulario_editar_empleado" class="formulario">
                <label for="editar_empleado">
                <select name="editar_empleado" id="editar_empleado">
                    
                    <?php
                    $consulta2="SELECT * FROM usuario";
                    $ejecutar=mysqli_query($db,$consulta2) or die (mysqli_error($db));
                    foreach ($ejecutar as $opciones):
                    ?>
                    <option value="<?php echo $opciones ['id_usuario'] ?>"><?php echo $opciones ['nombre'] ?> </option>
                    <?php endforeach ?>
                </select>
                </label>                <br> <br>
                <button type="submit" id="finalizado">Editar empleado</button>
            </form>
            <br><br>   
            
            
            <p>Eliminar empleado</p>
            <form action="operaciones.php?ac=11" method="POST" id="formulario_eliminar_empleado" name="formulario_eliminar_empleado" class="formulario">
                <label for="eliminar_empleado">
                <select name="eliminar_empleado" id="eliminar_empleado">
                    
                    <?php
                    $consulta2="SELECT * FROM usuario";
                    $ejecutar=mysqli_query($db,$consulta2) or die (mysqli_error($db));
                    foreach ($ejecutar as $opciones):
                    ?>
                    <option value="<?php echo $opciones ['id_usuario'] ?>"><?php echo $opciones ['nombre'] ?> </option>
                    <?php endforeach ?>
                </select>
                </label>                <br> <br>
                <button type="submit" id="">Eliminar empleado</button>
            </form>
            <br><br>      
        </div>
        

    </center>
</body>
</html>