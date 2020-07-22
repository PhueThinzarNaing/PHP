
<!DOCTYPE HTML>  
<html>
<head>
<title></title>
<style>

</style>
</head>
<body>  


<h2>Remove char giving position</h2>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">  
  Name: <input type="text" name="name">
  Number: <input type="number" name="number">
<input type="submit">
  </form>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
echo "<br>";
$name= $_POST["name"];
$number= $_POST["number"];
echo "name ="."$name";
echo "<br>";
echo "number="."$number";
echo "<br>";

$s1=substr($name,0,$number);
echo $s1;
//$res=substr($name,strlen("$name")-$number);
//echo $res;
$res=substr($name,$number+1,strlen("$name")-$number);
//echo $res;
echo $res;

}
 ?>

</body>
</html>
