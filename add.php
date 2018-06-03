<?php
include('classes/database.php');
include('classes/model.php');

include('includes/header.php');

$model->add();
?>

<div class="container mt-5">
  <div class="card">
    <div class="card-header">
      <h2>Add New Item</h2>
    </div>
    <div class="card-body">
      <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
          <label>Name</label>
          <input type="text" name="name" class="form-control"  placeholder="Name">
        </div>
        <div class="form-group">
          <label>Link</label>
          <input type="text" name="link" class="form-control" placeholder="Link">
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
