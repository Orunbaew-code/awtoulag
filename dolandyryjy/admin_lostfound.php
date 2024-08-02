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
      <main class="faq_main"> 
      <h1>Ýitirilen we tapylan</h1>
      <a href="add_found.php" class="add-route">Täze emläk goşmak</a>
      <section class="lost-items">
        <h2>Ýitirilen</h2>
        <table>
          <thead>
            <tr>
              <th>Tapylan sene</th>
              <th>Giňişleýin maglumat</th>
              <th>Tapylan ýeri</th>
            </tr>
          </thead>
          <tbody>
            <?php
              include "php/db.php";
              $sql = "SELECT * FROM lostfound";
              $lostfound = mysqli_query($conn, $sql);
              if ($lostfound->num_rows > 0){
                while ($row = mysqli_fetch_assoc($lostfound)){
                  echo "<tr><td>".$row['found_date']."</td><td>".$row['found_item']."</td><td>".$row['found_place']."</td></tr>";
                }
              }
            ?>
            </tbody>
        </table>
    </section>
    </main>

  </body>
  </html>