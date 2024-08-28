<?php
session_start();
require_once "../core/functions.php";
require_once "../core/validations.php";
$error = [];
if (checkreq("POST") && checkpost('name')) {


    foreach ($_POST as $key => $value) {
        $$key = sanitizer($value);
    }

    if (!reqval($name)) {
        $error[] = "name is required";
    } elseif (!minlen($name, 3)) {
        $error[] = "name should be at least 3 characters long";
    } elseif (!maxlen($name, 8)) {
        $error[] = "name should not be more than 8 characters long";
    }
    ////////////////////////////////////////////////////////////////
    if (!reqval($email)) {
        $error[] = "Email is required";
    } elseif (!emailval($name)) {
        $error[] = "Email is not a valid email";
    }

    // if (!reqval($password)) {
    //     $error[] = "password is required";
    // } elseif (!minlen($password, 3)) {
    //     $error[] = "password should be at least 3 characters long";
    // } elseif (!maxlen($password, 8)) {
    //     $error[] = "password should not be more than 8 characters long";
    // }

    if (empty($error)) {
        // echo "you register successfully";
        $users_file = fopen("../data/users.csv", "a+");
        $data = [$name, $email, sha1($password)];
        fputcsv($users_file, $data);
        $_SESSION['auth'] = $data;
        redirect("../index.php");
        die();
    } else {
        $_SESSION['errors'] = $error;
        header("Location:../register.php");
        die();
    }
    //var_dump($error);
    // var_dump($_POST);
} else {
    require_once "../404.php";
}