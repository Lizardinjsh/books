<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
<style>

</style>
<body>

<h1>Hello, <?= $_SESSION["username"] ?>!</h1>
<h1>Buy my books</h1>
<a href="<?= "/edit?id=".$books["id"] ?>">Edit!</a>
<button><a href="/logout">Logout!</a></button>
</body>
</html>