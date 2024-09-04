<?php

    const SERVER    = 'localhost';
    const USER      = 'root';
    const CLAVE     = 'root';
    const BASE      = 'catalogo73534';

    function conectar() : mysqli | false
    {
        try {
            $link = mysqli_connect(
                SERVER,
                USER,
                CLAVE,
                BASE
            );
            return $link;
        }
        catch ( Exception $e ){
            //log de errores
            //echo $e->getMessage();
            /* redirección a archivo  */
            header('location: no-conectado.php');
            return false;
        }

    }