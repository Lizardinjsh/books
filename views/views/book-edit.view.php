<?php $page_title = "Edit book " . $_GET["id"]; ?>
<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
    <h1>Edit book here</h1>
    <h1><?= $books["name"] . " by " . $books["author"] ?></h1>
    <form method="POST" class="form-edit">
        <label>
            Edit name:
            <input type="text" name="name" value='<?= $_POST["name"] ?? $books["name"] ?>'>
            <?php if(isset($errors["name"])){ ?>
                <p class="invalid-data"><?= $errors["name"] ?></p>
            <?php } ?>
        </label>
        <label>
            Edit author:
            <input type="text" name="author" value='<?= $_POST["author"] ?? $books["author"] ?>'>
            <?php if(isset($errors["author"])){ ?>
                <p class="invalid-data"><?= $errors["author"] ?></p>
            <?php } ?>
        </label>
        <label>
            Edit release date:
            <input type="text" name="releaseDate" value='<?= $_POST["releaseDate"] ?? $books["release_date"] ?>'>
            <?php if(isset($errors["releaseDate"])){ ?>
                <p class="invalid-data"><?= $errors["releaseDate"] ?></p>
            <?php } ?>
        </label>
        <label>
            Edit availability:
            <input type="text" name="availability" value='<?= $_POST["availability"] ?? $books["availability"] ?>'>
            <?php if(isset($errors["availability"])){ ?>
                <p class="invalid-data"><?= $errors["availability"] ?></p>
            <?php } ?>
        </label>
        <button>Update!</button>
    </form>
    <a href="/" class="green_but">Back!</a>
</body>
</html>
