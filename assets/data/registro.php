<?php
    include('conexion_registro.php');

    $obj = new Conexion;

    $user = $_POST['inputNomUsu'];
    $nombre = $_POST['inputNombre'];
    $correo = $_POST['inputCorreo'];
    $pass = $_POST['inputPassword'];

    $res = $obj->insertarUsuario($user, $nombre, $correo, $pass);

    if($res == 1){
        $datos = array('dato' => 'ok');
    }else{
        $datos = array('dato' => 'no');
    }
   
    echo json_encode($datos, JSON_FORCE_OBJECT);
?>
