<?php

include("db.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM datos_del_usuario WHERE id = $id";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'usuario removido';
  $_SESSION['message_type'] = 'danger';
  header('Location: index.php');
}

?>
