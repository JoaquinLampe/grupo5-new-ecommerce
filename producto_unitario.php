<?php

// Esta informacion esta duplicada de "productos_envasados"
$envasados = [
  0 => [
		"titulo" => "Envasado 1",
		"descripcion" => "Cras ornare tristique elit.",
		"foto" => "prod1.jpg",
		"id" => 53,
		"precio" => 100
	],

	1 => [
		"titulo" => "Envasado 2",
		"descripcion" => "Cras ornare tristique elit.",
		"foto" => "prod2.jpg",
		"id" => 12,
		"precio" => 200
	],

	2 => [
		"titulo" => "Envasado 3",
		"descripcion" => "Cras ornare tristique elit.",
		"foto" => "prod3.jpg",
		"id" => 2,
		"precio" => 150
	],

	3 => [
		"titulo" => "Envasado 4",
		"descripcion" => "Cras ornare tristique elit.",
		"foto" => "prod4.jpg",
		"id" => 20,
		"precio" => 100
	],

	4 => [
		"titulo" => "Envasado 5",
		"descripcion" => "Cras ornare tristique elit.",
		"foto" => "prod5.jpg",
		"id" => 120,
		"precio" => 400
	],

	5 => [
		"titulo" => "Envasado 6",
		"descripcion" => "Cras ornare tristique elit.",
		"foto" => "prod6.jpg",
		"id" => 200,
		"precio" => 200
]

  ];



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

<?php include_once ("funciones.php") ?>


 <div class="">
   <div class="container text-center">
       <h1>Informacion de la serie:</h1>

       <ul class="list-unstyled">

<!-- aca el numero de $i, va a ir variando segun el producto elegido
no supe como hacerlo sin que sea tan manual, ademas tuve que
modificar el array de JL-->

  <?php  $i = 3;?>

      <?php foreach ($envasados[$i] as $key => $value) : ?>
             <li>
                 <?= $key ?>: <?= $value ?>
             </li>

           <?php endforeach; ?>
               </ul>

 </div>


<?php include_once ("footer.html") ?>
  </body>
</html>
