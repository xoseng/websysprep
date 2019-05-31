<?php
require 'cabecera.php';
?>
<?php
////COMPROBAR SI TIENE ID DE SESIÓN, SI LA TIENE IMPRIMIR EL FORMULARIO DE ALTAS
 if (isset($_SESSION['id']) && ($_SESSION['id']!='')){
  //El método más rápido es escribir por cada campo en el fichero previamente abierto, con ello me ahorro tiempo,
  //Haré un campo de confirmación, si se marca se oculta el formulario y me permite descargar el script!
   //name es el nombre que se le indica en POST y value es el valor que tendrá.
   echo '<div class="container">
    <h2>Chocolatey Generator</h2>
    <form class="col-md-7" onsubmit="obtener()" action="" method="POST">';
   ////////DIV OCULTADO
   echo '<div>'; 
    echo'<label for="programas">Selecciona los programas que quieres instalar</label>
      <br><hr>
      <input type="checkbox" name="googlechrome" value="googlechrome">Google Chrome<br>
      <input type="checkbox" name="firefox" value="firefox">Mozilla Firefox<br>
      <input type="checkbox" name="tor-browser" value="tor-browser">Tor Browser<br>
      <input type="checkbox" name="flashplayerplugin" value="flashplayerplugin">Adobe Flash Player<br> 
      <input type="checkbox" name="k-litecodecpackfull" value="k-litecodecpackfull">K-Lite Codec Pack Full<br>
      <input type="checkbox" name="7zip.install" value="7zip.install">7-Zip<br>
      <input type="checkbox" name="winrar" value="winrar">Winrar<br>
      <input type="checkbox" name="adobereader" value="adobereader">Adobe Reader<br>
      <input type="checkbox" name="foxitreader" value="foxitreader">Foxit Reader<br>
      <input type="checkbox" name="googleearth" value="googleearth">Google Earth<br>
      <input type="checkbox" name="googledrive" value="googledrive">Google Drive<br>
      <input type="checkbox" name="insync" value="insync">Insync<br>
      <input type="checkbox" name="dropbox" value="dropbox">Dropbox<br>
      <input type="checkbox" name="megasync" value="megasync">Mega Sync<br>
      <input type="checkbox" name="javaruntime" value="javaruntime">Java Runtime Environment<br>
      <input type="checkbox" name="jdk8" value="jdk8">JDK<br>
      <input type="checkbox" name="notepadplusplus.install" value="notepadplusplus.install">Notepad++<br>
      <input type="checkbox" name="vlc" value="vlc">VLC<br>
      <input type="checkbox" name="aimp" value="aimp">Aimp<br>
      <input type="checkbox" name="winamp" value="winamp">Winamp<br>
      <input type="checkbox" name="git.install" value="git.install">Git<br>
      <input type="checkbox" name="putty.install" value="putty.install">Putty<br>
      <input type="checkbox" name="skype" value="skype">Skype<br>
      <input type="checkbox" name="ccleaner" value="ccleaner">CCleaner<br>
      <input type="checkbox" name="recuva" value="recuva">Recuva<br>
      <input type="checkbox" name="defraggler" value="defraggler">Defraggler<br>
      <input type="checkbox" name="filezilla" value="filezilla">Filezilla<br>
      <input type="checkbox" name="daemontoolslite" value="daemontoolslite">Daemon Tools Lite<br>
      <input type="checkbox" name="openvpn" value="openvpn">Open VPN <br>
      <input type="checkbox" name="keepass.install" value="keepass.install">Keepass<br>
      <input type="checkbox" name="utorrent" value="utorrent">μTorrent<br>
      <input type="checkbox" name="qbittorrent" value="qbittorrent">qBittorrent<br>
      <input type="checkbox" name="jdownloader" value="jdownloader">Jdownloader<br>
      <input type="checkbox" name="teamspeak" value="teamspeak">Teamspeak<br>
      <input type="checkbox" name="discord.install" value="discord.install">Discord<br>
      <input type="checkbox" name="telegram" value="telegram">Telegram<br>
      <input type="checkbox" name="whatsapp" value="whatsapp">WhatsApp<br>
      <input type="checkbox" name="burnawarefree" value="burnawarefree">BurnAware Free<br>
      <input type="checkbox" name="gimp" value="gimp">Gimp<br>
      <input type="checkbox" name="krita" value="krita">Krita<br>
      <input type="checkbox" name="inkscape" value="inkscape">Inkscape<br>
      <input type="checkbox" name="dia" value="dia">Dia<br>
      <input type="checkbox" name="netbeans" value="netbeans">Netbeans<br>
      <input type="checkbox" name="eclipse" value="eclipse">Eclipse<br>
      <input type="checkbox" name="intellijidea-community" value="intellijidea-community">IntelliJ IDEA Community<br>
      <input type="checkbox" name="pycharm-community --version 2019.1.1" value="pycharm-community --version 2019.1.1">Pycharm Community<br>
      <input type="checkbox" name="libreoffice" value="libreoffice">LibreOffice <br>
      <input type="checkbox" name="wps-office-free" value="wps-office-free">WPS Office <br>
      <input type="checkbox" name="androidstudio" value="androidstudio">Android Studio<br>
      <input type="checkbox" name="thunderbird" value="thunderbird">Mozilla Thunderbird<br>
      <input type="checkbox" name="virtualbox" value="virtualbox">Virtualbox<br>
      <input type="checkbox" name="virtualbox.extensionpack" value="virtualbox.extensionpack">Virtualbox Extension Pack<br>
      <input type="checkbox" name="vmware-workstation-player" value="vmware-workstation-player">VMware Workstation Player<br>
      <input type="checkbox" name="totalcommander" value="totalcommander">Total Commander<br>
      <input type="checkbox" name="cpu-z.install" value="cpu-z.install">CPU-Z<br>
      <input type="checkbox" name="pdfcreator" value="pdfcreator">PDF Creator<br>
      <input type="checkbox" name="pdfxchangeeditor" value="pdfxchangeeditor">PDF-XChange Editor<br>
      <input type="checkbox" name="yumi" value="yumi">Yumi<br>
      <input type="checkbox" name="rufus" value="rufus">Rufus<br>
      <input type="checkbox" name="win32diskimager.install" value="win32diskimager.install">Win32 Disk Imager<br>
      <input type="checkbox" name="teamviewer" value="teamviewer">TeamViewer<br>
      <input type="checkbox" name="tightvnc" value="tightvnc">TightVNC<br>
      <input type="checkbox" name="sublimetext3" value="sublimetext3">Sublime Text 3<br>
      <input type="checkbox" name="brackets" value="brackets">Brackets<br>
      <input type="checkbox" name="xml-copy-editor" value="xml-copy-editor">XML Copy Editor<br>
      <input type="checkbox" name="visualstudiocode" value="visualstudiocode">Visual Studio Code<br>
      <input type="checkbox" name="obs-studio" value="obs-studio">OBS Studio<br>
      <input type="checkbox" name="steam" value="steam">Steam<br>
      <input type="checkbox" name="origin" value="origin">Origin<br>
      <input type="checkbox" name="uplay" value="uplay">Uplay<br>
      <input type="checkbox" name="spotify" value="spotify">Spotify<br>
      <hr>
    <button type="submit" class="btn btn-primary mb-2">Siguiente</button>
    </form>
    </div>
  </div>';  
  }else{
  echo '<div class="container">
    <div class="jumbotron sysprepbg2">
        <h4>Sólo los usuarios registrados pueden generar archivos de configuración!</h4>
        <p class="lead">Regístrate de forma gratuita si todavía no tienes una cuenta!<br>Tendrás acceso a un panel de control de usuario para gestionar tus archivos en cualquier momento!</p>
        <a href="acceso.php" class="btn btn-primary btn-lg btn-block" role="button">Entrar</a>
        <a href="registrar.php" class="btn btn-secondary btn-lg btn-block" role="button">Registrarse</a>
    </div>
  </div>';
 }
?>
<?php
  $choco_array = array();
  $var_temp='googlechrome';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='firefox';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='tor-browser';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='flashplayerplugin';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='k-litecodecpackfull';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='7zip.install';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='winrar';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='adobereader';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='foxitreader';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='googleearth';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='googledrive';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='insync';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='dropbox';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='megasync';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='javaruntime';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='jdk8';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='notepadplusplus.install';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='vlc';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='aimp';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='winamp';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='git.install';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='putty.install';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='skype';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='ccleaner';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='recuva';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='defraggler';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='filezilla';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='daemontoolslite';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='openvpn';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='keepass.install';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='utorrent';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='qbittorrent';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='jdownloader';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='teamspeak';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='discord.install';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='telegram';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='whatsapp';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='burnawarefree';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='gimp';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='krita';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='inkscape';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='dia';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='netbeans';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='eclipse';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='intellijidea-community';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }  
  $var_temp='pycharm-community --version 2019.1.1';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='libreoffice';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='wps-office-free';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='androidstudio';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='thunderbird';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='virtualbox';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='virtualbox.extensionpack';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='vmware-workstation-player';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='totalcommander';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='cpu-z.install';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='pdfcreator';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='pdfxchangeeditor';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='yumi';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='rufus';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='win32diskimager.install';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='teamviewer';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='tightvnc';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='sublimetext3';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='brackets';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='xml-copy-editor';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='visualstudiocode';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='obs-studio';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='steam';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='origin';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='uplay';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
  $var_temp='spotify';
  if(isset($_POST[$var_temp]) && ($_POST[$var_temp]) !=''){
    array_push($choco_array,$_POST[$var_temp]);
  }
//SI EL ARRAY TIENE CONTENIDO CREAR EL FICHERO APROVECHANDO UN BUCLE
//DESPUÉS AÑADIR EL FICHERO A LA BASE DE DATOS Y SUBIRLO, DAR LA OPCIÓN DE DESCARGARLO!
if(sizeof($choco_array) != 0 ){ 
  //CREAR FICHERO .ps1 con el siguiente contenido
  $fecha=date('Y-m-d_H:i');
  $identificador=$_SESSION['id'];
  $psname=$identificador.'_'.$fecha.'_choco.ps1';
  $fp = fopen($psname, "w");
  fwrite($fp, '# Script de instalacion de chocolatey creado en https://www.sysprepgenerator.tk - Ejecutar en PowerShell como administrador'. PHP_EOL);
  fwrite($fp, '# Si no deja ejecutar scripts ps prueba con la execution policy:'. PHP_EOL);
  fwrite($fp, '#  Set-ExecutionPolicy Unrestricted'. PHP_EOL);
  fwrite($fp, '# Requisitos:'. PHP_EOL);
  fwrite($fp, '#  Windows 7+ / Windows Server 2003+'. PHP_EOL);
  fwrite($fp, '#  PowerShell v2+'. PHP_EOL);
  fwrite($fp, '#  .NET Framework 4+ (the installation will attempt to install .NET 4.0 if you do not have it installed)'. PHP_EOL);
  fwrite($fp, '# Web oficial: https://chocolatey.org/'. PHP_EOL);
  fwrite($fp, '# Informacion sobre los paquetes: https://chocolatey.org/packages'. PHP_EOL);
  fwrite($fp, '# Instalacion Chocolatey'. PHP_EOL);
  fwrite($fp, "Set-ExecutionPolicy Bypass -Scope Process -Force; iex ((New-Object System.Net.WebClient).DownloadString('https://chocolatey.org/install.ps1'))". PHP_EOL);
  fwrite($fp, 'choco upgrade chocolatey -y'. PHP_EOL);
  foreach ($choco_array as $programa) {
    fwrite($fp, 'choco install '.$programa.' -y'. PHP_EOL);
  }
  fwrite($fp, 'choco upgrade -y all'. PHP_EOL);
  fclose($fp);
  //////AHORA QUE YA ESTÁ CREADO EL ZIP LO SUYO SERÍA MOVERLO A userfiles y desde userfiles descargarlo...
  /////además hay que insertar en la base de datos los datos para poder accer el panel de usuario...
  $origen = '/var/dominios/iawa14xoseng.ga/public/websysprep/'.$psname;
  $destino = '/var/dominios/iawa14xoseng.ga/public/websysprep/userfiles/'.$psname;
  copy($origen,$destino);
  shell_exec('sudo rm -rf '.$psname);
  //ahora insertar los valores en la base de datos...
  //id idusuario	fecha path
  $stmt=$pdo->prepare('insert into sysprepgenerator.sysprep(idusuario,fecha,path) values(?,?,?)');
  $fecha=date('Y-m-d H:i:s');
  $path=$psname;
  $stmt->bindParam(1,$_SESSION['id']);
  $stmt->bindParam(2,$fecha);
  $stmt->bindParam(3,$path);
  $stmt->execute();
  echo "<script>setTimeout(function obtener(){ alert('ARCHIVO CREADO CORRECTAMENTE, REDIRIGIENDO AL PANEL'); }, 0000);</script>";
  echo "<script>setTimeout(function(){ document.location='sysprepuserfiles.php'; }, 1000);</script>";  
}else{
  //SI EL ARRAY ESTA VACIO PEDIR QUE SELECCIONE POR LO MENOS UN PROGRAMA
  if (isset($_SESSION['id']) && ($_SESSION['id']!='')){ //evitar que se ejecute siempre aunque no tenga iniciada la sesión
    echo "<script>setTimeout(function obtener(){ alert('SELECCIONA POR LO MENOS UN PROGRAMA DE LA LISTA!'); }, 0000);</script>";
  }
}    
?>
<?php
require 'pie.php';
?>