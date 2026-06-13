<?php

include("../config/db.php");

if (isset($_POST['save'])) {

    $title = $_POST['title'];
    $content = $_POST['content'];

    $sql = "INSERT INTO posts(title, content)
            VALUES('$title', '$content')";

    mysqli_query($conn, $sql);

    header("Location: ../index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>

    <link rel="stylesheet" href="../style.css">
</head>

<body>

    <div class="container">

        <div class="card">

            <h2>Create New Post</h2>

            <form method="POST">

                <input type="text" name="title" placeholder="Enter Post Title" required>

                <textarea name="content" placeholder="Write your content here..." required></textarea>

                <button type="submit" name="save">
                    Save Post
                </button>

            </form>

            <br>

            <a href="../dashboard.php">
                ← Back to Dashboard
            </a>

        </div>

    </div>

</body>

</html>