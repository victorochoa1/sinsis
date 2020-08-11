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
             <!--<form action="operaciones.php?ac=4" method="POST" id="formulario_proyecto_status" name="formulario_proyecto_status" class="formulario">               
                <table>
                    <thead>
                        <tr>
                            <th>Empresa</th>
                            <th>Estatus</th>
                            <th>Cerrar proyecto</th>
                        </tr>
                    </thead>
                    <?php 
                   /*
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
                    */
                    ?>
                </table>
                <button type="submit" id="finalizado">Cerrar Proyecto</button>
            </form>-->  



            <h1>Terminar proyecto</h1>
            <form action="operaciones.php?ac=6" method="POST" id="formularo_cerrar_proyecto" name="formularo_cerrar_proyecto" class="formulario">
                <label for="diagnostico_cerrar">
                <select name="diagnostico_cerrar" id="diagnostico_cerrar">
                <option value="" selected="selected" disabled="disabled">--Selecciona--</option>
                    <?php
                    $consulta="SELECT * FROM proyectos WHERE cerrado = 0";
                    $ejecutar=mysqli_query($db,$consulta) or die (mysqli_error($db));
                    foreach ($ejecutar as $opciones):
                    ?>
                    <option value="<?php echo $opciones ['id_proyectos'] ?>"><?php echo $opciones ['nombre_proyecto'] ?> </option>
                    <?php endforeach ?>
                </select>
                </label>
                
                <button type="submit" id="finalizar_proyecto">Cerrar Proyecto</button>
            </form>

            <br><br>
            <h1>Editar proyecto</h1>
            <form action="editar_proyecto.php?ac=7" method="POST" id="formularo_editar_proyecto" name="formularo_editar_proyecto" class="formulario">
                <label for="proyecto_editar">
                <select name="proyecto_editar" id="proyecto_editar">
                <option value="" selected="selected" disabled="disabled">--Selecciona--</option>
                    <?php
                    $consulta="SELECT * FROM proyectos WHERE cerrado = 0";
                    $ejecutar=mysqli_query($db,$consulta) or die (mysqli_error($db));
                    foreach ($ejecutar as $opciones):
                    ?>
                    <option value="<?php echo $opciones ['id_proyectos'] ?>"><?php echo $opciones ['nombre_proyecto'] ?> </option>
                    <?php endforeach ?>
                </select>
                </label>
                
                <button type="submit" id="editar_proyecto">Cerrar Proyecto</button>
            </form>

            
            <br><br>
        </div>
        

    </center>
</body>
</html>