<?php 

$host='localhost';
$db='coffee_bar_db';
$user='root';
$pass='';

$conn=new mysqli($host, $user, $pass, $db);

if($conn->connect_error) {
    die("conexión fallida".$conn->connect_error);
}
else {
    echo "Conexión exitosa";
}

?>