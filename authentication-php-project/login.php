<?php

include("db.php")

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form method="post" action="login.php">

        <label for="email">Email : </label>
        <input type="email" name="email" id="email" />

        <br /><br />

        <label for="password">Password : </label>
        <input type="password" name="password" id="password" />

        <br />
        <br />

        <input type="submit" value="Login" name="login" />
    </form>
</body>

<?php

if (isset($_POST["login"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email = '{$email}'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);

        if ($row["password"] == $password) {
            header("Location: index.php");
        } else {
            echo "Incorrect Password";
        }
    } else {
        echo "Email not Exists";
    }
}

?>

</html>