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

    function subirImagen() : string
    {
        // si no se envió imagen
        $prdImagen = 'noDisponible.svg';

        // ENVIARON imagen
        if( $_FILES['prdImagen']['error'] == 0 ){
            $dir = 'productos/';
            $tmp = $_FILES['prdImagen']['tmp_name'];
            ## renombrado
            $ext = pathinfo($_FILES['prdImagen']['name'], PATHINFO_EXTENSION);
            $prdImagen = time().'.'.$ext;
            ## subida
            move_uploaded_file( $tmp, $dir.$prdImagen );
        }
        return $prdImagen;
    }

    function agregarProducto() : bool
    {
        //capturamos datos enviados por el form
        $prdNombre = $_POST['prdNombre'];
        $prdPrecio = $_POST['prdPrecio'];
        $idMarca = $_POST['idMarca'];
        $idCategoria = $_POST['idCategoria'];
        $prdDescripcion = $_POST['prdDescripcion'];
        //subida de imagen *
        $prdImagen = subirImagen();

        $link = conectar();
        $sql = "INSERT INTO productos
                    VALUES 
                        (
                            DEFAULT,
                            '".$prdNombre."',
                            ".$prdPrecio.",
                            ".$idMarca.",
                            ".$idCategoria.",
                            '".$prdDescripcion."',
                            '".$prdImagen."',
                            DEFAULT
                        )";
        try {
            return mysqli_query($link, $sql);
        }catch ( Exception $e ){
            // echo $e->getMessage();
            return false;
        }
    }