<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODULOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="css/modulos.css">
    <link rel="shortcut icon" href="imagenes/icono.png">

</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
    crossorigin="anonymous">
    </script>
    <header>
    <?php 
    include('includes/menu.php')
    ?>
    </header>
    <main>
        <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
            <h1 class="display-4 fw-normal text-body-danger">Modulos Profesionales</h1>
            <p class="fs-5 text-body-secondary">El programa de estudios ofrece los siguientes modulos tecnicós especificos.</p>
        </div>

        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal"> MODULO 1 </h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title"> Gestion de Procesos Administrativos </h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Incluye</li>
                            <li>Semestre I </li>
                            <li>Semestre II</li>
                            <li>Certificado</li>
                        </ul>
                        <a class="w-100 btn btn-lg btn-outline-info" href="modulo_1.php">Detalles</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal"> MODULO 2 </h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title"> Operatividad De las Funciones Empresariales </h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Incluye</li>
                            <li>Semestre III </li>
                            <li>Semestre IV </li>
                            <li>Certificado</li>
                        </ul>
                        <a class="w-100 btn btn-lg btn-outline-info" href="modulo_2.php">Detalles</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal"> MODULO 3 </h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title"> Gestion Economica Financiera Empresarial </h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Incluye: </li>
                            <li>Semestre V </li>
                            <li>Semestre VI </li>
                            <li>Certificado </li>
                        </ul>
                        <a class="w-100 btn btn-lg btn-outline-info" href="modulo_3.php">Detalles</a>
                    </div>
                </div>
            </div>
        </div>

    </main>
    


    
</body>
</html>