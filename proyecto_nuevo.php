<?php
include('conexion.php');
include("valida.php");
//var_dump($_SESSION);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="jquery-3.5.1.min.js"></script>
   <script src="op_proyecto_nuevo.js"></script>
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
            <form action="operaciones.php?ac=3" method="POST" id="formulario_proyecto" name="formulario_proyecto" class="formulario">
                <label for="proyecto_nuevo">Ingresa el nombre del proyecto/empresa <input type="text" name="proyecto_nuevo" id="proyecto_nuevo" placeholder="Nuevo proyecto"></label><br>
                <label for="razon_social">Razon social <input type="text" name="razon_social" id="razon_social" placeholder="Razon Social"></label><br>
                <label for="direccion">Direccion de la empresa <br><textarea name="direccion" id="direccion" cols="30" rows="10"></textarea></label><br>
                <label for="">Consultores asignados a proyecto</label><br>
                <table>
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th></th>
                        <th>Selección</th>
                    </tr>
                    </thead>
                    <?php
                    $sql="SELECT * FROM usuario WHERE NOT EXISTS (SELECT * FROM proyecto_usuario WHERE proyecto_usuario.id_usuario = usuario.id_usuario) AND usuario.gerente = 0";
                    //$sql="SELECT * FROM usuario ";
                    $result=mysqli_query($db,$sql);                            
                    while($mostrar=mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><?php echo $mostrar['nombre'] ?></td>
                        <td></td>
                        <td><input type="checkbox" name="usuario[]" value="<?php echo $mostrar['id_usuario'] ?>"></td>
                    </tr>
                    <?php 
                    }
                    ?>
                </table>
                
                <input type="hidden" name="cerrado" value="0">
                <input type="submit" value="Crear proyecto" id="nuevo_pro">
                

            </form>
        </div>
        

    </center>
    
</body>
</html>