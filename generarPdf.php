<?php
include("conexion.php");
include( "valida.php");

class PDF {

    private $idDiagnostico = null;

    public function __construct($idDiagnostico) 
    {
        $this->idDiagnostico = $idDiagnostico;
    }
    public function generar()
    {
        $datosDiagnostico = $this->obtenerDatosDelDiagnostico();
        
        $datosDiagnostico["documentacion"] ? "si": "no";  
        $datosDiagnostico["conocimiento_empleados"] ? "si": "no";  
        $datosDiagnostico["acceso_empleados"] ? "si": "no";  
        $datosDiagnostico["conocimiento_de_reglamentos"] ? "si": "no";  
        $datosDiagnostico["estado_financiero_empresa"] ? "si": "no";  

        $content = 'Diagnostico de la empresa'. $datosDiagnostico["nombre_proyecto"]. 'de la fecha' . $datosDiagnostico[1] . '<br><br>
        El diagnostico muestra que el problema principal de la empresa es '. $datosDiagnostico["problema_1"] .', que es lo que esta atrasando los procesos de la empresa '. $datosDiagnostico[30].' <br> 
        La empresa'.$datosDiagnostico["documentacion"] .'cuenta con documentación. <br>
        Documentos anexos:'. $datosDiagnostico[9]. '<br>
        Los empleados '. $datosDiagnostico["conocimiento_empleados"].'conocen estos documentos y los empleados'.$datosDiagnostico["acceso_empleados"].'tienen acceso a estos documentos. <br>
        En la empresa '.$datosDiagnostico[30].' se aplican las herramientas de evaluación de ambiente cada' . $datosDiagnostico["frecuencia_evaluar"].'<br>
        Mientras que las frecuencia de capacitacion de empleados es de'.$datosDiagnostico["frecuencia_capacitacion"].' <br>
        '.$datosDiagnostico["conocimiento_de_reglamentos"].'se conoce o se tiene registro de los reglamentos, leyes o normas a las cuales se tiene que alinear la empresa, que son: <br>'
        .$datosDiagnostico["nombrar_reglamentos"].'<br>
        Segun el criterio del entrevistado'.$datosDiagnostico["nombre_entrevistado"].', no se estan cumpliendo'. $datosDiagnostico["criterio"].'<br>
         '.$datosDiagnostico["estado_financiero_empresa"].' se conoce el estado financiero de la empresa <br>
        Herramientas de software utilizado:' . $datosDiagnostico["software_utilizado"] . 'que cuenta con un porcentaje de licencias vigentes de %'.$datosDiagnostico["porcentaje_licencia_vigente"]. '<br>
        <br><br><br>
        Anotaciones de consultor: <br>' .$datosDiagnostico["anotaciones"]
        ;
        return $content;
    }

    public function obtenerDatosDelDiagnostico()
    {         
        include("conexion.php");
        $sql = "SELECT * FROM entrevista, usuario, proyectos, proyecto_usuario 
                    WHERE entrevista.proyecto = proyectos.id_proyectos
                        AND proyecto_usuario.id_proyectos = proyectos.id_proyectos
                        AND proyecto_usuario.id_usuario = usuario.id_usuario 
                        AND proyectos.id_proyectos =  $this->idDiagnostico";
                       
       
        $result = mysqli_query($db,$sql);

       return $datosDiagnostico=mysqli_fetch_array($result);
      
    }
}

