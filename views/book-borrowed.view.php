<?php $page_title = "Ur books"; ?>
<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
<main>
    <?php if($books[0] != []){ ?>
    <div class="div-borrowd">
        <h1>Your books</h1>
        <div class="div-borrowed-books">
            <ul class="borrowed">
            <?php foreach ($books[0] as $book) { ?>
                <li class="borrowed"><?= "'" . $book["name"] . "' return date of this book is: " . $book["return_date"] ?> <a href="/return?id=<?= $book["book_id"] ?>" class="blue_but">Return!</a></li>            <hr>
            <?php } ?>
            </ul>
        </div>
    </div>
    <?php }else { ?>
    <h1>Books have not been borrowed</h1>
    <?php }; ?>
</main>
</body>
</html>