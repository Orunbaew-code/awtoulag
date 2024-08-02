<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Awtoulag kärhanasy</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php 
      include 'header.php';
    ?>
  
  <main>
    <h1>Habarlaşmak</h1>

    <section class="contact-form">
      <h2>Hat galdyrmak</h2>
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <div class="form-group">
          <label for="name">Adyňyz:</label>
          <input type="text" id="name" name="name" placeholder="Adyňyzy, familiýaňyzy giriziň" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" placeholder="Email adresiňizi giriziň" required>
        </div>
        <div class="form-group">
          <label for="message">Message:</label>
          <textarea name="message" id="message" rows="5" placeholder="Hatyňyzy şu ýerde galdyryň" required></textarea>
        </div>
        <button type="submit">Haty ugratmak</button>

        <?php
          // Process form data if submitted
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            include 'php/db.php';
            // Get form data
            $name = htmlspecialchars($_POST["name"]);
            $email = htmlspecialchars($_POST["email"]);
            $message = htmlspecialchars($_POST["message"]);
            $today = date('Y-m-d');  // Format: YYYY-MM-DD
            // Prepare SQL statement (consider using prepared statements for better security)
            $sql = "INSERT INTO contacts (name, email, message, date)
            VALUES ('$name', '$email', '$message', '$today')";
            // Execute the query
            if ($conn->query($sql) === TRUE) {
              echo "<p class='success'>Thank you for contacting us! Your message has been sent.</p>";
            } else {
              echo "<p class='error'>Error: " . $sql . "<br>" . $conn->error . "</p>";
            }
            $conn->close();
          }
        ?>
      </form>
    </section>

  </main>
  <?php include 'footer.php'; ?>
</body>
</html>
