<?php
require_once 'Database.php';
require_once 'Task.php';

$db = new Database();
$taskHandler = new Task($db->getConnection());

// Handle form actions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['new_task'])) {
        $taskHandler->addTask($_POST['new_task']);
    } elseif (isset($_POST['toggle'])) {
        $taskHandler->toggleTask($_POST['toggle']);
    } elseif (isset($_POST['delete'])) {
        $taskHandler->deleteTask($_POST['delete']);
    }
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

// Load tasks
$todos = $taskHandler->getAllTasks();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>📝 To-Do List App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">
<div class="container py-5">
    <h1 class="mb-4 text-center">📝 To-Do List</h1>

    <!-- Add Task Form -->
    <form method="POST" class="d-flex mb-3">
        <input type="text" name="new_task" class="form-control me-2" placeholder="Enter new task..." required>
        <button class="btn btn-success">Add</button>
    </form>

    <!-- Task List -->
    <ul class="list-group">
        <?php foreach ($todos as $todo): ?>
            <li class="list-group-item d-flex justify-content-between align-items-center
                <?= $todo['done'] ? 'list-group-item-success' : '' ?>">
                <form method="POST" class="d-flex flex-grow-1 align-items-center me-2">
                    <input type="hidden" name="toggle" value="<?= $todo['id'] ?>">
                    <button class="btn btn-sm btn-outline-secondary me-2"><?= $todo['done'] ? '✔' : '⏳' ?></button>
                    <span><?= htmlspecialchars($todo['task']) ?></span>
                </form>
                <form method="POST">
                    <input type="hidden" name="delete" value="<?= $todo['id'] ?>">
                    <button class="btn btn-sm btn-outline-danger">✖</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
</body>
</html>
