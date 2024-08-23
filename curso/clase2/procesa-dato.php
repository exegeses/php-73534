<?php
    include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>captura de dato</h1>

        <article class="alert shadow col-6 mx-auto">
<?php
    /*
     * función isset()
     Si el dato existe y no es nulo
     recién ahí lo capturamos
     */
    if ( isset( $_GET['dato'] ) ) {
        $dato = $_GET['dato'];
    }
    else{
        $dato =  'debe enviar el formulario';
    }
    echo $dato;
?>
        </article>
<hr>

        <article class="alert shadow col-6 mx-auto">
<?php
        //null coalescing
        $dato = $_GET['dato'] ?? 'debe enviar el formulario';
        echo $dato;
?>
        </article>



    </main>
<?php
    include '../layouts/footer.php';
