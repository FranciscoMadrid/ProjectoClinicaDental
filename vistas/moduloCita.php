<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinical Dental</title>

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
                            <h2>¿Como agendar una cita?</h2>
                        </div>
                        <div class="card-body">
                            <div class="container text-center img-size">
                                <img src="../imagenes/Menu.png" class="img-thumbnail">
                            </div>
                            <p class="card-text">1. Dirigase al menu principal. Selecione el boton que diga 'Citas'</p>
                            <div class="container text-center img-size">
                                <img src="../imagenes/Cita-Agendar.png" class="img-thumbnail">
                            </div>
                            <p class="card-text">2. Una vez aqui, ingrese los datos que se le piden.</p>
                            <div class="alert alert-info" role="alert">
                                La fecha y la hora de la cita tiene que ser mayor a la fecha actual.
                            </div>
                            <p class="card-text">3. Con los datos ingresados, haga click en el buton de "Agregar" para guardar los datos en el sistema.</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h2>¿Como editar una cita?</h2>
                        </div>
                        <div class="card-body">
                            <p class="card-text">1. Dentro del modulo de Citas. Arriba de la tabla, eliga el paciente cuya cita desea cambiar.</p>
                            <p class="card-text">2. Una vez que encuentra la informacion del paciente, selecione la fila a editar.</p>
                            <p class="card-text">3. Con la fila selecionada, aprete el boton de "Editar".</p>
                            <div class="container text-center img-size">
                                <img src="../imagenes/Cita-Editar.png" class="img-thumbnail">
                            </div>
                            <p class="card-text">5. Modifique los datos que desea editar.</p>
                            <p class="card-text">6. Una vez que haya ingresados los datos a modificar, aprete el boton de "Guardar" para guardar los cambios.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </main>
    <?php include '../php/footer.php'?>
</body>
</html>