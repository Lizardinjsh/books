<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<h1>Register</h1>

    <form action="/register" method="POST">
        <label>
            Username:
            <input type="text" name="username">
        </label>
        <label>
            Password:
            <input type="password" name="password">
        </label>
        <button>Register!</button>
    </form>


</body>
</html>