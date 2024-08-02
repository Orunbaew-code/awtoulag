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
    $job_title = htmlspecialchars($_POST["job_title"]);
    $job_description = htmlspecialchars($_POST["job_description"]);
    $job_qualifications = htmlspecialchars($_POST["job_qualifications"]);

    // Prepare and execute SQL statement
    $sql = "INSERT INTO joblistings (job_title, job_description, job_qualifications) VALUES ('$job_title', '$job_description', '$job_qualifications')";
    $result = $conn->query($sql);

    if ($result) {
      echo "<p class='success'>Täze iş orny goşuldy!</p>";
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
  <title>Awtoulag kärhanasy - Täze iş orun goşmak</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <?php include 'header.php'; ?>

  <main class="container">
    <h1>Täze iş orun goşmak</h1>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <div class="form-group">
        <label for="job_title">Iş ady:</label>
        <input type="text" id="job_title" name="job_title" placeholder="Iş adyny giriziň" required>
      </div>
      <div class="form-group">
        <label for="job_description">Iş baradaky maglumat:</label>
        <textarea name="job_description" id="job_description" rows="10" placeholder="Iş baradaky maglumatlary giriziň" required></textarea>
      </div>
      <div class="form-group">
        <label for="job_qualifications">Başarnyklar:</label>
        <textarea name="job_qualifications" id="job_qualifications" rows="5" placeholder="Başarnyklary sanalawyň" required></textarea>
      </div>
      <button type="submit">Ýerleştirmek</button>
    </form>

  </main>


</body>
</html>
