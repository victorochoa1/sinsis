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
        <p>
            Bienvenido <?php echo $_SESSION['nombre'] ?>
        </p>
            <form action="operaciones.php?ac=2" method="POST" id="formulario_entrevista" name="formulario_entrevista" class="formulario">
                       
            </form>
            <div>
                <table>
                    <thead>
                        <tr>
                            <th>Nombre</th>                            
                            <th>--</th>
                            <th>Proyecto asignado</th>
                        </tr>
                    </thead>
                    <?php
                    //$query_user ="SELECT * FROM proyectos, usuario WHERE usuario.proyecto = proyectos.id_proyectos";
                    $query_user ="SELECT * FROM proyectos, proyecto_usuario, usuario WHERE proyecto_usuario.id_proyectos = proyectos.id_proyectos AND proyecto_usuario.id_usuario = usuario.id_usuario";
                    $i=1;
                    $result=mysqli_query($db,$query_user);
                    while($mostrar=mysqli_fetch_array($result)){
                        ?>
                        <tr>
                            <td><?php echo $mostrar["nombre"] ?></td>
                            <td>--</td>
                            <td><?php echo $mostrar["nombre_proyecto"] ?></td>
                        </tr>               
                    <?php
                    }
                    ?>
                </table><br><br>
            </div>
        </div>
        

    </center>
</body>
</html>