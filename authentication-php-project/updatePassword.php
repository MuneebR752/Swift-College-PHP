<?php

include("db.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="updatePassword.php? <?php echo $_GET['id']; ?>" method="post">
        <label for="newPassword">Enter New Password</label> <br><br>
        <input type="password" name="newPassword" id="newPassword"> <br><br>

        <button name="changePassword">Change Password</button>

    </form>

</body>

<?php
$userId = $_GET["id"];
if (isset($_POST["changePassword"])) {

    $newPassword = $_POST["newPassword"];

    $sql = "UPDATE FROM users SET password = '{$newPassword}' WHERE id = '{$userId}'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Password Changed Successfully";
    } else {
        echo "Something Went Wrong";
    }
}

?>

</html>