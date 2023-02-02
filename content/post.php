<div class="container_post_new">
    <h1 class="post_title">Post a new <span style="color: blueviolet; text-decoration: underline;">Smack!</span></h1>
    <h4>Logged in as
        <?php echo $_SESSION['username'] ?>
    </h4>
    <form action="./controller/post-insert.php" method="post" enctype="multipart/form-data">
        <div>
            <input type="text" id="title" name="title" placeholder="your title..." required maxlength="25">
            <?php?>
        </div>
        <div>
            <textarea type="text" id="content" name="content" value="Message..." style="resize: none;"
                placeholder="your message..." maxlength="400"></textarea>
        </div>
        <div style="border-bottom: none;">
            <input type="submit" value="Smack It!" id="upload">
        </div>
    </form>
</div>
<?php 