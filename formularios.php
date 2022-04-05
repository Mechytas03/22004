<?php
$conexion = mysqli_connect("localHost", "root"; "", "bd_pruebas")
$nombre = $_POST["nombres"];
$apellido = $_POST["apellido"];
$pass = $_POST["paswoord"];
$mail = $_POST["email"];
if($_FILES["archivo"]){
    $nombre_base = basename($_file["archivo"]["name"]);
    $nombre_final = date("d-m-y"). "-".DATE("h-i-s")."-" . $nombre_base;
    $ruta = "archivos/" . $nombre_final;
    $subirachivo = move_uploaded_file($_FILES["archivo"]["tmp_name"] , $ruta);
     if ($subirachivo){
         $insertar = "insert into informes('nombres', 'apellido', 'paswoord', 'email') values ('$nombre', '$apellido','$pass','$mail', '$ruta', '$nombre_final)';
         $resultado = mysqli_query($conexion, $insertarSQL);
         if($resultado){
             echo <scrip> alert ("se ha enviado"); <windoows class="./index.html"></windoows></scrip>
        
        } else{
            print("errormessage: %s\n", mysqli_eror($conexion));

        }
     }
    }else {
        echo " error al subir";

    }