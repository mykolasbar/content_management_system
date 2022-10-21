<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script type='text/javascript' src='jsitems.js' defer></script>
    <title>Edit</title>
</head>
<?php
// require '../vendor/autoload.php';
// require '../src/Posts.php';
include 'bootstrap.php';
include 'header.php';

if(session_status() != 2){
    session_start();
}

echo "<div style='text-align:right' class = 'm-2'>You are logged in as <b>" . $_SESSION['username'] . "</b> <form action='' method='POST'><button name='logout'>Logout</button></form></div>";

if (!isset($_SESSION['username']))
    header('Location: user.php');

if($_SERVER["REQUEST_METHOD"] === "POST"){
    if (isset($_POST['logout'])) {
        $_SESSION['logged_in'] = false;
        session_destroy();
        header('Location: user');
    }
}

if($_SERVER["REQUEST_METHOD"] === "POST"){
    if (isset($_POST['submitarticle'])) {
        // $newPost = new Posts;
        $post = $entityManager->find('Classes\Posts', $_GET['editid']);
        if (isset($_POST['addtitle']) && isset($_POST['addcontent'])){
            $post->setTitle($_POST['addtitle']);
            $post->setContent($_POST['addcontent']);
            // $newPost->setcreatedAt();
            $entityManager->persist($post);
            $entityManager->flush();
            header('Location: admin');
            // echo '<script>window.close();</script>';
        }
    }
}

if (isset($_GET['editid'])) {
    $post = $entityManager->find('Classes\Posts', $_GET['editid']);
    echo "<div class='d-flex justify-content-start m-3 w-75'><form action='' method='POST' enctype='multipart/form-data' class='w-100'>
    <label for = 'addtitle' class='m-2'>Title </label>
    <input name = 'addtitle' type = 'text' class = 'w-75' value = '".$post->getTitle()."'></input><br>
    <label for = 'addcontent' class='m-2'> Text </label>
    <textarea name = 'addcontent' type = 'text' class = 'w-75 h-100'>".$post->getContent()."</textarea><br>
    <input name = 'submitarticle' type='submit' value='Submit' class='btn btn-danger m-2'></form></div>";
}


?>
<body>
</body>
</html>