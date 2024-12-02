<?php
if((isset($_POST['Ingresar']))){
    include("conexion.php");

$email = $_POST['email'];
$clave = $_POST['clave'];

$sql = "SELECT email, clave FROM usuarios WHERE email = '$email' AND clave = '$clave'";
$result = mysqli_query($conexion, $sql);
$resultLogin = mysqli_fetch_array($result);

if($resultLogin){   
    session_name("session_");
    session_start();
    $_SESSION['Email'] = $resultLogin['email'];
    $_SESSION['Usuario'] = $resultLogin['usuario'];
    $_SESSION['Nombre'] = $resultLogin['nombre'];
    $_SESSION['Apellido'] = $resultLogin['apellido'];
    $_SESSION['IS_LOGGED'] = 1;

    
    echo 'Se conecto';

    header("location: api.php");
    exit();
} else {
    header("location: login.php?mensaje=Error al iniciar sesion");
    echo 'NO conecto';
}
}
?>


<style>
    body {
        background-color: bisque;
        text-align: center;
        width: 600px;
        margin: 100px auto;
    }

    .form {
        margin-bottom: 10px;
    }
</style>
<section style="background-color:aliceblue">
    <fieldset>
        <form method="POST" action="login.php" name="Login">
            <h4> BIENVENIDOS</h4>
            <h4>Iniciar Sesion</h4>

            <div class="form">
                <label for="inputEmail" class="form-label"> Email </label>
                <input class="form-control" type="email" name="email" id="inputEmail" placeholder="Correo Electrónico" required aria-label="Correo Electrónico">
            </div>

            <div class="form">
                <label for="inputPassword" class="form-label"> Contraseña
                </label>
                <input class="form" type="password" name="clave" id="inputPassword" placeholder="Ingresar Contraseña" required minlength="4" aria-label="Contraseña">
            </div>

            <div>
                <div>
                    <button type="submit" class="btn btn-success me-4" name="Ingresar">Ingresar</button>
                    <button type="reset" class="btn btn-danger me-4">Cancelar</button>
                </div>
                <div>
                    <p>¿Aún no te registraste? <a href="registro.php">Regístrate aquí</a></p>
                </div>
            </div>
        </form>
    </fieldset>
</section>
