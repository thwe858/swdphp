<?php
session_start();
if(isset($_SESSION['login'])){
    echo "Hello";
    session_destroy();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body>
    <h1>Login Page</h1>
    <h2>This is login page</h2>
    <form action="#" method="post">
        <label for="username">UsernameL</label>
        <input type="text" id="username" name="username">
        <label for="Password">Password</label>
        <input type="password" id="password" name="password">
        <input type="submit" value="Login">
    </form>
</body>

</html>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST['username'];
    $password=$_POST['password'];
    if($username=="admin" && $password=="123456"){
        
        $_SESSION['login']=true;
        $_SESSION['username']=$username;
        header("Location: dashboard.php");
    }
    else{
        echo"Invalid username or password";
    }
}
?>