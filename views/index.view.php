<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
<style>
    table, td, th {
  border: 1px solid;
}

table {
  border-collapse: collapse;
}
</style>
<body>

<h1>Hello, <?= $_SESSION["username"] ?>!</h1>
<h1>Buy my books</h1>
<!-- <?= $books ?> -->
<table>
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Release Date</th>
        <th>Availability</th>
    </tr>
        <?php foreach ($books as $book) { ?>
            <tr>
                <td><a href="/show?id=<?= $book["id"] ?>"><?= $book["name"] ?></a></td>
                <td><a href="/show?id=<?= $book["id"] ?>"><?= $book["author"] ?></a></td>
                <td><a href="/show?id=<?= $book["id"] ?>"><?= $book["release_date"] ?></a></td>
                <td><a href="/show?id=<?= $book["id"] ?>"><?= $book["availability"] ?></a></td>
        </tr>
    <?php } ?>
</table>
<button><a href="/logout">Logout!</a></button>
</body>
</html>