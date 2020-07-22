
<!DOCTYPE HTML>  
<html>
<head>
<title></title>
<style>

</style>
</head>
<body>  


<h2>two-digit decimal combination, printed in a comma delimited format.</h2>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">  
  Name: <input type="number" name="number">
<input type="submit">
  </form>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $num=$_POST["number"];


echo chunk_split($num,2,",");
 
 }
 ?>

</body>
</html>
