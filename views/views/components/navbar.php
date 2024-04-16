<?php

if(!isset($_SESSION["user"]) || $_SESSION["user"] == false)
{
    echo '<header>
        <nav>
            <a href="/login">Login</a>
            <a href="/register">Register</a>
        </nav>
    </header>';
}else
{
    // $user_id = $_SESSION["user-id"];
    echo '<header>
        <nav>
            <a href="/">Start</a>
            <a href="/addbooks">Add books</a>
            <a href="/borrowedBooks?id=' . $_SESSION["user-id"] . '">Borrowed books</a>
            <a href="/logout">Logout!</a>
        </nav>
</header>';
}
