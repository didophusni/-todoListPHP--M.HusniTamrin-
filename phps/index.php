<?php
session_start();

// Inisialisasi session jika belum ada
if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}

// Handle penambahan task baru
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $task = [
        'task' => $_POST['task'],
        'priority' => $_POST['priority'],
    ];
    $_SESSION['tasks'][] = $task;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
</head>
<body>
    <h1>Task Management</h1>
    
    <!-- Form untuk menambahkan task baru -->
    <form action="" method="POST">
        <input type="text" name="task" placeholder="Masukkan task baru" required>
        <select name="priority">
            <option value="Low">Low</option>
            <option value="Medium">Medium</option>
            <option value="High">High</option>
        </select>
        <button type="submit">Tambahkan Task</button>
    </form>
    
    <h2>Daftar Tasks</h2>
    <ul>
        <?php foreach ($_SESSION['tasks'] as $key => $task): ?>
            <li>
                <?php echo $task['task'] . " - Priority: " . $task['priority']; ?>
                <a href="edit.php?id=<?php echo $key; ?>">Edit</a> | 
                <a href="delete.php?id=<?php echo $key; ?>">Hapus</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
