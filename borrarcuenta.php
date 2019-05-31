<?php
require 'cabecera.php';
?>
<?php
//SI ESTA INICIADA LA SESIÓN
if (isset($_SESSION['id']) && ($_SESSION['id']!='')){
  try{
  //HACEMOS CONSULTA PARA COMPROBAR EL ID Y ID DE USUARIO
    //HAY QUE PASARSE DESDE LE MENÚ EL VALOR DE ID de session, solo debería de necesitar eso, luego habria que pensar como eliminar los archivos .zip
   $stmt = $pdo->prepare('select * from sysprepgenerator.usuarios where id=?');
   $stmt->bindParam(1,$_GET['idu']);#CON ESTO COGEMOS DEL GET LA VARIABLE IDU
   $stmt->execute();
   $fila=$stmt->fetch();
  }catch(PDOException $error){
      echo "Error en la consulta SQL: ".$error->getMessage();
  }
  if ($_SESSION['id'] == $fila['id']){ #SI EL USUARIO QUE INICIA SESIÓN ES EL MISMO QUE EL DUEÑO DEL ARCHIVO
    //ELIMINAR ARCHIVO
    try{
      $stmt = $pdo->prepare('delete from sysprepgenerator.sysprep where idusuario=?');
      $stmt->bindParam(1,$_SESSION['id']);#CON ESTO COGEMOS EL ID DE SESSION
      $stmt->execute();
       //ahora borramos los archivos
      if (isset($fila['idusuario']) && $fila['idusuario'] !=''){ //hay que ponerlo, porque si no hay archivos fallaria...
        #shell_exec('sudo rm -rf ./userfiles/'.$fila['idusuario'].'_*.zip'); //es el patron que sigue el nombre de los ficheros
        shell_exec('sudo rm -rf ./userfiles/'.$_SESSION['id'].'_*.zip');
      }
    }catch(PDOException $error){
      echo "Error en la consulta SQL: ".$error->getMessage();
    }
   //AHORA SE BORRARIA AL USUARIO DE LA BASE DE DATOS
   try{
      $stmt = $pdo->prepare('delete from sysprepgenerator.usuarios where id=?');
      $stmt->bindParam(1,$_SESSION['id']);#CON ESTO COGEMOS EL ID DE SESSION
      $stmt->execute();
      //enviar mensaje avisando que se borro la cuenta
      $para=$_SESSION['email'];
      $titulo='SysprepGenerator Notificación de Eliminación de Cuenta';
      $mensaje='Tu cuenta en Sysprep Generator ha sido eliminada, todos tus datos y archivos han sido borrados de nuestra base de datos.';
      #$cabeceras = 'From: SysprepGenerator <a14xoseng@iessanclemente.net>'."\r\n".'Reply-To: SysprepGenerator <a14xoseng@iessanclemente.net>'."\r\n".'X-Mailer: PHP/'.phpversion();
      $cabeceras = 'From: SysprepGenerator <sysprepgenerator@gmail.com>'."\r\n".'Reply-To: SysprepGenerator <sysprepgenerator@gmail.com>'."\r\n".'X-Mailer: PHP/'.phpversion();
      mail($para, $titulo, $mensaje, $cabeceras);
      //DESCONECTAR...
      session_destroy();
      #header ('location:index.php');
      echo '<div class="container">
            <div class="alert alert-success">Cuenta eliminada correctamente!</div>
           </div>';
      echo "<script>setTimeout(function(){ document.location='index.php'; }, 2000);</script>"; 
    }catch(PDOException $error){
      echo "Error en la consulta SQL: ".$error->getMessage();
    }
  }else{
    //NO TIENES PERMISO PARA HACER ESTO
    echo '<div class="container">
            <div class="alert alert-danger">Acceso denegado!</div>
          </div>';
    if (isset($_SESSION['id']) && ($_SESSION['id']!='')){
      echo "<script>setTimeout(function(){ document.location='sysprepuserfiles.php'; }, 2000);</script>"; //si eres un usuario conectado vas a tu panel
    }else{
      echo "<script>setTimeout(function(){ document.location='index.php'; }, 2000);</script>"; //si eres un usuario no conectado vas al index
    }   
  }
}else{
  //SI NO ESTAS CONECTADO VOLVER INDEX
  header ('location:index.php'); //con esto me envía a index.php
}
?>

<?php
require 'pie.php';
?>