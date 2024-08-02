<?php
  require_once 'php/db.php';

  // Fetch taxi quotes from database
  $sql = "SELECT * FROM taxi_requests";
  $quotes = mysqli_query($conn, $sql);

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
    <h1>Taksi sargytlary</h1>

    <?php if ($quotes->num_rows > 0) { ?>
      <table>
        <thead>
          <tr>
            <th>#</th>
            <th>Ady</th>
            <th>Telefon</th>
            <th>Başlangyç</th>
            <th>Ahyrky</th>
            <th>Sene</th>
            <th>Wagt</th>
          </tr>
        </thead>
        <tbody>
        <?php $i = 1;  // counter for row numbering ?>
        <?php while ($quote = mysqli_fetch_assoc($quotes)) { ?>
          <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $quote['name']; ?></td>
            <td><?php echo $quote['phone']; ?></td>
            <td><?php echo $quote['origin']; ?></td>
            <td><?php echo $quote['destination']; ?></td>
            <td><?php echo $quote['request_date']; ?></td>
            <td><?php echo $quote['request_time']; ?></td>
          </tr>
          <?php $i++;  // increment counter ?>
        <?php } ?>
        </tbody>
      </table>
    <?php } else { ?>
      <p>Taksi sargydy tapylmady.</p>
    <?php } ?>

  </main>

</body>
</html>
