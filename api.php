<?php

  session_name('session_');
  session_start();

  if(!isset($_SESSION['IS_LOGGED'])){
    $_SESSION['IS_LOGGED'] == 0;
  }

  if($_SESSION['IS_LOGGED'] == 0){
    header("Location: login.php?mensaje=se ha desconectado");
  }

$url = "https://rickandmortyapi.com/api/character";


$ch = curl_init();

// Configurar las opciones de cURL
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Ejecutar la petición
$response = curl_exec($ch);

// Cerrar cURL
curl_close($ch);

// Decodificar la respuesta JSON a un array
$data = json_decode($response, true);
$results = $data['results'];

 

//if ($data->num_rows > 0) {
    $itemRecords = array();
  $itemRecords["items"] = array();

  foreach ($data['results'] as $item) {
    $itemDetails = array(
      "id" => $item['id'],
      "name" => $item['name'],
      "species" => $item['species'],
      "image" => $item['image'],
    );
    array_push($itemRecords["items"], $itemDetails);
  }

?>


<style>
    table, td, th, tr {
      border: 1px solid black;
      font-size: xx-large;
      font-weight: 600;
      font-family: 'Courier New', Courier;
    
    }

    a{
        font-size: xx-large;
        margin: 40px;
        
    }
  </style>
    
    <section style="background-color: darksalmon;width: 45%; padding: 10px 70px ;">
    <div style="color:red; width: 60px; margin: 10px"> <a type="button" href="index.php">Inicio</a></div>
     <div style="color:red; width: 60px; margin: 10px"> <a type="button" href="logout.php">Salir</a></div>
  
        <table style="text-align: center;">
            <tr>
                <td>Nombre</td>
                <td>Especie</td>
                <td>Imagen</td>
            </tr>
            <?php foreach ($data['results'] as $row) { ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <td><img src="<?php echo $row['image'];?>" alt="<?php echo $row['name'] ?>"></td>
                </tr>
            <?php }?>
        </table>
    </section>

