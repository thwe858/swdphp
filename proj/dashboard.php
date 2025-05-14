<?php
session_start();
if(!isset($_SESSION['login'])){
    header("Location: index.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome, dashboard</title>
</head>

<body>
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