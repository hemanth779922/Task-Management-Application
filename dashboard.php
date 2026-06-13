<?php

session_start();

if (!isset($_SESSION['user'])) {
    header("Location: auth/login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="navbar">
        <a href="dashboard.php">Dashboard</a>
        <a href="index.php">View Posts</a>
        <a href="auth/logout.php">Logout</a>
    </div>

    <div class="container">

        <div class="card">

            <h2>
                Welcome,
                <?php echo $_SESSION['user']; ?>
            </h2>

            <p>
                You have successfully logged in to the Blog Management System.
            </p>

            <br>

            <a href="posts/create.php">
                <button>Create New Post</button>
            </a>

            <br><br>

            <a href="index.php">
                <button>View All Posts</button>
            </a>

        </div>

    </div>

</body>

</html>