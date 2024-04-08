

<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
    <h1>Edit book here</h1>
    <h1><?= $books["name"] . " by " . $books["author"] ?></h1>
    <form method="POST">
        <label>
            Add title:
            <input type="text" name="title" value="<?= $books["name"] ?>">
        </label>
        <label>
            Add author:
            <input type="text" name="author" value="<?= $books["author"] ?>">
        </label>
        <label>
            Add release date:
            <input type="text" name="releaseDate" value="<?= $books["release_date"] ?>">
        </label>
        <label>
            Add availability:
            <input type="text" name="availability" value="<?= $books["availability"] ?>">
        </label>
        <button>Save</button>
    </form>
</body>
</html>
