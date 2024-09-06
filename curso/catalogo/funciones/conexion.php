<?php

    const SERVER    = 'localhost';
    const USUARIO   = 'root';
    const CLAVE     = 'root';
    const BASE      = 'catalogo73534';

    function conectar() : mysqli | false
    {
        try {
            $link = mysqli_connect(
                SERVER,
                USUARIO,
                CLAVE,
                BASE
            );
            return $link;
        }
        catch ( Exception $e ){
            // log de errores
            // echo $e->getMessage()
            /* redireccion a vista no-disponible */
            header('location: no-disponible.php');
            return false;
        }
    }