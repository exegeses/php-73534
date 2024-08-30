<?php
    include '../layouts/header.php';
$fotos =
    [
        'angkor', 'azul', 'basil', 'burj',
        'colosseo', 'easter', 'eiffel',
        'gizah', 'ha-long', 'liberty',
        'machu', 'opera', 'palace', 'petra',
        'sagrada', 'santorini', 'taj',
        'wall'
    ];
$paises =
    [
        'Cambodia', 'Turquía', 'Rusia',
        'Dubai', 'Italia', 'Chile',
        'Francia', 'Egipto', 'Vietnam',
        'USA', 'Peru', 'Australia',
        'Tailandia', 'Jordania', 'España',
        'Grecia', 'India', 'China'
    ];
$descripciones =
    [
        'Angkor Wat, Angkor',
        'Mezquita azul, Estambul',
        'Catedral de San Basilio, Moscu',
        'Burj Khalifa, Dubai',
        'El Coliseo, Roma', 'Isla de Pascua, Chile',
        'Tour Eiffel, París',
        'Gran Pirámide de Guiza, Guiza',
        'Hạ Long Bay, Quang Ninh, Vietnam',
        'Estatua de la Libertad, New York',
        'Machu Picchu, Perú',
        'Opera House, Sydney', 'Grand Palace, Bangkok', 'petra',
        'La Sagrada Familia, Barcelona',
        'Santorini, Archipiélago de las Cícladas',
        'Taj Mahal, Agra',
        'La Gran Muralla, Jinshanling'
    ];
    $cantidad = count($fotos)
?>
    <main class="container py-3">
        <h1>bucle for()</h1>

        <article class="shadow alert my3">

            <ul class="list-group">
    <?php
        //inicio de bucle
        for( $n = 0; $n < $cantidad; $n++ ){
    ?>                
                <li class="list-group-item list-group-item-action">
                    <img src="localciones/<?= $fotos[$n] ?>.jpg" class="img-thumbnail">
                    <h2><?= $paises[$n] ?></h2>
                    <p>
                        <?= $descripciones[$n] ?>
                    </p>
                </li>
    <?php
        }
    //fin de bucle
    ?>

            </ul>

        </article>
    </main>
<?php
include '../layouts/footer.php';
