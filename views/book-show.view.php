<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
<style>

</style>
<body>

<h1>Great book '<?= $books["name"] ?>' writen by <?= $books["author"] ?> and released on <?= $books["release_date"] ?></h1>
<a href="<?= "/edit?id=".$books["id"] ?>" class="blue_but">Edit</a>
<a href="/" class="green_but">Back</a>
<a href="/borrow?id=<?= $books["id"] ?>" class="brown_but">Borrow</a>
<a href="<?= "/delete?id=".$books["id"] ?>" class="red_but">Delete</a>
</body>
</html>