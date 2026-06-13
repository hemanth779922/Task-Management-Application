# Task Management Application

A simple Task Management Web Application developed using HTML, CSS, PHP, and MySQL. This application allows users to register, log in, and manage their daily tasks efficiently.

## Features

- User Registration
- User Login and Logout
- Add New Tasks
- View Tasks
- Edit Existing Tasks
- Delete Tasks
- Mark Tasks as Completed
- Session Management
- MySQL Database Integration
- Responsive User Interface

## Technologies Used

- HTML5
- CSS3
- PHP
- MySQL
- XAMPP
- Git & GitHub

## Project Structure

```text
task-management/
│
├── css/
│   └── style.css
│
├── db.php
├── register.php
├── login.php
├── logout.php
├── dashboard.php
├── add_task.php
├── edit_task.php
├── delete_task.php
└── README.md
```

## Database Setup

### Step 1: Create Database

Create a database named:

```sql
task_management
```

### Step 2: Create Users Table

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL
);
```

### Step 3: Create Tasks Table

```sql
CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    title VARCHAR(255),
    description TEXT,
    status ENUM('Pending','Completed') DEFAULT 'Pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY(user_id) REFERENCES users(id)
);
```

## Installation Steps

### Clone Repository

```bash
git clone https://github.com/yourusername/task-management.git
```

### Move Project

Copy the project folder into:

```text
C:\xampp\htdocs\
```

### Start XAMPP

Start:
- Apache
- MySQL

### Open Browser

```text
http://localhost/task-management/register.php
```

## Usage

1. Register a new account.
2. Login with your credentials.
3. Add tasks with title and description.
4. Edit or update task details.
5. Mark tasks as completed.
6. Delete tasks when no longer needed.
7. Logout securely.

## Screenshots

Add screenshots of:
- Registration Page
- Login Page
- Dashboard
- Add Task
- Edit Task

## Future Enhancements

- Task Priority
- Due Date Feature
- Search Tasks
- Task Categories
- Email Notifications
- Dark Mode
- Bootstrap Dashboard UI

## Learning Outcomes

This project helped in understanding:
- CRUD Operations
- PHP Session Handling
- MySQL Database Connectivity
- User Authentication
- Frontend and Backend Integration
- GitHub Version Control

## Author

**Hemanth Kondapalli**  
B.Tech Student

## License

This project is developed for educational and internship learning purposes.
