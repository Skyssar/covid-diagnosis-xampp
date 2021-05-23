<?php

    $conexion = mysqli_connect(
        "localhost", 
        "root",
        "",
        // "covid_sena"
    );

    $createDatabase = "CREATE DATABASE IF NOT EXISTS `covid_sena` ";
    $create = mysqli_query($conexion, $createDatabase);

    if (!$create){
        echo "Error. No se pudo crear la base de datos";
    }

    mysqli_select_db($conexion, "covid_sena") or die("Conection Lost: ".mysqli_error($conexion));

    $createTablePersonas = "CREATE TABLE IF NOT EXISTS `personas` (
        `id` bigint(20) NOT NULL AUTO_INCREMENT,
        PRIMARY KEY (`id`),
        `nombre` varchar(120) NOT NULL,
        `apellidos` varchar(120) NOT NULL,
        `nacimiento` date NOT NULL,
        `ciudad` varchar(120) NOT NULL,
        `direccion` varchar(120) NOT NULL,
        `correo` varchar(50) NOT NULL,
        UNIQUE KEY `correo` (`correo`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 
      COMMENT='Tabla de los datos de las personas';
      ";


    $createTableSintomas = "CREATE TABLE IF NOT EXISTS `sintomas` (
        `id_sintomas` bigint(20) NOT NULL AUTO_INCREMENT,
        PRIMARY KEY (`id_sintomas`),
        `id_persona` bigint(20) NOT NULL,
        `estornudos` tinyint(1) NOT NULL,
        `dolor_de_cabeza` tinyint(1) NOT NULL,
        `fiebre` tinyint(1) NOT NULL,
        `dolor_de_garganta` tinyint(1) NOT NULL,
        `malestar` tinyint(1) NOT NULL,
        `vomitos` tinyint(1) NOT NULL,
        `estomago` tinyint(1) NOT NULL,
        `diarrea` tinyint(1) NOT NULL,
        `tos` tinyint(1) NOT NULL,
        `mareo` tinyint(1) NOT NULL,
        FOREIGN KEY (`id_persona`) 
        REFERENCES `personas` (`id`) 
        ON DELETE CASCADE ON UPDATE CASCADE
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4
      COMMENT = 'Tabla para los síntomas'";

    $sql1 = mysqli_query($conexion, $createTablePersonas);
    $sql2 = mysqli_query($conexion, $createTableSintomas);

    if(!$sql1 && !$sql2){
        echo "Error. No se pudieron crear las tablas";
    }

?>