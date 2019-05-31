<?php
require 'cabecera.php';
?>
<?php
//COMPROBAR SI TIENE ID DE SESIÓN, SI LA TIENE IMPRIMIR EL FORMULARIO DE ALTAS
 if (isset($_SESSION['id']) && ($_SESSION['id']!='')){
  #https://docs.microsoft.com/en-us/windows-hardware/manufacture/desktop/available-language-packs-for-windows
  #https://docs.microsoft.com/en-us/windows-hardware/manufacture/desktop/default-time-zones
  echo '<div class="container">
    <h2>Generator</h2>
    <form class="col-md-7" method="POST" action="">';
   echo'<div'; if (isset($_POST['ipconf'])) echo ' style="display:none"';
   echo'>';
    echo'<div class="form-group">
        <label for="usuario">Usuario</label>
        <p class="text-secondary">Introduce un nombre de usuario para admininistrar el sistema</p>
        <input type="text" class="form-control" id="usuario" name="usuario" required';
        if (isset($_POST['usuario']))
        echo ' value="'.$_POST['usuario'].'"';
      echo '">
      </div>
      <div class="form-group">
        <label for="contrasena">Password</label>
        <p class="text-secondary">Introduce una contraseña para el usuario</p>
        <input type="password" class="form-control" id="contrasena" name="contrasena" required';
        if (isset($_POST['contrasena']))
        echo ' value="'.$_POST['contrasena'].'"';
      echo'">
      </div>
       <div class="form-group">
        <label for="netbios">Nombre de equipo</label>
        <p class="text-secondary">Si quieres que Windows asigne un nombre automáticamente deja el campo con *</p>
        <input type="text" class="form-control" id="netbios" name="netbios" required';
        if (isset($_POST['netbios'])){
          echo ' value="'.$_POST['netbios'].'"';
        }else{
          echo ' value="*"';
        }
      echo '"> 
      </div>
      <div class="form-group">
        <label for="organizacion">Organización</label>
        <p class="text-secondary">Indica la organización a la que pertenece este equipo</p>
        <input type="text" class="form-control" id="organizacion" name="organizacion" required';
        if (isset($_POST['organizacion']))
        echo ' value="'.$_POST['organizacion'].'"';
      echo '">  
      </div>
      <div class="form-group">
        <label for="propietario">Propietario</label>
        <p class="text-secondary">Indica el propietario de este equipo</p>
        <input type="text" class="form-control" id="propietario" name="propietario" required';
        if (isset($_POST['propietario']))
        echo ' value="'.$_POST['propietario'].'"';
      echo '">
      </div>
      <div class="form-group">
        <label for="idioma">Idioma</label>
        <p class="text-secondary">Selecciona idioma para el equipo</p>
        <select name="idioma" id="idioma">
          <option value="es-ES"'; if(isset($_POST['idioma'])){ $selected_val = $_POST['idioma']; if ($selected_val == 'es-ES'){ echo ' selected="selected"';}} echo '>Español</option>
          <option value="en-US"'; if(isset($_POST['idioma'])){ $selected_val = $_POST['idioma']; if ($selected_val == 'en-US'){ echo ' selected="selected"';}} echo '>Inglés</option>
          <option value="fr-FR"'; if(isset($_POST['idioma'])){ $selected_val = $_POST['idioma']; if ($selected_val == 'fr-FR'){ echo ' selected="selected"';}} echo '>Francés</option>
          <option value="de-DE"'; if(isset($_POST['idioma'])){ $selected_val = $_POST['idioma']; if ($selected_val == 'de-DE'){ echo ' selected="selected"';}} echo '>Alemán</option>
          <option value="it-IT"'; if(isset($_POST['idioma'])){ $selected_val = $_POST['idioma']; if ($selected_val == 'it-IT'){ echo ' selected="selected"';}} echo '>Italiano</option>
          <option value="ja-JP"'; if(isset($_POST['idioma'])){ $selected_val = $_POST['idioma']; if ($selected_val == 'ja-JP'){ echo ' selected="selected"';}} echo '>Japonés</option>
          <option value="ko-KR"'; if(isset($_POST['idioma'])){ $selected_val = $_POST['idioma']; if ($selected_val == 'ko-KR'){ echo ' selected="selected"';}} echo '>Coreano</option>
          <option value="nl-NL"'; if(isset($_POST['idioma'])){ $selected_val = $_POST['idioma']; if ($selected_val == 'nl-NL'){ echo ' selected="selected"';}} echo '>Holandés</option>
          <option value="zh-CN"'; if(isset($_POST['idioma'])){ $selected_val = $_POST['idioma']; if ($selected_val == 'zh-CN'){ echo ' selected="selected"';}} echo '>Chino</option>
          <option value="pl-PL"'; if(isset($_POST['idioma'])){ $selected_val = $_POST['idioma']; if ($selected_val == 'pl-PL'){ echo ' selected="selected"';}} echo '>Polaco</option>
          <option value="pt-PT"'; if(isset($_POST['idioma'])){ $selected_val = $_POST['idioma']; if ($selected_val == 'pt-PT'){ echo ' selected="selected"';}} echo '>Portugués</option>
          <option value="ru-RU"'; if(isset($_POST['idioma'])){ $selected_val = $_POST['idioma']; if ($selected_val == 'ru-RU'){ echo ' selected="selected"';}} echo '>Ruso</option>
          <option value="sv-SE"'; if(isset($_POST['idioma'])){ $selected_val = $_POST['idioma']; if ($selected_val == 'sv-SE'){ echo ' selected="selected"';}} echo '>Sueco</option>
          <option value="tr-TR"'; if(isset($_POST['idioma'])){ $selected_val = $_POST['idioma']; if ($selected_val == 'tr-TR'){ echo ' selected="selected"';}} echo '>Turco</option>
        </select>
      </div>
      <div class="form-group">
        <label for="zonahoraria">Zona Horaria</label>
        <p class="text-secondary">Selecciona una zona horaria</p>
        <select name="zonahoraria" id="zonahoraria">
          <option value="Romance Standard Time"'; if(isset($_POST['zonahoraria'])){ $selected_val = $_POST['zonahoraria']; if ($selected_val == 'Romance Standard Time'){ echo ' selected="selected"';}} echo '>Brussels, Copenhagen, Madrid, Paris</option>
          <option value="Central Europe Standard Time"'; if(isset($_POST['zonahoraria'])){ $selected_val = $_POST['zonahoraria']; if ($selected_val == 'Central Europe Standard Time'){ echo ' selected="selected"';}} echo '>Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
          <option value="W. Europe Standard Time"'; if(isset($_POST['zonahoraria'])){ $selected_val = $_POST['zonahoraria']; if ($selected_val == 'W. Europe Standard Time'){ echo ' selected="selected"';}} echo '>Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
          <option value="FLE Standard Time"'; if(isset($_POST['zonahoraria'])){ $selected_val = $_POST['zonahoraria']; if ($selected_val == 'FLE Standard Time'){ echo ' selected="selected"';}} echo '>Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</option>
          <option value="China Standard Time"'; if(isset($_POST['zonahoraria'])){ $selected_val = $_POST['zonahoraria']; if ($selected_val == 'China Standard Time'){ echo ' selected="selected"';}} echo '>Beijing, Chongqing, Hong Kong, Urumqi</option>
          <option value="India Standard Time"'; if(isset($_POST['zonahoraria'])){ $selected_val = $_POST['zonahoraria']; if ($selected_val == 'India Standard Time'){ echo ' selected="selected"';}} echo '>Chennai, Kolkata, Mumbai, New Delhi</option>
        </select>
      </div>
      <div class="form-group">
        <label for="locred">Localización de red</label>
        <p class="text-secondary">Selecciona una localización de red para el equipo</p>
        <select name="locred" id="locred">
          <option value="Work"'; if(isset($_POST['locred'])){ $selected_val = $_POST['locred']; if ($selected_val == 'Work'){ echo ' selected="selected"';}} echo '>Trabajo</option>
          <option value="Home"'; if(isset($_POST['locred'])){ $selected_val = $_POST['locred']; if ($selected_val == 'Home'){ echo ' selected="selected"';}} echo '>Hogar</option>
          <option value="Other"'; if(isset($_POST['locred'])){ $selected_val = $_POST['locred']; if ($selected_val == 'Other'){ echo ' selected="selected"';}} echo '>Otra</option>
        </select>
      </div>';
      $samplekey='MH37W-N47XK-V7XM9-C7227-GCQG9';
      echo'<div class="form-group">
        <label for="clave">Clave de Activación</label>
        <p class="text-secondary">Sólo si dispones de una licencia de activación válida modifica este campo</p>
        <input type="text" class="form-control" id="clave" name="clave" required';
        if (isset($_POST['clave'])){
          echo ' value="'.$_POST['clave'].'"';
        }else{
          echo ' value="'.$samplekey.'"';
        }
      echo '">
      </div>';
      //si no existe post de clave meterle la clave default, si existe, meter la clave insertada!!!!
   echo'<div class="form-group">
        <label for="ipconf">Configuración de red</label>
        <p class="text-secondary">Indica el tipo de configuración IP</p>
        <td>
          <input type="radio" name="ipconf" id="ipconf" value="dhcp"'; if(isset($_POST['ipconf']) && ($_POST['ipconf'] == 'dhcp')) echo 'checked="checked"'; echo'/> Automática
          <input type="radio" name="ipconf" id ="ipconf" value="estatica"'; if(isset($_POST['ipconf']) && ($_POST['ipconf'] == 'estatica')) echo 'checked="checked"'; echo'/> Manual<br>
       </td>
      </div>
      <div class="form-group">
        <label for="dominio">Configuración de domino</label>
        <p class="text-secondary">Indica si quieres añadir el equipo al dominio</p>
        <td>
          <input type="radio" name="dominio" id="dominio" value="no"'; if(isset($_POST['dominio']) && ($_POST['dominio'] == 'no')) echo 'checked="checked"'; echo'/> NO
          <input type="radio" name="dominio" id="dominio" value="si"'; if(isset($_POST['dominio']) && ($_POST['dominio'] == 'si')) echo 'checked="checked"'; echo'/> SI<br>
       </td>
      </div>';
     echo '</div>'; //HIDE FIN
      //IMPRIMIR CONFIGURACIÓN DE RED IP y SI LO QUEREMOS AÑADIR AL DOMINIO
      //GENERAR PARTE DEL FORM DE IP
      if (isset($_POST['ipconf']) && ($_POST['ipconf'] == 'estatica' )){
        //DIV DE HIDDEN ESTATICA
        echo '<div'; if (isset($_POST['ip']) && isset($_POST['mascara']) && isset($_POST['puerta']) && isset($_POST['dns'])){echo ' style="display:none"';} 
        echo '>'; 
        echo'<div class="form-group">
        <label for="ip">IP</label>
        <p class="text-secondary">Introduce una dirección IP, por ejemplo: 192.168.1.10</p>
        <input type="text" class="form-control" id="ip" name="ip" required';
        if (isset($_POST['ip']))
          echo ' value="'.$_POST['ip'].'"';
        echo '"></div>';
        echo'<div class="form-group">
        <label for="mascara">Máscara de red</label>
        <p class="text-secondary">Introduce una máscara en formato numérico, por ejemplo 24</p>
        <input type="number" class="form-control" id="mascara" name="mascara" required';
        if (isset($_POST['mascara']))
          echo ' value="'.$_POST['mascara'].'"';
        echo '"></div>';
        echo'<div class="form-group">
        <label for="puerta">Puerta de enlace</label>
        <p class="text-secondary">Introduce la puerta de enlace, por ejemplo: 192.168.1.254</p>
        <input type="text" class="form-control" id="puerta" name="puerta" required';
        if (isset($_POST['puerta']))
          echo ' value="'.$_POST['puerta'].'"';
        echo '"></div>';
        echo'<div class="form-group">
        <label for="dns">Servidor DNS</label>
        <p class="text-secondary">Introduce un servidor, por ejemplo: 8.8.8.8</p>
        <input type="text" class="form-control" id="dns" name="dns" required';
        if (isset($_POST['dns']))
          echo ' value="'.$_POST['dns'].'"';
        echo '"></div>';
        echo '</div>'; //DIV DE CERRADO DE HIDDEN ESTÁTICA
      }
     ///////////////////////
     //GENERAR PARTE DEL FORM DE DOMINIO
     //SI ESTA HIDDEN LO DE LA IP Y SE SELECCIONÓ LO DEL DOMINIO MOSTRAR FORM
     if (isset($_POST['dominio']) && $_POST['dominio'] == 'si' ){
       //DIV DE HIDDEN ESTATICA
       echo '<div'; if (isset($_POST['dname']) && isset($_POST['duser']) && isset($_POST['puser'])){echo ' style="display:none"';} 
       echo '>'; 
       echo '<div class="form-group">
            <label for="dname">Dominio</label>
            <p class="text-secondary">Introduce el nombre del dominio, ejemplo: MIDOMINIO.LAN</p>
            <input type="text" class="form-control" id="dname" name="dname" required';
            if (isset($_POST['dname']))
              echo ' value="'.$_POST['dname'].'"';
       echo '"></div>';
       echo '<div class="form-group">
            <label for="duser">Usuario dominio</label>
            <p class="text-secondary">Introduce un usuario que pueda unir el equipo al dominio</p>
            <input type="text" class="form-control" id="duser" name="duser" required';
            if (isset($_POST['duser']))
              echo ' value="'.$_POST['duser'].'"';
       echo '"></div>';
       echo '<div class="form-group">
            <label for="puser">Password usuario de dominio</label>
            <p class="text-secondary">Introduce la contraseña del usuario del dominio</p>
            <input type="password" class="form-control" id="puser" name="puser" required';
            if (isset($_POST['puser']))
              echo ' value="'.$_POST['puser'].'"';
       echo '"></div>';
       echo '</div>'; //DIV DE CERRADO DE HIDDEN ESTÁTICA
     }
      echo '<div'; /////////////////////OCULTAR BOTON UNA VEZ COMPLETADO EL FORMULARIO  
      if ((isset($_SESSION['id'])) && ($_SESSION['id']!='') && (isset($_POST['usuario'])) && ($_POST['usuario']!='')){
        if(((isset($_POST['ipconf'])) && ($_POST['ipconf'] =='dhcp') && (isset($_POST['dominio'])) && ($_POST['dominio']=='no')) || ((isset($_POST['ipconf'])) && ($_POST['ipconf']=='estatica') && (isset($_POST['ip'])) && ($_POST['ip']!='') && (isset($_POST['dominio'])) && ($_POST['dominio']=='no')) || ((isset($_POST['ipconf'])) && ($_POST['ipconf']=='estatica') && (isset($_POST['ip'])) && ($_POST['ip']!='') && (isset($_POST['dominio'])) && ($_POST['dominio']=='si') && (isset($_POST['dname'])) && ($_POST['dname']!='')) || ((isset($_POST['ipconf'])) && ($_POST['ipconf']=='dhcp') && (isset($_POST['dominio'])) && ($_POST['dominio']=='si') && (isset($_POST['dname'])) && ($_POST['dname']!=''))){
          echo ' style="display:none"';
        }
      }
      echo'>'; /////////////////////OCULTAR BOTON UNA VEZ COMPLETADO EL FORMULARIO  
      echo '<button type="submit" class="btn btn-primary mb-2">Siguiente</button>';
      echo '</div>'; /////////////////////OCULTAR BOTON UNA VEZ COMPLETADO EL FORMULARIO  
    echo '</form>
  </div>';   
 }else{
   //SI NO AVISAR QUE SÓLO USUARIOS REGISTRADOS PUEDEN CREAR ANUNCIOS, AÑADIR BOTÓN DE CONECTAR QUE LLEVA A ACCESO.PHP Y AÑADIR BOTÓN DE REGISTRARSE QUE LLEVA A REGISTRAR.PHP.
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
if ((isset($_SESSION['id'])) && ($_SESSION['id']!='') && (isset($_POST['usuario'])) && ($_POST['usuario']!='')){
  //aqui irian las condiciones que se habilitan con ipconf y dominio
  if(((isset($_POST['ipconf'])) && ($_POST['ipconf'] =='dhcp') && (isset($_POST['dominio'])) && ($_POST['dominio']=='no')) || ((isset($_POST['ipconf'])) && ($_POST['ipconf']=='estatica') && (isset($_POST['ip'])) && ($_POST['ip']!='') && (isset($_POST['dominio'])) && ($_POST['dominio']=='no')) || ((isset($_POST['ipconf'])) && ($_POST['ipconf']=='estatica') && (isset($_POST['ip'])) && ($_POST['ip']!='') && (isset($_POST['dominio'])) && ($_POST['dominio']=='si') && (isset($_POST['dname'])) && ($_POST['dname']!='')) || ((isset($_POST['ipconf'])) && ($_POST['ipconf']=='dhcp') && (isset($_POST['dominio'])) && ($_POST['dominio']=='si') && (isset($_POST['dname'])) && ($_POST['dname']!=''))){
    
    ///////////GENERAR SYSPREP.XML
    $sysprepxml='<?xml version="1.0" encoding="utf-8"?>
<unattend xmlns="urn:schemas-microsoft-com:unattend">
    <settings pass="generalize">
        <component name="Microsoft-Windows-Security-SPP" processorArchitecture="amd64" publicKeyToken="31bf3856ad364e35" language="neutral" versionScope="nonSxS" xmlns:wcm="http://schemas.microsoft.com/WMIConfig/2002/State" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
            <SkipRearm>1</SkipRearm>
        </component>
    </settings>
    <settings pass="specialize">
        <component name="Microsoft-Windows-Security-SPP-UX" processorArchitecture="amd64" publicKeyToken="31bf3856ad364e35" language="neutral" versionScope="nonSxS" xmlns:wcm="http://schemas.microsoft.com/WMIConfig/2002/State" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
            <SkipAutoActivation>true</SkipAutoActivation>
        </component>
        <component name="Microsoft-Windows-Shell-Setup" processorArchitecture="amd64" publicKeyToken="31bf3856ad364e35" language="neutral" versionScope="nonSxS" xmlns:wcm="http://schemas.microsoft.com/WMIConfig/2002/State" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
            <ProductKey>'.$_POST['clave'].'</ProductKey>
            <RegisteredOrganization>microsoft</RegisteredOrganization>
            <RegisteredOwner>AutoBVT</RegisteredOwner>
            <ShowWindowsLive>false</ShowWindowsLive>
            <TimeZone>'.$_POST['zonahoraria'].'</TimeZone>
        </component>
    </settings>
    <settings pass="oobeSystem">
        <component name="Microsoft-Windows-International-Core" processorArchitecture="amd64" publicKeyToken="31bf3856ad364e35" language="neutral" versionScope="nonSxS" xmlns:wcm="http://schemas.microsoft.com/WMIConfig/2002/State" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
            <InputLocale>'.$_POST['idioma'].'</InputLocale>
            <SystemLocale>'.$_POST['idioma'].'</SystemLocale>
            <UILanguage>'.$_POST['idioma'].'</UILanguage>
            <UILanguageFallback>'.$_POST['idioma'].'</UILanguageFallback>
            <UserLocale>'.$_POST['idioma'].'</UserLocale>
        </component>
        <component name="Microsoft-Windows-Shell-Setup" processorArchitecture="amd64" publicKeyToken="31bf3856ad364e35" language="neutral" versionScope="nonSxS" xmlns:wcm="http://schemas.microsoft.com/WMIConfig/2002/State" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
            <AutoLogon>
                <Password>
                    <Value>'.$_POST['contrasena'].'</Value>
                    <PlainText>true</PlainText>
                </Password>
                <Enabled>true</Enabled>
                <LogonCount>2</LogonCount>
                <Username>'.$_POST['usuario'].'</Username>
            </AutoLogon>
            <FirstLogonCommands>
                <SynchronousCommand wcm:action="add">
                    <CommandLine>c:\windows\system32\sysprep\sysprep.bat</CommandLine>
                    <Description>Inicia script de configuracion</Description>
                    <Order>1</Order>
                    <RequiresUserInput>false</RequiresUserInput>
                </SynchronousCommand>
            </FirstLogonCommands>
            <OOBE>
                <ProtectYourPC>3</ProtectYourPC>
                <NetworkLocation>'.$_POST['locred'].'</NetworkLocation>
                <HideEULAPage>true</HideEULAPage>
            </OOBE>
            <UserAccounts>
                <LocalAccounts>
                    <LocalAccount wcm:action="add">
                        <Password>
                            <Value>'.$_POST['contrasena'].'</Value>
                            <PlainText>true</PlainText>
                        </Password>
                        <Description>'.$_POST['usuario'].'</Description>
                        <DisplayName>'.$_POST['usuario'].'</DisplayName>
                        <Group>Administradores</Group>
                        <Name>'.$_POST['usuario'].'</Name>
                    </LocalAccount>
                </LocalAccounts>
            </UserAccounts>
            <TimeZone>'.$_POST['zonahoraria'].'</TimeZone>
            <RegisteredOrganization>'.$_POST['organizacion'].'</RegisteredOrganization>
            <RegisteredOwner>'.$_POST['propietario'].'</RegisteredOwner>
        </component>
    </settings>
    <cpi:offlineImage cpi:source="wim:c:/sysprep/install.wim#Windows 10 Pro N" xmlns:cpi="urn:schemas-microsoft-com:cpi" />
</unattend>';
    
    $fp = fopen("sysprep.xml", "w");
    fwrite($fp, $sysprepxml);
    fclose($fp);
    
    ///////////GENERAR DISTINTOS SYSPREP.BAT, ESTE SIEMPRE SE GENERA, SI ENTRA EN OTRO BUCLE SE SOBREESCRIBE
    $fp = fopen("sysprep.bat", "w");
    fwrite($fp, '@echo off'. PHP_EOL);
    fwrite($fp, 'del "C:\Windows\System32\Sysprep\sysprep.xml"'. PHP_EOL);
    fwrite($fp, 'del "C:\Windows\System32\Sysprep\sysprep.bat"'. PHP_EOL); //no se si falla o no
    fclose($fp);
    
    ////SI HAY IP ESTATICA ESCRIBIR LAS VARIABLES
    if(isset($_POST['ipconf']) && ($_POST['ipconf'] == 'estatica')){
      $fp = fopen("sysprep.bat", "w");
      fwrite($fp, '@echo off'. PHP_EOL);
      fwrite($fp, 'del "C:\Windows\System32\Sysprep\sysprep.xml"'. PHP_EOL);
      fwrite($fp, 'powershell "c:\windows\system32\sysprep\sysconf.ps1'. PHP_EOL);
      fwrite($fp, 'del "C:\Windows\System32\Sysprep\sysprep.bat"'. PHP_EOL);
      fclose($fp);
      //guardar el fichero
      $fp = fopen("sysconf.ps1", "w");
      fwrite($fp, 'Set-NetIPInterface -InterfaceAlias Ethernet -Dhcp Disabled'. PHP_EOL);
      fwrite($fp, 'Remove-NetIPAddress -InterfaceAlias Ethernet -IncludeAllCompartments -Confirm:$false 2>$null'. PHP_EOL);
      fwrite($fp, 'Remove-NetRoute -InterfaceAlias Ethernet -Confirm:$false 2>$null'. PHP_EOL);
      fwrite($fp, 'New-NetIPAddress -InterfaceAlias Ethernet -AddressFamily IPv4 -IPAddress '.$_POST['ip'].' -PrefixLength '.$_POST['mascara'].' -type Unicast -DefaultGateway '.$_POST['puerta']. PHP_EOL);
      fwrite($fp, 'Set-DnsClientServerAddress -InterfaceAlias Ethernet -ServerAddresses '.$_POST['dns']. PHP_EOL);
      //si hay dominio añadir las siguientes líneas
      if(isset($_POST['dominio']) && ($_POST['dominio'] == 'si')){
        fwrite($fp, '$pass_safe= ConvertTo-SecureString '.$_POST['puser'].' -AsPlainText -Force'. PHP_EOL);
        fwrite($fp, '$usuario_dom= '.$_POST['dname'].'\\'.$_POST['duser']. PHP_EOL);
        fwrite($fp, '$credenciales= New-Object System.Management.Automation.PSCredential $usuario_dom, $pass_safe'. PHP_EOL);
        fwrite($fp, 'del "C:\Windows\System32\Sysprep\sysconf.ps1"'); //NO SE SI FUNCIONARÁ
        fwrite($fp, 'Add-Computer -DomainName '.$_POST['dname'].' -Credential $credenciales -Restart -Force'. PHP_EOL);
      }
      fclose($fp);
    }
    //////SI LA IP ES DINÁMICA PERO HAY DOMINIO
    if(isset($_POST['ipconf']) && ($_POST['ipconf'] == 'dhcp') && isset($_POST['dominio']) && ($_POST['dominio'] == 'si')){
      $fp = fopen("sysprep.bat", "w");
      fwrite($fp, '@echo off'. PHP_EOL);
      fwrite($fp, 'del "C:\Windows\System32\Sysprep\sysprep.xml"'. PHP_EOL);
      fwrite($fp, 'powershell "c:\windows\system32\sysprep\sysconf.ps1'. PHP_EOL);
      fwrite($fp, 'del "C:\Windows\System32\Sysprep\sysprep.bat"'. PHP_EOL);
      fclose($fp);
      
      $fp = fopen("sysconf.ps1", "w");
      fwrite($fp, '$pass_safe= ConvertTo-SecureString '.$_POST['puser'].' -AsPlainText -Force'. PHP_EOL);
      fwrite($fp, '$usuario_dom= '.$_POST['dname'].'\\'.$_POST['duser']. PHP_EOL);
      fwrite($fp, '$credenciales= New-Object System.Management.Automation.PSCredential $usuario_dom, $pass_safe'. PHP_EOL);
      fwrite($fp, 'del "C:\Windows\System32\Sysprep\sysconf.ps1"'. PHP_EOL); //NO SE SI FUNCIONARÁ
      fwrite($fp, 'Add-Computer -DomainName '.$_POST['dname'].' -Credential $credenciales -Restart -Force'. PHP_EOL);
      fclose($fp);
    }
    /////COMPRIMIR FICHERO CON LOS DOCUMENTOS CREADOS, POR EJEMPLO CON LA ID+FECHA DE NOMBRE...
    //comando: zip numeros.zip 1 2 3
    $fecha=date('Y-m-d_H:i');
    $identificador=$_SESSION['id'];
    $zipname=$identificador.'_'.$fecha.'.zip';
    if(isset($_POST['ipconf']) && ($_POST['ipconf'] == 'dhcp') && isset($_POST['dominio']) && ($_POST['dominio'] == 'no')){
      shell_exec('sudo zip '.$zipname.' sysprep.bat');
    }
    if(isset($_POST['ipconf']) && ($_POST['ipconf'] == 'estatica') || isset($_POST['dominio']) && ($_POST['dominio'] == 'si')){
      shell_exec('sudo zip '.$zipname.' sysprep.xml sysprep.bat sysconf.ps1');
    }
    //////AHORA QUE YA ESTÁ CREADO EL ZIP LO SUYO SERÍA MOVERLO A userfiles y desde userfiles descargarlo...
    /////además hay que insertar en la base de datos los datos para poder accer el panel de usuario...
    $origen_zip = '/var/dominios/iawa14xoseng.ga/public/websysprep/'.$zipname;
    $destino_zip = '/var/dominios/iawa14xoseng.ga/public/websysprep/userfiles/'.$zipname;
    copy($origen_zip,$destino_zip);
    shell_exec('sudo rm -rf '.$zipname);
    //ahora insertar los valores en la base de datos...
    //id idusuario	fecha path
    $stmt=$pdo->prepare('insert into sysprepgenerator.sysprep(idusuario,fecha,path) values(?,?,?)');
    $fecha=date('Y-m-d H:i:s');
    #$path=$destino_zip;
    $path=$zipname;
    $stmt->bindParam(1,$_SESSION['id']);
    $stmt->bindParam(2,$fecha);
    $stmt->bindParam(3,$path);
    $stmt->execute();
    //SOLO SE PUEDE MOSTRAR SI SE OCULTA EL BOTON DE SIGUIENTE
    if ((isset($_SESSION['id'])) && ($_SESSION['id']!='') && (isset($_POST['usuario'])) && ($_POST['usuario']!='')){
      if(((isset($_POST['ipconf'])) && ($_POST['ipconf'] =='dhcp') && (isset($_POST['dominio'])) && ($_POST['dominio']=='no')) || ((isset($_POST['ipconf'])) && ($_POST['ipconf']=='estatica') && (isset($_POST['ip'])) && ($_POST['ip']!='') && (isset($_POST['dominio'])) && ($_POST['dominio']=='no')) || ((isset($_POST['ipconf'])) && ($_POST['ipconf']=='estatica') && (isset($_POST['ip'])) && ($_POST['ip']!='') && (isset($_POST['dominio'])) && ($_POST['dominio']=='si') && (isset($_POST['dname'])) && ($_POST['dname']!='')) || ((isset($_POST['ipconf'])) && ($_POST['ipconf']=='dhcp') && (isset($_POST['dominio'])) && ($_POST['dominio']=='si') && (isset($_POST['dname'])) && ($_POST['dname']!=''))){
            echo '<div class="container">
              <div>
                <p class="text-secondary">Se ha generado un archivo comprimido con tus archivos de configuración personalizados.</p>
                <p class="text-secondary">Si quieres saber como utilizarlos revisa el apartado <a href="instrucciones.php" target="_blank">instrucciones</a>.</p>
                <a class="btn btn-primary mb-2" href="./userfiles/'.$zipname.'">Descargar</a>
              </div>
            </div>';
      }
    }
    ////////////////////////////////////////////////
  }
}
?>
<?php
require 'pie.php';
?>