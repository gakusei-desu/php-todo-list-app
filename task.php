<?php
class Task {
    private $pdo;

    public function __construct($dbConnection) {
        $this->pdo = $dbConnection;
    }

    public function getAllTasks() {
        $stmt = $this->pdo->query("SELECT * FROM tasks ORDER BY created_at DESC");
        return $stmt->fetchAll();
    }

    public function addTask($task) {
        $stmt = $this->pdo->prepare("INSERT INTO tasks (task) VALUES (:task)");
        $stmt->execute(['task' => $task]);
    }

    public function toggleTask($id) {
        $stmt = $this->pdo->prepare("UPDATE tasks SET done = NOT done WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }

    public function deleteTask($id) {
        $stmt = $this->pdo->prepare("DELETE FROM tasks WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }
}
?>
