<?php

$grade1 = 100;
$grade2 = 30;
var_dump($grade1 > $grade2);
echo "<br>";
 

$grade1 = 100;
$grade2 = 30;
if($grade1 > $grade2){
    echo '<h2>You have good result in your exam.</h2>';
}else{
    echo '<h1>You have bad result in your exam.</h2>';
}

$grade1 = 100;
$grade2 = 30;
if($grade1 < $grade2){
    echo '<h1>You have good result in your exam.</h1>';
}else{
    echo '<h1>You have bad result in your exam.</h1>';
}


$result1 = 100;
$result2 = 70;
if($result1 == $result2){
    echo '<h1>*good performance.</h2>';
}else{
    echo '<h2>*bad performance.</h2>';
}   

$three_credit_subject1 = 150;
$three_credit_subject2= 150;
if($three_credit_subject1 == $three_credit_subject2){
    echo '<h1>*good subject.</h2>';
}else{
    echo '<h2>*bad subject.</h2>';
} 
?>


<!DOCTYPE html>
<html>
    <body>
         <form action="index3.php" method="get">
           Grade: <input type="number" name="Grade" >
           <br>

           <input type= "Submit">
        </form>
      <br>
    
    </body>
</html> 
<?php
$marks=$_GET["Grade"];
if($marks >= 80 && $marks <= 100){
echo '<h1> A+ </h1>';
}elseif ($marks >= 70 && $marks < 80){
echo '<h1> A </h1>';
}elseif ($marks >= 60 && $marks < 70){
echo '<h1> A- </h1>';
}elseif ($marks >= 50 && $marks < 60){
echo ' <h1> B </h1>';
}elseif ($marks >= 40 && $marks < 50){
echo '<h1> C </h1>';
}elseif ($marks >= 33 && $marks < 40){
echo '<h1> D </h1>';
}elseif ($marks >= 0 && $marks < 32.99){
echo '<h1> F </h1>';
}else{
echo '<h1>Invalid Marks </h1>';
}



