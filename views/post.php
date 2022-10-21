<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script type='text/javascript' src='jsitems.js' defer></script>
    <title>Post</title>
</head>
<?php
// require '../vendor/autoload.php';
// require '../src/Posts.php';
// include '../bootstrap.php';
include 'header.php';

if(session_status() != 2){
    session_start();
}

if (isset($_SESSION['username']))
    echo "<div style='text-align:right' class = 'm-2'>You are logged in as <b>" . $_SESSION['username'] . "</b> <form action='' method='POST'><button name='logout'>Logout</button></form></div>";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    if (isset($_POST['login'])) {
        header('Location: login.php');
    }
}

if($_SERVER["REQUEST_METHOD"] === "POST"){
    if (isset($_POST['logout'])) {
        $_SESSION['logged_in'] = false;
        session_destroy();
        header('Location: user.php');
    }
}

if (isset($_GET['postid'])) {
    $post = $entityManager->find('Classes\Posts', $_GET['postid']);
    echo '<div class="justify-content-center m-5" style = "width:800px">
            <div style = "width:800px"><h2>'.$post->getTitle().'</h2></div>
            <div style = "font-size:smaller; padding-bottom:15px"><b>Sukurta: </b>'.$post->getcreatedAt()->format('Y-m-d H:i:s').'</div>
            <div>'.nl2br($post->getContent()).'</div>
         </div>';
}

?>
<body>
</body>
</html>