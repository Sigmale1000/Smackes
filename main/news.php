<?php

require './controller/db.php';

$sql = " SELECT * FROM news ORDER BY date DESC LIMIT 0,3 ";
$result = $conn->query($sql);

?>
<div class="wrapper_news">
    <h1 style="margin: 0;">Official News</h1>
    <a href="index.php?p=view-news" style="color: #edf2f4; text-decoration: underline;"><i class="fa-solid fa-reply-all" style=" margin-right: 2px;"></i>View All</a>
    <?php
    while ($rows = $result->fetch_assoc()) {
    ?>

    <div class="container_news">
        <div>
            <?php if ($result->num_rows > 0) { ?>
            <div class="news_image" style="margin: 0;">
                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($rows['img']); ?>" />
            </div>
            <?php } else { ?>
            <p class="status error">Image(s) not found...</p>
            <?php } ?>
            <p class="news_date">
                <?php echo $rows['date']; ?>
            </p>
            <h3 class="news_title">
                <?php echo $rows['title']; ?>
            </h3>
            <p class="news_short_content">
                <?php echo $rows['short-content']; ?>
            </p>
        </div>
    </div>
    <?php
    }
    ?>
</div>