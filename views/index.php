<?php
    require_once '../bootstrap.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script type='text/javascript' src='jsitems.js' defer></script>
    <link rel="stylesheet" href="styles.css">
    <title>Home</title>
</head>
<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/content_management_system/views/':
        require 'user.php';
        break;
    case '/content_management_system/views/user':
        require 'user.php';
        break;
    case '/content_management_system/views/admin':
        require 'admin.php';
        break;
    case '/content_management_system/articles':
        require 'user.php';
        break;
    case '/content_management_system/admin':
        require 'admin.php';
        break;
    case '/content_management_system/home':
        require 'user.php';
        break; 
    case '/content_management_system/admin.php':
        require 'admin.php';
        break;   
    case '/content_management_system/login.php':
        require 'login.php';
        break;
    case '/content_management_system/views/login':
        require 'login.php';
        break;
    case '/content_management_system/login':
        require 'login.php';
        break;
    case '/content_management_system/login.php':
        require 'login.php';
        break;
    case '/content_management_system/user.php':
        require 'user.php';
        break;
    case '/content_management_system/user':
        require 'user.php';
        break;    
    case str_contains($request, 'postid='):
        require 'post.php';
        break;
    case str_contains($request, 'editid='):
        require 'editpost.php';
        break;
    case str_contains($request, '/content_management_system/views/editpost'):
        require 'editpost.php';
        break;
    }
    
?>