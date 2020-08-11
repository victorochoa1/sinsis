
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
        //$proyecto =$_POST['diagnostico_cerrar'];
        ?>   
        <form action="operaciones.php?ac=6" method="POST">
        
            </form> 

            <table>
                    <thead>
                        <tr>
                            <th>Nombre proyecto</th>                            
                            <th>--</th>
                            <th>Solucion</th>
                        </tr>
                    </thead>
                    <?php
                    //$query_user ="SELECT * FROM proyectos, usuario WHERE usuario.proyecto = proyectos.id_proyectos";
                    $query_user ="SELECT * FROM diagnostico, proyecto_solucion, proyectos WHERE diagnostico.id_diagnostico = proyecto_solucion.id_diagnostico AND proyecto_solucion.id_proyecto = proyectos.id_proyectos ";
                    $i=1;
                    $result=mysqli_query($db,$query_user);
                    while($mostrar=mysqli_fetch_array($result)){
                        ?>
                        <tr>
                            <td><?php echo $mostrar["nombre_proyecto"] ?></td>
                            <td>--</td>
                            <td> <?php echo $mostrar["ruta"] ?></td>
                            
                        </tr>               
                    <?php
                    }
                    ?>
                </table><br><br>
            <br><br>
        </div>
        

    </center>
</body>
</html>