<?php

  include 'header.php';
  $id = $_GET['id'];

  $stmt = $db->prepare('SELECT * from stories WHERE id = :id LIMIT 1');
  $stmt->bindParam(':id', $id);
  $stmt->execute();

  $storie = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<?php if (array_key_exists('updated', $_GET)) : ?>
<div class="alert alert-success">
  <p><strong>Update successful!</strong>. Your story was updated.</p>
</div>
<?php endif; ?>

<h1>Edit Story</h1>

<form method="POST" action="/update.php">
  <input type="hidden" name="id" id="task_id" value="<?= $storie['id']; ?>" />

  <div class="form-group">
    <label for="task_title">Title</label>
    <input class="form-control" type="text" name="title" id="task_title" value="<?= $storie['name']; ?>" />
  </div>

  <div class="form-group">
    <label for="task_description">Description</label>
    <textarea class="form-control" name="description" id="task_description"><?= $storie['story']; ?></textarea>
  </div>

  <div class="form-group">
    <label for="task_priority">Priority</label>
    <select name="priority" id="task_priority" value="<?= $storie['age']; ?>" class="form-control">
      <option value="1"<?= ($storie['age'] == "") ? ' selected' : '' ?>>1</option>
      <option value="2"<?= ($storie['age'] == 2) ? ' selected' : '' ?>>2</option>
    </select>
  </div>


  <button class="btn btn-primary">Save Task</button>
</form>

<?php include 'footer.php'; ?>
