<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script type='text/javascript' src='jsitems.js' defer></script>
    <title>Articles</title>
</head>
<?php

include 'header.php';

if(session_status() != 2){
    session_start();
}

if (isset($_SESSION['username']))
    echo "<div style='text-align:right' class = 'm-2'>You are logged in as <b>" . $_SESSION['username'] . "</b> <form action='' method='POST'><button name='logout'>Logout</button></form></div>";


if($_SERVER["REQUEST_METHOD"] === "POST"){
    if (isset($_POST['logout'])) {
        $_SESSION['logged_in'] = false;
        session_destroy();
        header('Location: user');
    }
}

$allPosts = new \Classes\Posts();

$productRepository = $entityManager->getRepository('Classes\Posts');
$allPosts = $productRepository->findAll();


foreach ($allPosts as $id => $post) {
    echo '<div class="justify-content-center m-5" style = "width:850px">
            <div style = "width:800px"><h3><a href="post.php?postid='.$post->getId().'">'.$post->getTitle().'</a></h3></div>
            <div style = "font-size:smaller; padding-bottom:15px"><b>Sukurta: </b>'.$post->getcreatedAt()->format('Y-m-d H:i:s').'</div>
            <div align="justify">'.substr(nl2br($post->getContent()), 0, 350).'... <a href="post.php?postid='.$post->getId().'" style = "color:black">Read more</a></div>
         </div>';
}



// $chars = explode("\n", nl2br($post->getContent()));
// print_r($chars);

// foreach ($chars as $char) {
//     echo $char;
//     echo "<br>";
// }

?>
<body>
</body>
</html>

