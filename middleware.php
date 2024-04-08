<?php



function auth($location, $books)
{
    if($_SESSION["user"] == true)
    {
        require $location;
    }else
    {
        header("Location: /login");
    }
}

function guest($location, $books)
{
    if($_SESSION["user"] == true)
    {
        header("Location: /");
    }else
    {
        require $location;
    }
}

