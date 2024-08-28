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

    switch ($diaSemana) {
        case 0:
            echo "Domingo";
            break;
        case 1:
            echo "Lunes";
            break;
        case 2:
            echo "Martes";
            break;
        case 3:
            echo "Miércoles";
                break;
        case 4:
            echo "Jueves";
            break;
        case 5:
            echo "Viernes";
            break;
        case 6:
            echo "Sabado";
            break;
   }
    echo date (" d/m/Y")
    ?>
?>
        </article>

    </main>
<?php
include '../layouts/footer.php';
