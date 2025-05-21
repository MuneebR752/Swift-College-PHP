<?php

include("db.php")

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>

<body>
    <form method="post" action="signup.php">
        <label for="name">Full Name : </label>
        <input type="text" name="name" id="name" />
        <div id="nameErrorMsg" class="errorMsgs"></div>
        <br /><br />

        <label for="email">Email : </label>
        <input type="email" name="email" id="email" />

        <br /><br />

        <label for="password">Password : </label>
        <input type="password" name="password" id="password" />

        <br /><br />

        <label for="age">Age : </label>
        <input type="number" name="age" id="age" />

        <br /><br />

        <br /><br />
        <label for="bio">Bio : </label>
        <textarea name="bio" id="bio"></textarea>

        <br />
        <br />

        <input type="submit" value="Sign Up" name="signup" />
    </form>
</body>


<?php


if (isset($_POST["signup"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $age = $_POST["age"];
    $bio = $_POST["bio"];
}
?>

</html>