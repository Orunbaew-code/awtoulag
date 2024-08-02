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
        require_once 'php/db.php';

        // Process form submission if requested
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $news_title = htmlspecialchars($_POST["news_title"]);
          $news_content = htmlspecialchars($_POST["news_content"]);
      
          // Prepare and execute SQL statement (consider using prepared statements)
          $sql = "INSERT INTO events (event_a, event_p) VALUES ('$news_title', '$news_content')";
          $result = $conn->query($sql);
      
          if ($result) {
            echo "<p class='success'>Habar üstünlükli goşuldy!</p>";
          } else {
            echo "<p class='error'>Ýalňyşlyk: " . $conn->error . "</p>";
          }
        }
      
        $conn->close();
      ?>
    <main class="container">
    <h1>Täzelik goşmak</h1>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <div class="form-group">
        <label for="news_title">Habaryň ady:</label>
        <input type="text" id="news_title" name="news_title" required>
      </div>
      <div class="form-group">
        <label for="news_content">Habaryň maglumaty:</label>
        <textarea name="news_content" id="news_content" cols="30" rows="10" required></textarea>
      </div>
      <button type="submit">Habar goşmak</button>
    </form>

  </main>

</body>
</html>