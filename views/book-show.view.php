<?php $page_title = "Showing book " . $_GET["id"]; ?>
<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<div>
<h1>Great book '<?= $books["name"] ?>' writen by <?= $books["author"] ?> and released on <?= $books["release_date"] ?></h1>
<a href="<?= "/edit?id=".$books["id"] ?>" class="blue_but">Edit</a>
<a href="/" class="green_but">Back</a>
<?php if(isset($_GET["error"])){ ?>
    <a href="/return?id=<?= $books["id"] ?>" class="brown_but">Return!</a>
<?php }else{ ?>
    <a href="/borrow?id=<?= $books["id"] ?>" class="brown_but">Borrow</a>
<?php } ?>
<a href="<?= "/delete?id=".$books["id"] ?>" class="red_but">Delete</a>
</div>
</body>
</html>