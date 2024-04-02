<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
    <h1>Delete posts</h1>
    <form method="POST">
        <?php foreach ($books as $book) { ?>
            <button class="delete-button" name="post-selected" value='<?= $book["id"] ?>'><?= $book["name"] ?></button>
        <?php } ?>
    </form>
</body>
</html>