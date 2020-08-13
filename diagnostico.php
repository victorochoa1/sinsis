<?php ob_start();
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
   <script src="prueba.js"></script>
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
            <h1>Ver diagnostico</h1> 
           <!-- <form action="diagnostico_vista.php" method="POST" id="formularo_mostrar_diagnostico" name="formularo_mostrar_diagnostico" class="formulario">--> 
            <!--<form action="reporte.php" method="POST" id="formularo_mostrar_diagnostico" name="formularo_mostrar_diagnostico" class="formulario">-->
            
            <form action="diagnosticopdf.php" method="POST" id="formularo_mostrar_diagnostico" name="formularo_mostrar_diagnostico" class="formulario">
                <label for="diagnostico_ver">
                <select name="diagnostico_ver" id="diagnostico_ver">
                    <option value="" selected="selected" disabled="disabled">--Selecciona--</option>
                    <?php
                   
                   $consulta2="SELECT * FROM entrevista, proyectos WHERE entrevista.proyecto = proyectos.id_proyectos AND proyectos.cerrado = 0";
                    $ejecutar=mysqli_query($db,$consulta2) or die (mysqli_error($db));
                    foreach ($ejecutar as $opciones):
                    ?>
                  <option value="<?php echo $opciones ['id_proyectos'] ?>"><?php echo $opciones ['nombre_proyecto'] ?> entrevista a <?php echo $opciones['nombre_entrevistado'] ?> </option>
                    <?php endforeach ?>
                </select>
                </label>                
                <button type="submit" id="finalizado">Ir a diagnostico</button>
            </form>
            <br><br>                        
        </div>    
    </center>

</body>
</html>
