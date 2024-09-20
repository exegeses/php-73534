<?php
    //directiva de sesión
    session_start();
    /* si la sesión no existe: se crea
       En cambio si ya existe: se puede acceder a su contenido
     */

    //registramos variables de sesión
    $_SESSION['nombre'] = 'marcos';
    $_SESSION['numero'] = 73;

    // nombre|s:6:"marcos";numero|i:73;