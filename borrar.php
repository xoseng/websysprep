<?php
require 'cabecera.php';
?>
<?php
//SI ESTA INICIADA LA SESIÓN
if (isset($_SESSION['id']) && ($_SESSION['id']!='')){
  try{
  //HACEMOS CONSULTA PARA COMPROBAR EL ID Y ID DE USUARIO
   $stmt = $pdo->prepare('select * from sysprepgenerator.sysprep where idusuario=? and id=?');
   $stmt->bindParam(1,$_GET['idu']);#CON ESTO COGEMOS DEL GET LA VARIABLE IDU
   $stmt->bindParam(2,$_GET['ida']);#CON ESTO COGEMOS DEL GET LA VARIABLE IDA
   $stmt->execute();
   $fila=$stmt->fetch();
    
  }catch(PDOException $error){
      echo "Error en la consulta SQL: ".$error->getMessage();
  }
  if ($_SESSION['id'] == $fila['idusuario']){ #SI EL USUARIO QUE INICIA SESIÓN ES EL MISMO QUE EL DUEÑO DEL ARCHIVO
    //ELIMINAR ARCHIVO
    try{
      $stmt = $pdo->prepare('delete from sysprepgenerator.sysprep where idusuario=? and id=?');
      $stmt->bindParam(1,$_SESSION['id']);#CON ESTO COGEMOS EL ID DE SESSION
      $stmt->bindParam(2,$_GET['ida']);#CON ESTO COGEMOS DEL GET LA VARIABLE IDA
      $stmt->execute();
      //ahora borramos el archivo
      shell_exec('sudo rm -rf ./userfiles/'.$_GET['ap']);
      header ('location:sysprepuserfiles.php');
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