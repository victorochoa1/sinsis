<?php
include('conexion.php');
include("valida.php");
var_dump($_POST);
$proyectoeditar=$_POST['proyecto_editar'];
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
        <?php
        
        $consulta="SELECT * FROM proyectos WHERE proyectos.id_proyectos = $proyectoeditar";
        $query = mysqli_query($conexion,$consulta);
        //$res=mysqli_fetch_array($query);
        //var_dump($res);
        //array(10) { [0]=> string(1) "4" ["id_proyectos"]=> string(1) "4" [1]=> string(5) "Nuevo" ["nombre_proyecto"]=> string(5) "Nuevo" 
        //[2]=> string(15) "Proyecto Prueba" ["razon_social"]=> string(15) "Proyecto Prueba" [3]=> string(9) "Direccion" ["direccion"]=> string(9) "Direccion"
        //[4]=> string(1) "0" ["cerrado"]=> string(1) "0" }
        while($res=mysqli_fetch_array($query))
        {
        ?>
            <form action="operaciones.php?ac=8" method="POST" id="formulario_proyecto_editar" name="formulario_proyecto_editar" class="formulario">
                <input type="hidden" name="id_proyecto" value="<?php echo $res['id_proyectos'] ?>">
                <label for="proyecto_nuevo">Nuevo nombre <input type="text" name="proyecto_nuevo" id="proyecto_nuevo" value="<?php echo $res['nombre_proyecto'] ?>" ></label><br>
                <label for="razon_social">Razon social nueva<input type="text" name="razon_social" id="razon_social" value="<?php echo $res['razon_social'] ?>"></label><br>
                <label for="direccion">Direccion de la empresa <br><textarea name="direccion" id="direccion" placeholder="<?php echo $res['direccion'] ?>" cols="30" rows="10"></textarea></label><br>
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
                <?php } ?>

            </form>
        </div>
        

    </center>
    
</body>
</html>
