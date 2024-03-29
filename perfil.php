<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleUnico.css">
    <link href="https://fonts.googleapis.com/css?family=Karla&display=swap" rel="stylesheet">
    <title>Perfil</title>
</head>

<body class="cuerpo-perfil">

    <?php include_once ("header.html") ?>

    <main>
        <div class="profile">
            <div class="foto-perfil">
                <img src="img/img-profile-girl.jpg" alt="girl">
            </div>
            <div class="ladoDatos">
                <h2>
                    Jane Doe
                </h2>
                <p>
                    Argentina
                </p>
                <p>
                    01/01/1990
                </p>
                <p>
                    janedoe@gmail.com
                </p>
                <p>
                    +54 011 555-5555
                </p>
            </div>
        </div>
        <div class="botones-perfil">
            <button id="boton-perfil" type="submit" name="button" class="btn btn-primary boton-perfil">
                Editar Datos
            </button>
        </div>

    </main>

    <?php include_once ("footer.html") ?>

</body>
</html>
