/*$("#finalizado").click(function (e) { 
    e.preventDefault();
    alert("no haz elegido nada");
    if($("#diagnostico_ver").val()==""){
        console.log("no has elegido nada");
        alert("no haz elegido nada");
    }
    else{
        alert("Haz elegido con sabiduria");
    }
    
});*/
let error_diagnostico = true;



$("#diagnostico_ver").change(function (e) { 
    e.preventDefault();
    if($("#diagnostico_ver").val()==""){
        error_diagnostico = true;
        console.log("no seleccionado");
    }else{
        error_diagnostico = false;
        console.log("seleccionado");
    }
    if(error_diagnostico ==true){
        console.log("no seleccionado");
    }else{
        console.log("Ya seleccionado");
    }

    
});

$("#finalizado").submit(function (e) { 
    e.preventDefault();
    let datos_diagnostico = $("#formulario_mostrar_diagnostico").serialize();
    if(error_diagnostico == false){
        $.post("diagnostico_vista.php", datos_diagnostico,
        function (data, textStatus, jqXHR) {
            
            
        },
        "dataType"
    );
    }else{
        
        alert("Error, selecciona un proyecto");
    }
    
    
});