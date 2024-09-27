<?php

    function listarUsuarios() : mysqli_result
    {
        $link = conectar();
        $sql = "SELECT * 
                    FROM usuarios
                    JOIN roles r 
                    ON usuarios.idRol = r.idRol
                  WHERE activo = 1";
        return mysqli_query($link, $sql);
    }

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

    function checkEnviados( string $dato ) : bool
    {
        if( !isset($dato)){
            return false;
        }
        return true;
    }

    function getPassEnctriptada( int $idUsuario ) : string
    {
        $link = conectar();
        $sql = "SELECT clave
                  FROM usuarios
                  WHERE idUsuario = ".$idUsuario;
        $resultado = mysqli_query($link, $sql);
        $datoArray = mysqli_fetch_assoc($resultado);
        return $datoArray['clave'];
    }

    function modificarClave() : bool
    {
        // chequeamos que todos los datos hayan sido enviados
        if(
            !checkEnviados($_POST['clave']) ||
            !checkEnviados($_POST['newClave']) ||
            !checkEnviados($_POST['newClave2'])
           ){
            header('location: formModificarClave.php?error=1');
            return false;
        }
        // Capturamos contraseñas sin encriptar
        $clave = $_POST['clave'];
        $newClave = $_POST['newClave'];
        $newClave2 = $_POST['newClave2'];
        // chequear qué coincida la clave nueva y repite clave
        if( $newClave != $newClave2 ){
            header('location: formModificarClave.php?error=2');
            return false;
        }

        /* obtenemos la contraseña encriptada en tabla usuartios */
        $claveActual = getPassEnctriptada($_SESSION['idUsuario']);
        /*
        Comparamos que la clave ingresada en el formulario
        coincida con la clave encriptada almacenada en la base de datos
        en la tabla usuarios */
        if( !password_verify($clave, $claveActual) ){
            header('location: formModificarClave.php?error=3');
            return false;
        }
        ########################################
        /* En este punto sabemos que la contraseña actual es correcta
        y que la clave nueva y la clave repetida coinciden
         * */
        ########################################
        //Encritamos la clave nueva
        $claveHash = password_hash($newClave, PASSWORD_DEFAULT);
        ### Modificamos la contraseña
        $link = conectar();
        $sql = "UPDATE usuarios
                  SET 
                        clave = '".$claveHash."'
                  WHERE idUsuario = ".$_SESSION['idUsuario'];
        try {
            return mysqli_query($link, $sql);
        }catch( Exception $e ){
            return false;
        }

    }