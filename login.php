<?php

session_start();

include("../config/db.php");

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users
          WHERE username='$username'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        $user = mysqli_fetch_assoc($result);

        if (
            password_verify(
                $password,
                $user['password']
            )
        ) {

            $_SESSION['user'] = $username;

            header("Location: ../dashboard.php");
        } else {
            echo "Wrong Password";
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>

    <link rel="stylesheet" href="../style.css">

</head>

<body>

    <h2>Login</h2>

    <form method="POST">

        <input type="text" name="username" placeholder="Username" required>

        <br><br>

        <input type="password" name="password" placeholder="Password" required>

        <br><br>

        <button name="login">
            Login
        </button>

    </form>

</body>

</html>