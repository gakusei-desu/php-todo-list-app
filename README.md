# 📝 PHP To-Do List App (Bootstrap 5 + MySQL)

This is a responsive, local-first To-Do List app built with PHP, MySQL, and Bootstrap 5. Tasks are stored in a MySQL database using secure, object-oriented PHP (PDO). Designed as a personal project and portfolio piece.

---

## 📦 Features

- Add new tasks
- Toggle completion
- Delete tasks with ✖
- Task list stored in a MySQL database
- Bootstrap 5 UI with custom dark styling
- Localhost ready (WAMP, XAMPP, MAMP compatible)

---

## 🧱 Folder Structure

/To-Do-List/ ├── index.php ├── Database.php ├── Task.php ├── assets/ │ └── style.css └── sql/ └── init.sql


---

## ⚙️ Setup Instructions

1. Clone or download this repository into your localhost root (e.g. `www/To-Do-List`)
2. Import the provided SQL schema (or use `phpMyAdmin`):
```sql
CREATE DATABASE todo_app;

USE todo_app;

CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    task VARCHAR(255) NOT NULL,
    done TINYINT(1) DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

3. Start your local server (WAMP, XAMPP, etc.)

Visit:
http://localhost/To-Do-List/