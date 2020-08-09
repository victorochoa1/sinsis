<?php
include('conexion.php');


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
    <?php include 'barra_navegacion.php' ?>  
        <img src="logo.png" id="logo">
        <nav class="encabezado-nav">
            <ul>
                <a href="index.php">  <button id="btn_sesion" >Cerrar Sesion</button></a>
            </ul>
        </nav>
    </header>
    <center>
        <div id="div_formu"> </div>
        <div id="formu"> <br>        
        <!-- aqui enpieza tu formulario franco -->
        <!-- FRANCO -->     
            <form action="operaciones.php?ac=4" method="POST" id="formulario_proyecto_status" name="formulario_proyecto_status" class="formulario">               
                <table>
                    <thead>
                        <tr>
                            <th>Empresa</th>
                            <th>Estatus</th>
                            <th>Cerrar proyecto</th>
                        </tr>
                    </thead>
                    <?php 
                    $sql="SELECT * FROM proyectos WHERE cerrado = 0";
                    $result=mysqli_query($db,$sql);                            
                            while($mostrar=mysqli_fetch_array($result)){
                                if($mostrar['cerrado']=="0")
                                {
                                    $mostrar['cerrado']= "Inconcluso";
                                }
                                else if ($mostrar['cerrado']=="1")
                                {
                                    $mostrar['cerrado']= "Finalizado";
                                }
                    ?>
                    <tr>
                        <th><?php echo $mostrar['nombre_proyecto']  ?></th> 
                        <th><?php echo $mostrar['cerrado']  ?></th>    
                        <th><input type="checkbox" name="proyecto_finalizado[]" value="<?php echo $mostrar['id_proyectos'] ?>"></th>
                    </tr>
                    <?php 
                    }
                    ?>
                </table>
                <button type="submit" id="finalizado">Cerrar Proyecto</button>
            </form>

            
            
        </div>
        

    </center>
</body>
</html>