<?php

    require ('Models/Conexion.php');

    $conn = new Conexion();

    $productos = $conn->getProductos();

    require('Views/V_mproducto.php');



?>