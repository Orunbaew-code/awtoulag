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
    <section class="hero-banner">
      <img src="images/truck_banner.jpg" alt="Dump Truck">
      <h2>Ygtybarly awtoulag ýük daşamak çözgütleri</h2>
      <p>Ähli zerurlyklaryňyz üçin netijeli we hünärmen Ýük awtoulag hyzmatlaryny hödürleýäris.</p>
    </section>

    <section class="services-offered">
      <h2>Ýük awtoulag hyzmatlarymyz</h2>
      <ul>
        <li>Gurluşyk materiallaryny eltip bermek: Gurluşyk taslamalaryňyz üçin gum, çagyl, toprak we başgalar.</li>
        <li>Galyndylary aýyrmak: sökülýän ýerlerden galyndy materiallaryny netijeli daşamak.</li>
        <li>Abadanlaşdyryş enjamlary: Daşlary, malç, ýerüsti we beýleki abadanlaşdyryş materiallaryny daşamak.</li>
        <li>Gazuw-agtaryş we ýerleri arassalamak: Gazuw-agtaryş taslamalaryndan hapa, gaýa we galyndylary çykarmak.</li>
        <li>Artykmaç ýük ulaglary: Uly we agyr materiallary dolandyrmak üçin enjamlarymyz bar.</li>
      </ul>
    </section>

    <section class="get-quote">
  <h2>Sargyt etmek</h2>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <div class="form-group">
      <label for="origin">Başlangyç nokat:</label>
      <input type="text" id="origin" name="origin" placeholder="Ýüküň başlangyç nokadyny giriziň:">
    </div>
    <div class="form-group">
      <label for="destination">Ahyrky nokat:</label>
      <input type="text" id="destination" name="destination" placeholder="Ahyrky nokadyňyzy giriziň:">
    </div>
    <div class="form-group">
      <label for="material-type">Ýüküň görnüşi:</label>
      <select name="material-type" id="material-type">
        <option value="">Ýüküň görnüşini giriziň:</option>
        <option value="construction">Gurluşyk materiallary</option>
        <option value="demolition">Galyndylar</option>
        <option value="landscaping">Abadanlaşdyryş işleri</option>
        <option value="excavation">Gazuw-agtaryş materiallary</option>
        <option value="other">Başgalar</option>
      </select>
    </div>
    <div class="form-group">
      <label for="quantity">Mukdary:</label>
      <div class="quantity-input">
        <input type="number" min="0" id="quantity" name="quantity" placeholder="Mukdary giriziň">
        <select name="quantity-unit" id="quantity-unit">
          <option value="">Mukdar görnüşi</option>
          <option value="Tonna">Tonna</option>
          <option value="Meter Kub">Meter kub</option>
          <option value="Yard Kub">Yard kub</option>
          <option value="Başga">Başga</option>
        </select>
      </div>
    </div>
    <button type="submit">Sargyt etmek</button>

    <?php
      // Process "Get Quote" form if submitted
      if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['origin']) && isset($_POST['destination'])) {

        // Include the database connection file
        require_once 'php/db.php'; // Assuming 'db.php' is in the same directory

        // Get form data
        $origin = htmlspecialchars($_POST["origin"]);
        $destination = htmlspecialchars($_POST["destination"]);
        $material_type = htmlspecialchars($_POST["material-type"]);
        $quantity = (float)$_POST["quantity"]; // Cast to float for decimal values
        $quantity_unit = htmlspecialchars($_POST["quantity-unit"]);

        // Prepare SQL statement (consider using prepared statements for better security)
        $sql = "INSERT INTO quote_requests (origin, destination, material_type, quantity, quantity_unit, request_time)
        VALUES ('$origin', '$destination', '$material_type', $quantity, '$quantity_unit', NOW())";

        // Execute the query using functions from db.php
        $result = $conn->query($sql);

        // Check if query was successful
        if ($result) {
          echo "<p class='success'>Thank you for requesting a quote! We will contact you shortly.</p>";
        } else {
          echo "<p class='error'>Error: " . $conn->error . "</p>";
        }

        // Close the connection (assuming it's done in db.php)
        // $conn->close(); // Call from db.php if applicable
      }
    ?>
  </form>
</section>
  </main>

    <?php include 'footer.php'; ?>
</body>
</html>
