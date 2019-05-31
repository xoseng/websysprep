<?php
require 'cabecera.php';
?>
<div class="container">
<h2>Restablecer contraseña</h2>
	<form class="col-md-7" method="POST" action="">
		<div class="form-group">
			<label for="email">Dirección de E-mail</label>
			<input type="email" class="form-control" id="email" name="email" placeholder="Email">
    </div>
		<button type="submit" class="btn btn-warning mb-2">Restablecer</button>
	</form>
</div>
<?php
 if (isset($_POST['email']) && ($_POST['email']!='')){  #Si tiene datos el campo email
    try{
      //Comprobamos que existe el correo
      $stmt = $pdo->prepare('select * from sysprepgenerator.usuarios where email=?');
      $stmt->bindParam(1,$_POST['email']);
      $stmt->execute();
      if ($stmt->rowCount()!=0){ //si existe una columna es que el correo existe
        //Preparamos la consulta de insert
        $stmt=$pdo->prepare('update sysprepgenerator.usuarios set password=? where email=?');
        //GENERAMOS UN PASSWORD RANDOM
        //TRUE O FALSE EN LA OPCIÓN QUE QUIERAS AÑADIR
        $opc_letras = TRUE; //  FALSE para quitar las letras
        $opc_numeros = TRUE; // FALSE para quitar los números
        $opc_letrasMayus = TRUE; // FALSE para quitar las letras mayúsculas
        $opc_especiales = FALSE; // FALSE para quitar los caracteres especiales
        $longitud = 6;
        $password = "";
        $letras ="abcdefghijklmnopqrstuvwxyz";
        $numeros = "1234567890";
        $letrasMayus = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $especiales ="|@#~$%()=^*+[]{}-_";
        $listado = "";

        if ($opc_letras == TRUE) {
            $listado .= $letras; 
        }
        if ($opc_numeros == TRUE) {
            $listado .= $numeros; 
        }
        if($opc_letrasMayus == TRUE) {
            $listado .= $letrasMayus; 
        }
        if($opc_especiales == TRUE) {
            $listado .= $especiales; 
        }
        str_shuffle($listado);

        for( $i=1; $i<=$longitud; $i++) {
          $password[$i] = $listado[rand(0,strlen($listado))];
          str_shuffle($listado);
        }
        $passwd='';
        foreach ($password as $dato_password) {
            $passwd=$passwd.$dato_password;
        }
        $passwd=''.$passwd;
        //ENCRIPTAMOS EL PASSWORD
        $encriptada=encriptar($passwd);
        //Vinculamos los parámetros ? primero y segundo
        $stmt->bindParam(1,$encriptada);
        $stmt->bindParam(2,$_POST['email']);
        //Ejecutar consulta
        $stmt->execute();
        //UNA VEZ HECHO ESTO ENVIAMOS LA PASSWORD AL CORREO
        $para=$_POST['email'];
        $titulo='SysprepGenerator Recovery Password';
        $mensaje=$passwd;
        #$cabeceras = 'From: SysprepGenerator <a14xoseng@iessanclemente.net>'."\r\n".'Reply-To: SysprepGenerator <a14xoseng@iessanclemente.net>'."\r\n".'X-Mailer: PHP/'.phpversion();
        $cabeceras = 'From: SysprepGenerator <sysprepgenerator@gmail.com>'."\r\n".'Reply-To: SysprepGenerator <sysprepgenerator@gmail.com>'."\r\n".'X-Mailer: PHP/'.phpversion();
        mail($para, $titulo, $mensaje, $cabeceras);
        //DECIR QUE ESTA TODO OK Y REDIRECCIONAR A CONECTAR
        echo '<div class="container">
              <div class="alert alert-info">Se ha enviado la nueva contraseña al correo indicado!</div>
            </div>';
        echo "<script>setTimeout(function(){ document.location='acceso.php'; }, 3000);</script>";
        
      }else{
            //OPTARÉ POR ENVIARME A ACCESO Y NO DECIR QUE NO EXISTE EL CORREO
            echo "<script>setTimeout(function(){ document.location='acceso.php'; }, 1000);</script>";
      }
  }catch(PDOException $error){
      echo "Error en la consulta SQL: ".$error->getMessage();
    }
 }     
?>