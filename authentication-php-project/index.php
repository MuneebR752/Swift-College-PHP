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
    <h1>Welcome to Our Home Page</h1>

    <table border="1">
        <?php
        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {

            echo "<thead><tr>
                    <th>ID</th>
                    <th>name</th>
                    <th>email</th>
                    <th>password</th>
                    <th>age</th>
                    <th>bio</th>
                    <th>Created At</th>
                </tr></thead><tbody>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['password']}</td>
                        <td>{$row['age']}</td>
                        <td>{$row['bio']}</td>
                        <td>{$row['createdAt']}</td>
                    </tr>";
            }

            echo "</tbody>";
        } else {
            echo "No Record Found";
        }
        ?>


    </table>
</body>

</html>