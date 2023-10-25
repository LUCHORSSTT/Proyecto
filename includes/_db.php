
<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "tienda";


$conexion = mysqli_connect($host, $user, $pass, $name);
if(!$conexion){
echo "No se realizo la conexion a la basa de datos, el error fue:".
mysqli_connect_error() ;


}

?>