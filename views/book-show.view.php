<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
<style>

</style>
<body>

<h1>Great book '<?= $books["name"] ?>' writen by <?= $books["author"] ?> and released on <?= $books["release_date"] ?></h1>
<a href="<?= "/edit?id=".$books["id"] ?>">Edit!</a>
<a href="/">Back!</a>
</body>
</html>