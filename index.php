<!DOCTYPE html>
<html lang="en">
<head>
    <title>Autodiagnóstico Covid-19</title>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7e5b2d153f.js" crossorigin="anonymous"></script>

</head>
<body>

<?php
    include("html/header.html");
?>

<div class="container principal-container">
        <div class="enunciado">
            Bienvenido a la página de autodiagnóstico de Covid 19. <br> Por favor escoja una de las opciones.
        </div>
        <div class="option-card">
            <div class="option-card-text">Registrar síntomas</div>
            <a href="registro-sintomas.php"><img class="option-card-img" src="img/ui.png" alt="opt1"></a>
        </div>
        <div class="option-card">
            <div class="option-card-text">Listado de usuarios</div>
            <a href="lista-usuarios.php"><img class="option-card-img" src="img/happy-ui.jpg" alt="opt2"></a>
        </div>

    </div>

<?php
    include("html/footer.html");
?>


</body>

</html>