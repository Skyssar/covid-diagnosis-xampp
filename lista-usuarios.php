<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Listado de usuarios</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>

<?php
    include("html/header.html");
?>
    <div class="enunciado">
           Listado de usuarios registrados
    </div>

    <table class="table-darkblue">

        <thead>
            <tr>
                <th class="id">No</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Ciudad</th>
                <th>Dirección</th>
                <th>Estornudos</th>
                <th>Fiebre</th>
                <th>Malestar</th>
                <th>Diarrea</th>
                <th>Estómago</th>
                <th>Tos</th>
                <th>Vómitos</th>
                <th>Mareo</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php

            include("db/connectDB.php");

            $sql = "SELECT * FROM personas p INNER JOIN sintomas s ON p.id = s.id_persona ORDER BY id ASC";

            $resultado = mysqli_query($conexion, $sql) or die ("Consulta errónea: ".mysqli_error($conexion));

            while ($persona = mysqli_fetch_array($resultado)){

                // Evaluar los datos guardados como binario
                foreach($persona as $key => $dato){
                    if ($persona[$key] == "1" && $key != "id"){
                        $persona[$key] = "Sí";
                    } else {
                        if($persona[$key] == "0"){
                            $persona[$key] = "No";
                        }
                    }
                }
                echo '
                <tr>
                    <td>'.$persona["id"].'</td>
                    <td>'.$persona["nombre"].'</td>
                    <td>'.$persona["apellidos"].'</td>
                    <td>'.$persona["ciudad"].'</td>
                    <td>'.$persona["direccion"].'</td>
                    <td>'.$persona["estornudos"].'</td>
                    <td>'.$persona["fiebre"].'</td>
                    <td>'.$persona["malestar"].'</td>
                    <td>'.$persona["diarrea"].'</td>
                    <td>'.$persona["estomago"].'</td>
                    <td>'.$persona["tos"].'</td>
                    <td>'.$persona["vomitos"].'</td>
                    <td>'.$persona["mareo"].'</td>
                    <td><a href="eliminar-usuario.php?id='.$persona["id"].'"> <img class="icon-img" alt="Eliminar" src="img/ui.png" width="25px"></a></td>
                </tr>';
            }

            mysqli_free_result($resultado);
            ?>

        </tbody>
        
    </table>
</body>

</html>
