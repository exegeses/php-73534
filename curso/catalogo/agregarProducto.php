<?php
    //require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $check = agregarProducto();
    include 'layouts/header.php';
    include 'layouts/nav.php';
?>

    <main class="container py-4">
        <h1>Alta de un producto</h1>
<?php
        $css = 'danger';
        $mensaje = 'No se pudo agregar el producto';
        if( $check ) {
            $css = 'success';
            $mensaje = 'Producto agregado correctamente';
        }
?>
        <div class="alert alert-<?= $css ?> p-4 col-8 mx-auto shadow">
            <?= $mensaje ?>
            <a href="adminProductos.php" class="btn btn-dark sep">
                volver al panel
            </a>
        </div>


    </main>

<?php  include 'layouts/footer.php';  ?>