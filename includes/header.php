<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <!-- BOOTSTRAP 4-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

<?php
/*
    include ("conexion.php");
    $conexion=mysqli_connect($db_host, $db_usuario, $db_contraseña);
    if (mysqli_connect_errno()){
        echo "Fallo al conectar con la base de datos";
        exit();
    }

    mysqli_select_select_db($conexion, $db_title) or die ("no se encuentra la base de datos");
    mysqli_set_charset ($conexion, "utf8");
    $consulta="SELECT * FROM misvideos";
    $resulados=mysquli_querry($conexion, $consulta);

    while ($fila=mysquli_fech_array($resulados))
    {
        $title=$fila{'title'};  
        $sipnosis=$fila{'sinopsis'};  
        $url=$fila{'url'};  

        echo("<h1>nombre</h1>");
    }
    mysqli_close($conexion);
*/
?>

<body>

<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a href="index.php" class="navbar-brand">PHP</a>
    </div>
</nav>
</html>