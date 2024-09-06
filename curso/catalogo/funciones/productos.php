<?php

    function listarProductos() : mysqli_result
    {
        $link = conectar();
        $sql  = "SELECT * 
                    FROM productos p
                    JOIN marcas m 
                      ON m.idMarca = p.idMarca
                    JOIN categorias c 
                      ON c.idCategoria = p.idCategoria";
        return mysqli_query( $link, $sql );
    }