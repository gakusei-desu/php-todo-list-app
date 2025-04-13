# 📝 PHP To-Do List App (Bootstrap 5 + MySQL)

![PHP](https://img.shields.io/badge/Built%20With-PHP-blue?logo=php)
![Bootstrap](https://img.shields.io/badge/Frontend-Bootstrap%205-purple?logo=bootstrap)
![MySQL](https://img.shields.io/badge/Database-MySQL-orange?logo=mysql)
![VS Code](https://img.shields.io/badge/Editor-VS%20Code-blue?logo=visualstudiocode)
![License](https://img.shields.io/github/license/gakusei-desu/php-todo-list-app)
![Last Commit](https://img.shields.io/github/last-commit/gakusei-desu/php-todo-list-app)
![GitHub Repo stars](https://img.shields.io/github/stars/gakusei-desu/php-todo-list-app?style=social)


I built a responsive, local-first to-do list app using PHP, MySQL, and Bootstrap 5 as the core stack. Task data is stored using object-oriented PHP with PDO for secure, structured database interaction. I built this as a hands-on refresher to sharpen my backend fundamentals and experiment with lightweight app architecture — no frameworks, just clean logic, modular files, and a simple UI that gets the job done. As my stack evolves, I’ll expand this into a complete task or project manager.

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
```bash
/To-Do-List/
├── index.php
├── database.php
├── task.php
├── images/
│   └── style.css
└── sql/
    └── init.sql
```

---

## ⚙️ Setup Instructions

1. Clone or download this repository into your localhost root (e.g. `www/To-Do-List`)
2. Import the provided SQL schema using phpMyAdmin or CLI:

```sql
CREATE DATABASE todo_app;

USE todo_app;

CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    task VARCHAR(255) NOT NULL,
    done TINYINT(1) DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```
Start your local server (WAMP, XAMPP, MAMP, etc.)

Open your browser and visit:
http://localhost/To-Do-List/

## 📸 Preview
![To-Do List App Preview](images/To-Do-List.jpg)

## 💡 Future Plans
- Add search/filter functionality
- Sort by oldest/newest
- Add task categories or tags
- Display created_at timestamps
- Convert into Electron desktop app
- Add user login for multi-user support

## 🧠 Stack
- PHP (OOP + PDO)
- MySQL (MariaDB)
- Bootstrap 5
- Custom CSS (dark mode)
- Developed locally with WAMPServer

---

## 📝 Blog Post

Want the full breakdown?  
Read the behind-the-scenes write-up on my dev blog:  
🔗 [Simple PHP Task App – Project Overview]([https://atypicaltinkerer.dev/simple-php-task-app](https://atypicaltinkerer.dev/simple-php-task-app/))

---

## 📃 License
MIT — Free to use, fork, and modify for personal or professional projects.
