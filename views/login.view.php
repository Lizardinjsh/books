

<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<h1>Login</h1>

    <form action="/login" method="POST">
    <label>
        Username:
        <input type="text" name="username">
    </label>
    <label>
        Password:
        <input type="password" name="password">
    </label>
    <button>Login!</button>
    </form>


</body>
</html> 
