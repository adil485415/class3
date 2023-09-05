
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
