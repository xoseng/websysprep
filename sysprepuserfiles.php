<?php
require 'cabecera.php';
?>
<?php
if (isset($_SESSION['id']) && ($_SESSION['id']!='')){
  try{
    ///////////GENERAR ANUNCIOS
    //preparar consulta
    $stmt = $pdo->prepare('select * from sysprepgenerator.sysprep where idusuario=? order by fecha desc');
    //ejecutar consulta
    $stmt->bindParam(1,$_SESSION['id']);
    $stmt->execute();
    //mostrar los registros devueltos en la consulta
    //creamos una cabecera de tabla
    echo "<div class='container'><h2>Mis Archivos - Panel de control</h2>
          <p class='text-secondary'>En esta página puedes descargar y eliminar tus archivos almacenados.</p>
          <p class='text-danger'>Recuerda que la eliminación de un archivo es una acción irreversible!</p>";
    //recorremos los valores usamos bucle y fecth, fetch finaliza con false!
    $contador=0;
    while ($fila=$stmt->fetch()){ //entonces cuando fetch llega a false sale
      //hay que generar botones
      echo "<div><hr><p>Fecha de creacción: {$fila['fecha']}</p></div>
            <div><a class='btn btn-success mb-2' href='./userfiles/{$fila['path']}'>Descargar</a>
            <a href='borrar.php?ida={$fila['id']}&idu={$fila['idusuario']}&ap={$fila['path']}' class='btn btn-danger mb-2' role='button'>Eliminar</a></hr></div>";       
      $contador=$contador+1;
    }
    //cerramos
    if($contador == 0){
      echo "<div><hr><p>¿Aún no has creado ningún archivo de configuración?<br>";
      echo 'A que esperas crea uno <a href="formsysprep.php" target="_blank">aquí</a>.</p></div>';
    }
    echo "</div>";

  }catch(PDOException $error){
    echo "Error en la consulta SQL: ".$error->getMessage();
  }
}else{
  //Si no estas conectado vuelve al index
    header ('location:index.php');
  }
?>
<?php
require 'pie.php';
?>