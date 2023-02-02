<?php

require './controller/db.php';

$sql = "SELECT b.*, u.* FROM blogs b JOIN users u ON b.userid = u.id ORDER BY b.id DESC";

$result = $conn->query($sql);

?>

<?php

while ($rows = $result->fetch_assoc()) {
?>
<div class="container_posts">
    <div>
        <h3 href="#username" class="blog_username">
            <?php echo $rows['username']; ?>
        </h3>
        <p class="blog_date">
            <?php echo $rows['date']; ?>
        </p>

        <?php if ($result->num_rows > 0) { ?>
        <div class="blog_image">
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($rows['image']); ?>" />
        </div>
        <?php } else { ?>
        <p class="status error">Image(s) not found...</p>
        <?php } ?>

        <h1 class="blog_title">
            <?php echo $rows['title']; ?>
        </h1>
        <p class="blog_short_content">
            <?php echo $rows['content']; ?>
        </p>
    </div>
</div>
<?php
}
?>