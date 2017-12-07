<?php

include 'database.php';

$stmt = $db->prepare('UPDATE stories SET name = :name, age = :age, state = :state, story = :story, approved = :approved, email = :email WHERE id = :id');
//$stmt->bindParam
$stmt->execute(array(
  ':id' => $_POST['id'],
  ':name' => $_POST['name'],
  ':age' => $_POST['age'],
  ':state' => $_POST['state'],
  ':story' => $_POST['story'],
  ':approved' => $_POST['approved'],
  ':email' => $_POST['email'],
));

header('Location: http://localhost:8888/edit.php?updated=true&id=' . $_POST['id']);
