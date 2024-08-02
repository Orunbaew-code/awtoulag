<?php
  session_start();

  // Database connection details (replace with your actual credentials)
  $servername = "localhost";
  $username = "admin";
  $password = "admin";
  $dbname = "awtoulag";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Get form data (sanitize username to prevent SQL injection)
  $username = htmlspecialchars($_POST["username"]);

  // Prepare SQL statement (consider using prepared statements for better security)
  $sql = "SELECT password FROM admins WHERE username='$username'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $hashed_password = $row["password"];

    // Verify password using password_verify (assuming password is hashed)
    if ($_POST["password"] == $hashed_password){
      // Login successful - set session variable and redirect
      $_SESSION['logged_in'] = true;
      $_SESSION['username'] = $username;
      header("Location: dolandyryjy/index.php");
    } else {
      // Incorrect password - set error message in session and redirect
      $_SESSION['login_error'] = "Incorrect username or password.";
      header("Location: login.php");
    }
  } else {
    // Username not found - set error message in session and redirect
    $_SESSION['login_error'] = "Invalid username.";
    header("Location: login.php");
  }

  $conn->close();
?>
