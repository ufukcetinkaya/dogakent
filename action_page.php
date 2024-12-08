<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect input data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate input data
    if (!empty($username) && !empty($email) && !empty($password)) {
        // Here you can add code to save the data to a database or perform other actions
        echo "Registration successful!";
    } else {
        echo "Please fill in all fields.";
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Registration Form</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Username: <input type="text" name="username"><br><br>
  Email: <input type="text" name="email"><br><br>
  Password: <input type="password" name="password"><br><br>
  <input type="submit" value="Register">
</form>

</body>
</html>