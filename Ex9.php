
<!DOCTYPE HTML>  
<html>
<head>
<title></title>
<style>

</style>
</head>
<body>  


<h2>.In Number Array, find the average, two minimum value and two maximum values</h2>

<?php

$arr=array(2,3,7,8,12,34,15,21,45,66,2,3,4,8);
$sum=0;
$len=count($arr);
foreach($arr as $value)
  {
    $sum+=$value;
   }
  echo "Array is...";
 foreach($arr as $value)
 {
     echo " ".$value;
 }
    echo "<br>";
  
  $avg=$sum/$len;
  echo "The average is .........$avg";

 echo "<br>";

 echo "The two maximum number is:";
 $max[]= max($arr);
 $max[]= max(array_diff($arr,$max));
   
    foreach($max as $value)
    {
       echo " ".$value;
    }
   echo "<br>";
   echo "The two minimum number is:";
   $min[]= min($arr);
   $min[]= min(array_diff($arr,$min));
   
    foreach($min as $value)
    {
       echo " ".$value;
    }
      


 

 ?>
</table>
</body>
</html>
