<?php

require_once("connectDB.php");

//error_reporting(0);

$name = $_POST["nombre"];
$lastnames = $_POST["apellidos"];
$bornDate = $_POST["nacimiento"];
$city = $_POST["ciudad"];
$address = $_POST["direccion"];
$email = $_POST["correo"];

$values = array(
    "estornudos" => 0,
    "dolorDeCabeza" => 0,
    "fiebre" => 0,
    "dolorDeGarganta" => 0,
    "malestar" => 0,
    "vomitos" => 0,
    "dolorDeEstomago" => 0,
    "diarrea" => 0,
    "tos" => 0,
    "mareo" => 0,
);

// var_dump($values); 

// echo $values["mareo"];

foreach ($values as $key => $value){
    if (isset($_POST[$key])){
        $values[$key] = 1;
    }
}

$consulta = mysqli_query($conexion, "SELECT * FROM personas WHERE correo='$email'; ");

if (mysqli_num_rows($consulta)>0){

    printf("El correo electrónico %s ya existe.\n", $email);

}
else{

    $insert_datos = mysqli_query($conexion, "INSERT INTO personas(nombre, apellidos, nacimiento, ciudad, direccion, correo) 
    VALUES('$name', '$lastnames', '$bornDate', '$city', '$address', '$email'); ");

    if ($insert_datos){

        $consulta2 = mysqli_query($conexion, "SELECT id FROM personas ORDER BY id DESC LIMIT 1;");

        $result = mysqli_fetch_array($consulta2);
        $id = $result["id"];

        $estornudos = $values["estornudos"];
        $dolorDeCabeza = $values["dolorDeCabeza"];
        $fiebre = $values["fiebre"];
        $dolorDeGarganta = $values["dolorDeGarganta"];
        $malestar = $values["malestar"];
        $vomitos = $values["vomitos"];
        $estomago = $values["dolorDeEstomago"];
        $diarrea = $values["diarrea"];
        $tos = $values["tos"];
        $mareo = $values["mareo"];

        $insert_sintomas = mysqli_query($conexion, "INSERT INTO sintomas(id_persona, estornudos, dolor_de_cabeza, fiebre , dolor_de_garganta, malestar, vomitos, estomago, diarrea, tos, mareo) 
        VALUES($id, $estornudos, $dolorDeCabeza, $fiebre, $dolorDeGarganta, $malestar, $vomitos, $estomago, $diarrea, $tos, $mareo); ");

        echo "Data saved succesfully.";
        
    } else{
        echo "Barro. Data not saved";
    }


}
    
   

?>
