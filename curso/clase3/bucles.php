<?php
include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Bucles en PHP</h1>

        <article class="shadow alert my3">

        <select>
<?php
    $n = 1;
    while ( $n < 15 ){
        //Bloque de código a ejecutar si la condición es verdadera
        echo '<option value="">',$n,'</option>', "\n" ;
        $n++;
    }
?>
        </select>
        </article>
    </main>
<?php
include '../layouts/footer.php';
