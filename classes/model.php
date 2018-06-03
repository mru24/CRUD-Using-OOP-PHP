<?php

class Model extends Database {

  public function view() {
    $this->query('SELECT * FROM mynav');
    $rows = $this->resultSet();
    return $rows;
  }

  public function add() {
    if(isset($_POST['submit'])) {
      $name = $_POST['name'];
      $link = $_POST['link'];

      $this->query('INSERT INTO mynav(name, link) VALUES(:name, :link)');
      $this->bind(':name', $name);
      $this->bind(':link', $link);
      $this->execute();
      header('Location: index.php');

    }
  }

  public function delete($id) {
    if(isset($_POST['submit'])) {
      $this->query('DELETE FROM mynav WHERE id = :id');
      $this->bind(':id', $id);
      $this->execute();
      header('Location: index.php');
    }
  }

  public function edit($id) {
    if(isset($_POST['submit'])) {
      $name = $_POST['name'];
      $link = $_POST['link'];
      $this->query('UPDATE mynav SET name=:name, link=:link WHERE id=:id');
      $this->bind(':name', $name);
      $this->bind(':link', $link);
      $this->bind(':id', $id);
      $this->execute();
      header('Location: index.php');
    }
  }
}

$model = new Model;
