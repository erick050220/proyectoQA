<?php

include('db.php');

if (isset($_POST['save_task'])) {
  $dpi = $_POST['title'];
  $nombre = $_POST['description'];
  $query = "INSERT INTO task(title, descriptio) VALUES ('$dpi', '$nombre')";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}
echo "hola";
?>
