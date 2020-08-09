//Validacion de inicio de sesion.
$(document).ready(function () {
    let error_user =true;
    let error_contra =true;

$("#user").focusout(function (e) { 
    e.preventDefault();
    if($("#user").val()=="")
    {
        $("#user").addClass("error"); 
        error_user=true;            
    }
    else
    {
        $("#user").removeClass("error");
        error_user=false;
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


$("#btn_is").click(function (e) { 
    let datosproyecto =$("#formulario_proyecto").serialize();
    let ac=3;

    if( error_user ==false &&
        error_contra ==false
    )
        

    {
        $.post("inicio_sesion.php", datosproyecto,ac,
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
    }
    else
    {
        alert("¡Error! Ingresa datos por favor!");
        
    }
  

    e.preventDefault();
    
});

});
