<?php

  include 'database.php';

  $stmt = $db->prepare('DELETE from stories WHERE id = :id');
  $stmt->execute(array(
    ':id' => $_GET['id']
  ));

  header('Location: http://localhost:8888/index.php?deleted=true');

?>
