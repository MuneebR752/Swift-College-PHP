<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form Validation</title>
</head>

<body>
  <h1>Form Validation</h1>

  <form method="post" action="form.php">
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

    Select Gender : <br />
    <input type="radio" name="gender" id="male" value="male" />
    <label for="male">Male</label>

    <input type="radio" name="gender" id="female" value="female" />
    <label for="female">Female</label>

    <br /><br />

    <label for="age">Age : </label>
    <input type="number" name="age" id="age" />

    <br /><br />

    Select Hobbies : <br />
    <input type="checkbox" name="hobbies[]" id="reading" value="reading" />
    <label for="reading">Reading</label> <br />

    <input
      type="checkbox"
      name="hobbies[]"
      id="travelling"
      value="travelling" />
    <label for="travelling">Travelling</label> <br />

    <input type="checkbox" name="hobbies[]" id="gaming" value="gaming" />
    <label for="gaming">Gaming</label>

    <br /><br />

    <label for="country">Select Country : </label>
    <select name="country" id="country">
      <option value="pakistan">Pakistan</option>
      <option value="china">China</option>
      <option value="uae">UAE</option>
    </select>

    <br /><br />
    <label for="bio">Bio : </label>
    <textarea name="bio" id="bio"></textarea>

    <br />
    <br />

    <input type="submit" value="Submit" name="submit" />
  </form>
</body>

</html>

<?php

if (isset($_POST["submit"])) {

  $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  if (strlen($name) <= 2) {
    echo "Name is too Short";
    return;
  }

  $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

  $password = $_POST["password"];

  $gender = $_POST["gender"];

  $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);

  $hobbies = $_POST["hobbies"];

  $country = $_POST["country"];

  $bio = filter_input(INPUT_POST, "bio", FILTER_SANITIZE_FULL_SPECIAL_CHARS);



  echo $name . "<br>";
  echo $email . "<br>";
  echo $password . "<br>";
  echo $gender . "<br>";
  echo $age . "<br>";
  echo $country . "<br>";
  echo $bio . "<br>";
  print_r($hobbies);

  echo "<br>";


  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  echo $hashed_password . "<br>";
}
?>

<!-- <script>
  alert("Your are Hacked");
</script> -->