<?php

    function listarCategorias() : mysqli_result
    {
        $link = conectar();
        $sql = "SELECT * FROM categorias";
        return mysqli_query($link, $sql);
    }