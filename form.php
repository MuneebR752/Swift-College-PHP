<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form Validation</title>
  <style>
    .errorMsgs {
      color: red;
    }
  </style>
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
  echo $_POST["name"] . "<br>";
  echo $_POST["email"] . "<br>";
  echo $_POST["password"] . "<br>";
  echo $_POST["gender"] . "<br>";
  echo $_POST["age"] . "<br>";
  echo $_POST["country"] . "<br>";
  echo $_POST["bio"] . "<br>";

  print_r($_POST["hobbies"]);
}
?>