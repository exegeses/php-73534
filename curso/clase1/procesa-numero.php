<?php
    include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Condicional</h1>

        <p>
            <?php
                $numero = $_POST['numero'];
                if( $numero < 100 ) {
                    // Bloque de código a ejecutar si la condición es verdadera
            ?>
                    <img src="imgs/ok.png">
            <?php
                }
                else{
            ?>
                    <img src="imgs/error.png">
            <?php
                }
            ?>
        </p>

        <article>
<?php
            if( $numero < 100 ){
                echo '<img src="imgs/ok.png">';
            }
            else{
                echo '<img src="imgs/error.png">';
            }
?>
        </article>

        <article>
<?php
            $im = 'error';
            if( $numero < 100 ){
                $im = 'ok';
            }
?>
            <img src="imgs/<?= $im ?>.png">
        </article>

        <article>
<?php
        $im = ( $numero < 100 ) ? 'ok' : 'error';
?>
            <img src="imgs/<?= $im ?>.png">
        </article>
    </main>
<?php
    include '../layouts/footer.php';
