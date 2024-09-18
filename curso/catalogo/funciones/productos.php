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

    function verProductoPorID() : array
    {
        $idProducto = $_GET['idProducto'];
        $link = conectar();
        $sql  = "SELECT * 
                    FROM productos p
                    JOIN marcas m 
                      ON m.idMarca = p.idMarca
                    JOIN categorias c 
                      ON c.idCategoria = p.idCategoria
                    WHERE idProducto = ".$idProducto;
        $resultado = mysqli_query( $link, $sql );
        return mysqli_fetch_assoc( $resultado );
    }



    function subirImagen() : string
    {
        // si no se envió imagen ALTA
        $prdImagen = 'noDisponible.svg';

        // si no se envió imagen MODIFICACIÓN
        /* if( isset($_POST['imgActual']) ){
            $prdImagen = $_POST['imgActual'];
        } */
        $prdImagen = $_POST['imgActual'] ?? 'noDisponible.svg';

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

    function modificarProducto() : bool
    {
        //capturamos datos enviados por el form
        $prdNombre = $_POST['prdNombre'];
        $prdPrecio = $_POST['prdPrecio'];
        $idMarca = $_POST['idMarca'];
        $idCategoria = $_POST['idCategoria'];
        $prdDescripcion = $_POST['prdDescripcion'];
        $idProducto = $_POST['idProducto'];
        //subida de imagen *
        $prdImagen = subirImagen();

        $link = conectar();
        $sql = "UPDATE productos
                    SET 
                        prdNombre = '".$prdNombre."',
                        prdPrecio = ".$prdPrecio.",
                        idMarca = ".$idMarca.",
                        idCategoria = ".$idCategoria.",
                        prdDescripcion = '".$prdDescripcion."',
                        prdImagen = '".$prdImagen."'
                    WHERE idProducto = ".$idProducto;

        try {
            return mysqli_query($link, $sql);
        }catch ( Exception $e ){
            // echo $e->getMessage();
            return false;
        }
    }