<?php
$num_control = htmlspecialchars($_POST['num_control']);
$password = htmlspecialchars($_POST['password']);
$archivo = fopen("usuarios.txt", "r");
if(!$archivo){
    echo "No se puede abrir el archivo";
}

//Integrar los datos del archivo en un arreglo multidimensional
$i = 0; 
while(!feof($archivo)){
    $cuenta[$i] = fgets($archivo);
    if(empty($cuenta[$i])){
        unset($cuenta[$i]);
    }else{
        $div[$i] = explode("*", $cuenta[$i]);
    }
    $i++;
}

//iniciar variables para su comparacion con los datos del usuario 
$nombre = false;
$carrera = false;
$numb_telefono = false;
$telf_emergencia = false;
$correo_electronico = false;
$pass = false;
$tipo_cuenta = false;
$usuario = false;

//comparacion de los datos, si existe la cuenta almacenara el nombre
for($i=0; $i<sizeof($cuenta); $i++){
    for($j=0; $j<=sizeof($div); $j++){
        if($num_control == $div[$i][$j]){            
            $nombre = $div[$i][$j-1];
            $usuario = $div[$i][$j];
            $carrera = $div[$i][$j+1];
            $numb_telefono = $div[$i][$j+2];
            $telf_emergencia = $div[$i][$j+3];
            $correo_electronico = $div[$i][$j+4];
            $pass = $div[$i][$j+5];
            $tipo_cuenta = $div[$i][$j+6];
        }
    }
}

// si esxiste el usuario generara una sesion 
if($usuario && $pass){
    session_start();
    $_SESSION["USUARIO"] = $usuario;
    $_SESSION["NOMBRE"] = $nombre;
    $_SESSION["CARRERA"] = $carrera;
    $_SESSION["NUMB_TELEFONO"] = $numb_telefono;
    $_SESSION["TELF_EMERGENCIA"] = $telf_emergencia;
    $_SESSION["CORREO_ELECTRONICO"] = $correo_electronico;
    $_SESSION["TIPO_CUENTA"] = $tipo_cuenta;
    //$_SESSION["ESTATUS"] = 1; 
    $_SESSION["ID"] = $_COOKIE["PHPSESSID"]; /*Es el identificador predeterminado que PHP utiliza 
    para las COOKIES generadas por session_start()*/
    
    echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Inreso</title>
        </head>
        <body background='Fondo.jpg' style='background-size: 1600px 780px; padding: 100px 200px;'>       
            <fieldset style='background-color: rgba(0, 0, 0, 0.424); text-align: center; color: aliceblue; font-size: 23px;'>
            <h1 style='font-size: 50px; color:aliceblue;'>¡Has Ingresado!</h1>    
            <br>
            <a href='bienvenido.php'><button> Continuar </button> </a>
            </fieldset>
        </body>
        </html>    
    ";
}else{
    echo "Correo o contraseña incorrectos";
    echo "<br>";
    echo "<a href='ingresar.html'> Regresar </a>";
}
?>