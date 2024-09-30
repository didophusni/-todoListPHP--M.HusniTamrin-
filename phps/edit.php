<?php
session_start();

$id = $_GET['id'];
$task = $_SESSION['tasks'][$id];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
</head>
<body>
    <h1>Edit Task</h1>

    <!-- Form untuk mengedit task -->
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="text" name="task" value="<?php echo $task['task']; ?>" required>
        <select name="priority">
            <option value="Low" <?php if ($task['priority'] == 'Low') echo 'selected'; ?>>Low</option>
            <option value="Medium" <?php if ($task['priority'] == 'Medium') echo 'selected'; ?>>Medium</option>
            <option value="High" <?php if ($task['priority'] == 'High') echo 'selected'; ?>>High</option>
        </select>
        <button type="submit">Update Task</button>
    </form>
</body>
</html>
