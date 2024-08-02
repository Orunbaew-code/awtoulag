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
        <main>
            <h1>Taksi hyzmatlary</h1>

            <section class="taxi-options">
            <h2>Taksi çagyrmak</h2>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <div class="form-group">
                <label for="origin">Adyňyz</label>
                <input type="text" id="name" name="name" placeholder="Adyňyzy giriziň">
                </div>
                <div class="form-group">
                <label for="phone">Adyňyz</label>
                <input type="text" id="phone" name="phone" placeholder="Telefon belgiňizi giriziň">
                </div>
                <div class="form-group">
                <label for="origin">Başlangyç nokat</label>
                <input type="text" id="origin" name="origin" placeholder="Başlangyç salgyňyzy giriziň">
                </div>
                <div class="form-group">
                <label for="destination">Barmaly nokat:</label>
                <input type="text" id="destination" name="destination" placeholder="Barmaly nokadyňyzy giriziň">
                </div>
                <button type="submit">Çagyrmak</button>
            </form>
            </section>

            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['origin']) && isset($_POST['destination'])) {
                    include 'php/db.php';
                    $origin = $_POST["origin"];
                    $destination = $_POST["destination"];
                    // Sanitize user input (prevent SQL injection)
                    $name = htmlspecialchars($_POST["name"]);
                    $phone = htmlspecialchars($_POST["phone"]);
                    $origin = htmlspecialchars($origin); // Basic sanitization
                    $destination = htmlspecialchars($destination); // Basic sanitization
                    $today = date('Y-m-d');
                    // Prepare SQL statement (consider using prepared statements for better security)
                    $sql = "INSERT INTO taxi_requests (name, phone, origin, destination, request_date, request_time)
                    VALUES ('$name', '$phone', '$origin', '$destination', '$today', NOW())"; // Include current timestamp

                    // Execute the query
                    if ($conn->query($sql) === TRUE) {
                    echo "Thank you for requesting a taxi! We will contact you shortly.";
                    } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                    $conn->close();
                }
            ?>
<!--
            <section class="taxi-services">
            <h2>Our Services</h2>
            <ul>
                <li>Sedan: Comfortable rides for up to 4 passengers.</li>
                <li>SUV: Spacious option for families or extra luggage.</li>
                <li>Airport Transfers: Reliable and convenient transportation to/from the airport.</li>
                <li>Hourly Rentals: Taxis at your disposal for extended periods.</li>
            </ul>
            </section>

            <section class="taxi-benefits">
            <h2>Why Choose Us?</h2>
            <p>We offer a variety of taxi services to meet your needs, ensuring a comfortable and convenient transportation experience.</p>
            <ul>
                <li>Competitive Rates: Affordable prices for all taxi services.</li>
                <li>24/7 Availability: We're here whenever you need us, day or night.</li>
                <li>Professional Drivers: Experienced and courteous drivers to ensure a safe journey.</li>
                <li>Easy Booking: Get a quote and book your taxi online or through our app (coming soon).</li>
            </ul>
            </section>
-->
        </main>

        <?php include 'footer.php'; ?>
    </body>
</html>
