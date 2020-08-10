<?php
include('conexion.php');
include("valida2.php");
$id = $_SESSION['id_usuario'];
var_dump($_SESSION);
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
                <label for="proyecto"><input type="hidden" name="usuario" value="<?php echo $_SESSION['id_usuario'] ?>"></label>
                <!---->
                
                
                <!---->
                <table>
                    <tr>
                        <td><label for="fecha_entrevista">Fecha de entrevista</label></td>
                        <td><input type="date" name="fecha_entrevista" id="fecha_entrevista"></td>   
                    </tr>
                    
                </table><br>

                
                
                <table>
                    <tr>
                        <td><label for="proyecto">Proyecto</td>
                        <td><select name="proyecto" id="proyecto">
                        <option value=" " selected="selected" disabled="disabled">--Selecciona--</option>
                        <?php                        
                        $query="SELECT * FROM proyecto_usuario, usuario, proyectos WHERE proyecto_usuario.id_usuario = usuario.id_usuario AND proyecto_usuario.id_proyectos = proyectos.id_proyectos AND proyecto_usuario.id_usuario = $id";
                        $ejecutar=mysqli_query($conexion,$query) or die (mysqli_error($conexion));
                        foreach($ejecutar as $opciones2):
                        ?>
                        <option value="<?php echo $opciones2['id_usuario'] ?>"><?php echo $opciones2['nombre_proyecto'] ?></option>
                        <?php endforeach ?>
                        </select></label></td>
                    </tr>
                    <tr>
                        <td> <label for="nombre_entrevistado">Nombre del entrevistado</td>
                        <td><input type="text" name="nombre_entrevistado" id="nombre_entrevistado"> </label></td>
                    </tr>
                    <tr>
                        <td><label for="telefono_empresa">Telefono de la empresa</label></td>
                        <td><input type="number" name="telefono_empresa" id="telefono_empresa"></label></td>
                    </tr>
                    <tr>
                        <td><label for="correo_empresa">Correo de la empresa</td>
                        <td><input type="email" name="correo_empresa" id="correo_empresa"></td>
                    </tr>
                    <tr>
                        <td><label for="puesto_entrevistado">Puesto del entrevistado</td>
                        <td><select name="puesto_entrevistado" id="puesto_entrevistado">
                        <option value="0" selected="selected" disabled="disabled">--Selecciona--</option>
                        <option value="1">Rango 1</option>
                        <option value="2">Rango 2</option>
                        <option value="3">Rango 3</option>
                        </select> </label></td>
                        <!--<td><input type="text" name="puesto_entrevistado" id="puesto_entrevistado"></td>-->
                    </tr>

                </table><br>


               <label for="">Según su criterio ¿Cuales son los 2 problemas mas relevantes que deberían ser resueltos de manera inmediata?</label><br>
               <table>
                   <tr>
                       <td><label for="problema1"><textarea name="problema1" id="problema1" cols="30" rows="10" placeholder="Problema 1"></textarea></label></td>
                       <td><label for="problema2"><textarea name="problema2" id="problema2" cols="30" rows="10" placeholder="Problema 2"></textarea></label></td>
                   </tr>
               </table><br><br>
                
                
                
                <!----> 
                <label for="documentacion">¿Cuenta con documentación que describa la organización de su empresa? <br> Si<input type="radio" name="documentacion" value="1" id=""> No <input type="radio" name="documentacion" checked="checked" value="0" id=""> </label><br>
                En caso de que su respuesta sea sí <br>
                <label for="que_documentos">¿Que documentos?</label> <br><textarea name="que_documentos" id="que_documentos" cols="30" rows="7"></textarea><br> <br>
                <label for="conocimiento_empleados">¿Los empleados conocen estos documentos? <br> Si <input type="radio" name="conocimiento_empleados" value="1" id=""> No <input type="radio" name="conocimiento_empleados" value="0" checked="checked" id=""></label><br>  <br>
                <label for="acceso_empleados">¿Los empleados tienen acceso a estos documentos? <br> Si <input type="radio" name="acceso_empleados" value="1" id=""> No <input type="radio" name="acceso_empleados" value="0" checked="checked" id=""></label><br> <br>
                <!----> 
                
                <label for="frecuencia_evaluar">¿Cada cuando aplican herramientas para evaluar el ambiente de trabajo? <textarea name="frecuencia_evaluar" id="frecuencia_evaluar" cols="30" rows="5" placeholder="Frecuencia de evaluaciones"></textarea></label><br> <br>
                <label for="frecuencia_capacitacion">¿Cual es la frecuencia con la que los empleados se capacitan?</label> <br> <textarea name="frecuencia_capacitacion" id="frecuencia_capacitacion" cols="30" rows="5" placeholder="Frecuencia de capacitaciones"></textarea><br> <br>
                
                <!----> 
                <label for="conocimiento_de_reglamentos">¿Conoce o se tiene registro de las leyes, reglamentos y normas a las cuales se tiene que alinear la empresa? <br> Si <input type="radio" name="conocimiento_de_reglamentos" value="1" id=""> No <input type="radio" name="conocimiento_de_reglamentos" value="0" checked="checked"id=""></label><br>
                En caso de que su respuesta sea sí <br>
                <label for="nombrar_reglamentos">¿Cuales son?</label> <br> <textarea name="nombrar_reglamentos" id="nombrar_reglamentos" cols="30" rows="7"></textarea><br> <br>
                <label for="criterio">Según su criterio ¿En cuales no se esta cumpliendo la norma/reglamento/ley? <textarea name="criterio" id="criterio" cols="30" rows="7"></textarea></label><br> <br>
                <!----> 

                <label for="estado_financiero_empresa">¿Conoce el estado financiero de la empresa? <br> Si<input type="radio" name="estado_financiero_empresa" value="1"> No<input type="radio" name="estado_financiero_empresa" checked="checked" value="0"> </label><br> <br>
                <label for="actualizacion_estado_financiero">¿Cada cuando se actualiza la información financiera para poder se consultada? <textarea name="actualizacion_estado_financiero" id="actualizacion_estado_financiero" cols="30" rows="3"></textarea></label><br> <br>
                <label for="software_utilizado">¿Qué herramientas de software utilizan para gestionar la información financiera? <textarea name="software_utilizado" id="software_utilizado" cols="30" rows="5"></textarea></label><br> <br>
                <label for="porcentaje_licencia_vigente">El software que utiliza la empresa ¿Qué porcentaje cuenta con licencia vigente? </label> <br> <input type="number" name="porcentaje_licencia_vigente" id="porcentaje_licencia_vigente"><br> <br> <br>
                <label for="anotaciones">Anotaciones y observaciones <br> <textarea name="anotaciones" id="anotaciones" cols="30" rows="20"></textarea></label><br> <br> <br>
                
                <input type="submit" value="Ingresar datos" id="ingresar">
                <br> <br>

            </form>
        </div>      

    </center>
    
</body>
</html>