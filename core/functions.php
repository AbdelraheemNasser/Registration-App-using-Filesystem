<?php


//* die and dump function
function dd($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}

// Function to check the request 

function checkreq($type): bool
{
    if ($_SERVER['REQUEST_METHOD'] === $type) {
        return true;
    }
    return false;
}

function checkpost($input): bool
{
    if (isset($_POST["$input"])) {
        return true;
    } else {
        return false;
    }
}

function sanitizer($input): string
{
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    $input = htmlentities($input);
    return $input;
}


function redirect($url)
{
    header("Location:$url");
}