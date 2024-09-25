<?php
    require 'config/config.php';
    require 'funciones/autenticacion.php';
        logout();
    include 'layouts/header.php';
    include 'layouts/nav.php';
?>

    <main class="container py-4">
        <h1>Catálogo de productos</h1>

        <article class="alert shadow col-8 mx-auto">
            Gracias por su visita.
        </article>
    </main>

<?php
    include 'layouts/footer.php';
?>