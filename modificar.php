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

    if((isset($_POST["Modificar"]))){
        extract($_POST);

        $sql = "UPDATE usuarios SET nombre='$Nombre', apellido='$Apellido', email='$Email', usuario='$Usuario' WHERE id_usuario='$id_usuario'";
        $result = mysqli_query($conexion, $sql);
        
        header("Location: index.php");
    }

?>
<?php 
    $id_usuario = $_REQUEST['id_usuario'];
    $sql = "SELECT * FROM usuarios WHERE id_usuario = '$id_usuario'";
    $result = mysqli_query($conexion, $sql);
    $row = mysqli_fetch_array($result);
?>
<section>
    <fieldset>

        <form action="modificar.php" method="POST">
            <input type="text" name="id_usuario" value="<?php echo "$id_usuario" ?>" hidden>
            <div class="form">
                <label for="Nombre">Nombre</label>
                <input type="text" name="Nombre" value="<?php echo $row['nombre'] ?>">
            </div>
            <div class="form">
                <label for="Apellido">Apellido</label>
                <input type="text" name="Apellido" value="<?php echo $row['apellido'] ?>">
            </div>
            <div class="form">
                <label for="Email">Email</label>
                <input type="email" name="Email" value="<?php echo $row['email'] ?>">
            </div>
            <div class="form">
                <label for="Usuario">Usuario</label>
                <input type="text" name="Usuario" value="<?php echo $row['usuario'] ?>">
            </div>
            <div>
                <button type="submit" class="btn btn-success me-4" name="Modificar">Modificar</button>
                <button type="reset" class="btn btn-danger me-4">Restablecer</button>
            </div>

            <div>
                <a href="index.php">Volver Inicio </a>
            </div>
        </form>
    </fieldset>
</section>