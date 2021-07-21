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
                            <h2>¿Como realizar una transacción?</h2>
                        </div>
                        <div class="card-body">
                            <div class="container text-center img-size">
                                <img src="../imagenes/Menu.png" class="img-thumbnail">
                            </div>
                            <p class="card-text">1. Dirigase al menu principal. Selecione el icono de caja que se encuentra en la parte superior del menu.</p>
                            <div class="container text-center img-size">
                                <img src="../imagenes/caja-menu.jfif" class="img-thumbnail">
                            </div>
                            <p class="card-text">2. Una vez aqui, selecione el paciente a cobrar.</p>
                            <p class="card-text">3. Selecione la cita que seria cobrada.</p>
                            <p class="card-text">4. Observara, que los detalles de la cita llenan los campos.</p>
                            <p class="card-text">5. Una vez con todos los datos llenos, aprete el boton de "Realizar Transacción".</p>
                            <p class="card-text">6. Los datos han sido ingresados con exito al sistema. </p>
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