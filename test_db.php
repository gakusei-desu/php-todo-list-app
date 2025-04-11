<?php
    require_once 'Database.php';

    $db = new Database();
    $conn = $db->getConnection();

    if ($conn) {
        echo "<h2 style='font-family: monospace; color: lime;'>✅ Connected to todo_app successfully!</h2>";
    } else {
        echo "<h2 style='color: red;'>❌ Failed to connect to database.</h2>";
    }
?>
