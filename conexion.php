<?php
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $basededatos = "3f_diazrominam";

    $conexion = mysqli_connect($servidor, $usuario, $password, $basededatos) or die ("No se pudo conectar al servidor");

    $db = mysqli_select_db($conexion, $basededatos) or die ("No se ha podido conectar a la base de datos")

?>