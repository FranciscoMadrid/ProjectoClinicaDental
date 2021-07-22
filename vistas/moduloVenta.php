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
                            <h2>¿Como realizar una compra?</h2>
                        </div>
                        <div class="card-body">
                            <div class="container text-center img-size">
                                <img src="../imagenes/Menu.png" class="img-thumbnail">
                            </div>
                            <p class="card-text text-width">1. Dirigase al menu principal. Selecione el boton que diga "Compras"</p>
                            <div class="container text-center img-size">
                                <img src="../imagenes/Compra-modulo.png" class="img-thumbnail">
                            </div>
                            <p class="card-text text-width">2. Una vez aqui, selecione el producto que desea comprar.</p>
                            <p class="card-text text-width">3. Ingrese los datos que se le pide en la parte superior del modulo.</p>
                            <p class="card-text text-width">4. Con los datos ingresados, haga click en el buton de "Agregar al carrito".</p>
                            <div class="container text-center img-size">
                                <img src="../imagenes/Compra-Agregar.png" class="img-thumbnail">
                            </div>
                            <br>
                            <div class="alert alert-info text-width" role="alert">
                                Si deseas eliminar un producto del carrito. Selecione el producto a eliminar en el menu derecho y aprete el boton "Quitar del carrito".
                            </div>
                            <p class="card-text text-width">5. Una vez que haya ingresado todos los productos que desea comprar; haga clic en el boton "Comprar".</p>
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