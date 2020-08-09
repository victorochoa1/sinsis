$(document).ready(function () {

    let error_nombre_empleado =true;
    let error_apellido_empleado=true;
    let error_contra=true;
    let error_correo=true;
    console.log("hasta aqui");
    console.log(error_apellido_empleado);
    console.log(error_contra);
    console.log(error_contra);
    console.log(error_correo);
    

$("#nombre_empleado").focusout(function (e) { 
    e.preventDefault();
    if($("#nombre_empleado").val()=="")
    {
        $("#nombre_empleado").addClass("error"); 
        error_nombre_empleado=true;            
    }
    else
    {
        $("#nombre_empleado").removeClass("error");
        error_nombre_empleado=false;
    }
});

$("#apellido_empleado").focusout(function (e) { 
    e.preventDefault();
    if($("#apellido_empleado").val()=="")
    {
        $("#apellido_empleado").addClass("error"); 
        error_apellido_empleado=true;            
    }
    else
    {
        $("#apellido_empleado").removeClass("error");
        error_apellido_empleado=false;
    }
});
$("#correo").focusout(function (e) { 
    e.preventDefault();
    if($("#correo").val()=="")
    {
        $("#correo").addClass("error"); 
        error_correo=true;            
    }
    else
    {
        $("#correo").removeClass("error");
        error_correo=false;
    }
});

$("#contra").focusout(function (e) { 
    e.preventDefault();
    if($("#contra").val()=="")
    {
        $("#contra").addClass("error"); 
        error_contra=true;            
    }
    else
    {
        $("#contra").removeClass("error");
        error_contra=false;
    }
});

$("#reg_emp").click(function (e) { 
    let datosproyecto =$("#formulario_proyecto").serialize();
    let ac=12;
    console.log(error_apellido_empleado);
    console.log(error_contra);
    console.log(error_contra);
    console.log(error_correo);

    if( error_nombre_empleado ==false &&
        error_apellido_empleado==false &&
        error_contra==false &&
         error_correo==false
    )
    {
        console.log("todos en false");
       $.post("operaciones.php", datosproyecto,ac,
        function (data, textStatus, jqXHR) {
            console.log(data);
            alert(data);
            if(data==1)
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
    }
    else
    {
        alert("¡Error! Ingresa datos por favor!");
        
    }
  

    e.preventDefault();
    
});







});