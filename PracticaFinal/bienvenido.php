<?php
session_start();

$miSesion = session_id();
//print_r($miSession);
//echo $_SESSION['ID'];

if (isset($_SESSION['ID']) && $_SESSION['ID'] === $miSesion){
    echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" type="text/css" href="estilos_carlos.css">
            <title>Inreso</title>
        </head>
        <body>
            <fieldset class="contenedor">
            <h3> Perfil del estudiante </h3>
            <img src="FotoPerfil.png">
            <br>Nombre: '.$_SESSION["NOMBRE"].'
            <br>Numero de Control: '.$_SESSION["USUARIO"].'
            <br>Carrera: '.$_SESSION["CARRERA"].'
            <br>Numero de telefono: '.$_SESSION["NUMB_TELEFONO"].'
            <br>Telefono de emergencia: '.$_SESSION["TELF_EMERGENCIA"].'
            <br>Correo Electronico: '.$_SESSION["CORREO_ELECTRONICO"].'
            <br>Tipo de usuario: '.$_SESSION["TIPO_CUENTA"].'           
            <br><br>
            <a href= "salir.php"> <button type="submit" name="salir" value="Salir">Salir</button></a>
            </fieldset>
        </body>
        </html>   
        ';
}else{
    echo '
    <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" type="text/css" href="estilos_carlos.css">
            <title>Inreso</title>
        </head>
        <body>
            <fieldset class="contenedor">
            <h3>Debes autentificarte para ingresar a esta página</h3>
            <a href="ingresar.html"><button type="submit" name="ingresar">Ingresar</button></a>
            </fieldset>
        </body>
        </html>              
         ';
}


?>