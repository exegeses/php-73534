<?php
    /* para declarar una variable en PHP
        usamos el símbolo de $
        seguido de una palabra o cadena
        que no debe empezar con un número
    */
    $curso = 'Desarrollo web con PHP y MySQL';
    $numero = 42;
    /*
    Para declarar una constante en PHP
    utilizamos la palabra reservada const
    Siempre debemos utilizar mayúsculas para los nombres de las constantes
    */
    const NOMBRE = 'Marcos';
    const APELLIDO = 'Pinardi';

    echo 'El curso es: ', $curso;
?>
<br>
<?php
    echo 'El nombre es: ', NOMBRE, ' ', APELLIDO;
?>
<hr>
<?php
    $curso = 73;
    // NOMBRE = 'Rick';
    // No se puede sobre escribir una constante
