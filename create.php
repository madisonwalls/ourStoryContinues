<?php

  include 'database.php';

  $stmt = $db->prepare("INSERT INTO stories
    (name, story, age, state, email, approved)
    VALUES
    (:name, :story, :age, :state, :email, :approved)
  ");

  $stmt->execute(array(
    ':name' => $_POST['name'],
    ':story' => $_POST['story'],
    ':age' => $_POST['age'],
    ':state' => $_POST['state'],
    ':email' => $_POST['email'],
    ':approved' => $_POST['approved'],
  ));

  $id = $db->lastInsertId();



  header('Location: http://www.ourstorycontinues.com/index.php?created=true#successful');
?>
