<?php 
    session_name('session_');
    session_start();

    if(!isset($_SESSION['IS_LOGGED'])){
    $_SESSION['IS_LOGGED'] == 0;
    }

    if($_SESSION['IS_LOGGED'] == 0){
    header("Location: login.php?mensaje=se ha desconectado");
    }
    include("conexion.php");

    
        $id_borrar = $_REQUEST["id_usuario"];

        $sql = "DELETE FROM usuarios WHERE id_usuario='$id_borrar'";
        $result = mysqli_query($conexion, $sql);
    header("Location: index.php");    
    
?>