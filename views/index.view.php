
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

<table>
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Release Date</th>
        <th>Availability</th>
    </tr>
        <?php foreach ($books as $book) { ?>
            <tr>
                <td><?= $book["name"] ?> </td>
                <td><?= $book["author"] ?> </td>
                <td><?= $book["release_date"] ?> </td>
                <td><?= $book["availability"] ?> </td>
            <tr>
    <?php } ?>
</table>
<button><a href="/logout">Logout!</a></button>
</body>
</html>

