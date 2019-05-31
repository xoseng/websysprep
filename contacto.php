<?php
require 'cabecera.php';
?>
<?php
echo '<div class="container">
 <h2>Formulario de contacto</h2>
	<form class="col-md-7" method="POST" action="">
		<div class="form-group">
			<label for="emailcontacto">Dirección de E-mail de contacto</label>
			<input type="email" class="form-control" id="emailcontacto" name="emailcontacto" required';
        if (isset($_POST['emailcontacto']))
        echo ' value="'.$_POST['emailcontacto'].'"';
      echo '">
    </div>
    <div class="form-group">
			<label for="nombrecontacto">Nombre</label>
			<input type="text" class="form-control" id="nombrecontacto" name="nombrecontacto" required';
        if (isset($_POST['nombrecontacto']))
        echo ' value="'.$_POST['nombrecontacto'].'"';
      echo '">
    </div>
		<div class="form-group">
			<label for="consulta">Consulta</label><br>
			<textarea rows="7" cols="47" class="form-control" name="consulta" id="consulta" placeholder="Introduce tu consulta aquí..." required>';
      if (isset($_POST['consulta']))
        echo $_POST['consulta'];
      echo'</textarea>
		</div>
		<button type="submit" class="btn btn-primary mb-2">Enviar</button>
	</form>
</div>';
?>
<?php
if (isset($_POST['emailcontacto']) && ($_POST['emailcontacto']!='') && isset($_POST['nombrecontacto']) && ($_POST['nombrecontacto']!='') && isset($_POST['consulta']) && ($_POST['consulta']!='')) {
 //enviar correo a sysprepgenerator
  $para='sysprepgenerator@gmail.com';
  $titulo='Consulta de: '.$_POST['nombrecontacto'];
  $mensaje=$_POST['consulta']; 
  $cabeceras = 'From: SysprepGenerator <sysprepgenerator@gmail.com>'."\r\n".'Reply-To: SysprepGenerator <sysprepgenerator@gmail.com>'."\r\n".'X-Mailer: PHP/'.phpversion();
  mail($para, $titulo, $mensaje, $cabeceras);
 //enviar correo al email solicitado diciendo que se tramitará su consulta
  $para=$_POST['emailcontacto'];
  $titulo='SysprepGenerator consulta recibida';
  $mensaje='Gracias por tu consulta '.$_POST['nombrecontacto'].' en breves te responderemos!'; 
  $cabeceras = 'From: SysprepGenerator <sysprepgenerator@gmail.com>'."\r\n".'Reply-To: SysprepGenerator <sysprepgenerator@gmail.com>'."\r\n".'X-Mailer: PHP/'.phpversion();
  mail($para, $titulo, $mensaje, $cabeceras);
 //mostrar un mensaje de se ha enviado el correo y redirigir pasado x segundos al index!
  echo '<div class="container">
         <div class="alert alert-success">
            <strong>Consulta enviada!</strong> En breves te contestaremos!
          </div>
        </div>';
  echo "<script>setTimeout(function(){ document.location='index.php'; }, 2500);</script>";
}
?>
<?php
require 'pie.php';
?>
