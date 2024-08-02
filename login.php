<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awtoulag kärhanasy - Admin panel</title>
    <link rel="stylesheet" href="css/admin_style.css"> 
  </head>
  <body>
    <div class="login-container">
      <h2>Admin girişi</h2>
      <form action="login_handler.php" method="post">
        <div class="form-group">
          <label for="username">Ulanyjy ady:</label>
          <input type="text" id="username" name="username" placeholder="Ulanyjy adyňyzy giriziň" required>
        </div>
        <div class="form-group">
          <label for="password">Parol:</label>
          <input type="password" id="password" name="password" placeholder="Parolyňyzy giriziň" required>
        </div>
        <button type="submit">Giriş</button>
      </form>
      <p class="error-message">  </p>
    </div>

    <?php
      // Display any error message if set in the session (optional)
      if (isset($_SESSION['login_error'])) {
        echo "<script>document.querySelector('.error-message').textContent = '" . $_SESSION['login_error'] . "';</script>";
        unset($_SESSION['login_error']); // Clear the error message after displaying
      }
    ?>
  </body>
</html>