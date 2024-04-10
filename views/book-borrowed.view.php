<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
    <?php if($books == true){ ?>
    <h1>Ur books!</h1>
    <ul>
    <?php foreach ($books as $book) { ?>
        <li><?= $book["name"] ?></li>
    <?php } ?>
    </ul>
    <?php }else { ?>
    <h1>No books borrowed</h1>
    <?php }; ?>
</body>
</html>