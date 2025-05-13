<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2> Information Form</h2>
    <form action="form.php" method="get">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age"><br><br>

        <label for="city">City:</label>
        <input type="text" id="city" name="city"><br><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST["name"];
    $age=$_POST["age"];
    $city=$_POST["city"];
    echo "Name : $name<br>";
    echo "Age : $age<br>";
    echo "City : $city<br>";
}
else{
    echo "NO Data Submitted";
}
?>
<?php
 if(isset($_GET['name'])){
    $name=$_GET['name'];
    echo "Name :$name";
    echo "<br>";

 }
?>