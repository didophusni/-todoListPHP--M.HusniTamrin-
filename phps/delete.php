<?php
session_start();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    unset($_SESSION['tasks'][$id]);
    // Reindex array untuk menghindari celah index yang kosong
    $_SESSION['tasks'] = array_values($_SESSION['tasks']);
}

header('Location: index.php');
exit();
?>
