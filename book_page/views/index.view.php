<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My book shop</title>
</head>
<style>
    table, td, th {
  border: 1px solid;
}

table {
  border-collapse: collapse;
}
</style>
<body>
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
                <td><?= $book["publication_year"] ?> </td>
                <td><?= $book["availability"] ?> </td>
            <tr>
    <?php } ?>
</table>
</body>
</html>
