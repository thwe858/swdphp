<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>

<body>
    <form action="login_form.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br>
        <input type="submit" value="login">
    </form>
</body>

</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=htmlspecialchars($_POST['username']);
    $password=htmlspecialchars($_POST['password']);

    if($username=='admin'&& $password=='123456'){
        session_start();
        $_SESSION['login']=true;
        $_SESSION['username']=$username;
        header("Location: profile.php");
        exit();

    }else{
        echo"Login Failed";
    }
}
?>