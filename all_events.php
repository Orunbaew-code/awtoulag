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

    <section class="news-events">
        <h2>Täzelikler we Habarlar</h2>
        <div class="news-events_div">
            <div class="news-items">
                <h3>Täzelikler</h3>
                <?php include 'php/db.php'; ?>
                
                <ul>
                    <?php  
                        $sql = "SELECT * FROM news";
                        $news = mysqli_query($conn, $sql);
                        if ($news->num_rows > 0)
                        { 
                            while ($row = mysqli_fetch_assoc($news))
                            {
                                ?>
                                <li>
                                    <a href="#"><?php echo $row['news_a']; ?></a>
                                    <p><?php echo $row['news_p']; ?></p>
                                </li>
                                <?php
                            }
                        }
                    ?>
                </ul>
                <a href="all_events.php"; class="view_all">Ählisini görmek</a>
            </div>
            <div class="events">
                <h3>Ýetip gelýän habarlar</h3>
                <ul>
                <?php  
                        $sql = "SELECT * FROM events";
                        $events = mysqli_query($conn, $sql);
                        if ($events->num_rows > 0)
                        { 
                            while ($row = mysqli_fetch_assoc($events))
                            {
                                ?>
                                <li>
                                    <a href="#"><?php echo $row['event_a']; ?></a>
                                    <p><?php echo $row['event_p']; ?></p>
                                </li>
                                <?php
                            }
                        }
                    ?>
                <li>
                </ul>
                <a href="all_events.php" class="view_all">Ählisini görmek</a>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

</body>
</html>