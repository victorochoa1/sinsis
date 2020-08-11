
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
        <?php //var_dump($_POST); 
        $proyecto =$_POST['diagnostico_cerrar'];
        ?>   
        <form action="operaciones.php?ac=6" method="POST">
        <input type="hidden" name="diagnostico_cerrar" value="<?php echo $proyecto ?>" >
        <table>
                    <thead>
                    <tr>
                        <th>Nombre de diagnostico</th>
                        <th></th>
                        <th>direccion</th>
                        <th></th>
                        <th>Selección</th>
                    </tr>
                    </thead>
                    <?php
                    $sql="SELECT * FROM diagnostico, proyectos  WHERE diagnostico.proyecto = proyectos.id_proyectos AND diagnostico.proyecto = $proyecto";
                    //$sql="SELECT * FROM usuario ";
                    $result=mysqli_query($db,$sql);                            
                    while($mostrar=mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><?php echo $mostrar['nombre_proyecto'] ?></td>
                        <td></td>
                        <td><?php echo $mostrar['ruta'] ?></td>
                        <td></td>
                        <td><input type="checkbox" name="diagnostico[]" value="<?php echo $mostrar['id_diagnostico'] ?>"></td>
                    </tr>
                    <?php 
                    }
                    ?>
                </table>
                    <input type="submit" value="Generar solución">
            </form> 
            <br><br>
        </div>
        

    </center>
</body>
</html>