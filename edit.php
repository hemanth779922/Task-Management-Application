<?php

include("../config/db.php");

$id = $_GET['id'];

$data = mysqli_query(
    $conn,
    "SELECT * FROM posts WHERE id=$id"
);

$post = mysqli_fetch_assoc($data);

if (isset($_POST['update'])) {

    $title = $_POST['title'];
    $content = $_POST['content'];

    mysqli_query(
        $conn,
        "UPDATE posts
SET title='$title',
content='$content'
WHERE id=$id"
    );

    header("Location: ../index.php");
}
?>
<link rel="stylesheet" href="../style.css">

<form method="POST">

    <input type="text" name="title" value="<?php echo $post['title']; ?>">

    <br><br>

    <textarea name="content">
<?php echo $post['content']; ?>
</textarea>

    <br><br>

    <button name="update">
        Update
    </button>

</form>