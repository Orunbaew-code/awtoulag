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
    <h1>Ýitirilen we tapylan</h1>

    <section class="lost-items">
      <h2>Ýitirilen</h2>
      <p>Emlägimizde bir zat ýitirdiňizmi? Tapylandygyny ýa-da ýokdugyny bilmek üçin aşakdaky sanawy barlaň.</p>

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

      <p>Bu sanawda ýitiren zadyňyzy tapsaňyz, gözlemek üçin [telefon belgisine] ýa-da [e-poçta salgysyna] ýüz tutmagyňyzy haýyş edýäris.</p>
    </section>

    <section class="found-items">
      <h2>Tapylan</h2>
      <p>Emlägimizde bir zat tapdyňyzmy? Ony eýesi tabşyrmaga synanyşmagymyz üçin ony ofisimize tabşyrmagyňyzy haýyş edýäris.</p>
      <p>** Üns beriň: ** Ýitirilen zatlary çäkli wagt saklaýarys. Talap edilmedik zatlar haýyr-sahawata berler.</p>
    </section>
  </main>

    <?php include 'footer.php'; ?>
</body>
</html>
