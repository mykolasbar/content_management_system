<?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if (isset($_POST['username']) && isset($_POST['password'])) {
                session_start();
                if ($_POST['password'] == 'password') {
                    $_SESSION['username'] = $_POST['username'];
                    $_SESSION['logged_in'] = true;
                    header('Location: admin');
                }
                else 
                {echo '<span style="color:red; margin:10px; font-size:larger">Please enter the correct password!</span></br>';}
            }
            else
            echo '<div style="text-color:red">Please enter user name and password</div>';
        }
        ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/content_management_system/views/styles.css">
    <title>Log in</title>
</head>
<body>
<div class='container'>
    <form action = '' method='POST' class='loginform'>
        <label for="username" class="label">Enter username</label>
        <input class="inputfield" type="text" name="username" required></input><br>
        <label for="username" class="label">Enter password</label>
        <input class="inputfield" type="text" name="password" placeholder="password" required></input>
        <div id="enternotif">Confirm and enter</div>  <br>
        <div class="alignbutton"><button id="confirm" onmouseover="displaynotif()" onmouseleave="hidenotif()" style="position:relative">Confirm</button></div>
    </form>
    </div>
