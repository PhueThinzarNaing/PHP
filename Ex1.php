
<!DOCTYPE HTML>  
<html>
<head>
<title></title>
<style>

</style>
</head>
<body>  


<h2>Last char added at the front and back</h2>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">  
  Name: <input type="text" name="name">
<input type="submit">
  </form>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
echo "<br>";
$name= $_POST["name"];
echo "$name";
echo "<br>";
$res=substr($name,strlen("$name")-1);
echo $res.$name.$res;
}
 ?>

</body>
</html>
