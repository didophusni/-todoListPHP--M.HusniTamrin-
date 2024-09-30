<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $task = [
        'task' => $_POST['task'],
        'priority' => $_POST['priority'],
    ];

    // Update task di session
    $_SESSION['tasks'][$id] = $task;

    header('Location: index.php');
    exit();
}
?>
