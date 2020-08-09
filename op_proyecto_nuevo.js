$(document).ready(function () {
    console.log("hasta aqui");

    let error_proyecto_nuevo =true;
    let error_razon_social=true;
    let error_direccion =true;
    
    

$("#proyecto_nuevo").focusout(function (e) { 
    e.preventDefault();
    if($("#proyecto_nuevo").val()=="")
    {
        $("#proyecto_nuevo").addClass("error"); 
        error_proyecto_nuevo=true;    
        console.log("cambio proyecto_nuevo");
    }
    else
    {
        $("#proyecto_nuevo").removeClass("error");
        error_proyecto_nuevo=false;
    }
});

$("#razon_social").focusout(function (e) { 
    e.preventDefault();
    if($("#razon_social").val()=="")
    {
        $("#razon_social").addClass("error"); 
        error_razon_social=true;      
        console.log("cambio razon_social");      
    }
    else
    {
        $("#razon_social").removeClass("error");
        error_razon_social=false;
    }
});



$("#direccion").focusout(function (e) { 
    e.preventDefault();
    if($("#direccion").val()=="")
    {
        $("#direccion").addClass("error"); 
        error_direccion=true;            
        console.log("cambio direccion");
    }
    else
    {
        $("#direccion").removeClass("error");
        error_direccion=false;
    }
});


$("#nuevo_pro").click(function (e) { 
    let datosproyecto =$("#formulario_proyecto").serialize();
    let ac=3;

    if( error_proyecto_nuevo ==false &&
        error_razon_social==false &&
        error_direccion ==false 
    )
        

    {
        $.post("operaciones.php", datosproyecto,ac,
        function (data, textStatus, jqXHR) {
            console.log(data);
            alert(data);
            if(data==3)
                {
                    alert('¡Proyecto registrado!');
                    //$("#formulario_proyecto")[0].reset();
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