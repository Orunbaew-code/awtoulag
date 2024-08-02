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
    <h1>Iş ýerlerimiz</h1>

    <section class="job-listings">
      <h2>Häzirki boş iş orunlary</h2>

      <?php
        include 'php/db.php';
        $sql = "SELECT * FROM joblistings";
        $joblistings = mysqli_query($conn, $sql);
      ?>

      <?php foreach ($joblistings as $job): ?>
      <article class="job-listing">
        <h3><?php echo $job["job_title"]; ?></h3>
        <p><?php echo $job["job_description"]; ?></p>
        <h4>Başarnyklary:</h4>
        <p class="job_qualifications"><?php echo $job["job_qualifications"]; ?></p>
        <a href="#">Anketa tabşyrmak</a>
      </article>
      <?php endforeach; ?>

    </section>

  </main>

    <?php include 'footer.php'; ?>
</body>
</html>
