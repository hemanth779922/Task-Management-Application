<?php

include("config/db.php");

$result = mysqli_query(
    $conn,
    "SELECT * FROM posts ORDER BY id DESC"
);

?>

<!DOCTYPE html>
<html>

<head>
    <title>All Posts</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <h1>All Posts</h1>

    <a href="dashboard.php">Dashboard</a>

    <hr>

    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        ?>

        <h2>
            <?php echo $row['title']; ?>
        </h2>

        <p>
            <?php echo $row['content']; ?>
        </p>

        <a href="posts/edit.php?id=<?php echo $row['id']; ?>">
            Edit
        </a>

        |

        <a href="posts/delete.php?id=<?php echo $row['id']; ?>">
            Delete
        </a>

        <hr>

    <?php } ?>

</body>

</html>