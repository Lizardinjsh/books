<?php $page_title = "Register"; ?>
<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
<main>
<h1>Register</h1>

    <form action="/register" method="POST">
        <label>
            Username:
            <input type="text" name="username">
            <?php if(isset($errors["register"])){ ?>
                <p class="invalid-data"><?= $errors["register"] ?></p>
            <?php } ?>
        </label>
        <label>
            Password:
            <input type="password" name="password">
        </label>
        <button>Register!</button>
    </form>

    </main>
</body>
</html>
