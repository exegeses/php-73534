<?php
    require 'config/config.php';
    require 'funciones/autenticacion.php';
        autenticar();
    include 'layouts/header.php';
    include 'layouts/nav.php';
?>

    <main class="container py-4">
        <h1>Catálogo de productos</h1>

        <article class="alert alert-warning shadow col-8 mx-auto">
            <i class="bi bi-info-circle fs-4 me-2"></i>
            Debe ser administrador para acceder a esa sección.
        </article>
    </main>

<?php
    include 'layouts/footer.php';
?>