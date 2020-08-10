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
        <!-- aqui enpieza tu formulario franco -->
        <!-- FRANCO -->                     
            <div>            
                <table>
                    <thead>
                        <tr>
                            <th>Empresa</th>
                            <th>Estatus</th>                            
                        </tr>
                    </thead>
                    <?php 
                    $sql="SELECT * FROM proyectos WHERE cerrado = 1";
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
                    </tr>
                    <?php 
                    }
                    ?>
                </table>                          
            </div>
        </div>
    </center>
</body>
</html>