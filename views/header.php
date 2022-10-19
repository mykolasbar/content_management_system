<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/content_management_system/views/styles.css">
    <title>Header</title>
</head>
<body>
    <?php

    if(session_status() != 2){
        session_start();
    }

    $allPosts = new Classes\Posts();

    $productRepository = $entityManager->getRepository('Classes\Posts');
    $allPosts = $productRepository->findAll();

    if (!isset($_SESSION['username'])){
        echo
            "<nav>
            <div>
                <ul>
                    <li><a href = 'user'>ARTICLES</a></li>";
            foreach ($allPosts as $id => $post) {
                if ($post->getinMenu() == 1)
                    echo 
                    '<li><a href="post.php?postid='.$post->getId().'">'.$post->getTitle().'</a></li>';
                        }
        echo    "</ul>
            </div>
            </nav>";}

    if (isset($_SESSION['username'])) {
        echo  "<nav>
                <div>
                    <ul>
                        <li><a href = 'user'>ARTICLES</a></li>
                        <li><a href = 'admin'>ADMIN</a></li>";
    
        foreach ($allPosts as $id => $post) {
            if ($post->getinMenu() == 1)
            echo 
                        '<li><a href="post.php?postid='.$post->getId().'">'.$post->getTitle().'</a></li>';
                }
            echo     "</ul>
                    </div>
                </nav>";}
    ?>
</body>
</html>