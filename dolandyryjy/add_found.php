<?php
  session_start();

  // Check if user is logged in (optional, adjust based on your needs)
  // if (!isset($_SESSION['logged_in'])) {
  //   header("Location: login.php");
  //   exit();
  // }

  // Include database connection
  require_once 'php/db.php';

  // Process form submission if requested
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $found_date = htmlspecialchars($_POST["found_date"]);
    $found_item = htmlspecialchars($_POST["found_item"]);
    $found_place = htmlspecialchars($_POST["found_place"]);

    // Prepare and execute SQL statement
    $sql = "INSERT INTO lostfound (found_date, found_item, found_place) VALUES ('$found_date', '$found_item', '$found_place')";
    $result = $conn->query($sql);

    if ($result) {
      echo "<p class='success'>Ýitirilen zat goşuldy! Sag bolun!</p>";
    } else {
      echo "<p class='error'>Error: " . $conn->error . "</p>";
    }
  }

  $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Awtoulag kärhanasy - Ýitirilen zat goşmak</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <?php include 'header.php'; ?>

  <main class="container">
    <h1>Täze ýitirilen zat goşmak</h1>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <div class="form-group">
        <label for="found_date">Tapylan wagty:</label>
        <input type="date" id="found_date" name="found_date" required>
      </div>
      <div class="form-group">
        <label for="found_item">Tapylan zat (Giňişleýin maglumat):</label>
        <textarea name="found_item" id="found_item" rows="5" required></textarea>
      </div>
      <div class="form-group">
        <label for="found_place">Tapylan ýeri:</label>
        <input type="text" id="found_place" name="found_place" required>
      </div>
      <button type="submit">Ýazgyt</button>
    </form>

  </main>


</body>
</html>
