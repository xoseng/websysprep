#Variables configuraci�n equipo Windows
$nic = "Ethernet"
$ms = 24
$pe = "192.168.10.1"
$dns1 = "192.168.10.9"
$listaDNSServers = @($dns1)
################### LEER CSV Y HACER UN OBJETO LISTA LLAMADO EQ
$adaptador = Get-NetAdapter -name ${nic}
$EQ= Import-Csv C:\scripts\equipos.csv | Where-Object { $_.MAC -eq ${adaptador}.MacAddress }
###################
#variables dentro del objeto EQ recogidos de  equipos.csv
$ip= $EQ.IP
$PCname= $EQ.EQNAME
#####Configuraci�n IP#####
#Deshabilitar el DHCP
Set-NetIPInterface -InterfaceAlias $nic -Dhcp Disabled
#Eliminamos la configuraci�n que tiene en este momento
Remove-NetIPAddress -InterfaceAlias $nic -IncludeAllCompartments -Confirm:$false 2>$null
#Eliminamos la puerta de enlace
Remove-NetRoute -InterfaceAlias $nic -Confirm:$false 2>$null
#Configuramos IP est�tica, m�scara de subred y puerta de enlace
New-NetIPAddress -InterfaceAlias $nic -AddressFamily IPv4 -IPAddress $ip -PrefixLength $ms -type Unicast -DefaultGateway $pe
#Configuramos los servidores DNS
Set-DnsClientServerAddress -InterfaceAlias $nic -ServerAddresses $listaDNSServers
######OPTIMIZACIONES
cp C:\scripts\como_admin.bat "C:\ProgramData\Microsoft\Windows\Start Menu\Programs\StartUp"
#####Configuraci�n nombre equipo#####
Rename-Computer -NewName $PCname -Restart -Force