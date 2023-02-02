<?php
include("./controller/db.php");

$sql = " SELECT * FROM news ORDER BY date DESC LIMIT 0,3 ";
$result = $conn->query($sql);
?>
<div class="wrapper_news_view">
    <?php
    while ($rows = $result->fetch_assoc()) {
    ?>

    <div class="container_news_view">
        <div>
            <?php if ($result->num_rows > 0) { ?>
            <div class="news_view_image" style="margin: 0;">
                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($rows['img']); ?>" />
            </div>
            <?php } else { ?>
            <p class="status error">Image(s) not found...</p>
            <?php } ?>
            <p class="news_date_view">
                <?php echo $rows['date']; ?>
            </p>
            <h3 class="news_title_view">
                <?php echo $rows['title']; ?>
            </h3>
            <p class="news_short_content_view">
                <?php echo $rows['short-content']; ?>
            </p>
        </div>
    </div>
    <?php
    }
    ?>
</div>