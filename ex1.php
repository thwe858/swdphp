<?php
$num=9;
if($num%2==0) {
    echo "<br>";
    echo "$num is even";
  } else {
    echo "<br>";
    echo "$num is odd";
    echo "<br>";
  }

$number1=10;
$number2=5;
$action="#";
switch($action){

        case "+":echo $number1+$number2;break;
        case "-":echo $number1-$number2;break;
        case '*':echo $number1*$number2;break;
        case '/':echo $number1/$number2; break;
        default: echo "This operator is invalid";
                                        
    }
    function factorial($Num){   
     $fact = 1;
    for ($i = 1; $i <= $Num; $i++) 
    {
        $fact *= $i;
    }
    return $fact;
    
    
}
echo "<br>";
echo factorial(5);
echo"<br>";

?>



<?php

  
// funtion defult value
function greeting($name ="Guest"){
  return "Hello, $name";
}
$result=greeting();
echo $result;

?>

<?php
// Array
// 1 Indexed Array 
// 2 Associate Array 
// 3 Multidimensional Array 

// Indexed Array 
$fruits=array("Apple","Orange","Banana");
foreach($fruits as $f){
  echo "<br>";
  echo $f;
}

$person=array(
  "name" =>"John",
  "age"=>30,
  "City"=>"New York"
);
foreach($person as $key=>$value){
  echo "<br>";
  echo $key .":". $value;
}
?>

<?php
  $mark=array(
    "Aye Aye"=>80,
    "Mg Mg"=>65,
    "Hla Hla"=>40
  );
  foreach($mark as $key=>$value){
    if($value>=50){
      echo "<br>";
      echo $key."Passed";

    }else{
      echo"<br>";
      echo $key."Failed";
    }
  }
?>