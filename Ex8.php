
<!DOCTYPE HTML>  
<html>
<head>
<title></title>
<style>

</style>
</head>
<body>  


<h2>number of 1 to 1000 in table format</h2>

<table border="1" cellpadding="8" cellspacing="5">

<?php
 for($k=1;$k<=10;$k++)
 {
     echo "<tr>";

     for($i=1;$i<=10;$i++)
     {   
         $multi=$k*$i;
         echo "<td>$multi</td>";
     }
     echo "</tr>";
 }

 ?>
</table>
</body>
</html>
