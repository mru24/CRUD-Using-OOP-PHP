<?php

include('classes/database.php');
include('classes/model.php');

include('includes/header.php');

$delete_id = $_GET['id'];
$name = $_GET['name'];
$link = $_GET['link'];

$model->delete($delete_id);
?>

<div class="container mt-5">
  <div class="card">
    <div class="card-header bg-warning">
      <h2>Warning!</h2>
    </div>
    <div class="card-body">
      <p class="lead">You are about to delete:</p>
      <div class="row">
        <div class="col-6">
          <h5><?php echo $name; ?></h5>
        </div>
        <div class="col-6">
          <h6><?php echo $link; ?></h6>
        </div>
      </div>
    </div>
    <div class="card-footer bg-warning">
      <div class="row">
        <div class="col-6">
          <a href="index.php"><< Back to Main Page</a>
        </div>
        <div class="col-6">
          <form class="" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <input class="btn btn-danger d-block ml-auto" type="submit" name="submit" value="Delete">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php

include('includes/footer.php');

?>
