<?php
  require_once 'php/db.php';

  // Fetch quote requests from database
  $sql = "SELECT * FROM quote_requests";
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
    <h1>Truck Quote Requests</h1>

    <?php if ($quotes->num_rows > 0) { ?>
      <table>
        <thead>
          <tr>
            <th>#</th>
            <th>Sargyt wagty</th>
            <th>Başlangyç</th>
            <th>Ahyrky</th>
            <th>Ýüküň görnüşi</th>
            <th>Mukdary</th>
            <th>Mukdar görnüşi</th>
          </tr>
        </thead>
        <tbody>
        <?php $i = 1;  // counter for row numbering ?>
        <?php while ($quote = mysqli_fetch_assoc($quotes)) { ?>
          <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $quote['request_time']; ?></td>
            <td><?php echo $quote['origin']; ?></td>
            <td><?php echo $quote['destination']; ?></td>
            <td><?php echo $quote['material_type']; ?></td>
            <td><?php echo $quote['quantity']; ?></td>
            <td><?php echo $quote['quantity_unit']; ?></td>
          </tr>
          <?php $i++;  // increment counter ?>
        <?php } ?>
        </tbody>
      </table>
    <?php } else { ?>
      <p>Ýük awtoulag sargytlary tapylmady.</p>
    <?php } ?>

  </main>

</body>
</html>
