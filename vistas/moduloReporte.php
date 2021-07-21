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
                        <h2>¿Como puedo visualizar los reportes?</h2>
                    </div>
                    <div class="card-body">
                        <div class="container text-center img-size">
                            <img src="../imagenes/Menu.png" class="img-thumbnail">
                        </div>
                        <p class="card-text">1. Dirigase al menu principal. Selecione el boton que diga "Reportes"</p>
                        <div class="container text-center img-size">
                            <img src="../imagenes/Reporte-menu.png" class="img-thumbnail">
                        </div>
                        <p class="card-text">2. Una vez aqui, podra observar en la barra izquierda diferentes posibles reportes que el programa ofrece.</p>
                        <p class="card-text">3. Selecione el reporte que desea visualizar e ingrese los datos que se le pide.</p>
                        <p class="card-text">4. Una vez que los datos hayan sidos ingresados correctamente, el reporte se generar de la siguiente manera.</p>
                        <div class="container text-center img-size">
                            <img src="../imagenes/Reporte-Fecha de compra material.png" class="img-thumbnail">
                        </div>
                        <br>
                        <div class="alert alert-info" role="alert">
                            En este ejemplo, se eligio el reporte de materiales proximo a vencer...
                        </div>

                        <br>

                        <div class="container text-center img-size">
                            <img src="../imagenes/Reporte- de tratamientos.png" class="img-thumbnail">
                        </div>
                        <br>
                        <div class="alert alert-info" role="alert">
                            En este ejemplo, se eligio el reporte de tratamientos...
                        </div>
                        
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