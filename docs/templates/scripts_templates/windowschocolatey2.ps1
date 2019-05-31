# Script de instalacion de chocolatey creado en https://www.sysprepgenerator.tk - Ejecutar en PowerShell como administrador
# Si no deja ejecutar scripts activar con: 
    #Set-ExecutionPolicy Unrestricted
    #Set-ExecutionPolicy RemoteSigned
# Requisitos: 
	#Windows 7+ / Windows Server 2003+
	#PowerShell v2+
	#.NET Framework 4+ (the installation will attempt to install .NET 4.0 if you do not have it installed)
# Web oficial: https://chocolatey.org/
# Instalacion de chocolatey
Set-ExecutionPolicy Bypass -Scope Process -Force; iex ((New-Object System.Net.WebClient).DownloadString('https://chocolatey.org/install.ps1'))
# actualizacion usa comandos update y upgrade
choco upgrade chocolatey -y
# Instalacion de paquetes: https://chocolatey.org/packages
# choco install chocolatey-windowsupdate.extension -y
choco install flashplayerplugin -y
# choco install k-litecodecpackfull -y
choco install 7zip.install -y
# choco install winrar -y
# choco install foxitreader -y
choco install adobereader -y
choco install firefox -y
# choco install tor-browser -y
choco install adblockplus-firefox -y
# choco install noscript -y
choco install googledrive -y
# choco install dropbox -y
# choco install megasync -y
# choco install googlechrome -y 
# choco install adblockpluschrome -y
# choco install chromium -y
# choco install googleearth -y
choco install javaruntime -y
choco install jdk8 -y
choco install notepadplusplus.install -y
choco install vlc -y
# choco install aimp -y
# choco install winamp -y
choco install git.install -y
choco install putty.install -y
#choco install skype -y
choco install ccleaner -y
choco install recuva -y
choco install defraggler -y
choco install filezilla -y
# choco install daemontoolslite -y
# choco install openvpn -y
# choco install keepass.install -y
#choco install utorrent -y
#choco install jdownloader -y
#choco install teamspeak -y
#choco install discord.install -y
#choco install telegram -y
#choco install whatsapp -y
#choco install cdburnerxp -y
choco install gimp -y
choco install krita -y
choco install inkscape -y
choco install dia -y
choco install netbeans -y
# choco install eclipse -y
choco install libreoffice -y
# choco install wps-office-free -y
# choco install openoffice -y
choco install virtualbox -y
choco install virtualbox.extensionpack -y
# choco install vmware-workstation-player -y
# choco install totalcommander -y
choco install cpu-z.install -y
choco install pdfcreator -y
choco install pdfxchangeeditor -y
choco install yumi -y
# choco install rufus -y
# choco install unetbootin -y
choco install teamviewer -y
# choco install tightvnc -y
choco install sublimetext3 -y
choco install brackets -y
# choco install unity -y
choco install xml-copy-editor -y
# choco install visualstudiocode -y
choco install obs-studio -y
#choco install steam -y
#choco install idlemaster -y
# choco install origin -y
# choco install battle.net -y
# choco install leagueoflegends -y
# choco install avastfreeantivirus -y
# choco install avgantivirusfree -y
choco install powershell -y
choco upgrade -y all
#ACTUALIZAR WINDOWS
choco install pswindowsupdate  -y
get-wuinstall -windowsupdate -acceptall
