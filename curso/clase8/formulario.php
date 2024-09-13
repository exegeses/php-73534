<?php
include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Publicación de archivos</h1>

        <section class="shadow alert my3">
            <form action="subir-archivos.php" method="post" enctype="multipart/form-data">
                Archivo:
                <input type="file" name="prdImagen" class="form-control">
                <button class="btn btn-info mt-3">publicar</button>
            </form>
        </section>
    </main>
<?php
include '../layouts/footer.php';
