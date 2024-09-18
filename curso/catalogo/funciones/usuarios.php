<?php

    function registrarUsuario() : bool
    {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $clave = $_POST['clave'];//clave SIN ENCRIPTAR
        $claveHash = password_hash($clave, PASSWORD_DEFAULT);
        $link = conectar();
        $sql = "INSERT INTO usuarios
                  VALUES 
                      (
                       default,
                       '".$nombre."',
                       '".$apellido."',
                       '".$email."',
                       '".$claveHash."',
                       3,
                       1
                      )";
        try {
            return mysqli_query($link, $sql);
        }
        catch ( Exception $e ){
            // echo $e->getMessage();
            return false;
        }
    }