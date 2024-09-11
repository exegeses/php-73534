<?php

/* CRUD de marcas */

function listarMarcas() : mysqli_result
{
    $link = conectar();
    $sql  = "SELECT * FROM marcas";
    return mysqli_query( $link, $sql );
}

function verMarcaPorID() : array
{
    //Capturamos dato enviado por la URL
    $idMarca = $_GET['idMarca'];
    $link = conectar();
    $sql  = "SELECT * 
                FROM marcas
                WHERE idMarca = ".$idMarca;
    $resultado = mysqli_query( $link, $sql );
    return mysqli_fetch_assoc( $resultado );
}

function agregarMarca() : bool
{
    //Capturamos dato enviado por el formulario
    $mkNombre = $_POST['mkNombre'];
    $link = conectar();
    $sql = "INSERT INTO marcas 
                VALUES 
                    ( default, ".$mkNombre.")";
    try {
        return mysqli_query( $link, $sql );
    }catch ( Exception $e ){
        //log de errores/excepcioones
        return false;
    }
}

function modificarMarca() : bool
{
    //Capturamos datos enviado por el formulario
    $mkNombre = $_POST['mkNombre'];
    $idMarca  = $_POST['idMarca'];
    $link = conectar();
    $sql = "UPDATE marcas
                SET mkNombre = '".$mkNombre."'
                WHERE idMarca = ".$idMarca;
    try {
        return mysqli_query( $link, $sql );
    }catch ( Exception $e ){
        //log de errores/excepcioones
        return false;
    }
}

function checkProductoXMarca() : int
{
    $idMarca = $_GET['idMarca'];
    $link = conectar();
    $sql = "SELECT 1 
                FROM productos
                WHERE idMarca = ".$idMarca;
    $resultado = mysqli_query($link, $sql);
    // función para contar la cantidad de resultados de una consulta
    return mysqli_num_rows( $resultado );
}

/*
 * listarMarcas()
 * verMarcaPorID()
 * agregarMarca()
 * modificarMarca()
 * eliminarMarca()
 * */