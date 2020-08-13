<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include('conexion.php');
//var_dump($_POST);

$accion=0;
$accion=$_GET['ac'];
//var_dump($_POST);





if($_POST > 0 ){


    //Dar de alta un nuevo usuario
    //Funciona
    if($accion==12){

        var_dump($_POST);
        //array(5) { ["nombre_empleado"]=> string(6) "Garfio" ["apellido_empleado"]=> string(9) "zanahoria" ["contraseña"]=> string(3) "123" ["correo"]=> string(18) "garfio@naranja.com" ["gerente"]=> string(1) "1" }
        $nombre_emp=$_POST["nombre_empleado"];
        $apellido_emp=$_POST["apellido_empleado"];
        $contraseña=$_POST["contraseña"];
        $correo=$_POST["correo"];
        $gerente = (is_numeric($_POST['gerente']) ? (int)$_POST['gerente'] : 0);
        /*if($gerente == 1){
            $gerente = true;
        }else{
            $gerente=false;
        }*/
        //$proyecto=3;
        //var_dump($gerente);
        
        //INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellidos`, `correo`, `contraseña`, `gerente`) VALUES (NULL, 'nombre usuario', 'apellidos de usuario', 'correo@correo.com', '123', '0');
        $query="INSERT INTO `usuario` ( `nombre`, `apellidos`, `correo`, `contrasena`, `gerente`) VALUES ( ?,?,?,?,?);";
        //var_dump($query);
        $stmt=$db->prepare($query);
        $stmt->bind_param('ssssi',$nombre_emp, $apellido_emp,$correo,$contraseña,$gerente);
        $stmt->execute();
        if  ($stmt->affected_rows>0){
            header("Location:alta_user.php");
            //echo 'actualizado';
        }else{
            
            header("Location:gerente.php");
            //echo 'error';
        }

    }


    //Ingresar datos a la tabla entrevista
    //Funciona
    if($accion == 2){
        var_dump($_POST);
        //echo '</br>';
        //echo '</br>';

        $usuario = (is_numeric($_POST['usuario']) ? (int)$_POST['usuario'] : 0);
        $fecha_entrevista=$_POST["fecha_entrevista"];
        //2020-08-13
        //$fecha_entrevista = date('Y-m-d',$fecha_entrevista); //Lo comvierte a formato de fecha en MySQL
        $nombre_entrevistado=$_POST["nombre_entrevistado"];
        $telefono_empresa=$_POST["telefono_empresa"];
        $porcentaje_licencia_vigente = (is_numeric($_POST['porcentaje_licencia_vigente']) ? (int)$_POST['porcentaje_licencia_vigente'] : 0);
        $proyecto = (is_numeric($_POST['proyecto']) ? (int)$_POST['proyecto'] : 0);
        $puesto_entrevistado = (is_numeric($_POST['puesto_entrevistado']) ? (int)$_POST['puesto_entrevistado'] : 0);
        $correo_empresa=$_POST["correo_empresa"];
        $problema1=$_POST["problema1"];
        $problema2=$_POST["problema2"];
        $actualizacion_estado_financiero=$_POST["actualizacion_estado_financiero"];
        $software_utilizado=$_POST["software_utilizado"];
        $anotaciones=$_POST["anotaciones"];
        $frecuencia_evaluar=$_POST["frecuencia_evaluar"];
        $frecuencia_capacitacion=$_POST["frecuencia_capacitacion"];
        $criterio=$_POST["criterio"];

        /* */
        $documentacion=$_POST["documentacion"];
        if($documentacion == "1"){
            $documentacion = 1;
        }
        else{
            $documentacion = 0;
        }

        
        /** */
        if($_POST["que_documentos"]==""){
            $que_documentos = "XX";
        }
        else{
            $que_documentos=$_POST["que_documentos"];
        }
        
        
        /* */
        if($_POST["nombrar_reglamentos"] == ""){
            $nombrar_reglamemtos = "XX";
        }
        else{
            $nombrar_reglamemtos=$_POST["nombrar_reglamentos"];
        }
               
        
        /* */
        $conocimiento_empleados=$_POST["conocimiento_empleados"];
        if($conocimiento_empleados == "1"){
            $conocimiento_empleados = 1;
        }
        else{
            $conocimiento_empleados = 0;
        }

        /* */
        $acceso_empleados=$_POST["acceso_empleados"];
        if($acceso_empleados == "1"){
            $acceso_empleados = 1;
        }
        else{
            $acceso_empleados = 0;
        }

        
        /* */
        $conocimiento_de_reglamentos=$_POST["conocimiento_de_reglamentos"];
        if($conocimiento_de_reglamentos == "1"){
            $conocimiento_de_reglamentos = 1;
        }
        else{
            $conocimiento_de_reglamentos = 0;
        }

        
        
        /* */
        $estado_financiero_empresa=$_POST["estado_financiero_empresa"]; 
        if($estado_financiero_empresa == "1"){
            $estado_financiero_empresa = 1;
        }
        else{
            $estado_financiero_empresa = 0;
        }

        

        
        /* */
        /*
        //INSERT INTO `entrevista` (`id_entrevista`, `fecha`, `nombre_entrevistado`, `telefono_entrevistado`, `correo_entrevistado`, 
        //`puesto`, `problema_1`, `problema_2`, `documentacion`, `que_documentos`, 
        `conocimiento_empleados`, `acceso_empleados`, `frecuencia_evaluar`, `frecuencia_capacitacion`, `conocimiento_de_reglamentos`, 
        `nombrar_reglamentos`, `criterio`, `estado_financiero_empresa`, `actualizacion_estado_financiero`, `software_utilizado`, 
        `porcentaje_licencia_vigente`, `anotaciones`, `proyecto`, `usuario`)
         VALUES (NULL, '2020-08-05', 'nombre entrevistado', 'telefono', 'correo@correo.correo', '2', 'problema 1', 'problema 2', '1', 'Que documentos', '1', '1', '15', '30', '0', 'Nombrar reglamentos', 'Criterio de la empresa', '1', '15', 'Excel', '99', 'Antaciones', '1','2');


        */
        echo '</br>';
        echo 'proyecto';
        var_dump($proyecto);
        echo '</br>';
        $query="INSERT INTO `entrevista` (`fecha`, `nombre_entrevistado`, `telefono_entrevistado`, `correo_entrevistado`,
         `puesto`, `problema_1`, `problema_2`, `documentacion`, `que_documentos`, 
         `conocimiento_empleados`, `acceso_empleados`, `frecuencia_evaluar`, `frecuencia_capacitacion`, `conocimiento_de_reglamentos`, 
         `nombrar_reglamentos`, `criterio`, `estado_financiero_empresa`, `actualizacion_estado_financiero`, `software_utilizado`, 
         `porcentaje_licencia_vigente`, `anotaciones`, `proyecto`, `usuario`) 
         VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        echo '.1-';
        $stmt=$db->prepare($query);
        echo '0';
        $stmt->bind_param('isssissisiissississisii',$fecha_entrevista,$nombre_entrevistado,$telefono_empresa,
        $correo_empresa,$puesto_entrevistado,$problema1,$problema2,$documentacion,$que_documentos,
        $conocimiento_empleados,$acceso_empleados,$frecuencia_evaluar,$frecuencia_capacitacion,$conocimiento_de_reglamentos,$nombrar_reglamemtos,
        $criterio,$estado_financiero_empresa,$actualizacion_estado_financiero,$software_utilizado,$porcentaje_licencia_vigente,$anotaciones,
        $proyecto,$usuario);
        echo '1';
        $stmt->execute();
        echo '2';
        echo '</br>';
        var_dump($stmt);
        echo '</br>';
        echo '3';
        echo '</br>';
        //var_dump($stmt);
        //var_dump($query);
        if  ($stmt->affected_rows>0)
        //if($stmt == true)
        {
            echo '4';
            //echo'actualizado';
            header("Location:entrevistas_realizadas.php");
        }else{
            echo'aqui hay un error';
        }
        


    }

    //Crear proyecto e ingresar consultores al proyecto
    //funciona
    if($accion == 3){    
        
        $nombre_proyecto=$_POST["proyecto_nuevo"];
        $razon_social=$_POST["razon_social"];
        $direccion=$_POST["direccion"];
        $usuarios=$_POST["usuario"];
        
        $cerrado = 0;
        //$i=0;   
        //var_dump($_POST);
        //array(5) { ["proyecto_nuevo"]=> string(6) "nombre" ["razon_social"]=> string(12) "razon social" ["direccion"]=> string(9) "direccion" ["usuario"]=> array(2) { [0]=> string(1) "4" [1]=> string(1) "5" } ["cerrado"]=> string(1) "0" }

        //INSERT INTO `proyectos` (`id_proyectos`, `nombre_proyecto`, `razon_social`, `direccion`, `cerrado`) VALUES (NULL, 'Nuevo', 'Proyecto Prueba', 'Direccion', '0');
        $query="INSERT INTO `proyectos` ( `nombre_proyecto`, `razon_social`, `direccion`, `cerrado`) VALUES ( ?,?,?,?)";
        $stmt=$db->prepare($query);
        $stmt->bind_param('sssi', $nombre_proyecto, $razon_social, $direccion, $cerrado);
        $stmt->execute();
        if  ($stmt->affected_rows>0){
        //if($stmt == true){  
            //var_dump($stmt);
            //echo'actualizado';
            //UPDATE `usuario` SET `proyecto` = '1' WHERE `usuario`.`id_usuario` = 7;
            $id_proyecto = $stmt->insert_id;
            var_dump($usuarios);
            /*echo $id_proyecto;
            var_dump($id_proyecto);*/
            $i=0;
            //var_dump($usuarios);
            //Error de segundo SQL en $query2
            foreach ($usuarios as $id_usuario ) {
                //UPDATE `usuario` SET `proyecto` = '4' WHERE `usuario`.`id_usuario` = 6;
                $query2="INSERT INTO `proyecto_usuario` (`id_proyecto_usuario`, `id_proyectos`, `id_usuario`) VALUES (NULL, ?,?);";
                //$query2="UPDATE `usuario` SET `proyecto` = '$id_proyecto' WHERE `usuario`.`id_usuario` = ?";
                $stmt=$db->prepare($query2);
                $stmt->bind_param('ii',$id_proyecto, $usuarios[$i]);
                //$stmt->bind_param('i',$usuarios[$i]);
                $stmt->execute(); 
                $i++;
            }
            if  ($stmt->affected_rows>0){

                 header("Location:proyecto_nuevo.php");

            }
            
            

        }else{
            echo'aqui hay un error';
        }




    }
    //Cerrar varios proyectos
    //Funciona sin regresar a los consultores a no asignado y ya no esta activa esta funcion
    if($accion == 4){

        var_dump($_POST);
        //array(1) { ["proyecto_finalizado"]=> array(2) { [0]=> string(1) "2" [1]=> string(1) "3" } }
        $id_proyecto_finalizado =$_POST['proyecto_finalizado'];
        $i=0;
        foreach($id_proyecto_finalizado as $proyecto_finalizado)
        {
            $query="UPDATE `proyectos` SET `cerrado` = '1' WHERE `proyectos`.`id_proyectos` = ? ";
            $stmt=$db->prepare($query);
            $stmt->bind_param('i',$id_proyecto_finalizado[$i]);
            $stmt->execute(); 
            $i++; 
        }
        if  ($stmt->affected_rows > 0)
        {
            echo'exito';
            header("Location:proyecto.php");
        }
        else
        {
            echo'fail';
            //header("Location:maestro.php");
        }
    }

    //Ver diagnostico de proyecto
    if($accion == 5){
        var_dump($_POST);
        //array(1) { ["diagnostico_ver"]=> string(1) "2" }
        $ver = (is_numeric($_POST['diagnostico_ver']) ? (int)$_POST['diagnostico_ver'] : 0);
        var_dump($ver);


    }
    
    
    //Cerrar un proyecto en especifico y borrar registro de tabla proyecto_usuario
    //Funciona completo, 
    if($accion == 6){

        //var_dump($_POST);
        //array(1) { ["diagnostico_cerrar"]=> string(1) "3" }
        $cerrar = (is_numeric($_POST['diagnostico_cerrar']) ? (int)$_POST['diagnostico_cerrar'] : 0); //este es el id del proyecto, no del diagnostico
        $sql = "SELECT * FROM proyecto_usuario, proyectos, usuario WHERE proyecto_usuario.id_proyectos=  proyectos.id_proyectos AND proyecto_usuario.id_usuario = usuario.id_usuario AND proyectos.id_proyectos = $cerrar";
        $result=mysqli_query($db,$sql);
        $mostrar=mysqli_fetch_array($result);        
        $proyecto_eliminar = $mostrar['id_proyectos'];
        $diagnostico =$_POST['diagnostico']; //este si es un array de los diagnosticos seleccionados
        
        //var_dump($mostrar);
        /*array(26) { [0]=> string(1) "2" ["id_proyecto_usuario"]=> string(1) "2" [1]=> string(1) "2" 
            ["id_proyectos"]=> string(1) "2" [2]=> string(1) "1" ["id_usuario"]=> string(1) "1" [3]=> string(1) "2" 
            [4]=> string(19) "Pachuco Productions" ["nombre_proyecto"]=> string(19) "Pachuco Productions" 
            [5]=> string(19) "Producciones Rector" ["razon_social"]=> string(19) "Producciones Rector" 
            [6]=> string(7) "Mundial" ["direccion"]=> string(7) "Mundial" [7]=> string(1) "0" ["cerrado"]=> string(1) "0" 
            [8]=> string(1) "1" [9]=> string(3) "123" ["nombre"]=> string(3) "123" [10]=> string(3) "123" ["apellidos"]=> string(3) "123" 
            [11]=> string(11) "123@123.123" ["correo"]=> string(11) "123@123.123" [12]=> string(3) "123" ["contrasena"]=> string(3) "123" 
            [13]=> string(1) "1" ["gerente"]=> string(1) "1" } */       
        
        $query="UPDATE `proyectos` SET `cerrado` = '1' WHERE `proyectos`.`id_proyectos` = ? ";
        $stmt=$db->prepare($query);
        $stmt->bind_param('i',$cerrar);
        $stmt->execute();
        echo'primera consulta';
        echo'</>';
        //var_dump($stmt);
        echo'</br>';

        if  ($stmt->affected_rows > 0)
        {
            echo'entramos a la segunda consulta';
            /*echo'</br>';
            var_dump($stmt)
            echo'</br>';*/

            $sql2="DELETE  FROM proyecto_usuario WHERE proyecto_usuario.id_proyectos = $cerrar";
            $stmt2=$db->prepare($sql2);
            $stmt2->execute();
            if  ($stmt2->affected_rows > 0){
                $i=0;
                foreach ($diagnostico as $idDiagnostico) {
                    //array(2) { ["diagnostico_cerrar"]=> string(1) "1" ["diagnostico"]=> array(2) { [0]=> string(1) "1" [1]=> string(1) "3" } }
                   $sql3="INSERT INTO `proyecto_solucion` ( `id_proyecto`, `id_diagnostico`) VALUES ( ?,?)";
                    $stmt=$db->prepare($sql3);
                    $stmt->bind_param('ii',$cerrar, $diagnostico[$i]);
                    //$stmt->bind_param('i',$usuarios[$i]);
                    $stmt->execute(); 
                    $i++;
                }
                if  ($stmt->affected_rows>0){
                    header("Location:proyectos_iniciados.php");                        
                 }
                //var_dump($_POST);
                //array(2) { ["diagnostico_cerrar"]=> string(1) "1" ["diagnostico"]=> array(2) { [0]=> string(1) "1" [1]=> string(1) "3" } }
                //$sql3="INSERT INTO";
                //header("Location:proyectos_iniciados.php");
            }
            
            
        }
        else
        {
            header("Location:proyectos_iniciados.php");
            echo'</br>';
            echo'fail';
            //header("Location:proyectos_iniciados.php");
        } 

    }

    //Funciona  modificar proyecto e insertar en proyecto_usuario
    if($accion == 8){
        $proyecto_editar =$_POST['id_proyecto'];
        $nuevo_nombre=$_POST['proyecto_nuevo'];
        $nueva_razon =$_POST['razon_social'];
        $nueva_direcc =$_POST['direccion'];
        $usuarios=$_POST["usuario"];

        $query="UPDATE `proyectos` SET `nombre_proyecto` = '$nuevo_nombre', `razon_social` = '$nueva_razon', `direccion` = '$nueva_direcc' WHERE `proyectos`.`id_proyectos` = $proyecto_editar ";
        $stmt=$db->prepare($query);
        $stmt->execute();
        if  ($stmt->affected_rows>0){
            if($usuarios != NULL){
                //echo 'entramos a la segunda consulta';           
                    $id_proyecto = $stmt->insert_id;                   
                    $i=0;
                    foreach ($usuarios as $id_usuario ) {
                        //echo 'entramos a la tercera consulta';
                        var_dump($_POST);
                        //UPDATE `usuario` SET `proyecto` = '4' WHERE `usuario`.`id_usuario` = 6;
                        $query2="INSERT INTO `proyecto_usuario` (`id_proyecto_usuario`, `id_proyectos`, `id_usuario`) VALUES (NULL, ?,?);";
                        //$query2="UPDATE `usuario` SET `proyecto` = '$id_proyecto' WHERE `usuario`.`id_usuario` = ?";
                        $stmt=$db->prepare($query2);
                        $stmt->bind_param('ii',$proyecto_editar, $usuarios[$i]);
                        //$stmt->bind_param('i',$usuarios[$i]);
                        $stmt->execute(); 
                        $i++;
                    }
                    if  ($stmt->affected_rows>0){
                       header("Location:proyectos_iniciados.php");                        
                    }
            }else{
                header("Location:proyectos_iniciados.php");
            }

           
        

    }else{
        header("Location:proyectos_iniciados.php");
    }
}

    //editar usuario/consultor
    if($accion == 9){
        var_dump($_POST);
        //array(5) { ["nombre_empleado"]=> string(6) "Garfio" ["apellido_empleado"]=> string(9) "zanahoria" ["contraseña"]=> string(3) "123" ["correo"]=> string(18) "garfio@naranja.com" ["gerente"]=> string(1) "1" }
        $usuario =$_POST['id_usuario'];
        $nombre_emp=$_POST["nuevo_nombre_empleado"];
        $apellido_emp=$_POST["nuevo_apellido_empleado"];
        $contraseña=$_POST["nueva_contraseña"];
        $correo=$_POST["nuevo_correo"];
        $gerente = (is_numeric($_POST['gerente']) ? (int)$_POST['gerente'] : 0);
        
        
        //UPDATE `usuario` SET `nombre` = 'el empleado', `apellidos` = 'apellidos nuevos', `correo` = 'corero nuevo', `contrasena` = '0123', `gerente` = '1' WHERE `usuario`.`id_usuario` = 10;
        $query="UPDATE `usuario` SET `nombre` = '$nombre_emp', `apellidos` = '$apellido_emp', `correo` = '$correo', `contrasena` = '$contraseña', `gerente` = '$gerente' WHERE `usuario`.`id_usuario` = $usuario;
        ";
        //var_dump($query);
        $stmt=$db->prepare($query);
        $stmt->execute();
        if  ($stmt->affected_rows>0){
            header("Location:alta_user.php");
            //echo 'actualizado';
        }else{
            
            header("Location:gerente.php");
            //echo 'error';
        }

    }

    if($accion == 10){
        var_dump($_POST);
        echo 'hasta aqui voy, esta pestaña no se que funcion ponerle';

    }

    //Eliminar un usuario
    if($accion == 11){
        //var_dump($_POST);
        $empleado_eliminar =$_POST['eliminar_empleado'];
        $sql2 = "DELETE FROM `proyecto_usuario` WHERE `proyecto_usuario`.`id_usuario` = $empleado_eliminar";
        $stmt=$db->prepare($sql2);
        $stmt->execute();

        //DELETE FROM `usuario` WHERE `usuario`.`id_usuario` = $empleado_eliminar
        $sql = "DELETE FROM `usuario` WHERE `usuario`.`id_usuario` = $empleado_eliminar";
        $stmt=$db->prepare($sql);
        $stmt->execute();
        if  ($stmt->affected_rows>0){
            header("Location:alta_user.php");
            //echo 'actualizado';
        }else{
            
            header("Location:gerente.php");
            //echo 'error';
        }
    }

}



//Este es la operacion que se tiene que realizar cuando se genera un diagnostico pdf, el parametro "proyecto" es el id del proyecto y el parametro ruta
//es la direccion de guardado del archivo
//$proyecto y $ruta son variables que tengo que recibir

/*//INSERT INTO `diagnostico` (`id_diagnostico`, `proyecto`, `ruta`) VALUES (NULL, '16', '/diagnosticos/diagnostico.pdf'), (NULL, '3', '/diagnosticos/diagnostico2.pdf');
$sql3="INSERT INTO `diagnostico` ( `proyecto`, `ruta`) VALUES ( ?,?)";
$stmt=$db->prepare($sql3);
$stmt->bind_param('is',$proyecto, $ruta);
//$stmt->bind_param('i',$usuarios[$i]);
$stmt->execute(); 
//$i++;

if  ($stmt->affected_rows>0){
header("Location:diagnostico.php");                        
} */

?>