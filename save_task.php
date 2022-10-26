<?php

include('db.php');

if (isset($_POST['save_task'])) {
  $dpi = $_POST['dpi'];
  $nombre = $_POST['nombres'];
  $temperatura = $_POST['temperatura'];
  $query = "INSERT INTO datos_del_usuario(dpi, nombres, temperatura) VALUES ('$dpi', '$nombre', '$temperatura')";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Usuario registrado';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}
?>
