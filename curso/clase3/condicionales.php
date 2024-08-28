<?php
include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>condicionales</h1>

        <div class="shadow alert my-3">

<?php
    $capital = 'Lima';
    if( $capital == 'Lima' ){
        $pais = 'Peru';
    }
    else if( $capital == 'Roma' ){
        $pais = 'Italia';
    }
    else if( $capital == 'Madrid' ){
        $pais = 'España';
    }
    else if( $capital == 'París' ){
        $pais = 'Francia';
    }
    else{
        $pais = 'Otro país';
    }

    echo 'País: ', $pais;
?>
        </div>


        <div class="shadow alert my-3">
<?php
    $capital = 'Requivik';
    switch ( $capital ){
        case 'Lima':
            $pais = 'Peru';
            break;
        case 'Roma':
            $pais = 'Italia';
            break;
        case 'Madrid':
            $pais = 'España';
            break;
        case 'París':
            $pais = 'Francia';
            break;
       default:
            $pais = 'Otro país';
            break;
    }
    echo 'País: ', $pais;
?>
        </div>
        <hr>
        <div class="shadow alert my-3">
<?php
        $diaSemana = date('w');
        $semana = [
                    'Domingo', 'Lunes', 'Martes',
                    'Miércoles', 'Jueves', 'Viernes',
                    'Sábado'
                  ];
        echo $semana[$diaSemana];
?>
        </div>
        <hr>
        <div class="shadow alert my-3">
            <h2>Expresión match()</h2>
<?php
        $nombreDiaSemana = match( $diaSemana )
        {
            '0' => 'Domingo',
            '1' => 'Lunes',
            '2' => 'Martes',
            '3' => 'Miércoles',
            '4' => 'Jueves',
            '5' => 'Viernes',
            default => 'Sábado'
        };
        echo $nombreDiaSemana;
?>
        </div>

    </main>
<?php
include '../layouts/footer.php';
