<?php
    include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Proceso de datos enviados por el form</h1>

        <p>
            <?php
                //Capturamos el dato enviado por el formulario
                $nombre = $_POST['nombre'];
                echo $nombre;
            ?>
        </p>
    </main>
<?php
    include '../layouts/footer.php';
