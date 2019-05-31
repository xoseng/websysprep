#Script para añadir un equipo al dominio
#VARIABLES
$usuario="hplovecraft"
$pass= "abc123.."
$dominio= "MYTHOS.LAN"
$PCname = "SECT101OF"
###crear credenciales
$pass_safe= ConvertTo-SecureString $pass -AsPlainText -Force
$usuario_dom= $dominio+"\"+$usuario
$credenciales= New-Object System.Management.Automation.PSCredential $usuario_dom, $pass_safe
#equipo ou
$ou="OU=Oficina,OU=Equipos,OU=Mythos,dc=MYTHOS,dc=LAN"
#Antes borramos cosas
del "C:\ProgramData\Microsoft\Windows\Start Menu\Programs\StartUp\como_admin.bat"
del "C:\Windows\System32\Sysprep\sysprep.xml"
#get-help Add-Computer -Full
Add-Computer -DomainName $dominio -Credential $credenciales -OUPath $uo -Restart -Force
