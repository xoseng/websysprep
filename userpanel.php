<?php
require 'cabecera.php';
?>
<?php
//COMPROBAR SI TIENE ID DE SESIÓN, SI LA TIENE IMPRIMIR EL FORMULARIO
 if (isset($_SESSION['id']) && ($_SESSION['id']!='')){
  echo '<div class="container">
    <h2>Panel de usuario</h2>
    <form class="col-md-7" method="POST" action="">
      <div class="form-group">
        <label for="email">Dirección de E-mail</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="'.$_SESSION['email'].'">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password2" name="password2" placeholder="Password">
      </div>
      <button type="submit" class="btn btn-warning mb-2">Modificar</button>';
      echo "&nbsp;<a href='borrarcuenta.php?idu={$_SESSION['id']}' class='btn btn-danger mb-2' role='button'>Eliminar Cuenta</a>";       
    echo '</form>
  </div>';
 }else{
   //SI NO AVISAR QUE SÓLO USUARIOS REGISTRADOS PUEDEN ACCEDER
  echo '<div class="container">
    <div class="alert alert-danger"> Acceso Denegado!
  </div>';
   echo "<script>setTimeout(function(){ document.location='index.php'; }, 2000);</script>";
 }
?>
<?php
//si se modifica el correo pero no se pone password
 if (isset($_POST['email']) && ($_POST['email']!='') && ($_SESSION['email']) != ($_POST['email']) && ($_POST['password']=='')){
    try{
      $stmt=$pdo->prepare('update sysprepgenerator.usuarios set email=? where id=?');
      $stmt->bindParam(1,$_POST['email']);
      $stmt->bindParam(2,$_SESSION['id']);
      $stmt->execute();
      echo '<div class="container">
            <div class="alert alert-info">Se ha modificado el correo electrónico!</div>
            </div>';
     $_SESSION['email']=$_POST['email']; //para cambiar el correo de la session
     echo "<script>setTimeout(function(){ document.location='userpanel.php'; }, 2000);</script>";
    }catch(PDOException $error){
      echo "Error en la consulta SQL: ".$error->getMessage();           
    }
 //si se modifica la password pero no se cambia el correo
 }elseif (isset($_POST['email']) && ($_POST['email']!='') && ($_SESSION['email']) == ($_POST['email']) && ($_POST['password']!='') && ($_POST['password'])==($_POST['password2'])){
    try{
      $stmt=$pdo->prepare('update sysprepgenerator.usuarios set password=? where id=?');
      $encriptada=encriptar($_POST['password']);
      $stmt->bindParam(1,$encriptada);
      $stmt->bindParam(2,$_SESSION['id']);
      $stmt->execute();
      echo '<div class="container">
            <div class="alert alert-info">Se ha modificado la contraseña!</div>
            </div>';
      echo "<script>setTimeout(function(){ document.location='userpanel.php'; }, 2000);</script>";
    }catch(PDOException $error){
      echo "Error en la consulta SQL: ".$error->getMessage();           
    }
 //si se cambia password y correo
 }elseif (isset($_POST['email']) && ($_POST['email']!='') && ($_SESSION['email']) != ($_POST['email']) && ($_POST['password']!='') && ($_POST['password'])==($_POST['password2'])){
    try{
      $stmt=$pdo->prepare('update sysprepgenerator.usuarios set password=? where id=?');
      $encriptada=encriptar($_POST['password']);
      $stmt->bindParam(1,$encriptada);
      $stmt->bindParam(2,$_SESSION['id']);
      $stmt->execute();
      $stmt=$pdo->prepare('update sysprepgenerator.usuarios set email=? where id=?');
      $stmt->bindParam(1,$_POST['email']);
      $stmt->bindParam(2,$_SESSION['id']);
      $stmt->execute();
      echo '<div class="container">
            <div class="alert alert-info">Se ha modificado el correo y la contraseña!</div>
            </div>';
      $_SESSION['email']=$_POST['email']; //para cambiar el correo de la session
      echo "<script>setTimeout(function(){ document.location='userpanel.php'; }, 2000);</script>";
    }catch(PDOException $error){
      echo "Error en la consulta SQL: ".$error->getMessage();           
    }   
 //si las contraseñas no coinciden 
 }elseif (isset($_POST['email']) && (($_POST['email']!='') || ($_POST['email']=='')) && (($_SESSION['email']) == ($_POST['email']) || ($_SESSION['email']) != ($_POST['email'])) && ($_POST['password']!='') && ($_POST['password'])!=($_POST['password2'])){
   echo '<div class="container">
   <div class="alert alert-warning">Las contraseñas no coinciden</div>
   </div>';
 //si no se cambia nada
 }else{
   //NO HACE NADA
 }
?>
<?php
require 'pie.php';
?>