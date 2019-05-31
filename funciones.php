<?php
/**
* Función que encripta una password utilizando SHA-512 y 10000 vueltas por defecto
*
* @param string $password
* @param int $vueltas Número de vueltas, opcional. Por defecto 10000.
* @return string
*/
function encriptar($password, $vueltas = 10000) {
// Empleamos SHA-512 con 10000 vueltas por defecto.

$salt = substr(base64_encode(openssl_random_pseudo_bytes(17)),0,22);

return crypt((string) $password, '$6$' . "rounds=$vueltas\$$salt\$");

// Forma de comprobación de contraseña en login:
// Es recomendable comparar las cadenas de hash con hash_equals que es una comparación segura contra ataques de timing.

// Ejemplo de uso (hash_equals para evitar ataques de Timing)

// if (hash_equals(crypt($passRecibidaFormulario, $passwordAlmacenadaEncriptada),$passwordAlmacenadaEncriptada))

// Es necesario pasarle a la función crypt la $passwordAlmacenadaEncriptada para que pueda extraer la semilla, el tipo de encriptación y el número de vueltas.
}
//replace all linebreaks to <br /> 
function nl2br2($string) {
  $string = str_replace(array("\r\n", "\r", "\n"), "<br />", $string);
  return $string;
} 
/**
* Convert BR tags to nl
*
* @param string The string to convert
* @return string The converted string
*/
function br2nl($string){
  return preg_replace('/\<br(\s*)?\/?\>/i', "\n", $string);
}
?>