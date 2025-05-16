<?php
session_start();
if(!isset($_SESSION['login'])){
    header("Location: index.php");
    exit();
}
// theme setup 
 $theme=isset($_COOKIE['theme']) ? $_COOKIE['theme']:'Light';
 $bg= $theme  == 'dark' ? '#222' : '#fff';
 $color= $theme == 'dark' ? '#fff' : '#222';
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome, dashboard</title>


</head>

<body style="background-color : <?php echo $bg; ?>; color: <?php echo $color; ?>;">
    Welcome to Dashboard <?php echo $_SESSION['username'];?>
    <a href="logout.php">Logout</a>
    <a href="set_theme.php">Switch Theme</a>
    <select name="theme" id="theme">
        <option value="light">Light</option>
        <option value="dark">Dark</option>
    </select>
    <input type="submit" value="Save Theme">
    <?php
   $students=[
        ["name"=>"Aye Aye","grade"=>59],
        ["name"=>"Su Su","grade"=>70],
        ["name"=>"Hla Hla","grade"=>60],
        ["name"=>"Mg Mg","grade"=>40],
        ["name"=>"Alic","grade"=>39],
   ]
    ?>
    <table border="1" cellpading="2">
        <tr>
            <th>Name</th>
            <th>Grade</th>
        </tr>
        <?php foreach($students as $st):?>
        <tr>
            <td><?=$st["name"]?></td>
            <td><?=$st["grade"]?></td>
        </tr>
        <?php endforeach;?>
    </table>


</body>

</html>