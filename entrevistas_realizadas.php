<?php
include('conexion.php');
include("valida2.php");
var_dump($_SESSION);
$id = $_SESSION['id_usuario'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/ico" href="ico.ico" />
    <title>SinSis</title>
</head>

<body id="">
    <center></center>
    <div id="div_formu"> </div>

    <header class="encabezado">
    
        
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
            <div>
                <table>
                    <thead>
                        <tr>
                            <th>Nombre de proyecto</th>                            
                            <th>--</th>
                            <th>Estatus</th>
                        </tr>
                    </thead>
                    <?php
                    $query="SELECT * FROM proyecto_usuario, usuario, proyectos WHERE proyecto_usuario.id_usuario = usuario.id_usuario AND proyecto_usuario.id_proyectos = proyectos.id_proyectos AND proyecto_usuario.id_usuario = $id";
                    //$query_user ="SELECT * FROM proyectos, usuario WHERE usuario.proyecto = proyectos.id_proyectos";                    
                    $i=1;
                    $result=mysqli_query($db,$query);
                    while($mostrar=mysqli_fetch_array($result)){
                        if($mostrar['cerrado']=="0")
                                {
                                    $mostrar['cerrado']= "Inconcluso";
                                }
                                else if ($mostrar['cerrado']=="1")
                                {
                                    $mostrar['cerrado']= "Finalizado";
                                }
                        ?>
                        <tr>
                            <td><?php echo $mostrar["nombre_proyecto"] ?></td>
                            <td>--</td>
                            <th><?php echo $mostrar['cerrado']  ?></th>                          
                        </tr>
                    <?php
                    }
                    ?>
                </table>

                <h1>Ver entrevista</h1>
                <form action="editar_entrevista.php?ac=10" method="POST" id="entrevista_ver" name="entrevista_ver" class="formulario">
                <label for="entrevista_ver">
                <select name="entrevista_ver" id="entrevista_ver">
                <option value="" selected="selected" disabled="disabled">--Selecciona--</option>
                    <?php
                    //SELECT * FROM proyecto_usuario, usuario, proyectos, entrevista WHERE proyecto_usuario.id_usuario = usuario.id_usuario AND proyecto_usuario.id_proyectos = proyectos.id_proyectos AND proyectos.id_proyectos = entrevista.proyecto
                    $consulta="SELECT * FROM proyecto_usuario, usuario, proyectos, entrevista WHERE proyecto_usuario.id_usuario = usuario.id_usuario AND proyecto_usuario.id_proyectos = proyectos.id_proyectos AND proyectos.id_proyectos = entrevista.proyecto AND proyecto_usuario.id_usuario = $id";
                    //$consulta="SELECT * FROM proyecto_usuario, proyectos, usuario WHERE proyecto_usuario.id_proyectos = proyectos.id_proyectos AND proyecto_usuario.id_usuario = usuario.id_usuario AND usuario.id_usuario = $id  ";
                    $ejecutar=mysqli_query($db,$consulta) or die (mysqli_error($db));
                    foreach ($ejecutar as $opciones):
                        var_dump($opciones);
                    ?>
                    <option value="<?php echo $opciones ['id_entrevista'] ?>">Entrevista a <?php echo $opciones['nombre_entrevistado'] ?> de la empresa <?php echo $opciones ['nombre_proyecto'] ?> realizada por <?php echo $opciones['nombre'] ?> el <?php echo $opciones['fecha'] ?></option>
                    <?php endforeach ?>
                </select>
                </label>
                
                <button type="submit" id="">Ver entrevista</button>
            </form>

            </div>
            <br><br>
        </div>
        

    </center>
</body>
</html>