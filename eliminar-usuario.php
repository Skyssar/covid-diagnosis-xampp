<!DOCTYPE html>
<html lang="en">
<head>
    <title>Eliminar usuario</title>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7e5b2d153f.js" crossorigin="anonymous"></script>

</head>
<body>

    <?php

        require_once("db/connectDB.php");

        include("html/header.html");

        if (isset($_GET)){
            $id_usuario = $_GET["id"];

            $sql = "DELETE FROM personas WHERE id='$id_usuario'";

            $result = mysqli_query($conexion, $sql) or die("Consulta errónea: ".mysqli_error($conexion));;

            if($result){
                echo "El usuario ".$id_usuario." ha sido eliminado";
            } else{
                echo "No se ha podido eliminar el registro ".$id_usuario;
            }

            echo '
            <br>
            <br>
            <a href="lista-usuarios.php"> Volver </a>
            ';
        }

?>

</body>

</html>