<?php
    //require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    $check = agregarMarca();
    include 'layouts/header.php';
    include 'layouts/nav.php';
?>

    <main class="container py-4">
        <h1>Alta de una marca</h1>
<?php
        $css = 'danger';
        $mensaje = 'No se pudo agregar la marca';
        if( $check ) {
            $css = 'success';
            $mensaje = 'Marca agregada correctamente';
        }
?>
        <div class="alert alert-<?= $css ?> p-4 col-8 mx-auto shadow">
            <?= $mensaje ?>
            <a href="adminMarcas.php" class="btn btn-dark sep">
                volver al panel
            </a>
        </div>


    </main>

<?php  include 'layouts/footer.php';  ?>