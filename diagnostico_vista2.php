<?php
include('conexion.php');
//var_dump($_POST);
//echo'$_POST';
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
         
        <p id="diagnostico">
        <?php 
        var_dump($_POST); 
        echo '</br>';
        echo '</br>';
        echo '</br>';
        echo '</br>';
        //array(1) { ["diagnostico_ver"]=> string(1) "1" }
        $diagnostico = (is_numeric($_POST['diagnostico_ver']) ? (int)$_POST['diagnostico_ver'] : 0);
        //$diagnostico = $_POST["diagnostico_ver"];
        //var_dump($diagnostico);

        //SELECT * FROM entrevista, usuario, proyectos WHERE entrevista.proyecto = proyectos.id_proyectos AND usuario.proyecto = proyectos.id_proyectos;
        $sql = "SELECT * FROM entrevista, usuario, proyectos, proyecto_usuario WHERE entrevista.proyecto = proyectos.id_proyectos AND proyecto_usuario.id_proyectos = proyectos.id_proyectos AND proyecto_usuario.id_usuario = usuario.id_usuario AND proyectos.id_proyectos=  $diagnostico";
        var_dump($sql);
        $result=mysqli_query($db,$sql);
        $mostrar=mysqli_fetch_array($result);
        var_dump($mostrar);
        //var_dump( $mostrar["documentacion"]);
        
        if($mostrar["documentacion"]=="1"){
            $mostrar["documentacion"]= "si";
        }else{
            $mostrar["documentacion"]= "no";
        }

        if($mostrar["conocimiento_empleados"] == "1"){
            $mostrar["conocimiento_empleados"] = "si";
        }else{
            $mostrar["conocimiento_empleados"]= "no";
        }

        if($mostrar["acceso_empleados"] == "1"){
            $mostrar["acceso_empleados"]="si";
        }else{
            $mostrar["acceso_empleados"]="no";
        }

        if($mostrar["conocimiento_de_reglamentos"]=="1"){
            $mostrar["conocimiento_de_reglamentos"]="Si";
        }else{
            $mostrar["conocimiento_de_reglamentos"]="No";
        }

        if($mostrar["estado_financiero_empresa"] =="1"){
            $mostrar["estado_financiero_empresa"]="Si";
        }else{
            $mostrar["estado_financiero_empresa"]="No";
        }

        echo '</br>';
        echo '</br>';
        echo '</br>';
        echo '</br>';
        //echo $mostrar[15];            
        ?>
        Diagnostico de la empresa  echo $mostrar[31];  de la fecha <?php echo $mostrar[1];   ?><br><br><br>

        El diagnostico muestra que el problema principal de la empresa es <?php echo $mostrar["problema_1"];   ?>, que es lo que esta atrasando los procesos de la empresa <?php echo $mostrar[30]; ?>. <br>
        La empresa <?php echo $mostrar["documentacion"]; ?> cuenta con documentación. <br>
        Documentos anexos: <?php echo $mostrar[9]; ?> <br>
        Los empleados <?php echo $mostrar["conocimiento_empleados"]; ?> conocen estos documentos y los empleados <?php echo $mostrar["acceso_empleados"]; ?> tienen acceso a estos documentos. <br>
        En la empresa <?php echo $mostrar[30]; ?> se aplican las herramientas de evaluación de ambiente cada <?php echo $mostrar["frecuencia_evaluar"]; ?>. <br>
        Mientras que las frecuencia de capacitacion de empleados es de <?php echo $mostrar["frecuencia_capacitacion"]; ?> <br>
        <?php echo $mostrar["conocimiento_de_reglamentos"]; ?> se conoce o se tiene registro de los reglamentos, leyes o normas a las cuales se tiene que alinear la empresa, que son: <br>
        <?php echo $mostrar["nombrar_reglamentos"]; ?> <br>
        Segun el criterio del entrevistado <?php echo $mostrar["nombre_entrevistado"]; ?>, no se estan cumpliendo <?php echo $mostrar["criterio"]; ?> <br>
        <?php echo $mostrar["estado_financiero_empresa"]; ?> se conoce el estado financiero de la empresa <br>
        Herramientas de software utilizado: <?php echo $mostrar["software_utilizado"]; ?> que cuenta con un porcentaje de licencias vigentes de %<?php echo $mostrar["porcentaje_licencia_vigente"]; ?><br>
        <br><br><br>
        Anotaciones de consultor: <br><?php echo $mostrar["anotaciones"]; ?>
        

        </p>
            
        </div>
        

    </center>
</body>
</html>