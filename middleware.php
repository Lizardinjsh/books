<?php



function auth($location, $books = [], $errors = [])
{
    if($_SESSION["user"] == true)
    {
        require $location;
    }else
    {
        header("Location: /login");
    }
}

function guest($location, $books = [], $errors = [])
{
    if(isset($_SESSION["user"]))
    {
        if(isset($_SESSION) && $_SESSION["user"] == true)
        {
            header("Location: /");
        }else
        {
            require $location;
        }
    }else
    {
        require $location;
    }

}

