<?php

        function sumar( float $n1, float $n2 ) : float
        {
            $resultado = $n1 + $n2;
            return $resultado;
        }
        /* función con varios parámetros */
        function sumarX( ...$numeros ) : float
        {
            $resultado = 0;
            foreach ( $numeros as $n ) {
                $resultado = $resultado + $n;
            }
            return $resultado;
        }
        /* dividir dos números */
        function dividir( float $dividendo, float $divisor ) : float | string
        {
            try{
                return $dividendo/$divisor;
            }
            catch ( Error $e ){
                /* log de errores */
                echo 'fecha: ', date('d/m/Y H:i:s'), '<br>';
                echo 'mensaje: ', $e->getMessage(), '<br>';
                echo 'archivo: ', $e->getFile(), '<br>';
                echo 'nro: ', $e->getLine(), '<br>';
                return 'El divisor no puede ser 0';
            }

        }

