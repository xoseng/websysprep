<?php
require 'cabecera.php';
?>
<div class="container">
<h2>Registro de usuarios</h2>
	<form class="col-md-7" method="POST" action="">
		<div class="form-group">
			<label for="email">Dirección de E-mail</label>
			<input type="email" class="form-control" id="email" name="email" placeholder="Email">
    </div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" class="form-control" id="password" name="password" placeholder="Password">
		</div>
		<button type="submit" class="btn btn-primary mb-2">Registrarse</button>
	</form>
</div>
<?php
//SI ESTAS LOGEADO
if (isset($_SESSION['id']) && ($_SESSION['id']!='')){
   header ('location:index.php'); //con esto me envía a index.php
}else{
  //SI ESTAS DESCONECTADO MUESTRA EL FORMULARIO DE REGISTRO
  if (isset($_POST['email']) && ($_POST['email']!='') && isset($_POST['password']) && ($_POST['password']!='')) {  #Si tiene datos los campos
    try{
      //Preparamos la consulta de insert
      $stmt=$pdo->prepare('insert into sysprepgenerator.usuarios(email,password) values(?,?)');
      //Encriptamos la contraseña
      $encriptada=encriptar($_POST['password']);
      //Vinculamos los parámetros ? primero y segundo
      $stmt->bindParam(1,$_POST['email']);
      $stmt->bindParam(2,$encriptada);
      //Ejecutar consulta
      $stmt->execute();
      //ENVIAR MENSAJE DE BIENVENIDO
      $para=$_POST['email'];
      $titulo='SysprepGenerator Notificación de Registro';
      $mensaje='Felicidades te has registrado en Sysprep Generator!';
      #$cabeceras = 'From: SysprepGenerator <a14xoseng@iessanclemente.net>'."\r\n".'Reply-To: SysprepGenerator <a14xoseng@iessanclemente.net>'."\r\n".'X-Mailer: PHP/'.phpversion();
      $cabeceras = 'From: SysprepGenerator <sysprepgenerator@gmail.com>'."\r\n".'Reply-To: SysprepGenerator <sysprepgenerator@gmail.com>'."\r\n".'X-Mailer: PHP/'.phpversion();
      mail($para, $titulo, $mensaje, $cabeceras);
      //coger los datos de sesión para inciar sesión automáticamente
      $_SESSION['id']=$pdo->lastInsertId();
      $_SESSION['email']=$_POST['email'];
      /////IMPRIMIR REGISTRO OK
      echo '<div class="container"><div class="alert alert-success">Usuario creado correctamente. Redirigiendo a la página principal.</div></div>';
      echo "<script>setTimeout(function(){ document.location='index.php'; }, 2000);</script>";
    }catch(PDOException $error){
      #echo "Error en la consulta SQL: ".$error->getMessage();
        echo '<div class="container">
         <div class="alert alert-warning">
            <strong>Error!</strong> Ya existe este correo electrónico en nuestra base de datos!
          </div>
        </div>';
    }
 }
}
?>
<?php
require 'pie.php';
?>
