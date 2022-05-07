<?php
    include 'templates/cabecera.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tienda Online</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="css/estilos.css" rel="stylesheet">

    </head>
    <body>
  <!--Contenido 
-->
    <main>   
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
                <div class="card shadow-sm">
                    <img src="imagenes/aceite.png">
                    <div class="card-body">
                        <h5 class="card-title">Aceite Selecto</h5>
                        <p class="card-text">$ 50.00</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="#" class="btn btn-primary">Comprar ahora</a>
                            </div>
                            <a href="#" class="btn btn-success">Agregar al carrito</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    </main>

    
        <!-- row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3-->
        

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    </body>
</html>
<?php
  include 'templates/pie.php';
?>