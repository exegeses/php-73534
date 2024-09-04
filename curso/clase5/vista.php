<?php
    require 'funciones.php';
    include '../layouts/header.php';
?>

    <main class="container py-3">
        <h1>Tema de la página</h1>

        <article class="shadow alert my3">
            <?= $res = sumar(3.5, 4) ?>
            <br>
            <?= sumar($res, 5) ?>
        </article>
        <hr>
        <article class="shadow alert my3">
            <?= sumarX( 3, 4, 5, 6 ) ?>
        </article>
        <hr>
        <article class="shadow alert my3">
            <?= dividir( 60, 0 ) ?>
        </article>


    </main>
<?php
include '../layouts/footer.php';