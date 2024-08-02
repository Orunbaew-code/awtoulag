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
      include 'php/db.php';
    ?>

  <main>
    <h1>Ýygy-ýygydan soralýan soraglar</h1>

    <section class="faq-list">
      <h2>Soragyňyz üçin jogaplar!</h2>
      <?php
        $sql = "SELECT * FROM faqs";
        $faqs = mysqli_query($conn, $sql);

        if ($faqs->num_rows > 0)
        {
          While ($row = mysqli_fetch_assoc($faqs))
          { ?>
            <details>
              <summary><?php echo $row['faq_summary'] ?></summary>
              <p><?php echo $row['faq_p'] ?></p>
            </details>
            <?php
          }
        }
      ?>
    </section>

  </main>

    <?php include 'footer.php'; ?>
</body>
</html>