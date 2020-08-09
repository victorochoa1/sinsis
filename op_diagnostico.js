$(document).ready(function () {

    let error_diagnostico_ver =true;
    
    

$("#diagnostico_ver").focusout(function (e) { 
    e.preventDefault();
    if($("#diagnostico_ver").val()=="")
    {
        $("#diagnostico_ver").addClass("error"); 
        error_diagnostico_ver=true;            
    }
    else
    {
        $("#diagnostico_ver").removeClass("error");
        error_diagnostico_ver=false;
    }
});

$("#finalizado").click(function (e) { 
    let datosproyecto =$("#formulario_proyecto").serialize();
    let ac=5;

    if( 
        error_diagnostico_ver ==false

       
    )
    {
        $.post("diagnostico_vista.php", datosproyecto,ac,
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