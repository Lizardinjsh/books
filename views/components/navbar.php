<?php

if($_SESSION["user"] == false)
{
    echo '<header>
        <nav>
            <a href="/login">Login</a>
            <a href="/register">Register</a>
        </nav>
    </header>';
}else
{
    echo '<header>
        <nav>
            <a href="/">Start</a>
            <a href="/addbooks">Add books</a>
            <a href="/deletebooks">Delete books</a>
            <a href="/logout">Logout!</a>
        </nav>
    </header>';
}
