<?php


  $envasado1 = [
		"titulo" => "Envasado 1",
		"descripcion" => "Cras ornare tristique elit.",
		"foto" => "prod1.jpg",
		"id" => 53,
		"precio" => 100
	];

	$envasado2 = [
		"titulo" => "Envasado 2",
		"descripcion" => "Cras ornare tristique elit.",
		"foto" => "prod2.jpg",
		"id" => 12,
		"precio" => 200
	];

	$envasado3 = [
		"titulo" => "Envasado 3",
		"descripcion" => "Cras ornare tristique elit.",
		"foto" => "prod3.jpg",
		"id" => 2,
		"precio" => 150
	];

	$envasado4 = [
		"titulo" => "Envasado 4",
		"descripcion" => "Cras ornare tristique elit.",
		"foto" => "prod4.jpg",
		"id" => 20,
		"precio" => 100
	];

	$envasado5 = [
		"titulo" => "Envasado 5",
		"descripcion" => "Cras ornare tristique elit.",
		"foto" => "prod5.jpg",
		"id" => 120,
		"precio" => 400
	];

	$envasado6 = [
		"titulo" => "Envasado 6",
		"descripcion" => "Cras ornare tristique elit.",
		"foto" => "prod6.jpg",
		"id" => 200,
		"precio" => 200
	];

  $envasados = [
		$envasado1,
		$envasado2,
		$envasado3,
		$envasado4,
		$envasado5,
		$envasado6
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
       <?php foreach($envasados as $envasado) :?>
       <article class="producto">
          <div class="display">
            <div class="fondo-organic"></div>
            <img class="best" src="img/bestseller.png" alt="">
            <img class="organic" src="img/100organic.png" alt="">
            <img class="foto-producto"src="img/<?=$envasado["foto"]?>" alt="">
          </div>
          <h2>
            <?=$envasado["titulo"]?>
          </h2>
          <p class="precio">
            $<?=$envasado["precio"]?>
          </p>
          <p class="descripcion">
            <?=$envasado["descripcion"]?>
          </p>
          <div class="botones-producto">
            <button class="btn btn-outline-primary ver-mas">
              <a href="producto_unitario.php">Ver Mas</a>
            </button>
            <button class="btn btn-outline-secondary al-carrito">
              <i class="fas fa-shopping-cart"></i>
            </button>
          </div>
        </article>
        <?php endforeach; ?>
      </section>
      <?php include_once ("footer.html") ?>
    </body>
  </html>
