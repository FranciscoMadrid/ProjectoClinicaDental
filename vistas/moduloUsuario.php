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
                            <h2>¿Como ingreso un nuevo usuario al sistema?</h2>
                        </div>
                        <div class="card-body">
                            <div class="container text-center img-size">
                                <img src="../imagenes/Menu.png" class="img-thumbnail">
                            </div>
                            <p class="card-text text-width">1. Dirigase al menu principal. En el menu superior, haga clic en la figura de un engranaje.</p>
                            <div class="container text-center img-size">
                                <img src="../imagenes/Usuario-menu.png" class="img-thumbnail">
                            </div>
                            <p class="card-text text-width">2. Una vez aqui, selecione el boton que dice "Agregar nuevo usuario".</p>
                            <br>
                            <div class="container text-center img-size">
                                <img src="../imagenes/Usuario-menu.jfif" class="img-thumbnail">
                            </div>
                            <br>
                            <p class="card-text text-width">3. Ingrese los datos que se le pide.</p>
                            <br>
                            <div class="alert alert-info text-width" role="alert">
                                Asegurese de utilizar una contraseña que sea segura y facil de recordar...
                            </div>
                            <br>
                            <p class="card-text text-width">4. Con los datos ingresados, haga click en el boton de "Agregar" para guardar los datos en el sistema.</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h2>¿Como actualizo la informacion de un usuario?</h2>
                        </div>
                        <div class="card-body">
                            <p class="card-text text-width">1. Dentro del modulo de usuario, selecione una fila de la tabla de empleados.</p>
                            <p class="card-text text-width">2. Con la fila selecionada, haga clic en el boton de "Editar".</p>
                            <p class="card-text text-width">3. Como puede observar, los datos del empleado han sido traidos y puesto en sus respectivos campos.</p>
                            <p class="card-text text-width">4. Una vez que haya realizado los cambios que desea, haga clic en el boton de "Guardar" para gaurdar los nuevos cambios en el sistema.</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h2>¿Como elimino un usuario?</h2>
                        </div>
                        <div class="card-body">
                            <p class="card-text text-width">1. Dentro del modulo de usuario, selecione una fila de la tabla de empleados.</p>
                            <p class="card-text text-width">2. Con la fila selecionada, haga clic en el boton de "Eliminar".</p>
                            <p class="card-text text-width">3. Se abriria una nueva ventana pidiendo su confirmacion para eliminar los datos.</p>
                            <p class="card-text text-width">4. Haga clic en el boton de "Confirmar" para eliminar los registros del empleado selecionado.</p>
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