<?php
  echo "Hello World";
  echo "<br>";
  $name = "John";
  echo "Hello $name";
  
  $age = 20;
  echo "<br>";
  echo "Hello $name, you are $age years old";

  $height = 1.75;
  echo "<br>";
  echo "Hello $name, you are $age years old and $height meters tall";

  $is_married = false;
  echo "<br>";
  echo "Hello $name, you are $age years old and $height meters tall and $is_married";

  $hobbies = array("Coding", "Sleeping", "Eating");
  echo "<br>";
  echo "Hello $name, you are $age years old and $height meters tall and $is_married and your hobbies are $hobbies[0], $hobbies[1], and $hobbies[2]";


  if($age < 18) {
    echo "<br>";
    echo "You are not allowed to vote";
  } else {
    echo "<br>";
    echo "You are allowed to vote";
  }

 
  while($age < 18) {
    echo "<br>";
    echo "You are not allowed to vote";
    $age++;
  }

  for($i = 0; $i < 5; $i++) {
    echo "<br>";
    echo "Hello $name";
  }

  
  function sayHello($name) {
    echo "<br>";
    echo "Hello $name";
  }
  sayHello("John");




  $a=10;
  $b=20;
  $temp=$a;
  $a=$b;
  $b=$temp;
  echo $a;
  echo $b;

  var_dump($name);
  var_dump($age);
  var_dump($height);
  var_dump($is_married);
  var_dump($hobbies);
  


?>

