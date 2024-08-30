<?php
    include '../layouts/header.php';

    //declaración
    function cambiarANegrita( string $texto )
    {
        // no es correcto insertar un echo dentro de una función
        echo '<b>', $texto ,'</b><br>';
    }
?>
    <main class="container py-3">
        <h1>funciones en personalizadas php</h1>

        <article class="shadow alert my3">
    <?php
        //llamado a una función (invocar)
        cambiarANegrita('PHP y MySQL');
        cambiarANegrita('Laravel MVC');
        cambiarANegrita(216);
    ?>
        </article>
    </main>
<?php
include '../layouts/footer.php';
