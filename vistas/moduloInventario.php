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
                            <h2>¿Como ingreso un producto al inventario?</h2>
                        </div>
                        <div class="card-body">
                            <div class="container text-center img-size">
                                <img src="../imagenes/Menu.png" class="img-thumbnail">
                            </div>
                            <p class="card-text text-width">1. Dirigase al menu principal. Selecione el boton que diga "Inventario".</p>
                            <div class="container text-center img-size">
                                <img src="../imagenes/Inventario-menu.png" class="img-thumbnail">
                            </div>
                            <p class="card-text text-width">2. Una vez aqui, podra observar dos tablas. Una que contiene la informacion de los materiales y otra que contiene los tratamientos y los materiales que utiliza.</p>
                            <p class="card-text text-width">3. Ingrese los datos del nuevo material que quiere ingresar.</p>
                            <p class="card-text text-width">4. Con los datos ingresados, haga click en el buton de "Guardar".</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h2>¿Como edito un producto en el inventario?</h2>
                        </div>
                        <div class="card-body">
                            <p class="card-text">1. Dentro del modulo de inventario, eliga el producto que desea actualizar en la tabla de los materiales.</p>
                            <p class="card-text">2. Con la fila selecionada, aprete en el boton de "Editar".</p>
                            <p class="card-text">3. Se le llenaria los datos del material selecionado en los campos correspondientes. Ahora, usted puede editar la informacion del material a su gusto.</p>
                            <p class="card-text">4. Una vez que haya realizado los cambios deseados, haga clic en "Guardar" para guardar los cambios en el sistema.</p>
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