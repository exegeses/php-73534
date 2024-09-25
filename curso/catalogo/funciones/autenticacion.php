<?php

    function login() : void
    {
        $email = $_POST['email'];
        $clave = $_POST['clave']; // sin encriptar
        $link = conectar();
        $sql = "SELECT idUsuario,
                       nombre, apellido,
                       email, clave, idRol
                    FROM usuarios
                    WHERE activo = 1
                      AND email = '".$email."'";
        $resultado = mysqli_query($link, $sql);
        $cantidad = mysqli_num_rows($resultado);
        /* Si cantidad == 0 no hay coincidencias
        ## Si cantidad == 1 hay coincidencia
         * */
        if( $cantidad == 0 ){
            //Redirección a formLogin.php + mensaje de error
            header('location: formLogin.php?error=1');
            return;
        }
        /*
         * En este punto sabemos que el e-mail ingresado es correcto
         * y que el usuario está activa
         */
        ### ¢¢ Verificamos la contraseña
        $usuario = mysqli_fetch_assoc($resultado);
        if( !password_verify( $clave, $usuario['clave'] ) ){
            //Redirección a formLogin.php + mensaje de error
            header('location: formLogin.php?error=1');
            return;
        }
        /* Si llegamos a este punto sabemos
            que el usuario se logueó correctamente
           Por lo tanto vamos a almacenar todos los datos en una sesión
         * */
        ##### Rutina de autenticación
        $_SESSION['login'] = 1; // token
        $_SESSION['idUsuario'] = $usuario['idUsuario'];
        $_SESSION['nombre'] = $usuario['nombre'];
        $_SESSION['apellido'] = $usuario['apellido'];
        $_SESSION['email'] = $usuario['email'];
        $_SESSION['idRol'] = $usuario['idRol'];
        // redirección a admin
        header('location: admin.php');
    }

    function logout() : void
    {
        //Eliminamos variables de sesión (opcional)
        session_unset();
        //Eliminamos la sesión
        session_destroy();
        // redirección con delay
        header('refresh:3;url=index.php');
    }

    function autenticar() : void
    {
        if( !isset($_SESSION['login']) ){
            //Redirección a formLogin.php + mensaje de error
            header('location: formLogin.php?error=2');
        }
    }

    function checkAdmin() : void
    {
        // Si el usuario no es administrador
        if( $_SESSION['idRol'] != 1 ){
           header('location: no-admin.php');
        }
    }