<?php
require 'cabecera.php';
?>
<div class="container">
  <div class="jumbotron text-center sysprepbg2">
     <h1>Instrucciones</h1>
     <p class="lead">Sigue estas instrucciones para configurar el equipo de manera adecuada antes de ejecutar Sysprep!</p>
  </div>
  <div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>PASO 1</h3>
      <p>Bajar el UAC del equipo.</p>
      <p class="font-weight-bold">Panel de control -> Cuentas de Usuario -> Cambiar configuración de cuentas de usuario -> No notificar nunca.</p>
      <p><img src="./imagenes/webimg/uac.gif" class="img-fluid" alt="Bajar UAC"></p>
      <p>También es posible bajar el UAC desde una consola de Windows con el siguiente <a href="comandouac.php" target="_blank">comando</a>.</p>
    </div>
    <div class="col-sm-4">
      <h3>PASO 2</h3>
      <p>Scripts en Remote Signed.</p>
      <p>Desde una consola de PowerShell establecer la ejecución de scripts en Remote Signed.</p>
      <p><code>Set-ExecutionPolicy RemoteSigned</code></p>
      <p><img src="./imagenes/webimg/remotesigned.PNG" class="img-fluid" alt="Remote Signed Policy"></p>
      <p>Una vez ejecutado el comando puedes ver el estado con <code>Get-ExecutionPolicy</code>.</p>
    </div>
    <div class="col-sm-4">
      <h3>PASO 3</h3>        
      <p>Copiar los archivos y ejecutar Sysprep.</p>
      <p>Descomprime y mueve los archivos descargados a la carpeta:</p> 
      <p><strong> C:\Windows\System32\Sysprep </strong></p>
      <p><img src="./imagenes/webimg/syspreploc.gif" class="img-fluid" alt="Carpeta de Sysprep"></p>
      <p>Una vez que tengas los archivos en la ruta correspondiente ejecuta desde consola de Windows el siguiente comando:</p>
      <p><code>C:\Windows\System32\Sysprep\sysprep.exe /generalize /oobe /shutdown /unattend:sysprep.xml</code></p> 
      <p><img src="./imagenes/webimg/comandosysprep.PNG" class="img-fluid" alt="Comando de Sysprep"></p>
    </div>
  </div>
</div>
</div>
<?php
require 'footer.php';
?>
<?php
require 'pie.php';
?>