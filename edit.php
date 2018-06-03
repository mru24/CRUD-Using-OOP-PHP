<?php
include('classes/database.php');
include('classes/model.php');

include('includes/header.php');

$edit_id = $_GET['id'];
$name = $_GET['name'];
$link = $_GET['link'];

$model->edit($edit_id);

?>

<div class="container mt-5">
  <div class="card">
    <div class="card-header">
      <h2>Edit Item</h2>
    </div>
    <div class="card-body">
      <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
          <label>Name</label>
          <input type="text" name="name" class="form-control" value="<?php echo $name ?>">
        </div>
        <div class="form-group">
          <label>Link</label>
          <input type="text" name="link" class="form-control" value="<?php echo $link ?>">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <div class="card-footer">
      <a href="index.php"><< Back to Main Page</a>
    </div>
  </div>
</div>

<?php

include('includes/footer.php');

?>
