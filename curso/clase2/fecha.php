<?php
include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Fecha usando PHP</h1>

        <article class="alert shadow col-6 mx-auto">
<?php
    /* Mostrar la fecha actual
       formato: Viernes 23/08/2024
     */
    $diaSemana = date('w'); // date('l')

    // date('d/m/Y');
?>
        </article>

    </main>
<?php
include '../layouts/footer.php';
