<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- ADD TASK FORM -->
      <div class="card card-body">
        <form action="save_task.php" method="POST">
          <div class="form-group">
            <input type="number" autofocus name="dpi" class="form-control" placeholder="DPI"  required>
          </div>
          <div class="form-group">
            <input  type="text" name="nombres" rows="2" class="form-control" placeholder="Nombres" required>
          </div>
          <div class="form-group">
            <input type="number" name="temperatura" rows="3" class="form-control" placeholder="temperatura" required>
          </div>
          <input type="submit" name="save_task" class="btn btn-success btn-block" value="ok">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table thead-dark">
        <thead>
          <tr>
            <th>DPI</th>
            <th>Nombres</th>
            <th>temperatura</th>
            <th>Fecha de Creacion</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM datos_del_usuario";
          $result_tasks = mysqli_query($conexion, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['dpi']; ?></td>
            <td><?php echo $row['nombres']; ?></td>
            <td><?php echo $row['temperatura']; ?></td>
            <td><?php echo $row['created_at']; ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>
