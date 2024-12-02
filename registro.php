<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      
    $nombre = $_POST['Nombre'];  
    $apellido = $_POST['Apellido'];  
    $email = $_POST['Email'];  
    $usuario = $_POST['Usuario'];  
    $clave = $_POST['clave'];  

    
    $clave_hash = password_hash($clave, PASSWORD_DEFAULT);  

     
    $stmt = $conexion->prepare("INSERT INTO usuarios (nombre, apellido, email, usuario, clave) VALUES (?, ?, ?, ?, ?)");  
    $stmt->bind_param("sssss", $nombre, $apellido, $email, $usuario, $clave_hash);  
 
    if ($stmt->execute()) {  
        echo "Registro exitoso.";  
    
    } else {  
        echo "Error: " . $stmt->error;  
    }  
 
    $stmt->close();  
    $conexion->close();  
}  
?>

<style>
    body {
        background-color: bisque;
        text-align: center;
        width: 600px;
        padding: 10px;
        margin: 100px auto;
    }

    .form {
        margin-bottom: 10px;
        align-items: center;
    }
</style>

<section style="background-color: aliceblue; box-shadow: 0 5px 5px 0">
    <fieldset>
        <h3>Registro</h3>
        <form action="registro.php" method="POST">
            <div class="form">
                <label for="Nombre">Nombre</label>
                <input type="text" name="Nombre">
            </div>
            <div class="form">
                <label for="Apellido">Apellido</label>
                <input type="text" name="Apellido">
            </div>
            <div class="form">
                <label for="Email">Email</label>
                <input type="email" name="Email">
            </div>
            <div class="form">
                <label for="Usuario">Usuario</label>
                <input type="text" name="Usuario">
            </div>
            <div class="form">
                <label for="clave">Password</label>
                <input type="password" name="clave">
            </div>
            <div>
                <button type="submit" class="btn btn-success me-4" name="Enviar">Enviar</button>
                <button type="reset" class="btn btn-danger me-4">Cancelar</button>
            </div>

            <div>
                <a href="index.php">Inicio </a>
            </div>
        </form>
    </fieldset>
</section>