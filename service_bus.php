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
    <section class="services">
    <h1>Awtobus hyzmatlary</h1>
    <form action="" method="post">
        <button type="submit" name="filter" value="Şäheriçi">Şäheriçi Awtobuslar</button>
        <button type="submit" name="filter" value="Şäherara">Şäherara awtobuslar</button>
    </form>

    <?php
    // Define example bus routes (modify as needed)

    include 'php/db.php';
    $sql_city = "SELECT * FROM bus_routes WHERE type='city'";
    $city_routes = mysqli_query($conn, $sql_city);
    
    $sql_inter = "SELECT * FROM bus_routes WHERE type='intercity'";
    $intercity_routes = mysqli_query($conn, $sql_inter);

    // Get the selected filter (city or intercity)
    $filter = isset($_POST['filter']) ? $_POST['filter'] : "";

    // Display the filtered routes table
    if ($filter) {
        $routes = ($filter === "Şäheriçi") ? $city_routes : $intercity_routes;
        echo "<h2>" . ucfirst($filter) . " awtobus ugurlary</h2>";
        echo "<table>";
        echo "<tr><th>Nireden</th><th>Nirä</th><th>Ugraýan wagty</th><th>Ýygylygy</th><th>Belgisi</th></tr>";
        foreach ($routes as $route) {
        echo "<tr>";
        echo "<td>" . $route["Origin"] . "</td>";
        echo "<td>" . $route["Destination"] . "</td>";
        echo "<td>" . $route["DepartureTime"] . "</td>";
        echo "<td>" . $route["Frequency"] . "</td>";
        echo "<td>" . $route["Number"] . "</td>";
        echo "</tr>";
        }
        echo "</table>";
    }
    ?>
    </section>
    <?php include 'footer.php'; ?>

</body>
</html>