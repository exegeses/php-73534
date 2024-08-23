<?php
include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Concatenación </h1>

        <article class="alert shadow">
<?php
    $min = 15000;
    $max = 25000;
    // impresión
    echo 'Los valores están entre: ', $min, ' y ', $max;
    //echo 'Los valores están entre: '. $min. ' y '. $max;
?>
        </article>

        <article class="alert shadow">
<?php
    // concatenación
    $sql = 'SELECT nombre, precio 
                FROM productos 
              WHERE precio BETWEEN '.$min.' AND '.$max;
    echo $sql;
?>
        </article>

    </main>
<?php
include '../layouts/footer.php';
