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
    for ($i = 1; $i <= $Num; $i++) {
        $fact *= $i;
    }
    return $fact;
    
    
}
echo "<br>";
echo factorial(5);

?>