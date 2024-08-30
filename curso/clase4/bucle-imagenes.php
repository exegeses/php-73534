<?php
include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>listado de imágenes</h1>

        <section class="shadow alert my3 row">

    <?php
        //inicio de bucle
        $n = 1;
        while( $n < 9 ){
    ?>
            <article class="col">
                <img src="imgs/b<?= $n ?>.png">
                <h2>bike name</h2>
                <spam>precio</spam>
            </article>
    <?php
            $n++;
        }
        //fin de bucle
    ?>        
        </section>
    </main>
<?php
include '../layouts/footer.php';
