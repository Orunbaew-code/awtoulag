<?php
  session_start();

  // Check if user is logged in
  if (!isset($_SESSION['logged_in'])) {
    header("Location: login.php");
    exit();
  }

  // Include database connection (replace with your credentials)
  require_once 'php/db.php';

  // Fetch messages from database
  $sql = "SELECT * FROM contacts ORDER BY contact_id DESC"; // Order by latest first
  $messages = mysqli_query($conn, $sql);

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
    <h1>User Messages</h1>

    <?php if ($messages->num_rows > 0) { ?>
      <table>
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
        <?php $i = 1;  // counter for row numbering ?>
        <?php while ($message = mysqli_fetch_assoc($messages)) { ?>
          <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $message['name']; ?></td>
            <td><?php echo $message['email']; ?></td>
            <td><?php echo $message['message']; ?></td>
            <td><?php echo $message['date']; ?></td>
          </tr>
          <?php $i++;  // increment counter ?>
        <?php } ?>
        </tbody>
      </table>
    <?php } else { ?>
      <p>No user messages found.</p>
    <?php } ?>

  </main>

</body>
</html>
