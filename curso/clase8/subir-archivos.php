<?php
    // capturamos información de archivo enviado
    $prdImagen = $_FILES['prdImagen'];
    #----
    //movemos archivo enviado
    $dir = 'productos/';
    $nombreArchivo = $_FILES['prdImagen']['name'];
    $nombreTMP = $_FILES['prdImagen']['tmp_name'];
    ## renombrado:
    $ext = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
    $nombreNuevo = time().'.'.$ext;
    move_uploaded_file( $nombreTMP, $dir.$nombreNuevo );
    #----

    include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Publicación de archivos</h1>

        <section class="shadow alert my3">
            Datos de de archivo enviado: 
        <pre>
            <?php
                print_r($prdImagen);
            ?>
        </pre>
            error: <?= $_FILES['prdImagen']['error'] ?>
        </section>
    </main>
<?php
include '../layouts/footer.php';
