
<!DOCTYPE HTML>  
<html>
<head>
<style>

</style>
</head>
<body>  


<h2>Exchange the first and last characters</h2>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">  
  Name: <input type="text" name="name">
<input type="submit">
  </form>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
$name= $_POST["name"];
echo "Enter Text  :    "."$name";
echo "<br>";

$last=substr($name,strlen("$name")-1);//cut the last char in the string
echo $last;
echo "<br>";

$first=substr($name,0,1);//first char 
echo $first;
echo "<br>";

$middle=substr($name,1,strlen("$name")-2);
echo $middle;
echo "<br>";

echo "New String    :  ".$last.$middle.$first;

}
 ?>

</body>
</html>
