
<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
    <h1>Add books here</h1>
    <form method="POST">
        <label>
            Add title:
            <input type="text" name="title" >
        </label>
        <label>
            Add author:
            <input type="text" name="author" >
        </label>
        <label>
            Add release date:
            <input type="text" name="releaseDate" >
        </label>
        <label>
            Add availability:
            <input type="text" name="availability" >
        </label>
        <button>Save</button>
    </form>
</body>
</html>
