<?php
  require_once 'php/db.php';

  // Process form submission if requested
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $origin = htmlspecialchars($_POST["origin"]);
    $destination = htmlspecialchars($_POST["destination"]);
    $departure_time = htmlspecialchars($_POST["departure_time"]);
    $frequency = htmlspecialchars($_POST["frequency"]);
    $route_number = htmlspecialchars($_POST["route_number"]);
    $type = ($_POST["type"] == "city") ? "city" : "intercity";

    // Prepare and execute SQL statement (consider using prepared statements)
    $sql = "INSERT INTO bus_routes (Origin, Destination, DepartureTime, Frequency, Number, type) VALUES ('$origin', '$destination', '$departure_time', '$frequency', '$route_number', '$type')";
    $result = $conn->query($sql);

    if ($result) {
      echo "<p class='success'>Bus route added successfully!</p>";
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
  <title>Awtoulag kärhanasy</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <?php include 'header.php'; ?>

  <main class="container">
    <h1>Awtobus ugury goşmak</h1>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <div class="form-group">
        <label for="origin">Başlangyç nokat:</label>
        <input type="text" id="origin" name="origin" required>
      </div>
      <div class="form-group">
        <label for="destination">Ahyrky nokat:</label>
        <input type="text" id="destination" name="destination" required>
      </div>
      <div class="form-group">
        <label for="departure_time">Ugraýan wagty:</label>
        <input type="time" id="departure_time" name="departure_time" required>
      </div>
      <div class="form-group">
        <label for="frequency">Ýygylygy:</label>
        <input type="text" id="frequency" name="frequency" required> (Meselem: Her 30 min)
      </div>
      <div class="form-group">
        <label for="route_number">Ugur belgisi:</label>
        <input type="text" id="route_number" name="route_number" required>
      </div>
      <div class="form-group">
        <label for="type">Ugur görnüşi:</label>
        <select name="type" id="type">
          <option value="city">Şäheriçi</option>
          <option value="intercity">Şäherara</option>
        </select>
      </div>
      <button type="submit">Ugur goşmak</button>
    </form>

  </main>

</body>
</html>
