<?php
  require_once 'php/db.php';

  // Process form submission if requested
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $question = htmlspecialchars($_POST["question"]);
    $answer = htmlspecialchars($_POST["answer"]);
    // Prepare and execute SQL statement (consider using prepared statements)
    $sql = "INSERT INTO faqs (faq_summary, faq_p) VALUES ('$question', '$answer')";
    $result = $conn->query($sql);

    if ($result) {
      echo "<p class='success'>Täze sorag üstünlükli goşuldy!</p>";
    } else {
      echo "<p class='error'>Ýalňyşlyk: " . $conn->error . "</p>";
    }
  }

  $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Awtoulag kärhanasy</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <?php include 'header.php'; ?>

  <main class="container">
    <h1>Ýygy-ýygydan berilýän sorag goşmak.</h1>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <div class="form-group">
        <label for="question">Sorag:</label>
        <input type="text" id="question" name="question" required>
      </div>
      <div class="form-group">
        <label for="answer">Jogaby:</label>
        <input type="text" id="answer" name="answer" required>
      </div>
      <button type="submit">Ugur goşmak</button>
    </form>

  </main>

</body>
</html>
