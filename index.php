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

$result = mysqli_query($conexion, "SELECT id_usuario, usuario , email FROM usuarios") or die('msqli_error'($conexion));
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Monita</title>
  <meta name="description" content=" Monita #">
  <meta name="keywords" content="#">
  <meta name="author" content="Estrella Bruta">
  <link rel="icon" href="#" type="logo empresa">
  <link href="#" type="text/css" rel="stylesheet" />

  <style>
    table, td, th, tr {
      border: 1px solid black;
    }

    body {
      background-color: bisque;
    }
  </style>
</head>

<body>
  

  <h3></h3>

  <div style="color:red; width: 60px; margin: 10px">
    <a type="button" href="logout.php">Salir</a>
  </div>

  <div style="border: 3px dotted black;width: 50%; margin: 40px auto; text-align: center">
    <table style="width: 100%;">
      <tr>
        <th>ID</th>
        <th>Usuario</th>
        <th>Email</th>
      </tr>

      <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
          <td><?php echo $row['id_usuario']; ?></td>
          <td><?php echo $row['usuario']; ?></td>
          <td><?php echo $row['email'];?></td>
          <td><a href="modificar.php?id_usuario=<?php echo $row["id_usuario"] ?>">Modificar</a></td>
          <td><a href="borrado.php?id_usuario=<?php echo $row["id_usuario"] ?>">Borrar</a></td>
        </tr>
      <?php }?>
    </table>

    <a href="registro.php" type="button">Registrar</a>
    <div></div>
    <a href="api.php" type="button">RickandMortyapi</a>
  </div>

  <?php
  mysqli_free_result($result);
  mysqli_close($conexion);
  ?>


</body>

</html>