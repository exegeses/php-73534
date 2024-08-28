<?php
include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Arrays en php</h1>

        <article class="shadow alert my3">
<?php
    $marcas = [
               'Hermés','Aeropostale','Zara',
               'Boss','Tomy','Hollister',
               'Abercrombie','JCrew','Gola',
               'Uniqlo', 'Londonm Hackett'
               ];
    echo $marcas[3];
?>
        </article>

        <pre class="shadow alert my3">
<?php
        print_r($marcas);
?>
        </pre>
    <hr>
        <article class="shadow alert my3">
<?php
$pilotos = [
                1 => 'Max Verstappen',
                11 => 'Segio Pérez',
                4 => 'Lando Norris',
                81 => 'Oscar Piastri',
                63 => 'George Russell',
                44 => 'Lewis Hammilton',
                16 => 'Charles Leclerc',
                55 => 'Carlos Sainz',
                43 => 'Franco Colapinto'
            ];
?>
        </article>
        <pre class="shadow alert my3">
<?php
        print_r($pilotos);
?>
        </pre>
        <hr>
        <article class="shadow alert my3">
            <h2>Array asociativo</h2>
<?php
        $capitales = [
                        'Argentina' => 'Buenos Aires',
                        'Brasil' => 'Brasilia',
                        'Peru' => 'Lima',
                        'Paraguay' => 'Asunción',
                        'Chile' => 'Santiago',
                        'Venezuela' => 'Caracas',
                        'Uruguay' => 'Montevideo'
                     ];
        echo $capitales['Paraguay'];
?>
        </article>
        <pre class="shadow alert my3">
<?php
            print_r($capitales);
?>
        </pre>


    </main>
<?php
include '../layouts/footer.php';
