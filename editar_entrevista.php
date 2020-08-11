<?php
include('conexion.php');
include("valida2.php");
$id = $_SESSION['id_usuario'];
var_dump($_POST);
$entrevista_ver =$_POST['entrevista_ver'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="jquery-3.5.1.min.js"></script>
   <script src="op_entrevista.js"></script>
   <link rel="icon" type="image/ico" href="ico.ico" />
    <title>SinSis</title>
</head>

<body id="">
    <center></center>
    <div id="div_formu"> </div>

    <header class="encabezado">


</nav>    
        
        <nav class="encabezado-nav">
            <ul>
            <?php include 'barra_navegacion_consultor.php' ?>
            </ul>
        </nav>
    </header>
    <center>
        <div id="div_formu"> </div>
        <div id="formu"> <br>  
        
        
        <!-- aqui enpieza tu formulario franco -->
        <!-- FRANCO -->     
            <form action="operaciones.php?ac=2" method="POST" id="formulario_entrevista" name="formulario_entrevista" class="formulario">
                <?php //var_dump($_POST);
                 $sql="SELECT * FROM proyecto_usuario, usuario, proyectos, entrevista WHERE proyecto_usuario.id_usuario = usuario.id_usuario AND proyecto_usuario.id_proyectos = proyectos.id_proyectos AND entrevista.proyecto = proyectos.id_proyectos AND entrevista.id_entrevista =  $entrevista_ver";
                 //$sql="SELECT * FROM usuario ";
                 $result=mysqli_query($db,$sql);                            
                 while($mostrar=mysqli_fetch_array($result)){
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
                        //var_dump($mostrar);
                 
                
                
                ?>
                        <div id="d_entrevista" >     
                <h3>Entrevista a <?php echo $mostrar['nombre_entrevistado'] ?> de la empresa <?php echo $mostrar['nombre_proyecto'] ?> el día <?php echo $mostrar['fecha'] ?> por <?php echo $mostrar['nombre'] ?></h3><br><br>
                <p style="text-align:justify" >Según el criterio de <?php echo $mostrar['nombre_entrevistado'] ?> el problema principal de la empresa es <?php echo $mostrar['problema_1'] ?>. <br>
                Mientras que el problema secundario es <?php echo $mostrar['problema_2'] ?>. <br>
                El entrevistado <?php echo $mostrar['documentacion'] ?> cuenta con la documentación que describa la organización de la empresa. <br>
                <?php echo $mostrar['que_documentos'] ?>. <br>
                Los empleados <?php echo $mostrar['conocimiento_empleados'] ?> conocen estos documentos y <?php echo $mostrar['acceso_empleados'] ?> tienen acceso a estos. <br>
                <?php echo $mostrar['frecuencia_evaluar'] ?> se aplican herramientas para evaluar el ambiente de trabajo y <?php echo $mostrar['frecuencia_capacitacion'] ?> se capacitan los empleados <br>
                El entrevistrado <?php echo $mostrar['conocimiento_de_reglamentos'] ?> conoce tiene registro de las leyes, reglamentos y normas a las cuales se tiene que alinear la empresa, que son: <br>
                <?php echo $mostrar['nombrar_reglamentos'] ?><br>
                Comenta que "<?php echo $mostrar['criterio'] ?>" es en donde no se estan cumpliendo alguna norma/reglamento. <br>
                <?php echo $mostrar['estado_financiero_empresa'] ?> conoce el estado financiero de la empresa y esta se actualiza cada <?php echo $mostrar['actualizacion_estado_financiero'] ?>. <br>
                 Entre las herramientas de software que utilizan en <?php echo $mostrar['nombre_proyecto'] ?> estan: <br> <?php echo $mostrar['software_utilizado'] ?> <br>
                 Y el <?php echo $mostrar['porcentaje_licencia_vigente'] ?> de los software utilizados tienen licencia vigente. <br><br><br><br>
                 Anotaciones: <br>   <?php echo $mostrar['anotaciones'] ?>
                </p>


                <label for="proyecto"><input type="hidden" name="usuario" value="<?php echo $_SESSION['id_usuario'] ?>"></label></div>
                <!---->
                
                
                <!---->
                
                <br> <br>
                <?php 
                }
                ?>

            </form>
        </div>      

    </center>
    
</body>
</html>