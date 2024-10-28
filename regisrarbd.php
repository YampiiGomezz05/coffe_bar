<?php
include("conexion.php"); /*conectamos la base de datos*/ 
/* La variable $_server es un variable de entorno super
global que contiene toda la info sobre los encabezados, rutas y ubicaciones de los scripts.
$_server 'request_method almacena el metodo HTTP con el cual se hizo la solicitud actual, los mas comunes son POST y GET $_post es una variable super global, la cual especifica que almacena los datos enviados a traves del formulario utiliizando el metodo POST*/

if($_SERVER['REQUEST_METHOD']==='POST') {
    $_username_registro=$_POST['username_registro'];
    $_email_registro=$_POST['email_registro'];
    $_pass_registro=$_POST['pass_registro'];
    $_confirm_pass=$_POST['confirm_pass'];

    if($_pass_registro===$_confirm_pass) {
        $password=password_hash( $_pass_registro, PASSWORD_BCRYPT);/*esta funcion permite encriptar el password*/
        echo"username:$_username_registro <br>";
        echo"Email: $_email_registro<br>";
        echo"contraseña:$password <br>";
        $chequear_user=$conn->prepare("SELECT *FROM registro WHERE username_registro=?");
        $chequear_user->blind_param("s",$_username_registro);
        $chequear_user->execute();
        $resultado= $chequear_user->get_result();

        if($resultado->num_rows>0){
            echo'<scrpit>alert("el nombre de usuario ya existe. por favor elige otro.")</scrpit>';

            echo '<script>window.location.href="from_registarse.php";</script>';
        }
        else{
            $insertar_bd=$conn->prepare("INSERT INTO registro ( username_registro, email_registro, pass_registro) VALUES (?,?,?)");
            if($insertar_bd->execute([$_username_registro,$_email_registro,$_pass_registro,$password])){
                header("location:from_login.php");
            }
            else{
                echo"Error".$insertar_bd->error;
            }

            else {
                echo'<script>alert>("Las contraseñas no coinciden")</script>';
                echo'<script>window.location.href="form_regsitrarse.php"</script>';
            }
        }/*cierra el else en caso de que no  existe el name de usuario en la bd*/  
    }
    /*cierra el if de comparacion de las contraseñas*/ 




}/*cierra el if principal de la comparacion del metodo POST*/
   
?>