<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulario Covid-19</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>

<?php
    include("html/header.html");
?>

    <div class="container form-container">
        <form action="save-data.php" method="post">
            <div class="title">
                Registro de síntomas
            </div>
            <div class="subtitle">
                Su salud es importante para nosotros. <br> Por favor, llene los siguientes datos.
            </div>

            <div class="container sub-container">
                <div class="subtext">
                    Información personal
                </div>
                <div class="item">
                    <label for="name">Nombres:</label>
                    <input type="text" name="nombre" id="name"  autofocus placeholder="Ingrese su nombre" required>
                </div>
                <div class="item">
                    <label for="lastnames">Apellidos:</label>
                    <input type="text" name="apellidos" id="lastnames"  placeholder="Ingrese sus apellidos">
                </div>
                <div class="item">
                    <label for="bornDate">Fecha de nacimiento:</label>
                    <input type="date" name="nacimiento" id="bornDate" >
                </div>
                <div class="item">
                    <label for="city">Ciudad:</label>
                    <select name="ciudad" id="city" >
                        <option value="" disabled selected>Seleccione...</option>
                        <option value="Arauca">Arauca</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Barranquilla">Barranquilla</option>
                        <option value="Bogotá">Bogotá</option>
                        <option value="Bucaramanga">Bucaramanga</option>
                        <option value="Cali">Cali</option>
                        <option value="Cartagena">Cartagena</option>
                        <option value="Cúcuta">Cúcuta</option>
                        <option value="Florencia">Florencia</option>
                        <option value="Ibagué">Ibagué</option>
                        <option value="Leticia">Leticia</option>
                        <option value="Manizales">Manizales</option>
                        <option value="Medellín">Medellín</option>
                        <option value="Mitú">Mitú</option>
                        <option value="Mocoa">Mocoa</option>
                        <option value="Montería">Montería</option>
                        <option value="Neiva">Neiva</option>
                        <option value="Pasto">Pasto</option>
                        <option value="Pereira">Pereira</option>
                        <option value="Popayán">Popayán</option>
                        <option value="Puerto Carreño">Puerto Carreño</option>
                        <option value="Puerto Inírida">Puerto Inírida</option>
                        <option value="Quibdó">Quibdó</option>
                        <option value="Riohacha">Riohacha</option>
                        <option value="San Andrés">San Andrés</option>
                        <option value="San José del Guaviare">San José del Guaviare</option>
                        <option value="Santa Marta">Santa Marta</option>
                        <option value="Sincelejo">Sincelejo</option>
                        <option value="Tunja">Tunja</option>
                        <option value="Valledupar">Valledupar</option>
                        <option value="Villavicencio">Villavicencio</option>
                        <option value="Yopal">Yopal</option>
                    </select>
                </div>
                <div class="item">
                    <label for="address">Dirección:</label>
                    <input type="text" name="direccion" id="address" placeholder="Ingrese su dirección">
                </div>
                <div class="item">
                    <label for="email">Email:</label>
                    <input type="email" name="correo" id="email" placeholder="Ingrese su correo electrónico">
                </div>
            </div>

            <div class="container sub-container">
                <div class="subtext">
                    Indíquenos sus síntomas
                </div>

                <div class="check">
                    <label for="sneezing">Estornudos</label>
                    <input type="checkbox" name="estornudos" id="sneezing">
                </div>
                <div class="check">
                    <label for="headache">Dolor de cabeza</label>
                    <input type="checkbox" name="dolorDeCabeza" id="headache">
                </div>
                <div class="check">
                    <label for="fever">Fiebre</label>
                    <input type="checkbox" name="fiebre" id="fever">
                </div>
                <div class="check">
                    <label for="soreThroat">Dolor de garganta</label>
                    <input type="checkbox" name="dolorDeGarganta" id="soreThroat">
                </div>
                <div class="check">
                    <label for="discomfort">Malestar general</label>
                    <input type="checkbox" name="malestar" id="discomfort">
                </div>
                <div class="check">
                    <label for="vomit">Vómitos</label>
                    <input type="checkbox" name="vomitos" id="vomit">
                </div>
                <div class="check">
                    <label for="stomachache">Dolor de estómago</label>
                    <input type="checkbox" name="dolorDeEstomago" id="stomachache">
                </div>
                <div class="check">
                    <label for="diarrhea">Diarrea</label>
                    <input type="checkbox" name="diarrea" id="diarrhea">
                </div>
                <div class="check">
                    <label for="cough">Tos seca</label>
                    <input type="checkbox" name="tos" id="cough">
                </div>
                <div class="check">
                    <label for="dizziness">Mareo</label>
                    <input type="checkbox" name="mareo" id="dizziness">
                </div>
            </div>
            
            <div class="buttons">
                <input type="submit" value="Guardar" id="guardar">
                <input type="reset" value="Cancelar" id="cancelar">
            </div>


        </form>
    </div>

<?php
    include("html/footer.html");
?>

</body>
</html>