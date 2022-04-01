<?php
session_start();

$miSesion = session_id();
//print_r($miSession);
//echo $_SESSION['ID'];

if (isset($_SESSION['ID']) && $_SESSION['ID'] === $miSesion){
    echo "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel="stylesheet" type="text/css" href="estilos_carlos.css">
            <title>Inreso</title>
        </head>
        <body>
            <fieldset>
            <h3> Perfil del estudiante </h3>
            <img src='FotoPerfil.png'>
            <br>Nombre: ".$_SESSION["NOMBRE"]."
            <br>Numero de Control: ".$_SESSION["USUARIO"]."
            <br>Carrera: ".$_SESSION["CARRERA"]."
            <br>Numero de telefono: ".$_SESSION["NUMB_TELEFONO"]."
            <br>Telefono de emergencia: ".$_SESSION["TELF_EMERGENCIA"]."
            <br>Correo Electronico: ".$_SESSION["CORREO_ELECTRONICO"]."
            <br>Tipo de usuario: ".$_SESSION["TIPO_CUENTA"]."           
            <br><br>
            <a href= 'salir.php'> <button type='submit' name='salir' value='Salir' style='font-size: 20px;'>Salir</button></a>
            </fieldset>
        </body>
        </html>   
        ";
}else{
    echo "
    <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Inreso</title>
        </head>
        <body background='Fondo.jpg' style='background-size: 1600px 780px; padding: 100px 200px;'>
            <fieldset style='background-color: rgba(0, 0, 0, 0.424); text-align: center; color: aliceblue; font-size: 30px;'>
            <h3>Debes autentificarte para ingresar a esta página</h3>
            <a href='ingresar.html'><button type='submit' name='ingresar' style='font-size:20px;'>Ingresar</button></a>
            </fieldset>
        </body>
        </html>              
         ";
}


?>