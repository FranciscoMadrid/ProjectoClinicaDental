<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
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

  <section class="py-5 text-center container main-contenedor">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 ><b>Bienvenido</b></h1>
        <p class="lead text-muted">Aqui podra encontrar diferentes guias para el manejo de nuestra applicacion. Eliga uno de los modulos que usted necesita ayuda...</p>
      </div>
    </div>
  </section>

  <div class="album py-5">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
            <div class="card shadow-sm h-100">
            <img src="../imagenes/Icono-Citas.png" class="card-img-top img-thumbnail" style="background-color:skyblue;" alt="...">

              <div class="card-body d-flex flex-column">
              <h5 class="card-title">Modulo de citas</h5>
                <p class="card-text">El modulo de citas se encarga de mantener un control sobre todas las citas a agendar. Para mas informacion, haga click en el boton de informaccion.</p>
                <div class="btn-group align-self-center">
                  <a href="../vistas/moduloCita.php"><button type="button" class="btn btn-sm btn-outline-secondary">Informacion</button></a>
                </div>
              </div>
            </div>
        </div>

        <div class="col">
          <div class="card shadow-sm h-100">
          <img src="../imagenes/Icono-Compras.png" class="card-img-top img-thumbnail" style="background-color:skyblue;" alt="...">

            <div class="card-body d-flex flex-column">
            <h5 class="card-title">Modulo de compra</h5>
              <p class="card-text">El modulo de compra se encarga de mantener un registro de las compras de productos realizadas por la compañia.</p>
              <div class="btn-group align-self-center">
                <a href="../vistas/moduloVenta.php"><button type="button" class="btn btn-sm btn-outline-secondary">Informacion</button></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm h-100">
            <img src="../imagenes/Icono-caja.png" class="card-img-top img-thumbnail" style="background-color:skyblue;" alt="...">

            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Modulo de caja</h5>
              <p class="card-text">El modulo de caja realiza la transaccion entre el usuario y el cliente. Para obtener mas informacion acerca de este modulo, haga click en el boton de informacion.</p>
              <div class="btn-group align-self-center">
                <a href="../vistas/moduloCaja.php"><button type="button" class="btn btn-sm btn-outline-secondary">Informacion</button></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm h-100">
            <img src="../imagenes/Icono-Reporte.png" class="card-img-top img-thumbnail" style="background-color:skyblue;" alt="...">

            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Modulo de reporte</h5>
              <p class="card-text">El modulo de reporte, usted podra visualizar informacion critica tal como el estado del inventario de la compañia o las ventas que han transcurrido este año.</p>
              <div class="btn-group align-self-center">
                <a href="../vistas/moduloReporte.php"><button type="button" class="btn btn-sm btn-outline-secondary">Informacion</button></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm h-100">
            <img src="../imagenes/Icono-Inventario.png" class="card-img-top img-thumbnail" style="background-color:skyblue;" alt="...">

            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Modulo de inventario</h5>
              <p class="card-text">El modulo de inventario usted podra obtener informacion acerca de los materiales y tratamientes actuales.</p>
              <div class="btn-group align-self-center">
                <a href="../vistas/moduloInventario.php"><button type="button" class="btn btn-sm btn-outline-secondary">Informacion</button></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm h-100">
            <img src="../imagenes/Icono-Tratamientos.png" class="card-img-top img-thumbnail" style="background-color:skyblue;" alt="...">

            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Modulo de tratamientos</h5>
              <p class="card-text">El modulo de tratamientos es donde podra ingresar los nuevos tratamientos que serian realizados a un paciente.</p>
              <div class="btn-group align-self-center">
                <a href="../vistas/moduloTratamiento.php"><button type="button" class="btn btn-sm btn-outline-secondary">Informacion</button></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm h-100">
            <img src="../imagenes/Icono-Pacientes.png" class="card-img-top img-thumbnail" style="background-color:skyblue;" alt="...">

            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Modulo de pacientes</h5>
              <p class="card-text">El modulo de pacientes le permite observa todos los pacientes que existen actualmente y agregar nuevos pacientes al sistema.</p>
              <div class="btn-group align-self-center">
                <a href="../vistas/moduloPaciente.php"><button type="button" class="btn btn-sm btn-outline-secondary">Informacion</button></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm h-100">
            <img src="../imagenes/Icono-user.png" class="card-img-top img-thumbnail" style="background-color:skyblue;" alt="...">

            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Modulo de usuarios</h5>
              <p class="card-text">El modulo de usuarios es donde podra manejar quien tiene acceso al sistema y la habilidad de crear nuevos usuarios.</p>
              <div class="btn-group align-self-center">
                <a href="../vistas/moduloUsuario.php"><button type="button" class="btn btn-sm btn-outline-secondary">Informacion</button></a>
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
