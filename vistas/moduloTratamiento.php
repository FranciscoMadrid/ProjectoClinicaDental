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
                            <h2>¿Como ingreso un nuevo tratamiento?</h2>
                        </div>
                        <div class="card-body">
                            <div class="container text-center img-size">
                                <img src="../imagenes/Menu.png" class="img-thumbnail">
                            </div>
                            <p class="card-text text-width">1. Dirigase al menu principal. Selecione el boton que diga "Tratamientos"</p>
                            <div class="container text-center img-size">
                                <img src="../imagenes/Tratamiento-menu.png" class="img-thumbnail">
                            </div>
                            <p class="card-text text-width">2. Una vez aqui, podra observar una tabla donde se encontraria la informacion de los diferentes tratamientos disponibles.</p>
                            <p class="card-text text-width">3. Selecione el paciente y el tipo de tratamiento que se realizaria.</p>
                            <p class="card-text text-width">4. En la tabla de materiales, selecionar los materiales que utilizaria el tratamiento y su cantidad.</p>
                            <p class="card-text text-width">5. Con los datos ingresados, haga clic en el boton de "Guardar" para guardar los datos en el sistema.</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h2>¿Como edito un tratamiento?</h2>
                        </div>
                        <div class="card-body">
                            <p class="card-text text-width">1. Dentro del modulo de "Tratamientos", selecione el tratamiento a editar.</p>
                            <p class="card-text text-width">2. Una vez que tenga el tratamiento selecionado, haga clic en el boton de "Editar".</p>
                            <p class="card-text text-width">3. Podra observar, que los campos del tratamiento selecionado son llenados con la informacion selecionada.</p>
                            <p class="card-text text-width">4. Edite los campos que desea cambiar.</p>
                            <p class="card-text text-width">5. Una vez que tenga los datos actualizados, haga clic en el boton de "Guardar" para guardar los datos en el sistema.</p>
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