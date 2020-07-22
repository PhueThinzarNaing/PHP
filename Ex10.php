
<!DOCTYPE HTML>  
<html>
<head>
<title></title>
<style>

</style>
</head>
<body>  


<h2>Print Number without divided by 3 from 1 to 100 using continue</h2>


<?php
 for($i=1;$i<100;$i++)
   if($i%3!=0)
     {
         echo " ".$i;
         continue;
     }
 ?>

</body>
</html>
