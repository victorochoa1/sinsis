$(document).ready(function () {
    console.log("hasta aqui");
    let error_nombre_entrevistado =true;
    let error_telefono_empresa =true;
    let error_problema1 =true;
    let error_problema2 =true;
    let error_que_documentos =true;
    let error_frecuencia_evaluar=true;
    let error_frecuencia_capacitacion=true;
    let error_nombrar_reglamentos=true;
    let error_criterio=true;
    let error_actualizacion_estado_financiero=true;
    let error_software_utilizado=true;
    let error_porcentaje_licencia_vigente=true;
    let error_anotaciones=true;
    let error_puesto_entrevistado=true;

    if(error_puesto_entrevistado == true){
        console.log("nada seleccionado");
    }
  
    

$("#nombre_entrevistado").focusout(function (e) { 
    e.preventDefault();
    if($("#nombre_entrevistado").val()=="")
    {
        $("#nombre_entrevistado").addClass("error"); 
        error_nombre_entrevistado=true;            
    }
    else
    {
        $("#nombre_entrevistado").removeClass("error");
        error_nombre_entrevistado=false;
    }
});

$("#telefono_empresa").focusout(function (e) { 
    e.preventDefault();
    if($("#telefono_empresa").val()=="")
    {
        $("#telefono_empresa").addClass("error"); 
        error_telefono_empresa=true;            
    }
    else
    {
        $("#telefono_empresa").removeClass("error");
        error_telefono_empresa=false;
    }
});

$("#problema1").focusout(function (e) { 
    e.preventDefault();
    if($("#problema1").val()=="")
    {
        $("#problema1").addClass("error"); 
        error_problema1=true;            
    }
    else
    {
        $("#problema1").removeClass("error");
        error_problema1=false;
    }
});

$("#problema2").focusout(function (e) { 
    e.preventDefault();
    if($("#problema2").val()=="")
    {
        $("#problema2").addClass("error"); 
        error_problema2=true;            
    }
    else
    {
        $("#problema2").removeClass("error");
        error_problema2=false;
    }
});

$("#que_documentos").focusout(function (e) { 
    e.preventDefault();
    if($("#que_documentos").val()=="")
    {
        $("#que_documentos").addClass("error"); 
        error_que_documentos=true;            
    }
    else
    {
        $("#que_documentos").removeClass("error");
        error_que_documentos=false;
    }
});

$("#frecuencia_evaluar").focusout(function (e) { 
    e.preventDefault();
    if($("#frecuencia_evaluar").val()=="")
    {
        $("#frecuencia_evaluar").addClass("error"); 
        error_frecuencia_evaluar=true;            
    }
    else
    {
        $("#frecuencia_evaluar").removeClass("error");
        error_frecuencia_evaluar=false;
    }
});

$("#frecuencia_capacitacion").focusout(function (e) { 
    e.preventDefault();
    if($("#frecuencia_capacitacion").val()=="")
    {
        $("#frecuencia_capacitacion").addClass("error"); 
        error_frecuencia_capacitacion=true;            
    }
    else
    {
        $("#frecuencia_capacitacion").removeClass("error");
        error_frecuencia_capacitacion=false;
    }
});

$("#nombrar_reglamentos").focusout(function (e) { 
    e.preventDefault();
    if($("#nombrar_reglamentos").val()=="")
    {
        $("#nombrar_reglamentos").addClass("error"); 
        error_nombrar_reglamentos=true;            
    }
    else
    {
        $("#nombrar_reglamentos").removeClass("error");
        error_nombrar_reglamentos=false;
    }
});

$("#criterio").focusout(function (e) { 
    e.preventDefault();
    if($("#criterio").val()=="")
    {
        $("#criterio").addClass("error"); 
        error_criterio=true;            
    }
    else
    {
        $("#criterio").removeClass("error");
        error_criterio=false;
    }
});

$("#actualizacion_estado_financiero").focusout(function (e) { 
    e.preventDefault();
    if($("#actualizacion_estado_financiero").val()=="")
    {
        $("#actualizacion_estado_financiero").addClass("error"); 
        error_actualizacion_estado_financiero=true;            
    }
    else
    {
        $("#actualizacion_estado_financiero").removeClass("error");
        error_actualizacion_estado_financiero=false;
    }
});

$("#software_utilizado").focusout(function (e) { 
    e.preventDefault();
    if($("#software_utilizado").val()=="")
    {
        $("#software_utilizado").addClass("error"); 
        error_software_utilizado=true;            
    }
    else
    {
        $("#software_utilizado").removeClass("error");
        error_software_utilizado=false;
    }
});


$("#porcentaje_licencia_vigente").focusout(function (e) { 
    e.preventDefault();
    if($("#porcentaje_licencia_vigente").val()=="")
    {
        $("#porcentaje_licencia_vigente").addClass("error"); 
        error_porcentaje_licencia_vigente=true;            
    }
    else
    {
        $("#porcentaje_licencia_vigente").removeClass("error");
        error_porcentaje_licencia_vigente=false;
    }
});

$("#anotaciones").focusout(function (e) { 
    e.preventDefault();
    if($("#anotaciones").val()=="")
    {
        $("#anotaciones").addClass("error"); 
        error_anotaciones=true;            
    }
    else
    {
        $("#anotaciones").removeClass("error");
        error_anotaciones=false;
    }
});

$("#puesto_entrevistado").change(function (e) { 
    e.preventDefault();
    if($("#puesto_entrevistado").val()=="0")
    {
        
        console.log("nada seleccionado");
        error_puesto_entrevistado=true;            
    }
    else
    {
        console.log("seleccionado")
        error_puesto_entrevistado=false;
    }
});



    $("#ingresar").click(function (e) { 
        let datosproyecto =$("#formulario_proyecto").serialize();
        let ac=2;
        console.log(error_puesto_entrevistado);
        console.log(error_anotaciones);
        console.log(error_porcentaje_licencia_vigente);
        console.log(error_software_utilizado);
        console.log(error_criterio);
        console.log(error_nombrar_reglamentos);
        console.log(error_frecuencia_evaluar);
        console.log(error_frecuencia_capacitacion);
        console.log(error_que_documentos);
        console.log(error_problema1);
        console.log(error_problema2);
        console.log(error_telefono_empresa);
        console.log(error_nombre_entrevistado);

        if( error_nombre_entrevistado ==false && 
            error_telefono_empresa ==false && 
            error_problema1 ==false && 
            error_problema2 ==false && 
            error_que_documentos ==false && 
            error_frecuencia_evaluar==false && 
            error_frecuencia_capacitacion==false &&  
            error_nombrar_reglamentos==false && 
            error_criterio==false && 
            error_actualizacion_estado_financiero==false && 
            error_software_utilizado==false && 
            error_porcentaje_licencia_vigente==false && 
            error_anotaciones==false && 
            error_puesto_entrevistado==false )
            
    
        {
            $.post("operaciones.php", datosproyecto,ac,
            function (data, textStatus, jqXHR) {
                console.log(data);
                alert(data);
                if(data==3)
                    {
                        alert('¡Proyecto registrado!');
                        $("#formulario_proyecto")[0].reset();
                    }
                    else
                    {
                        alert('Proyecto no registrado');
                    }
                }
            );
            console.log("todos en false");
        }
        else
        {

            console.log("¡Error! Ingresa datos por favor!");
            alert("¡Error! Ingresa datos por favor!");
            
        }
      

        e.preventDefault();
        
    });
    











});

