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

    <section class="banner">
        <div class="banner-image">
            <img src="images/banner.jpg" alt="LPTA Banner Image">  </div>
        <div class="banner-content">
            <h1>Aşgabat Awtoulag Önümçilik birleşigine hoş geldiňiz!</h1>
            <p>Ähli awtoulag islegleriňiz ýerine ýetirmek üçin ýeketäk kärhana.</p>
            <a href="#">Doly maglumat</a>
        </div>
    </section>

    <section class="about-us">
        <h2>Aşgabat Awtoulag Önümçilik birleşigi</h2>
        <p>Aşgabat Awtoulag önümçilik birleşigi, jemgyýetimiziň ýaşaýjylaryna howpsuz, ygtybarly we elýeterli jemgyýetçilik transport hyzmatlaryny bermäge ygrarly guramadyr. Jemgyýetçilik transportyny gündelik syýahat üçin iň amatly we dowamly saýlamaga çalyşýarys.</p>
        <div class="about-us-key-points">
            <h3>Üstünlikli taraplarymyz</h3>
            <ul>
            <li>
                <i class="fas fa-directions"></i>  Giňişleýin ulgam: Dürli ugurlara ýollanmagy üpjün edýän awtobuslaryň, taksilaryň we beýleki transport mümkinçilikleriniň giň ulgamy.
            </li>
            <li>
                <i class="fas fa-clock"></i>  Ygtybarly meýilnamalar: Syýahatyňyzy netijeli meýilleşdirmäge mümkinçilik berýän yzygiderli meýilnamalar.
            </li>
            <li>
                <i class="fas fa-dollar-sign"></i>  Amatly nyrhlar: Jemgyýetçilik transportyny hemmeler üçin elýeterli etmek üçin bäsdeş nyrhlar.
            </li>
            </ul>
        </div>
        <a href="#">Hyzmatlar bilen tanyşmak</a>
    </section>
    
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
                            $i = 0;
                            while (($row = mysqli_fetch_assoc($news)) && ($i < 2))
                            {
                                $i = $i + 1;
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
                            $i = 0;
                            while (($row = mysqli_fetch_assoc($events)) && ($i<2))
                            {
                                $i = $i + 1;
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