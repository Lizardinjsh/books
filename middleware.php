<?php



function auth($location)
{
    if($_SESSION["user"] == true)
    {
        require $location;
    }else
    {
        header("Location: /login");
    }
}

function guest($location)
{
    if($_SESSION["user"] == true)
    {
        header("Location: /");
    }else
    {
        require $location;
    }
}

