<?php
  // INICIAR SESIÓN
  session_start();
  //definir variables de función
  //añadimos el php con nuestras funciones
  require 'funciones.php';
  /*  Hacemos la conexión a la base de datos aquí */
  // Datos para conectarme
  $host='localhost';
  $basedatos='sysprepgenerator';
  $usuario='sysprepgenerator';
  $password=''; //Introduce tu password aquí

  try {
    // Para que la conexion al mysql utilice las collation UTF-8 añadir charset=utf8 al string de la conexion.
    $pdo = new PDO("mysql:host=$host;dbname=$basedatos;charset=utf8", $usuario, $password);
    // Para que genere excepciones a la hora de reportar errores.
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  }catch(PDOException $e) {
    die($e->getMessage());
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sysprep Generator</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  
  <!-- miccss -->
  <link href="css/micss.css" rel="stylesheet">
      
  <!-- favicon -->
  <link rel="shortcut icon" href="imagenes/webimg/favicon2.ico">
  
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="sysprepbg2">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light sysprepbg">
      <a class="navbar-brand" href="index.php">Sysprep Generator&nbsp;&nbsp;&nbsp;&nbsp;<img src="./imagenes/webimg/xml_m.png" class="img-fluid" alt="Responsive image"/></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="instrucciones.php">Instrucciones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="formsysprep.php">Generator</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="formcsv.php">CSV</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="chocolatey.php">Chocolatey</a>
          </li>
           <?php
            //SI ESTOY REGISTRADO LO MUESTRO
            if(isset ($_SESSION['id']) && $_SESSION['id'] !='' ){
              echo '<li class="nav-item"><a class="nav-link" href="sysprepuserfiles.php">Mis Archivos</a></li>';        
            }
          ?>
          <?php
            //NO ME INTERESA MOSTRAR ESTO SI ESTOY REGISTRADO, POR LO TANTO SOLO LO MUESTRO SI NO TENGO ID DE SESIÓN
            if (!isset ($_SESSION['id'])){
               echo '<li class="nav-item"><a class="nav-link" href="registrar.php">Regístrese</a></li>';
               echo '<li class="nav-item"><a class="nav-link" href="acceso.php">Acceder</a></li>';
            }
          ?>
          <?php
            //SI ESTOY REGISTRADO LO MUESTRO
            if(isset ($_SESSION['id']) && $_SESSION['id'] !='' ){
               echo "<li class='nav-item'><a class='nav-link' href='userpanel.php'>{$_SESSION['email']}</a></li>";
               echo '<li class="nav-item"><a class="nav-link" href="desconectar.php">Desconectar</a></li>';
            }
          ?>
        </ul>
      </div>
    </nav>
  </div>
