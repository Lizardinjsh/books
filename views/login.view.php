<?php $page_title = "Login"; ?>
<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
<main class="main-guestpages">
<h1>Login</h1>

    <form action="/login" method="POST">
    <label>
        Username:
        <input type="text" name="username">
        <?php if(isset($errors["login"])){ ?>
            <p class="invalid-data"><?= $errors["login"] ?></p>
        <?php } ?>
    </label>
    
    <label>
        Password:
        <input type="password" name="password">     
    </label>
    <button>Login!</button>
    </form>
</main>

</body>
</html> 
