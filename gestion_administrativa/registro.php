<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" href="imagenes/icon.png">
    <header>
    <?php 
    include('includes/menu.php')
    ?>
    </header>
</head>
<body>

<DIV class= "container">
    <form class="row g-4 mt-2">
        <div class="col-4">
            <label for="emailInput" class= "form-label">Email:</label>
            <input type="email" class="form-control" id="emailInput" placeholder="Ingresar Correo">

        </div>

        <div class="col-4">
            <label for="inputPass" class= "form-label">Contraseña:</label>
            <input type="password" class="form-control" id="inputPass" placeholder="Ingresar Clave">

        </div>

        <div class="col-4">
            <label for="inputclave" class= "form-label">Confirmar:</label>
            <input type="password" class="form-control" id="inputclave" placeholder="Validar Clave">

        </div>

        <div class="col-12">
            <label for="inputNombres" class= "form-label">Nombres y Apellidos:</label>
            <input type="text" class="form-control" id="inputNombres" placeholder="Nombres y Apellidos">

        </div>
        <div class="col-6">
            <label for="inputDni" class= "form-label">DNI:</label>
            <input type="text" class="form-control" id="inputDni" placeholder="Ingresar Dni">

        </div>
        <div class="col-6">
        <label for="inputgenero" class= "form-label">Genero:</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="radiusgenero1">
            <label class="form-check-label" for="radiusgenero1">
            Femenino
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="radiusgenero2">
            <label class="form-check-label" for="radiusgenero2">
            Masculino
            </label>
        </div>

        </div>

        <div class="col-12">
            <label for="inputDireccion" class= "form-label">Direccion Exacta:</label>
            <input type="text" class="form-control" id="inputDireccion" placeholder="Ingresar Direccion">

        </div>

        <div class="col-6">
            <label for="inputCelular" class= "form-label">Celular:</label>
            <input type="text" class="form-control" id="inputCelular" placeholder="Ingresar Celular">

        </div>

        <div class="col-6">
            <label for="inputCiudad" class= "form-label">Ciudad:</label>
            <select class="form-select" id="inputCiudad" required>
            <option selected disabled value="">...</option>
            <option>Olmos</option>
            <option>Motupe</option>
            </select>
           

        </div>

        <div class="col-12">
            <div class=" form-check">
            <input type="checkbox" class="form-check-input" id="CheckAceptar">  
            <label for="CheckAceptar" class= "form-Check-label"> ACEPTAR TERMINOS</label>
             
        </div>
        <div class="col-12">
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault">Dominio de Excel</label>
        </div>
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault">Dominio de Word</label>
        </div>
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault">Dominio de Base de Datos</label>
        </div>
           
        </div>

        <div class="col-12">
        <button type="submit" class="btn btn-primary">ENVIAR</button>
        </div>

    </form>
   </DIV> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>