<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinical Dental</title>

    <!-- Bootstrap core CSS -->

    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/customStyles.css">
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js" ></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
</head>
<body>
<?php include '../php/header.php'?>

<main class="background-img">

  <div class="album py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h2>¿Como puedo ingresar un nuevo paciente?</h2>
                    </div>
                    <div class="card-body">
                        <div class="container text-center img-size">
                            <img src="../imagenes/Menu.png" class="img-thumbnail">
                        </div>
                        <p class="card-text">1. Dirigase al menu principal. Selecione el boton que diga "Pacientes"</p>
                        <div class="container text-center img-size">
                            <img src="../imagenes/Pacientes-menu.png" class="img-thumbnail">
                        </div>
                        <p class="card-text">2. Una vez aqui, podra observar la tabla de pacientes que contiene todos los pacientes actualmente activos en el sistema.</p>
                        <p class="card-text">3. Ingrese los datos que se le pide.</p>
                        <p class="card-text">4. Una vez que los datos hayan sidos ingresados correctamente, haga clic en el boton de "Guardar".</p> 
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h2>¿Como puedo editar un paciente?</h2>
                    </div>
                    <div class="card-body">
                        <p class="card-text">1. Dentro del modulo de pacientes, selecione el paciente a editar en la tabla de pacientes.</p>
                        <p class="card-text">2. Una vez selecionado, haga clic en el boton de "Editar".</p>
                        <p class="card-text">3. Podra observar que los datos del paciente selecionado han llenado sus campos respectivos.</p>
                        <p class="card-text">4. Edite los datos que desea cambiar.</p> 
                        <p class="card-text">5. Una vez que haya realizado los cambios deseados, haga clic en el boton de "Guardar" para guardar los nuevos cambios.</p> 
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

</main>

<?php include '../php/footer.php' ?>
</body>
</html>