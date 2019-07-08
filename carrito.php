<?php
    

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Obstgarten</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleUnico.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Karla&display=swap" rel="stylesheet">

  </head>
  <body>

<?php include_once ("header.html") ?>

<section class="carrito">
    <div>
        <h1>
            Shopping Cart
        </h1>
    </div>
        <div class="body-shopping">
            <div class="shop-preview">
            <div class="titulo-shopping">
                <h2>
                    Titulo producto
                </h2>
            </div>
            <div>
                <img src="img/fresc1.jpg" alt="">
            </div>
            <div class="descripcionProdPreview">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus maiores ipsa sint adipisci consequuntur numquam. Voluptatibus amet corrupti deleniti incidunt, soluta debitis nisi ducimus dicta explicabo ratione earum nihil accusantium?
                </p>
            </div>
            <div class="precioProdPreview">
                <span>
                    200
                </span>                
            </div>
            <div class="cantidadPreview">
            <q><input type="number" value="1" min="1">   
            
            </div>
            <div class="descartarPreview">
                <button>
                    Descartar
                </button>
            </div>
            <div class="totalPreview">
                <p>
                    $200
                </p>
            </div>

        </div>
        <div class="shop-checkout">
            <div class="totales">
                <label>Subtotal</label>
                <div class="valor-totales">200</div>
            </div>
            <div class="totales">
                <label>Impuesto (5%)</label>
                <div class="valor-totales">10</div>
            </div>
            <div class="totales">
                <label>Envío</label>
                <div class="valor-totales">30</div>
            </div>
            <div class="totales totales-total">
                <label>Total</label>
                <div class="valor-totales">240</div>
            </div>
            
            <div>  
                <button class="boton-comprar">Comprar</button>
            </div>
            
        
        </div>
    
    
    
</section>

<?php include_once ("footer.html") ?>


  </body>
</html>


