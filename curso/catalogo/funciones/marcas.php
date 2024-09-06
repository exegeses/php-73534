<?php

/* CRUD de marcas */

function listarMarcas() : mysqli_result
{
    $link = conectar();
    $sql  = "SELECT * FROM marcas";
    return mysqli_query( $link, $sql );
}


/*
 * listarMarcas()
 * verMarcaPorID()
 * agregarMarca()
 * modificarMarca()
 * eliminarMarca()
 * */