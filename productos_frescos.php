<?php

  $fresco1 = [
		"titulo" => "Fresco 1",
		"descripcion" => "Cras ornare tristique elit.",
		"foto" => "fresc1.jpg",
		"id" => 1,
    "precio" => 100,
    "bestseller" => true
	];

	$fresco2 = [
		"titulo" => "Fresco 2",
		"descripcion" => "Cras ornare tristique elit.",
		"foto" => "fresc2.jpg",
		"id" => 2,
    "precio" => 200,
    "bestseller" => false
	];

	$fresco3 = [
		"titulo" => "Fresco 3",
		"descripcion" => "Cras ornare tristique elit.",
		"foto" => "fresc3.jpg",
		"id" => 3,
    "precio" => 150,
    "bestseller" => true
	];

	$fresco4 = [
		"titulo" => "Fresco 4",
		"descripcion" => "Cras ornare tristique elit.",
		"foto" => "fresc4.jpg",
		"id" => 4,
    "precio" => 100,
    "bestseller" => false
	];

	$fresco5 = [
		"titulo" => "Fresco 5",
		"descripcion" => "Cras ornare tristique elit.",
		"foto" => "fresc5.jpg",
		"id" => 5,
    "precio" => 129,
    "bestseller" => false
	];

	$fresco6 = [
		"titulo" => "Fresco 6",
		"descripcion" => "Cras ornare tristique elit.",
		"foto" => "fresc6.jpg",
		"id" => 6,
    "precio" => 200,
    "bestseller" => true
	];

  $frescos = [
		$fresco1,
		$fresco2,
		$fresco3,
		$fresco4,
		$fresco5,
		$fresco6
    ];



?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Obstgarten</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Karla&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleUnico.css">
  </head>
    <body>
      <?php include_once ("header.html") ?>

      <section class="productos">
       <?php foreach($frescos as $fresco) :?>
       <article class="producto">
          <div class="display">
            
            <?php if ($fresco["bestseller"] == true) :?>
            <img class="best" src="img/bestseller.png" alt="">
            <?php endif; ?>
            
            <img class="foto-producto"src="img/<?=$fresco["foto"]?>" alt="">
          </div>
          <h2>
            <?=$fresco["titulo"]?>
          </h2>
          <p class="precio">
            $<?=$fresco["precio"]?>
          </p>
          <p class="descripcion">
            <?=$fresco["descripcion"]?>
          </p>

          <div class="botones-producto">
            <a href="producto_unitario.php" class="boton-ver-mas">
              <button class="btn btn-outline-primary ver-mas">
                Ver Mas
              </button>
            </a>            
            <a href="carrito.php?idProducto=<?=$fresco["id"]?>" class="boton-al-carrito">
              <button class="btn btn-outline-secondary al-carrito">
                <i class="fas fa-shopping-cart"></i>
              </button>
            </a>            
          </div>

        </article>
        <?php endforeach; ?>
      </section>
      <?php include_once ("footer.html") ?>
    </body>
  </html>
