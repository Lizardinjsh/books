<?php $page_title = "Start"; ?>
<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
<style>
    td {
    border: 1px solid;
    font-family: "Roboto", sans-serif;
    font-style: normal;
}

table {
  border-collapse: collapse;
  margin-bottom: 10px;
}
</style>
<body>
<main>
<h1>Hi, <?= $_SESSION["username"] ?>!</h1>
<div class="div-index">
    <h2>Books we have available:</h2>
    <!-- <?= $books ?> -->
    <table>
        <tr>
            <th>Title:</th>
            <th>Author:</th>
            <th>Release Date:</th>
            <th>Availability:</th>
        </tr>
        <?php foreach ($books as $book) { ?>
            <tr>
                <td><a href="/show?id=<?= $book["id"] ?>">
                    <div class="index-cells">
                        <?= $book["name"] ?>
                    </div>
                </a></td>
                <td><a href="/show?id=<?= $book["id"] ?>">
                    <div class="index-cells">
                        <?= $book["author"] ?>
                    </div>
                </a></td>
                <td><a href="/show?id=<?= $book["id"] ?>">
                    <div class="index-cells">
                        <?= $book["release_date"] ?>
                    </div>
                </a></td>
                <td><a href="/show?id=<?= $book["id"] ?>">
                    <div class="index-cells">
                        <?= $book["availability"] ?>
                    </div>
                </a></td>
            </tr>
        <?php } ?>
    </table>
</div>
</main>
</body>
</html>