<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script type='text/javascript' src='jsitems.js' defer></script>
    <title>Admin</title>
</head>
<?php
// require '../src/Posts.php';
// include '../bootstrap.php';
include 'header.php';

if(session_status() != 2) {
    session_start();
}

echo "<div style='text-align:right' class = 'm-2'>You are logged in as <b>" . $_SESSION['username'] . "</b> <form action='' method='POST'><button name='logout'>Logout</button></form></div>";

if (!isset($_SESSION['username']))
    header('Location: user.php');

$allPosts = new Classes\Posts;

$productRepository = $entityManager->getRepository('Classes\Posts');
$allPosts = $productRepository->findAll();
// $allPosts = $allPosts->findAll();

if($_SERVER["REQUEST_METHOD"] === "POST"){
    if (isset($_POST['logout'])) {
        $_SESSION['logged_in'] = false;
        session_destroy();
        header('Location: user');
    }
}

if($_SERVER["REQUEST_METHOD"] === "POST"){
    if (isset($_POST['submitarticle'])) {
        $newPost = new Classes\Posts;
        if (isset($_POST['addtitle']) && isset($_POST['addcontent'])){
            $newPost->setTitle($_POST['addtitle']);
            $newPost->setContent($_POST['addcontent']);
            $newPost->setcreatedAt($_GET['getid']);
            $entityManager->persist($newPost);
            $entityManager->flush();
            header('Location:  admin');
        }
    }
}

if(isset($_POST['delete'])){
    if(isset($_POST['deleteid'])){
        $deletepost = $entityManager->find('Classes\Posts', $_POST['deleteid']);
        $entityManager->remove($deletepost);
        // $entityManager->persist($deletepost);
        $entityManager->flush();
        header('Location: admin');
    }
}

if($_SERVER["REQUEST_METHOD"] === "POST"){
    if (isset($_POST['addtomenu'])) {
        if (isset($_POST['addtomenuid'])){
            $inmenu = $entityManager->find('Classes\Posts', $_POST['addtomenuid']);
            $inmenu->setinMenu(1);
            $entityManager->persist($inmenu);
            $entityManager->flush();
            header('Location: admin');
        }
    }
}

if($_SERVER["REQUEST_METHOD"] === "POST"){
    if (isset($_POST['removefrommenu'])) {
        if (isset($_POST['removefrommenuid'])){
            $inmenu = $entityManager->find('Classes\Posts', $_POST['removefrommenuid']);
            $inmenu->setinMenu(0);
            $entityManager->persist($inmenu);
            $entityManager->flush();
            header('Location: admin');
        }
    }
}

echo '<table class="justify-content-center m-4">';
foreach ($allPosts as $post) {
    echo '<tr>
                <td>
                    <b><a href="editpost.php?editid='.$post->getId().'" target = "_blank">'.$post->getTitle().'</a></b>
                    <div style = "font-size:smaller"><b>Sukurta: </b>'.$post->getcreatedAt()->format('Y-m-d H:i:s').'
                </td>
                <td><a href="editpost.php?editid='.$post->getId().'" target = "_blank"><button type="submit" name = "delete" class="btn btn-primary m-2" style = "width:220px">Edit</button></a></td>
                <td><form action="" method="POST" enctype="multipart/form-data"><input type="hidden" name="deleteid" value="'.$post->getId().'" /><button type="submit" name = "delete" class="btn btn-warning m-2" style = "width:220px">Delete</button></form></td>';
    if ($post->getinMenu() == 0)
        echo    '<td><form action="" method="POST" enctype="multipart/form-data"><input type="hidden" name="addtomenuid" value="'.$post->getId().'" /><button type="submit" name = "addtomenu" class="btn btn-success m-2" style = "width:220px">Add to navigation menu</button></form></td>
                </tr>';
    if ($post->getinMenu() == 1)       
        echo '<td><form action="" method="POST" enctype="multipart/form-data"><input type="hidden" name="removefrommenuid" value="'.$post->getId().'" /><button type="submit" name = "removefrommenu" class="btn btn-danger m-2" style = "width:220px">Remove from menu</button></form></td>
            </tr>';
            
}
echo '</table>';

echo "<div class='d-flex justify-content-start m-3 w-75'><strong>Add new article</strong><br><form action='' method='POST' enctype='multipart/form-data' class='w-100'><label for = 'addtitle' class='m-2'>Title </label><input name = 'addtitle' type = 'text' class = 'w-75'></input><br><label for = 'addcontent' class='m-2'> Text </label><textarea name = 'addcontent' type = 'text' class = 'w-75 h-100'></textarea><br><input name = 'submitarticle' type='submit' value='Submit' class='btn btn-danger m-2'></form>";

?>
<body>
</body>
</html>