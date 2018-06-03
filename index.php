<?php

include('classes/database.php');
include('classes/model.php');

include('includes/header.php');

?>

<div class="container">
  <div class="jumbotron">
    <h2 class="text-center">CRUD Using OOP PHP</h2>
  </div>
  
<?php

$rows = $model->view();

?>

  <div class="card">
    <div class="card-header">
      <h1>List of Items</h1>
    </div>
    <div class="card-body">
      <?php foreach ($rows as $row) { ?>
        <?php $delete_id =  $row['id']; ?>
      <div class="row">
        <div class="col-md-4"><?php echo $row['name']; ?></div>
        <div class="col-md-4"><?php echo $row['link']; ?></div>
        <div class="col-md-4">
          <a class="btn btn-warning mb-2" href="edit.php?id=<?php echo $row['id'] ?>&name=<?php echo $row['name'] ?>&link=<?php echo $row['link'] ?>">Edit</a>
          <a class="btn btn-danger mb-2" href="delete.php?id=<?php echo $row['id'] ?>&name=<?php echo $row['name'] ?>&link=<?php echo $row['link'] ?>">Delete</a>
        </div>
      </div>
      <?php } ?>
    </div>
    <div class="card-footer">
      <a href="add.php">Add New Item</a>
    </div>
  </div>

</div>

<?php

include('includes/footer.php');

?>
