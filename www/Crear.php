<?php
ob_start();
?>

<?php session_start(); ?>

<?php
session_start();

//conexion
include("conexion.php");

//comprueba si existe. isset es si existe
if (isset($_SESSION['user_id'])) {

  echo "

<!DOCTYPE html>
<html lang='es'>

<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>Crear producto</title>

  <!-- Bootstrap -->
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6' crossorigin='anonymous'>

  <!-- font awesome -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css' integrity='sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=' crossorigin='anonymous' />

  <!-- Google fonts -->
  <link rel='preconnect' href='https://fonts.gstatic.com'>
  <link href='https://fonts.googleapis.com/css2?family=Roboto&display=swap' rel='stylesheet'>

  <style>
    html {
      height: 100%;
    }

    body {
      font-family: 'Roboto', sans-serif;

      background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
      background-size: 400% 400%;
      animation: gradient 15s ease infinite;
    }

    @keyframes gradient {
      0% {
        background-position: 0% 50%;
      }

      50% {
        background-position: 100% 50%;
      }

      100% {
        background-position: 0% 50%;
      }
    }
  </style>

</head>

<body class='h-100'>

  <div class='row h-100 mx-0'>

    <div class='col-lg-5 col-md-8 col-sm-10 col-11 bg-white border  rounded-3 shadow px-md-5 py-5  mx-auto my-auto'>

      <form method='POST' action='InsertaRegistros.php'>

        Nombre: <br> <input class='mt-2 form-control' type='text' name='nombre'> <br>
        Precio: <br> <input class='mt-2 form-control' type='number' step='any' name='precio'>

        <div class='text-center'>
          <input class='btn btn-primary btn-lg mt-4 col-12' type='submit' name='ENVIAR' value='Crear'>
          <input class='btn  btn-lg mt-3 col-12' type='submit' name='ENVIAR' value='Volver'>
        </div>

      </form>

    </div>
  </div>
</body>
</html>

";
} else {
  header("location: SesionNoIniciada.php");
}


?>

<?php
ob_end_flush();
?>