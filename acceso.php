<?php
require 'cabecera.php';
?>
<div class="container">
<h2>Acceso de usuarios</h2>
	<form class="col-md-7" method="POST" action="">
		<div class="form-group">
			<label for="email">Dirección de E-mail</label>
			<input type="email" class="form-control" id="email" name="email" placeholder="Email">
    </div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" class="form-control" id="password" name="password" placeholder="Password">
		</div>
		<button type="submit" class="btn btn-primary mb-2">Entrar</button>
    <a class="btn btn-warning mb-2" href="recoverypasswd.php">Restablecer contraseña</a>
	</form>
</div>
<?php
//SI ESTAS LOGEADO
if (isset($_SESSION['id']) && ($_SESSION['id']!='')){
   header ('location:index.php'); //con esto me envía a index.php
}else{
  //SI NO ESTAS LOGEADO
  //consulta para obtener los datos de la base de datos del usuario introducido
    if (isset($_POST['email']) && ($_POST['email']!='') && isset($_POST['password']) && ($_POST['password']!='')) {  #Si tiene datos los campos
    try{
      //Preparamos la consulta de select
      $stmt=$pdo->prepare('select * from usuarios where email=?');
      $stmt->bindParam(1,$_POST['email']);
      $stmt->execute();   
      if ($stmt->rowCount()!=0){
        while ($fila=$stmt->fetch()){
          if(hash_equals(crypt($_POST['password'], $fila['password']),$fila['password'])){
            //Creo la variable de sesión
            $_SESSION['id']=$fila['id'];
            $_SESSION['email']=$fila['email'];
            header ('location:index.php'); //con esto me envía a index.php
          }else{
            #echo "Contraseña incorrecta";
            echo '<div class="container">
              <div class="alert alert-danger">
                <strong>Error!</strong> Datos incorrectos!
              </div>
            </div>';
          } 
        }
      }else{
        #echo "No existe este correo en nuestra base de datos";
        echo '<div class="container">
              <div class="alert alert-danger">
                <strong>Error!</strong> Datos incorrectos!
              </div>
            </div>';
      }
    }catch(PDOException $error){
      echo "Error en la consulta SQL: ".$error->getMessage();           
    }
   }
 }
?>
<?php
require 'pie.php';
?>