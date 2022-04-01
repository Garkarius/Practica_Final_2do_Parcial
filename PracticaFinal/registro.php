<?php
    //Creación del archivo
    $archivo = fopen("usuarios.txt", "ab");
    if(!$archivo){
        echo "¡No se puede abrir el archivo!";
    }
    //tratamiento de los datos
    $nombre = htmlspecialchars($_POST["nombre"]);
    $num_control = htmlspecialchars($_POST["num_control"]);
    $carrera = htmlspecialchars($_POST["carrera"]);
    $numb_telefono = htmlspecialchars($_POST["numb_telefono"]);
    $telf_emergencia = htmlspecialchars($_POST["telf_emergencia"]);    
    $correo_electronico = htmlspecialchars($_POST["correo_electronico"]);
    $password = htmlspecialchars($_POST["password"]);    
    $tipo_cuenta = htmlspecialchars($_POST["tipo_cuenta"]);

    //creacion del reglon 
    $perfil = $nombre."*".$num_control."*".$carrera."*".$numb_telefono."*".$telf_emergencia."*".$correo_electronico."*".$password."*".$tipo_cuenta."\n";

    //Escritura del archivo con el renglon
    fwrite($archivo,$perfil, strlen($perfil));

    //Cerrar el archivo
    if(fclose($archivo)){
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
            <fieldset style='background-color: rgba(0, 0, 0, 0.424); text-align: center; color: aliceblue; font-size: 23px;'>
            <h1>Usuario registrado</h1>
            <br>
            <a href='bienvenido.php'><button type='submit' style='font-size:20px;'>Continuar</button></a>                    
            </fieldset>
        </body>
        </html> 
        ";
    }else{
        echo "No se pudo cerrar el archivo";
    }
?>