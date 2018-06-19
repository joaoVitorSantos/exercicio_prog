<?php

    require_once "../app/models/CategoriaCrud.php";

    $crud = new CategoriaCrud();
    $categorias = $crud->getCategorias();

    echo "<ul>";
    foreach ($categorias as $categoria) {
        echo "<li>" . utf8_encode($categoria->getNome()) . "</li>";

    }
    echo "</ul>";


