<?php
session_start();
if(!isset($_SESSION['login'])){
    header("Location: login_form.php");
    exit();
}
    else{
        $username=$_SESSION['username'];
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Profile</h1>
    <p>Username:<?= $username ?></p>
    <p>Your are Logined!</p>
</body>

</html>