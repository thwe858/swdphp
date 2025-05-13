<?php
session_start();
if(isset($_SESSION['loggedin'])&& $_SESSION['loggedin']){
    echo"Welcome back! Your are Still Loggedin";

}
else{
    echo"Your are not logged in.";
}
?>