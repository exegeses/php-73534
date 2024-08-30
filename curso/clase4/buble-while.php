<?php
include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Bucle while()</h1>

        <article class="shadow alert my3">
<?php
        $marcas = [
            'Hermés','Aeropostale','Zara',
            'Boss','Tomy','Hollister',
            'Abercrombie','JCrew','Gola',
            'Uniqlo', 'Londonm Hackett'
        ];
        $cantidad = count($marcas);
?>
            <ul class="list-group">
    <?php
        $n = 0;
        while( $n < $cantidad ){
    ?>
                <li class="list-group-item list-group-item-action">
                    <?= $marcas[$n] ?>
                </li>
    <?php
            $n++;
        }
    ?>
            </ul>

        </article>
    </main>
<?php
include '../layouts/footer.php';
